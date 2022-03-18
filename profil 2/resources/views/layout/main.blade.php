<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Tropisianimal</title>
</head>
<body>
    <header>
        <div class="header container-fluid">
            <div class="container">
                @yield('header')
            </div>
        </div>
    </header>
    <div class="container-fluid">
        @yield('body')
    </div>
    <footer>
        <div class="">
        <div class="bg-dark" style="margin-top: 40px; padding-top:60px;">
        <div class="container">             
          <div class="align-items-sm-center row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 text-white">
            <div class="col col-lg-3">
              <div class="p-1 fs-3 fw-bold">Tropisianimal</div>
              <div class="p-1" style="margin-top: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel facilis quos modi quod labore ratione nisi assumenda.</div>
              <div class="p-1">
              <img src="../ASET/x1/001-facebook.png" alt="" class="">
              <img src="../ASET/x1/002-twitter.png" alt="" class="">
              </div>
            </div>

            <div class="col col-lg-3" >
              <div class="p-1 fw-bold ">Useful links</div>
              <div class="p-1" style="margin-top: 14px;">
                <a href="#" class="text-white" style="text-decoration: none;">Blog</a><br>
              </div>
              <div class="p-1">
                <a href="#" class="text-white" style="text-decoration: none;">Hewan</a><br>
              </div>
              <div class="p-1">
                <a href="#" class="text-white" style="text-decoration: none;">Galeri</a><br>
              </div>
              <div class="p-1">
                <a href="#" class="text-white" style="text-decoration: none;">Testimoni</a><br>
              </div>  
            </div>

            <div class="col col-lg-3 col-sm-12">
              <div class="p-1 fw-bold">Privacy</div>
              <div class="p-1" style="margin-top: 14px;">
                <a href="#" class="text-white" style="text-decoration: none;">Karir</a><br>
              </div>
              <div class="p-1">
                <a href="#" class="text-white" style="text-decoration: none;">Tentang Kami</a><br>
              </div>
              <div class="p-1">
                <a href="#" class="text-white" style="text-decoration: none;">Kontak Kami</a><br>
              </div>
              <div class="p-1">
                <a href="#" class="text-white" style="text-decoration: none;">Servis</a><br>
              </div>  
            </div>

            <div class="col col-lg-3 ">
              <div class="p-1 fw-bold">Contact Info</div>
              <div class="p-1 d-flex" style="margin-top: 16px;">
                <a href="#" class="text-white" style="text-decoration: none;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.829" height="14.834" viewBox="0 0 18.829 14.834">
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
                </a><br>
                <div class="" style="margin-left: 16px;">tropisianimal@gmail.com</div>
              </div>
              <div class="p-1 d-flex" style="margin-top: 10px;">
                <a href="#" class="text-white" style="text-decoration: none;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.044" height="18.077" viewBox="0 0 18.044 18.077">
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
                </a><br>
                <div class="" style="margin-left: 16px;">+62 812 3456 7890</div>
              </div>
              <div class="p-1 d-flex" style="margin-top: 10px;">
                <a href="#" class="text-white" style="text-decoration: none;">
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
                </a><br>
                <div class="" style="margin-left: 14px;">Kota Bandung,Jawa Barat</div>
              </div>
            </div>
          </div>
          <div class="text-light text-center p-4">
            Copyright <span>&copy;</span><?php echo date("Y") ?> All rights reserved

          </div>
        </div>
        </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1500,
      once: false,
    });
    
  </script>

</body>
</html>
