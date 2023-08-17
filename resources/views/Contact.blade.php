<x-Layout>
    <x-slot name="css">
    </x-slot>
    <!-- Contact Area Start -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2 class="title">Contactez nous</h2>
                            </div>
                            <form class="contact-form-style" id="contact-form" action="{{route('send-contact-mail')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="nom" placeholder="Nom*" type="text" />
                                        @error('nom')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="email" placeholder="Email*" type="email" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="sujet" placeholder="Sujet*" type="text" />
                                        @error('sujet')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea name="message" placeholder="Votre message*"></textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                        <button class="btn btn-primary" type="submit">Envoyer message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-info">
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/contact-1.png')}}" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Addresse</h5>
                                    <p>Your address goes here. <br>
                                    123 Your Location</p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/contact-2.png')}}" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Télephone</h5>
                                    <p><a href="tel:0123456789">+012 345 67 89</a></p>
                                </div>
                            </div>
                            <div class="single-contact m-0">
                                <div class="icon-box">
                                    <img src="{{asset('images/icons/contact-3.png')}}" alt="">
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Email</h5>
                                    <p><a href="mailto:mohamedaero16@yahoo.fr">mohamedaero16@yahoo.fr</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    <!-- map Area Start -->
    <div class="contact-map">
        <div id="mapid">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed/v1/place?q=Alger,+Algérie&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- map Area End -->
    <x-slot name="js">
    </x-slot>
</x-Layout>