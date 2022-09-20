
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">{{ $post->id }}</div>
        <div class="col-4">{{ $post->title }}</div>
        <div class="col-4">{{ $post->author }}</div>
        <div class="col-4">{{ $post->post_date }}</div>
        <div class="col-4"><img src="{{ $post->post_image }}" class="w-100" alt="{{ $post->title }} image"></div>
        <div class="col-4">{{ $post->post_content }}</div>
        <div class="col-4">

        </div>
    </div>
</div>

@endsection
