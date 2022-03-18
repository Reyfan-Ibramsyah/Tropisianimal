@extends('layout.main')

@section('header')

      <div class="container">
        <div class="d-flex bd-highlight">
          <ul class="nav flex-grow-1 bd-highlight">
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold" style="color: white;" aria-current="page" href="#">Tropisianimal</a>
            </li>
          </ul>
          <ul class="nav bd-highlight fw-bold">
            <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('profil.index') }}">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('news.index') }}">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('galeri.index') }}">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('kontak.index') }}">Kontak</a>
            </li>
          </ul>
        </div> 
        <div class="" data-aos="fade-up">
          <div class="header-content fw-bold text-white" style="font-size: 56px;">
            <p>Hewan<br>Tropis Di Dunia</p>
          </div>
          <div class="text-white" style="margin-left: 20px;">
            <p>Lorem ipsum dolor sit amet consectetur <br>
              adipiscing elit sed do eiusmod tempor incididunt <br>
              ut labore etdolore magna aliqua. ut enim ad</p>
          </div>
          </div>
          <div class="row row-cols-2 row-cols-xs-1" style="padding-top: 226px;">
            <div class="col" data-aos="fade-up">
              <br>
              <div class="text-success fw-bold">Tentang Kami</div>
              <div class="fw-bold" style="font-size:46px ;">Membangun <br>Komunitas Hewan</div>
              <div class="fs-5" style="font-weight: 500;">Lorem ipsum dolor sit amet consectetur adipiscing <br>elit, sed do eiusmod tempor incididunt ut labore et <br>dolore magna aliqua. ut enim ad minim veniam, quis</div>
              <div class="" style="margin-top: 10px; margin-bottom:10px;">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>ut enim ad minim veniam, quis nostrud exercitation ullamco <br>laboris nisi ut aliquip ex ea commodo consequat</div>
              <button type="button " class="btn btn-success" style="width:220px;">baca selengkapnya 
              <svg xmlns="http://www.w3.org/2000/svg" width="12.405" height="13.639" viewBox="0 0 12.405 13.639">
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
                <g id="arrow-right_1_" data-name="arrow-right (1)" transform="translate(-4.405 -3.586)">
                  <line id="Line_3" data-name="Line 3" class="cls-1" x2="10" transform="translate(5.405 10.405)"/>
                  <path id="Path_3" data-name="Path 3" class="cls-1" d="M12,5l5.405,5.405L12,15.811" transform="translate(-1.595)"/>
                </g>
              </svg>
              </button>
            </div>
            <div class="col" data-aos="fade-up">
              <div>
                <img src="../ASET/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png" class="rounded float-start" style="margin-right: 10px;" alt="...">
                <img src="../ASET/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png" class="rounded float-end" alt="...">
              </div>
                <img src="../ASET/x1/kyle-nieber-3ryX0ShTMWg-unsplash.png" class="rounded" style="margin-top: 20px;" alt="...">
            </div>
          </div>
        </div>
      </div>

@endsection


@section('body')
    <div class="" id="body">
      <div class="container">
        <div class="text-white fw-bold" data-aos="fade-up" style="font-size: 46px;">Kami Membawa Anda <br>Untuk Mengetahui Lebih Dalam</div>
          <div class="d-flex justify-content-evenly" data-aos="fade-up">
            <div class="card text-center p-3" style="margin-top: 24px;">
              <div class="bg-success" id="lingkaran">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
              </div>
              <div class="fs-4 fw-bold">
                  Lorem Ipsum <br>Dolor Sit Amet
              </div>
              <br>
              <div class="fs-6 text-secondary">
              Lorem ipsum dolor sit amet, <br>
              consectetur adipiscing elit, sed <br>
              do eiusmod tempor incididunt
              </div>
            </div>
            <div class="card text-center p-4" style="margin-top: 24px;">
              <div class="bg-success" id="lingkaran">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
              </div>
              <div class="fs-4 fw-bold">
                  Lorem Ipsum <br>Dolor Sit Amet
              </div>
              <br>
              <div class="fs-6 text-secondary">
              Lorem ipsum dolor sit amet, <br>
              consectetur adipiscing elit, sed <br>
              do eiusmod tempor incididunt
              </div>
            </div>
            <div class="card text-center p-4" style="margin-top: 24px;">
              <div class="bg-success" id="lingkaran">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
              </div>
              <div class="fs-4 fw-bold">
                  Lorem Ipsum <br>Dolor Sit Amet
              </div>
              <br>
              <div class="fs-6 text-secondary">
              Lorem ipsum dolor sit amet, <br>
              consectetur adipiscing elit, sed <br>
              do eiusmod tempor incididunt
              </div>
            </div>
            <div class="card text-center p-4" style="margin-top: 24px;">
              <div class="bg-success" id="lingkaran">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
              </div>
              <div class="fs-4 fw-bold">
                  Lorem Ipsum <br>Dolor Sit Amet
              </div>
              <br>
              <div class="fs-6 text-secondary">
              Lorem ipsum dolor sit amet, <br>
              consectetur adipiscing elit, sed <br>
              do eiusmod tempor incididunt
              </div>
            </div>
          </div>    

          <div class="text-success fw-bold" data-aos="fade-up" style="margin-top: 140px;">Berita</div>    
          <div class="fw-bold" data-aos="fade-up" style="font-size: 46px;">Baca Berita Terbaru Kami <br>Dalam Tropisianimal</div>

    <div class="d-flex justify-content-between" data-aos="fade-up">
            

      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 d-flex justify-content-center" style="margin-top: 40px;">
        @foreach ($newss as $news)
          <a href="{{ route('news.show',$news->id) }}" class="btn" style="text-decoration: none;">
            <div class="card" style="width: 362px; height:340px; padding-top:26px;  border:0px;">
              <img src="{{ Storage::url($news->image) }}" class="card-img-top" style="width:362px; height:200px;" alt="...">
              <div class="card-body text-center" style="background-color: rgb(246, 246, 246) ;">
                <h6 class="card-title text-dark">{{ $news->title }}</h6>
                <p class="ellipsis card-text text-secondary">{{ $news->description }}</</p>
              </div>
            </div>  
          </a>
          @endforeach   
      </div>

    </div>
    <div class="text-success fw-bold" data-aos="fade-up" style="margin-top: 140px;">Galeri</div>
    <div class="fw-bold" data-aos="fade-up" style="font-size: 46px;">Lihat Lebih Banyak Hewan Tropis <br> Pada Galeri Kami</div>

        
    </div>

  </div>
</div>

@endsection