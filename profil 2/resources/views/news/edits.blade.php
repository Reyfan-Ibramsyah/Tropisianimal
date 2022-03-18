@extends('layout.main')

@section('body')
<div class="container">
    <br>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
        <a class="btn btn-primary" href="{{ route('news.create') }}"> Create Content</a>
    </div>
    <div class="text-center" style="margin-top: 60px;">
        <div class="row row-cols-lg-3 row-cols-md-2 p-3 g-3">
        @foreach ($newss as $news)
            <div class="col">
                <div class="card" style="width: 362px; height:340px; padding-top:26px;  border:0px;">
                    <img src="{{ Storage::url($news->image) }}" class="card-img-top" style="width:362px; height:200px;" alt="...">
                    <div class="card-body text-center" style="background-color: rgb(246, 246, 246) ;">
                    <h6 class="card-title text-dark">{{ $news->title }}</h6>
                    <p class="ellipsis card-text text-secondary">{{ $news->description }}</p>
                    </div>
                </div>  
                <form action="{{ route('news.destroy',$news->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('news.edit',$news->id) }}">Edit</a>

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