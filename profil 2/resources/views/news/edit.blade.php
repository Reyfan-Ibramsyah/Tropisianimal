@extends('layout.main')

@section('body')

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Content</h2>
            </div>
            <div class="pull-right" style="padding-bottom: 30px;">
                <a class="btn btn-primary" href="{{ route('news.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  
    <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Title:</strong>
                    <input type="text" name="title" value="{{ $news->title }}" class="form-control" placeholder="Post Title">
                    @error('title')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Description:</strong>
                    <textarea class="form-control" style="height:200px" name="description" placeholder="Post Description">{{ $news->description }}</textarea>
                    @error('description')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-bottom: 30px;">
                <div class="col text-center">
                <strong>Image:</strong>
                    <div class="form-group d-flex justify-content-center">    
                        <div class="text-center" style="width: 300px;">
                            <input type="file" name="image"  class="form-control" placeholder="image">
                            <img src="{{ Storage::url($news->image) }}" width="300px" height="200px">
                        </div>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary ml-3">Submit</button>

          
        </div>
   
    </form>
</div>

@endsection