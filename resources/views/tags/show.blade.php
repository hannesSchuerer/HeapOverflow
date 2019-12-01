@extends('layouts.layoutTags')

@section('title', 'Tag')

@section('content')

    <h1 class="title">Tag</h1>

    <div class="content">
        <input readonly class="text" type="text" value="{{$tag->tag}}">
    </div>

@endsection
