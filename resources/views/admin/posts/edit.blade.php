@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container col-md-6">
        <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group mt-5 mb-5">
            <label for="title">Titolo</label>
        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group mt-5 mb-5">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{ $post->body }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-dark mt-3 mb-3">Submit</button>
    </form>
    </div>
@endsection