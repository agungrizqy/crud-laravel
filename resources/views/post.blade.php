
@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="my-3">{{ $post->title }}</h2>
                <p>By <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> Category <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="...">

                <article class="my-3">
                    <p>{!! $post->body !!}</p>
                </article>
                

                <a href="/blog" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </div>
        
@endsection