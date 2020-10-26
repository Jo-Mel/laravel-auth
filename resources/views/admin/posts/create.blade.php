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
<div class="container col-md-8">
    <h2 class="mt-5 mb-5">Crea un nuovo articolo</h2>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
       
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" placeholder="Inserisci titolo">
        </div>
        <div class="form-group">
            <label for="title">Immagine</label>
            <input type="file" name="img" accept="image/*">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
           <div class="form-group">
               @foreach ($tags as $tag)
                    <label for="tag">{{ $tag->name }}</label>
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
               @endforeach
           </div>
        <button type="submit" class="btn btn-dark mt-3 mb-3">Submit</button>
    </form>
</div>
@endsection