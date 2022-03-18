@extends('layout.main')

@section('header')
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>

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
                <a class="nav-link" style="color: white;" id="nav-header-item" href="#">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('kontak.index')}}">Kontak</a>
            </li>
        </ul>
    </div> 
    <div class="header-content fw-bold text-white" style="font-size: 56px; padding-top:100px; padding-bottom: 100px;">
        <p>Galeri</p>
    </div>

@endsection

@section('body')
    
<div class="container">

    <div class="pull-left mb-2">
        <a class="btn btn-primary" href="{{ route('editgaleri.index') }}"> Edit New Post</a>
    </div>


    <div class="" style="padding-top: 60px;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="width: 1100px; height:1100;">
        @foreach($galeris as $key => $galeri)
        @if($key == 0)
      <div class="item active">
        <img src="{{ Storage::url($galeri->image) }}"  alt="Los Angeles" style="width:1100px; height:600px;">
      </div>
      @endif
      
    @if($key)
      <div class="item">
        <img src="{{ Storage::url($galeri->image) }}"  alt="Chicago" style="width:1100px; height:600px">
      </div>
      @endif
      @endforeach
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
    
    <div class="text-center" style="margin-top: 60px;"> 
        <div class="d-flex justify-content-center row row-cols-1 row-cols-md-3 row-cols-lg-4">
        @foreach ($galeris as $galeri)
            <div class="col" style="padding-top: 20px;">
                <img src="{{ Storage::url($galeri->image) }}" class="img-fluid" alt="..." style="width: 275px; height:212px;">
            </div>
        @endforeach
        </div>
    </div>
</div>


    

<script>
$('.carousel').carousel()

</script>

{!! $galeris->links() !!}
@endsection