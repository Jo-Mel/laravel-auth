@extends('layouts.app') 
@section('content')

    <div class="d-flex justify-content-center p-4">
        <div class="col-sm-4">
        <div class="row">
            <div class="card">
            <img
                src="{{ Storage::url($post->img) }}"
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
            {{-- <a href="{{ route('guest.posts.show', $post->slug) }}" class="btn btn-dark">Leggi</a> --}}
            </div>
        </div>
        </div>
        
    </div>
    </div>

@endsection