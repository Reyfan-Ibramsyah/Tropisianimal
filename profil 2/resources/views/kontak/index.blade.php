@extends('layout.main')

@section('header')

<div class="d-flex bd-highlight">
        <ul class="nav flex-grow-1 bd-highlight">
            <li class="nav-item">
                <a class="nav-link fs-4 fw-bold" style="color: white;" aria-current="page" href="#">Tropisianimal</a>
            </li>
        </ul>
        <ul class="nav bd-highlight fw-bold">
            <li class="nav-item">
                <a class="nav-link" style="color: white;" id="nav-header-item" aria-current="page" href="{{ route('home.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('profil.index')}}">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('news.index')}}">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('galeri.index')}}">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" id="nav-header-item" href="#">Kontak</a>
            </li>
        </ul>
    </div> 
    <div class="header-content fw-bold text-white" style="font-size: 56px; padding-top:100px; padding-bottom: 100px;">
        <p>Kontak Kami</p>
    </div>

@endsection

@section('body')
    <div class="container">
        <div class="text-center" id="google-maps" style="margin-top: 60px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650418!2d107.66179861431732!3d-6.94320606989811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1642044513191!5m2!1sid!2sid" width="1088" height="286" style="border:0; filter:brightness(75%);" allowfullscreen="" class="" loading="lazy"></iframe>
        </div>

        <div class="" style="margin-top: 40px;">
            <div class="fs-1 fw-bold">Kontak Kami</div>

            <div class="row" style="margin-top: 28px;">
                <div class="col-8"> 
                <div class="form-floating">
                    <textarea class="form-control bg-light border border-2" placeholder="" id="floatingTextarea2" style="height: 300px"></textarea>
                    <label for="floatingTextarea2">Deskripsi</label>
                </div>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control p-3 border-2 bg-light" placeholder="Subject">
                    <input type="text" class="form-control p-3 border-2 bg-light" style="margin-top:20px;" placeholder="Nama">
                    <input type="email" class="form-control p-3 border-2 bg-light" style="margin-top:20px;" placeholder="Email">
                    <div class="d-grid gap-2">
                    <button class="btn btn-success p-3" style="margin-top: 20px;" type="button">
                        Kirim
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.986" height="18.414" viewBox="0 0 17.986 18.414">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <g id="send" transform="translate(1 1.414)">
                                <line id="Line_2" data-name="Line 2" class="cls-1" x1="9" y2="9" transform="translate(6.572)"/>
                                <path id="Path_2" data-name="Path 2" class="cls-1" d="M17.818,2,12.282,17.818,9.118,10.7,2,7.536Z" transform="translate(-2 -1.818)"/>
                            </g>
                            </svg>
                    </button>
                    </div>
                </div>  
            </div> 
        </div>

        <div class="row row-cols-lg-3 row-cols-1 row-cols-md-3 text-center" style="margin-top: 50px;">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="bg-success p-2" style="width: 50px; height:50px; border-radius:50%;" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.829" height="14.829" viewBox="0 0 18.829 14.834">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <g id="mail" transform="translate(-0.607 -3)">
                                <path id="Path_25" data-name="Path 25" class="cls-1" d="M3.6,4H16.439a1.609,1.609,0,0,1,1.6,1.6V15.23a1.609,1.609,0,0,1-1.6,1.6H3.6A1.609,1.609,0,0,1,2,15.23V5.6A1.609,1.609,0,0,1,3.6,4Z"/>
                                <path id="Path_26" data-name="Path 26" class="cls-1" d="M18.043,6l-8.022,5.615L2,6" transform="translate(0 -0.396)"/>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="fw-bold" style="margin-top: 10px;">Email</div>
                <div class="text-secondary">tropisianimal@gmail.com</div>
            </div>

            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="bg-success p-2" style="width: 50px; height:50px; border-radius:50%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.044" height="18.044" viewBox="0 0 18.044 18.077">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <path id="phone" class="cls-1" d="M18.155,14.035v2.42A1.613,1.613,0,0,1,16.4,18.068a15.963,15.963,0,0,1-6.961-2.476,15.73,15.73,0,0,1-4.84-4.84A15.963,15.963,0,0,1,2.118,3.758,1.613,1.613,0,0,1,3.724,2h2.42A1.613,1.613,0,0,1,7.757,3.387a10.357,10.357,0,0,0,.565,2.267,1.613,1.613,0,0,1-.363,1.7L6.934,8.381a12.906,12.906,0,0,0,4.84,4.84L12.8,12.2a1.613,1.613,0,0,1,1.7-.363,10.357,10.357,0,0,0,2.267.565,1.613,1.613,0,0,1,1.387,1.637Z" transform="translate(-1.111 -1)"/>
                        </svg>
                    </div>
                </div>

                <div class="fw-bold" style="margin-top: 10px;">Phone</div>
                <div class="text-secondary">+62 812 3456 7890</div>
            </div>

            <div class="col">
                <div class=" d-flex justify-content-center">
                    <div class="bg-success p-2" style="width: 50px; height:50px; border-radius:50%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.128" height="18.045" viewBox="0 0 15.128 18.045">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <g id="map-pin" transform="translate(-2)">
                                <path id="Path_27" data-name="Path 27" class="cls-1" d="M16.128,7.564c0,5.105-6.564,9.481-6.564,9.481S3,12.669,3,7.564a6.564,6.564,0,1,1,13.128,0Z"/>
                                <circle id="Ellipse_17" data-name="Ellipse 17" class="cls-1" cx="2.5" cy="2.5" r="2.5" transform="translate(7 5.046)"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="fw-bold" style="margin-top: 10px;">Location</div>
                <div class="text-secondary">Kota Bandung, Jawa Barat <br>Indonesia</div>
            </div>

        </div>

    </div>


@endsection
