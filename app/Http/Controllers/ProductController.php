<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Finalcategory;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Property;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image as ImageResize;

class ProductController extends Controller
{

    public function productList(Request $request){
        $sortBy = $request->input('sort_by');
        $sortOrder = $request->input('sort_order', 'asc');
        $filter_category = $request->input('category');
        $filter_subcategory = $request->input('subcategory');
        $filter_finalcategory = $request->input('finalcategory');
        $filter_brand = $request->input('brand');
        $search=$request['search'];

        $category_name = "";
        $subcategory_name = "";
        $finalcategory_name = "";
        $brand_name = "";

        $min = $request['min'];
        $max = $request['max'];

        $products = Product::query();

        //Search feature

        if ($search) {
            $products=$products
                ->where('nom', 'like', '%' . $search . '%');
        }

        //Add sorting

        if ($filter_category) {
            $products = $products->where('category_id', $filter_category);
            $category_name = Category::where('id', $filter_category)->first()->nom;
        }
        if ($filter_subcategory) {
            $products = $products->where('subcategory_id', $filter_subcategory);
            $subcategory_name = Subcategory::where('id', $filter_subcategory)->first()->nom;
        }
        if ($filter_finalcategory) {
            $products = $products->where('finalcategory_id', $filter_finalcategory);
            $finalcategory_name = Finalcategory::where('id', $filter_finalcategory)->first()->nom;
        }
        if ($filter_brand) {
            $products = $products->where('brand_id', $filter_brand);
            $brand_name = Brand::where('id', $filter_brand)->first()->nom;
        }

        if ($min != null && $max != null) {
            $products->whereBetween('prix_vente', [$min, $max]);
        }

        if ($sortBy) {
            $products = $products->orderBy($sortBy, $sortOrder);
        } else {
            $products = $products->latest('created_at');
        }

        $products = $products->paginate(12);

        return view('products.liste-produits', [
            'total' => count(Product::all()),
            'products' => $products->setPath(route('products-display', [
                'filter_category' => $filter_category,
                'filter_subcategory' => $filter_subcategory,
                'filter_finalcategory' => $filter_finalcategory,
                'filter_brand' => $filter_brand,
                'category_name' => $category_name,
                'subcategory_name' => $subcategory_name,
                'finalcategory_name' => $finalcategory_name,
                'brand_name' => $brand_name,
                'sortBy' => $sortBy,
                "sortOrder" => $sortOrder,
                'min' => $min,
                'max' => $max,
                'search'=>$search
            ])),
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'filter_category' => $filter_category,
            'filter_subcategory' => $filter_subcategory,
            'filter_finalcategory' => $filter_finalcategory,
            'filter_brand' => $filter_brand,
            'category_name' => $category_name,
            'subcategory_name' => $subcategory_name,
            'finalcategory_name' => $finalcategory_name,
            'brand_name' => $brand_name,
            'sortBy' => $sortBy,
            "sortOrder" => $sortOrder,
            'min' => $min,
            'max' => $max,
            'search'=>$search,
            'max_price' => intval(Product::all()->max('prix_vente'))
        ]);
    }

    public function ShowProduct(Product $product)
    {
        $related_products = Product::limit(10)->where('id', '!=', $product->id)->
            where(function ($query) use ($product) {
                $query->where('subcategory_id', $product->subcategory_id)->
                    orWhere('category_id', $product->category_id)->
                    orWhere('brand_id', $product->brand_id);
            })
            ->get();

        return view('products.details-produits', [
            "related_products" => $related_products,
            "product" => $product
        ]);
    }


    //list of products in admin
    public function AdminProductList()
    {
        return view('admin.Product-list', [
            "products" => Product::all(),
            "categories" => Category::all(),
            "brands" => Brand::all(),
        ]);
    }

    //adding products
    public function showProductForm()
    {
        return view('admin.Add-product', [
            "categories" => Category::all(),
            "brands" => Brand::all(),
        ]);
    }

    public function showEditForm(Product $product)
    {
        return view('admin.Edit-product', [
            "categories" => Category::all(),
            "brands" => Brand::all(),
            "product" => $product
        ]);
    }



    public function getSubcategories(Category $category)
    {
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        return response()->json($subcategories);
    }
    
    
    public function getFinalcategories(Subcategory $subcategory)
    {
        $subcategories = Finalcategory::where('subcategory_id', $subcategory->id)->get();
        return response()->json($subcategories);
    }


