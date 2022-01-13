@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

  {{-- @each('posts.partials.post', $posts, 'post', 'view.empty') --}}
  {{-- @each is a shortcut in place of @forelse  --}}
  @forelse ($posts as $key => $post)
    @include('posts.partials.post')
  @empty
  <div>
    <p>No posts found!</p>
  </div>
  @endforelse

@endsection