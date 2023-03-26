<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    var $brands=[
        [
            "id"=>1,
            "nom"=>"Anycubic"
        ],
        [
            "id"=>1,
            "nom"=>"Creality3D"
        ],
        [
            "id"=>1,
            "nom"=>"Dremel"
        ],
        [
            "id"=>1,
            "nom"=>"Elegoo"
        ],
        [
            "id"=>1,
            "nom"=>"CraftBot"
        ],
    ];

    var $products=[
        [
            "id"=>1,
            "title"=>"Anycubic Photon Mono",
            "category"=>"Imprimante 3D",
            "brand"=>"Anycubic",
            "quantity"=>3,
            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus aperiam tempora molestias adipisci atque nostrum assumenda. Cupiditate inventore molestiae explicabo consequuntur velit magnam mollitia quod iste, ipsam iusto officia molestias!",
            "price"=>220000.00,
            "image"=>"https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/315345654_5504969579615614_6525359353039872198_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeGdyO2SnuU6pjtGLG0V7VpaJ7ACVDDDTXInsAJUMMNNcouzO7mbVNXKoSwIUorgUevSdVdDg6QOo-qoofJE--W_&_nc_ohc=A3TfyY1TJTUAX-M36kx&_nc_ht=scontent.falg6-1.fna&oh=00_AfCJU0XMqnRca2d9bNjyVIQ87yV2V07B0lgofiM1Q0ikKg&oe=64132ED0"
        ],
        [
            "id"=>2,
            "title"=>"elegoo mars 3 pro 4k",
            "category"=>"Imprimante 3D",
            "brand"=>"elegoo",
            "quantity"=>4,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>145000.00,
            "image"=>"https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/312963251_5622419964478041_5094373234694042432_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeFOtE9ZizVA9OmZwpnxqJs_t0yNh_c4UZm3TI2H9zhRmQUnIVkBNICnGzUtmdMCZJNFNXDQW-QpoAVragTm6VtV&_nc_ohc=CL3YrTR23ZkAX866894&_nc_ht=scontent.falg6-1.fna&oh=00_AfBZKCv1L1LhCPHRLRPZX0JPT2FF4_iKjFT7yKhRRlpzyQ&oe=64121576"
        ],
        [
            "id"=>3,
            "title"=>"Creality Ender 3 V2",
            "category"=>"Imprimante 3D",
            "brand"=>"Creality",
            "quantity"=>1,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>89000.00,
            "image"=>"https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315999627_8253780054693635_1254714160917287736_n.png?stp=dst-png_s960x960&_nc_cat=109&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeFFxshPdcc8rY-Noq5iya-v45Coh2imp9njkKiHaKan2fdw22U5DBvSdysIA3rs_quM3Gs4yMmagQ95uSCorKU5&_nc_ohc=o4OzX74fJ2EAX9sFum5&_nc_ht=scontent.falg6-2.fna&oh=00_AfBHU70SCY3mr39OH2Yf-u-RD4Bk0AGuxJa5HeCfZrperw&oe=64125E55",
        ],
        [
            "id"=>4,
            "title"=>"hélice 1045",
            "category"=>"Accessoires",
            "brand"=>"Anycubic",
            "quantity"=>10,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>700.00,
            "image"=>"https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/315586912_8791094727598124_8347853516820494662_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeE6lMy2vzJYld76v4LGB7x1pFjFptx7_1OkWMWm3Hv_Uz_W9MIFpBKSURlGmo9OwQTMKQBFDLrkyzyUDJpSlGiL&_nc_ohc=M-7U3cB-tB8AX-uMgL0&_nc_ht=scontent.falg6-1.fna&oh=00_AfBkiHzvMIywu-Ah94-0KMXVhBwlE5sqttRkx4K2q1MsuA&oe=64131C95"
        ],
        [
            "id"=>5,
            "title"=>"batterie lipo ZIPPY Compact",
            "category"=>"Matériels",
            "brand"=>"Lipo",
            "quantity"=>15,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>22000.00,
            "image"=>"https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315297656_5634624663283933_6805264923728796640_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeEnqwBn6t2sRsraW2EpoNm1kjpqdDIccgKSOmp0MhxyAiokH1zEoVjq7puyUWNicRDVrC9M8kJCUOVkUyMMJrIV&_nc_ohc=nUyeWoKlcz4AX8h31nL&_nc_ht=scontent.falg6-2.fna&oh=00_AfCHUaYPrAbUxr4ACJLa8zn6crVVw7En5iqGy20jeSb9lg&oe=6413B1B8"
        ],
        [
            "id"=>6,
            "title"=>"batterie lipo turnigy 6S",
            "category"=>"Batteries",
            "brand"=>"Lipo",
            "quantity"=>8,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>16500.00,
            "image"=>"https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315311513_5964141940274417_5962775103085460740_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeE5Vb8Lm3uP4Y87dCbIlOmbbMpssgNQ2ThsymyyA1DZOMQom0JMWJgu-70SKUA4S_5uqxhAd67o89sfG85IX873&_nc_ohc=yYvDFiwt_UIAX_mIFh-&_nc_ht=scontent.falg6-2.fna&oh=00_AfCPaAkfKOELzfcop6iguboYptXIW2DhgMq8dinyj2-DiQ&oe=64138774"
        ],
        [
            "id"=>7,
            "title"=>"batterie lipo turnigy 4S",
            "category"=>"Batteries",
            "brand"=>"Lipo",
            "quantity"=>2,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>14000.00,
            "image"=>"https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315311513_5964141940274417_5962775103085460740_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeE5Vb8Lm3uP4Y87dCbIlOmbbMpssgNQ2ThsymyyA1DZOMQom0JMWJgu-70SKUA4S_5uqxhAd67o89sfG85IX873&_nc_ohc=yYvDFiwt_UIAX_mIFh-&_nc_ht=scontent.falg6-2.fna&oh=00_AfCPaAkfKOELzfcop6iguboYptXIW2DhgMq8dinyj2-DiQ&oe=64138774"
        ],
        [
            "id"=>8,
            "title"=>"batterie lipo nano-tech",
            "category"=>"Batteries",
            "brand"=>"Lipo",
            "quantity"=>7,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>20000.00,
            "image"=>"https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315353478_4925522577550422_2502122157870338117_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeFZXnC-S5PPnVA4kPQII2i76U2zRiPr8wrpTbNGI-vzCgE2WUMcF1WSN5NKELCTiw-wlqal__D-H70tceSVOMVC&_nc_ohc=UzNLmiwWBFwAX9ejUye&_nc_ht=scontent.falg6-2.fna&oh=00_AfBiqS6HS_lTOY7hiVk9OPMnOyRtBT0M3sCOI9KJUamHFA&oe=6413DE2C"
        ],
        [
            "id"=>9,
            "title"=>"batterie lipo batterie 5S",
            "category"=>"Batteries",
            "brand"=>"Lipo",
            "quantity"=>5,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>15000.00,
            "image"=>"https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/315485222_5681778868610170_8614907879882775971_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeHwxhCbKg1kOYmtmvSNJNrdq6AqYt7TOVqroCpi3tM5Wr30YlhHOVu2XTjiQGjl-ECY9driceQamk7hV_xkfak4&_nc_ohc=LA7FwUQIbQAAX_miA_U&_nc_ht=scontent.falg6-1.fna&oh=00_AfCfwuEdge6JLkxhhJ--gC2-tzOS32l1xGW_wu0uU56YqQ&oe=6413190F"
        ],
        [
            "id"=>10,
            "title"=>"esc 30A",
            "category"=>"Accessoires",
            "brand"=>"Anycubic",
            "quantity"=>2,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>2200.00,
            "image"=>"https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315544189_5717708221640342_5060034641611743482_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeGp5SkJLrxqW-xuP7FKsmvFvZyGAD9N8Da9nIYAP03wNlds9pltt5pz-EBGxkCPYOgOkY7eb9IzWokE04UrCxsg&_nc_ohc=XOX-Fx6NIqoAX91gyge&_nc_ht=scontent.falg6-2.fna&oh=00_AfDGdkXs27qOTcl1-U7EJbHT2gQ86Nv_KcC9t6QJBJFf7g&oe=64136F15"
        ],
        [
            "id"=>11,
            "title"=>"Moteur sans balais XXD",
            "category"=>"Moteurs",
            "brand"=>"Anycubic",
            "quantity"=>13,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>2200.00,
            "image"=>"https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/316193408_4153777904746082_1148325359592292711_n.jpg?stp=dst-jpg_p960x960&_nc_cat=105&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeF2ZKVONRxVn-Ce_HBgkEyq1K2oPf2VtjLUrag9_ZW2MsE6X1CZFsUdw1MuXkLcMEplR3UxWnUI0pX_Ws7zll06&_nc_ohc=ijTrVViN1cUAX8U_o2C&_nc_oc=AQkghYj3h9cJqle8Mt4rWj-kk8WaNmjePEhwU18jAQ_qcwFBxf4csndKBqbkcpfBQUQ&_nc_ht=scontent.falg6-1.fna&oh=00_AfCVf39C6uOPbU14Z-ENhLGPnbiTlTTh52KzwYCR1hnlOw&oe=6414B672"
        ],
        [
            "id"=>12,
            "title"=>"Anycubic Kobra Neo",
            "category"=>"Imprimante 3D",
            "brand"=>"Anycubic",
            "quantity"=>11,
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi officia ratione suscipit pariatur doloremque id iste ab dolorum recusandae sunt quisquam voluptates veniam, perferendis facere nesciunt illum iure? Ut.",
            "price"=>200000.00,
            "image"=>"https://cdn.shopify.com/s/files/1/0245/5519/2380/products/KobraNeo_8_1800x1800.jpg?v=1678692222"
        ],
    ];

    var $categories=[
        [
            "id"=>1,
            "nom"=>"Moteurs brushless",
            "subcategories"=>[
                ["id"=>1, "nom"=>"EMAX 980"],
                ["id"=>2, "nom"=>"EMAX 860"],
                ["id"=>3, "nom"=>"EMAX 620"],
                ["id"=>4, "nom"=>"EMAX 1000"],
            ]
        ],    
        [
            "id"=>2,
            "nom"=>"Lipo batteries",
            "subcategories"=>[
                ["id"=>1, "nom"=>"1500MAH"],
                ["id"=>2, "nom"=>"2000MAH"],
                ["id"=>3, "nom"=>"4000MAH"],
                ["id"=>4, "nom"=>"5000MAH"]
            ]
        ],
        [
            "id"=>3,
            "nom"=>"ESC",
            "subcategories"=>[
                ["id"=>1, "nom"=>"ESC 20A"],
                ["id"=>2, "nom"=>"ESC 30A"],
                ["id"=>3, "nom"=>"ESC 40A"],
                ["id"=>4, "nom"=>"ESC 60A"]
            ]
        ],
    ];

    // gestion utilisateurs------------------------------------------------------

    public function login(){
        return view('admin.Login');
    }

    public function authenticate(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/admin/dashboard')->with('message','Authentifié avec succéss');
        }

        return back()->withErrors(['failed'=>'vos informations sont invalides']);
    }

    public function logout(Request $request){
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/authentification')->with('message','You have been logged out');
    }

    public function Users(){
        return view('admin.Users',[
            'users'=> User::where('is_superAdmin',FALSE)->get(),
        ]);
    }

    public function Add_user(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:6']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('add_modal', true);
        }else{
            $formFields=$request->validate([
                'name'=>['required','min:3'],
                'email'=>['required','email',Rule::unique('users','email')],
                'password'=>['required','confirmed','min:6']
            ]);

            //hash passwords
            $formFields['password']=bcrypt($formFields['password']);

           //create user
           $user= User::create($formFields);

           //login
           return back()->with('message','Utilisateur crée avec succéss');
        }

    }

    public function Edit_user(Request $request, User $user){
        $validator = Validator::make($request->all(), [
            'name'=>['required','min:3'],
            'email'=>['required','email'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal'=> true, 'id'=>$user->id]);
        }else{
            $formFields= $request->validate([
                'name'=>['required','min:5'],
                'email'=>['required','email'],
            ]);
    
            $user->update($formFields);
    
            return back()->with('message','Utilisateur modifié avec succéss');
        }
    }

    public function delete_user(User $user){
        $user->delete();
        return back()->with('message','Utilisateur supprimé avec succés'); 
    }
    
    public function dashboard(){
        return view('admin.Dashboard');
    }

    public function addProduct(){
        return view('admin.Add-product',[
            "categories"=>$this->categories,
            "brands"=>$this->brands,
        ]);
    }

    public function ProductList(){
        return view('admin.Product-list',[
            "categories"=>$this->categories,
            "products"=>$this->products,
            "brands"=>$this->brands,
        ]);
    }

    public function Categories(){
        return view('admin.categories',[
            "categories"=>$this->categories,
        ]);
    }
    
    public function Subcategories($id){
        $category=NULL;
        foreach($this->categories as $c){
            if($c["id"]==$id){
                $category=$c;
            }
        }

        return view('admin.subcategories',[
            "category"=>$category,
        ]);
    }
    
    public function Brands(){
        return view('admin.Brands',[
            "brands"=>$this->brands,
        ]);
    }

    public function Orders(){
        return view('admin.Orders',[
        ]);
    }

}