@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

    @forelse ($posts as $key => $post)
      @include('posts.partials.post')
    @empty
    <div>
      <p>No posts found!</p>
    </div>
    @endforelse

@endsection