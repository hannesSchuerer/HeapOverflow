@extends('layout')

@section('content')

    <h1 class="title">CodeSnips</h1>

    @foreach ($codeSnips as $codeSnip)
        <a href="/codeSnips/{{$codeSnip->id}}/edit">
             <li>
                 <textarea class="textarea" type="textarea" cols="40" rows="20">{{$codeSnip->codeSnip}}</textarea>
             </li>
        </a>
    @endforeach

@endsection
