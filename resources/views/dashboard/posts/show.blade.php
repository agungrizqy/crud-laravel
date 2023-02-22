
@extends('dashboard.layouts.main')


@section('container')
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <h2 class="my-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success btn-sm"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm"> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-2" alt="...">
                <article class="my-3">
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
        
@endsection