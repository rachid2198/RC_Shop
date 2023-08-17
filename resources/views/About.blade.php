<x-Layout>
    <x-slot name="css">
        <style>
            .accessoires-area,
            .about-area {
                background-color: #f2f8fd
            }

            .printers-area,
            .accessoires-area {
                padding-top: 70px;
                padding-bottom: 70px;

            }

            .top-title {
                color: #0099df !important;
            }
        </style>
    </x-slot>
    <!-- About section Start -->
    <div class="about-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrapper text-center">
                        <div class="about-contant">
                            <h2 class="title">
                                <span>A propos de </span>
                                DZ RC modélisme
                            </h2>
                            <p>Bienvenue sur Hobbysoog, votre destination en ligne pour tous vos besoins en matière
                                d'impression 3D, d'aéromodélisme, d'Arduino et de composants électroniques. Nous sommes
                                passionnés par ces domaines passionnants et nous sommes déterminés à vous fournir les
                                meilleurs produits et accessoires pour nourrir votre créativité et votre amour des
                                technologies.</p>
                        </div>
                        {{-- <div class="promo-video">
                            <img src="{{asset('images/about/promo-video-img.webp')}}" alt="">
                            <a href="https://youtu.be/7rmQIzbgpoA" class="venobox overlay-box" data-vbtype="video"><span
                                class="fa fa-play"><i class="ripple"></i></span></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section End -->

    <div class="printers-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="blog-post-content-inner mt-30px">
                        <div class="blog-athor-date">
                            <span class="top-title">Imprimantes 3D</span>
                        </div>
                        <h4 class="blog-title">Découvrez notre sélection d'imprimantes 3D </h4>
                        <p data-aos="fade-up">
                            Découvrez notre sélection d'imprimantes 3D de pointe, des marques réputées pour leur
                            fiabilité et leurs performances exceptionnelles. Nous proposons également un large éventail
                            d'accessoires d'impression 3D, tels que des filaments de qualité, des plateaux d'impression
                            et des pièces de rechange, pour vous aider à obtenir les meilleurs résultats.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-fluid h-auto border-radius-10px" src="{{ asset('images/about/printer3d.jpg') }}"
                        alt="blog" />
                </div>
            </div>
        </div>
    </div>

    <div class="accessoires-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <img class="img-fluid h-auto border-radius-10px" src="{{ asset('images/about/arduino.png') }}"
                        alt="blog" />
                </div>
                <div class="col-sm-6">
                    <div class="blog-post-content-inner mt-30px">
                        <div class="blog-athor-date">
                            <span class="top-title">Accessoires</span>
                        </div>
                        <h4 class="blog-title">Nous offrons une sélection d'accessoires électroniques
                        </h4>
                        <p data-aos="fade-up">
                            Si vous êtes un fan d'électronique et d'Arduino, vous trouverez chez nous une vaste
                            sélection de cartes Arduino, de capteurs, de modules et de composants électroniques de haute
                            qualité. Que vous souhaitiez construire des projets robotiques, des dispositifs de domotique
                            ou des gadgets électroniques personnalisés, nous avons tout ce dont vous avez besoin pour
                            réaliser vos idées.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature-area pt-100px pb-100px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icons/1.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Livraison Rapide</h4>
                            <span class="sub-title">A domicile ou au stop desk</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col mb-md-30px mb-lm-30px">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img height="46px" src="{{ asset('images/icons/2.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Catalogue vaste</h4>
                            <span class="sub-title">Tous vos besoins</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{ asset('images/icons/3.png') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Garantie</h4>
                            <span class="sub-title">Acheter en toute confiance</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial area start -->
    <div class="trstimonial-area about pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Revues des clients</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quidem.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper-container content-top slider-nav-style-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor
                                            incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images/testimonial/1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor
                                            incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images/testimonial/1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor
                                            incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images/testimonial/1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-inner">
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor
                                            incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                        </p>
                                    </div>
                                    <div class="testi-author">
                                        <div class="author-image">
                                            <img class="img-responsive" src="{{ asset('images/testimonial/1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="author-name">
                                            <h4 class="name">Regan Rosen<span>Client</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial area end-->
    <x-slot name="js">
    </x-slot>
</x-Layout>
