@extends('layout.main')

@section('body')
<div class="container">
    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('galeri.index') }}"> Back</a>
        <a class="btn btn-primary" href="{{ route('galeri.create') }}"> Add Image</a>
    </div>
    <div class="text-center" style="margin-top: 60px;">
        <div class="row row-cols-lg-4 row-cols-md-2 p-3 g-3">
        @foreach ($galeris as $galeri)
            <div class="col">
                <div class="" >
                    <img src="{{ Storage::url($galeri->image) }}" class="" alt="..." style="width: 275px; height: 212px;">
                </div>
                <form action="{{ route('galeri.destroy',$galeri->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('galeri.edit',$galeri->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
        </div>

    </div>
</div>



@endsection