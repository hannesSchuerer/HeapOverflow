@extends('layouts.layoutCodeSnips')

@section('title', 'CodeSnip')

@section('content')

    <h1 class="title">CodeSnip</h1>

    <div class="content">
        <textarea readonly class="textarea" type="textarea" cols="40" rows="20">{{$codeSnip->codeSnip}}</textarea>
    </div>

    <div class="container">
        <h1 class="title">
            Tags
        </h1>
            @foreach($codeSnip->tags as $tag)
                <ul>
                    {{$tag->tag}}
                </ul>
            @endforeach
    </div>

@endsection
