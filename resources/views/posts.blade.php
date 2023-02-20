
@extends('layouts.main')


@section('container')
    <h2>{{ $title }}</h2>

    <div class="row justify-content-center mb-3" >
        <div class="col-md-6">
            <form action="/blog">
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    @if ($posts->count())
        <div class="card mb-3">
            
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h5>
                <small class="text-muted">
                    <p>By <a href="/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> Category 
                    <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p> 
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-success">Read More..</a>     
            </div>
        </div>     
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="position-absolute px-2 py-1" style="background-color:rgba(0, 0, 0, 0.7)">
                        <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-dark">{{ $post->title }}</a></h5>
                        <small class="text-muted">
                            <p>By <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a>
                                {{ $post->created_at->diffForHumans() }}</p> 
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center">Page Not Found</p>   
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection


