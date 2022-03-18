@extends('layout.main')
     
@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profil.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('profil.update',$profil->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="judul" value="{{ $profil->judul }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="isi_judul" placeholder="Detail">{{ $profil->isi_judul }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <div class="text-center" style="width: 300px;">
                                <input type="file" name="image_1"  class="form-control" placeholder="image">
                                <img src="/image/{{ $profil->image_1 }}" width="300px" height="200px">
                            </div>
                        </div>
                    </div>
                   
                    <div class="col">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <div class="text-center" style="width: 300px">
                        <input type="file" name="image_2" class="form-control" placeholder="image">
                        <img src="/image/{{ $profil->image_2 }}" width="300px" height="200px">
                        </div>
                    </div>
                    </div>
                  
                    <div class="col">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <div class="text-center" style="width: 300px;">
                            <input type="file" name="image_3" class="form-control" placeholder="image">
                            <img src="/image/{{ $profil->image_3 }}" width="300px" height="200px">
                        </div>
                    </div>
                    </div>
                   
                </div>
              
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Visi:</strong>
                    <input class="form-control"  name="visi" value="{{ $profil->visi }}" placeholder="Detail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi Visi:</strong>
                    <textarea class="form-control" style="height:150px" name="isi_visi" placeholder="Detail">{{ $profil->isi_visi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Misi:</strong>
                    <input class="form-control"  name="misi" value="{{ $profil->misi }}" placeholder="Detail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi Misi:</strong>
                    <textarea class="form-control" style="height:150px" name="isi_misi" placeholder="Detail">{{ $profil->isi_misi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
    </div>
@endsection