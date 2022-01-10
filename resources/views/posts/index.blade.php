@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

  @foreach ($posts as $post)
    <div>
      <h2>{{ $post['title'] }}</h2>
    </div>
  @endforeach

@endsection