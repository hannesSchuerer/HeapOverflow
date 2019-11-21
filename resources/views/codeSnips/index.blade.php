@extends('layouts.layout')

@section('title', 'Your CodeSnips')

@section('content')

    <h1 class="title">CodeSnips</h1>

    <ul>
        @foreach ($codeSnips as $codeSnip)
            <a href="/codeSnips/{{$codeSnip->id}}">Show</a>
            <a href="/codeSnips/{{$codeSnip->id}}/edit">Edit</a>
            <li>
                <textarea readonly class="textarea" type="textarea" cols="40" rows="20">{{$codeSnip->codeSnip}}</textarea>
            </li>
        @endforeach
    </ul>

@endsection
