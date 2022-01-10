@extends('layouts.app')
@section('title', $post['title'])
@section('content')
@if($post['is_new'])
  <div>
    <p>This is a new post! Using if directive</p>
  </div>
@elseif(!$post['is_new'])
  <div>
    <p>This post is old.</p>
  </div>
@endif
  <h1>{{ $post['title'] }}</h1>
  <p>{{ $post['content'] }}</p>

@endsection