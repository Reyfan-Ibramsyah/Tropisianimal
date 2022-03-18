@extends('layout.main')

@section('body')

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('news.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">
                <div type="text" name="title"  class="fw-bold fs-2" placeholder="Post Title">{{ $news->title }}</div>
            </div>
        </div>


        <div class="col col-sm-12 col-xs-12 col-md-12">
            <div class="form-group text-center">
                <img src="{{ Storage::url($news->image) }}" class="img-fluid p-5"  alt="" />
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div name="description" class="" placeholder="Post Description">{{ $news->description }}</div>
            </div>
        </div>
    </div>
          
   
</div>

@endsection