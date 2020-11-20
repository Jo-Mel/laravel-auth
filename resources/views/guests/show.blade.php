@extends('layouts.app') 
@section('content')

    <div class="d-flex justify-content-center p-4">
        <div class="col-sm-4">
        <div class="row">
            <div class="card p-3">
            <img
                src="{{ Storage::url($post->img) }}" height="300px"
                class="card-img-top"
                alt="{{ $post->title }}" 
            />
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
                <p class="card-text">
                    <small
                        class="text-muted"
                        >{{ $post->user->name }}</small
                    >
                </p>
            <p class="card-text">
                <small class="text-muted">Ultima modifica {{ \Carbon\Carbon::parse($post->updated_at)->format('d-m-Y H:i')}}</small>
            </p>
            <a href="{{ route('guest.posts.home') }}" class="btn btn-dark">Indietro</a>
            </div>
        </div>
        </div>
        
    </div>
    </div>

@endsection