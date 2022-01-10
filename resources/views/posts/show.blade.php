@extends('layouts.app')
@section('title', $post['title'])
@section('content')
@if($post['is_new'])
  <div>
    <p>This is a new post... using if</p>
  </div>
{{-- can also use plain @else instead of @elseif, since this is a boolean --}}
@elseif(!$post['is_new'])
  <div>
    <p>This post is old... using elseif/else</p>
  </div>
@endif

@unless ($post['is_new'])
<div></div>
  <p>This is an old post... using unless.</p>
</div>
@endunless

  <h1>{{ $post['title'] }}</h1>
  <p>{{ $post['content'] }}</p>

  @isset($post['has_comments'])
  <div>
    <p>This post has some comments... using isset</p>
  </div>
@endisset

@endsection