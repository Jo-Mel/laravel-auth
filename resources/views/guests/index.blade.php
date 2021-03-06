@extends('layouts.app') 
@section('content')
<div class="container col-md-8">
    <div class="card-deck">
        <div class="row">
            @foreach ( $posts as $post )

            <div class="col-sm-4">
                <div class="card p-3 mt-4">
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
                    <p class="card-text">
                        <small class="text-muted">Ultima modifica {{ \Carbon\Carbon::parse($post->updated_at)->format('d-m-Y H:i')}}</small>
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
