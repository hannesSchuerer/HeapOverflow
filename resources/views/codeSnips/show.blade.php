@extends('layouts.layout')

@section('title', 'CodeSnip')

@section('content')

    <h1 class="title">CodeSnip</h1>

    <div class="content">
        <textarea readonly class="textarea" type="textarea" cols="40" rows="20">{{$codeSnip->codeSnip}}</textarea>
    </div>

@endsection
