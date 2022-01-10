@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')

  @foreach ($posts as $key => $post)
  {{-- $key is the index number --}}
    <div>
      <h2>{{ $key }}. {{ $post['title'] }}</h2>
    </div>
  @endforeach

@endsection