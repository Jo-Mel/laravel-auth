@extends('layouts.app')
@section('content')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="container col-md-10">
        <table class="table mt-5 mb-5 text-center">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
                <td>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

            

    {{-- @dd($posts) --}}
@endsection
    </div>
    