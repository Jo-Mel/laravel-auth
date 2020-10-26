@extends('layouts.app') 
@section('content')
<div class="container col-md-8">
    <div class="card-deck">
        <div class="row">
            @foreach ( $posts as $post )

            <div class="col-sm-4">
                <div class="card">
                    <img
                        src="{{ Storage::url($post->img) }}" height="300px"
                        class="card-img-top"
                        alt="{{ $post->title }}"
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::substr($post->body, 0, 150) }}</p>
                        <p class="card-text">
                            <small
                                class="text-muted"
                                >{{ $post->user->name }}</small
                            >
                        </p>
                    <a href="{{ route('guest.posts.show', $post->slug) }}" class="btn btn-dark">Leggi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</div>
