@extends('layout.main')

@section('header')

      <div class="d-flex bd-highlight">
        <ul class="nav flex-grow-1 bd-highlight">
        <li class="nav-item">
            <a class="nav-link fs-4 fw-bold" style="color: white;" aria-current="page" href="">Tropisianimal</a>
        </li>
        </ul>
        <ul class="nav bd-highlight fw-bold">
        <li class="nav-item">
            <a class="nav-link" style="color: white;" id="nav-header-item" aria-current="page" href="{{ route('home.index')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white;" id="nav-header-item" href="#">Tentang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('news.index')}}">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('galeri.index')}}">Galeri</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white;" id="nav-header-item" href="{{ route('kontak.index')}}">Kontak</a>
        </li>
        </ul>
      </div> 
      <div class="header-content fw-bold text-white" style="font-size: 56px; padding-top:100px; padding-bottom: 100px;">
        <p>Tentang Kami</p>
      </div>

@endsection

@section('body')

<div class="container">

      @foreach ($profils as $profil)
      <a class="btn btn-primary " href="{{ route('profil.edit',$profil->id) }}">Edit Content</a>
      <div class="row row-cols-1 row-cols-lg-2 ">
      <div class="" id="text-header">
          <div class="fs-1 fw-bold">{{ $profil->judul }}</div> 
          <div class="fs-6" id="text-body">{{ $profil->isi_judul }}</div>
      </div>
      
      <div class="" id="text-header">
          <div class="d-flex">
              <img src="/image/{{ $profil->image_1 }}" alt="" class="p-1" style="width : 268px; height: 193px; min-width: 268px; min-height: 193px;">
              <img src="/image/{{ $profil->image_2 }}" alt="" class="p-1"  style="width : 268px; height: 193px; min-width: 268px; min-height: 193px;">
          </div>
          <img src="/image/{{ $profil->image_3 }}" alt="" class="p-1"  width="544px" height="268px">
      </div>
  </div>
  <div class="row row-cols-1" style="padding-bottom: 60px;">
      <div class="">
          <div class="fs-1 fw-bold">{{ $profil->visi }}</div>
          <div class="fs-6" id="text-body">{{ $profil->isi_visi }}</div>
      </div>
      <div class="">
          <div class="fs-1 fw-bold" style="padding-top: 60px;">{{ $profil->misi }}</div>
          <div class="fs-6" id="text-body">{{ $profil->isi_misi }}</div>
          @endforeach   
      </div>
  </div>
</div>


{!! $profils->links() !!}

@endsection