    public function addProduct(Request $request)
    {
        $formFields = $request->validate([
            'nom' => ['required'],
            'description' => ['required'],
            'prix' => ['required', 'min:0'],
            'stock' => ['required', 'min:0'],
            'image_principal' => ['required'],
            'url_video' => [''],
            'brand_id' => [],
            'category_id' => ['required'],
            'subcategory_id' => ['required'],
            'finalcategory_id' => [],
            'fichier_technique' => [''],
        ]);

        if ($request->hasFile('image_principal')) {
            $formFields['image_principal'] = $request->file('image_principal')->store('thumbnails', 'public');
        }

        if ($request->hasFile('fichier_technique')) {
            $formFields['fichier_technique'] = $request->file('fichier_technique')->store('fichiers', 'public');
        }

        $formFields['stock_fictif'] = $formFields['stock'];
        $formFields['prix_vente'] = $formFields['prix'];

        $product = Product::create($formFields);
        $product->category->update(['product_count' => $product->category->product_count + 1]);
        $product->subcategory->update(['product_count' => $product->subcategory->product_count + 1]);
        $product->brand->update(['product_count' => $product->brand->product_count + 1]);


        foreach ($request->input('document', []) as $file) {
            $product->addMedia(storage_path('products/' . $file))->toMediaCollection('images');
        }

        $properties = $request['property'];
        $values = $request['value'];

        array_map(function ($property, $value) use ($product) {
            if ($property && $value) {
                Property::create([
                    'nom' => $property,
                    'valeur' => $value,
                    'product_id' => $product->id,
                ]);
            }
        }, $properties, $values);

        return redirect('/admin/liste-produits')->with('message', 'Produit crée avec succéss');
    }

    public function editProduct(Request $request, Product $product)
    {
        $rules = [
            'nom' => ['required'],
            'description' => ['required'],
            'prix' => ['required', 'min:0'],
            'stock' => ['required', 'min:0'],
            'image_principal' => [''],
            'url_video' => [''],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'subcategory_id' => ['required'],
            'finalcategory_id' => [],
            'fichier_technique' => [''],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with(['edit_modal' => true, 'id' => $product->id]);

        } else {
            $formFields = $request->validate($rules);

            if ($request->hasFile('image_principal')) {
                $formFields['image_principal'] = $request->file('image_principal')->store('thumbnails', 'public');
            }

            if ($request->hasFile('fichier_technique')) {
                $formFields['fichier_technique'] = $request->file('fichier_technique')->store('fichiers', 'public');
            }

            $formFields['stock_fictif'] = $formFields['stock'];
            $formFields['prix_vente'] = $formFields['prix'];

            $product->update($formFields);

            // images--------------------------------------------------------------

            if (count($product->getMedia('images')) > 0) {
                foreach ($product->getMedia('images') as $media) {
                    if (!in_array($media->file_name, $request->input('document', []))) {
                        $media->delete();
                    }
                }
            }

            $media = $product->getMedia('images')->pluck('file_name')->toArray();

            foreach ($request->input('document', []) as $file) {
                if (count($media) === 0 || !in_array($file, $media)) {
                    $product->addMedia(storage_path('products/' . $file))->toMediaCollection('images');
                }
            }

            //propriétés ------------------------------------------------------------------

            if (count($product->properties) > 0) {
                foreach ($product->properties as $property) {
                    if (!in_array($property->nom, $request->input('property', []))) {
                        $property->delete();
                    }
                }
            }

            $current_properties = $product->properties->pluck('nom')->toArray();

            $properties = $request['property'];
            $values = $request['value'];

            array_map(function ($property, $value) use ($product, $current_properties) {
                if ($property && $value) {
                    if (count($current_properties) === 0 || !in_array($property, $current_properties)) {
                        Property::create([
                            'nom' => $property,
                            'valeur' => $value,
                            'product_id' => $product->id,
                        ]);
                    } else {
                        $updated_property = Property::where('nom', $property)->where('product_id', $product->id)->first();
                        $updated_property->update(["nom" => $property, "valeur" => $value]);
                    }
                }
            }, $properties, $values);

            return redirect('/admin/liste-produits')->with('message', 'Produit modifié avec succéss');
        }

    }

    public function deleteProduct(Product $product)
    {
        $product->category->update(['product_count' => $product->category->product_count - 1]);
        $product->subcategory->update(['product_count' => $product->subcategory->product_count - 1]);
        $product->brand->update(['product_count' => $product->brand->product_count - 1]);
        $product->delete();
        return back()->with('message', 'Produit supprimé avec succés');
    }

    public function featureProduct(Product $product)
    {
        $product->update(['featured' => !$product->featured]);
        return response()->json('success');
    }

    public function addOffer(Request $request, Product $product)
    {
        $product->update(['prix_vente' => $request['prix_vente'], 'offer' => $request->boolean('offer')]);
        return back()->with('message', 'Promotion ajouté');
    }


    //images
    public function product_images(Request $request)
    {
        $path = storage_path('/products');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);

    }

}