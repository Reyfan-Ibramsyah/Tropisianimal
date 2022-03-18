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
              <a class="nav-link" style="color: white;" id="nav-header-item" href="#">Berita</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('galeri.index')}}">Galeri</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('kontak.index')}}">Kontak</a>
          </li>
          </ul>
      </div> 

      <div class="header-content fw-bold text-white fs-1" style="padding-top:100px; padding-bottom: 100px;">
          <p>Berita</p>
      </div>

@endsection



@section('body')
  <div class="container">
  <div class="text-center mb-2">
                <a class="btn btn-primary" href="{{ route('editnews.index') }}">Edit Content</a>
  </div>


    <div class="row row-cols-1 row-cols-lg-2" style="margin-top: 80px;">
    
        <div class="row row-cols-2">
          @foreach ($newss as $key => $news)
          @if($key < 3 )
            @if($key == 0)
            <div class="col">
                <img src="{{ Storage::url($news->image) }}" alt="" class="" width="260px" height="424px">
            </div>
            @elseif($key == 1)
            <div class="">
                <img src="{{ Storage::url($news->image) }}" alt="" class="" width="260px" height="140px">
            </div>
            @else
            <div style="position:absolute; right: 297px; top:747px">
                <img src="{{ Storage::url($news->image) }}" alt="" class="" width="260px" height="274px">
            </div>
            @endif
          @endif
          @endforeach
        </div>
          
        <div class="col p-5">
            <div class="fw-bold fs-1">10 Hewan Herbivora <br> Yang Berbahaya</div>
            <div class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla quam excepturi consectetur aut nobis quis porro. Tenetur explicabo quia, fugiat hic nesciunt sit repudiandae pariatur expedita quas eos dolores fuga!</div>
          
            <div style="margin-top: 24px;">
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
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    
      <div class="fw-bold fs-1">Berita Lainnya</div>
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
   
      
      {!! $newss->links() !!}

@endsection
