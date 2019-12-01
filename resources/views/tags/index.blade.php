@extends('layouts.layoutTags')

@section('title', 'Your Tags')

@section('content')

    <h1 class="title">Tags</h1>

    <ul>
        @foreach ($tags as $tag)
            <a href="/tags/{{$tag->id}}">Show</a>
            <a href="/tags/{{$tag->id}}/edit">Edit</a>
            <li>
                <input readonly class="text" type="text" value="{{$tag->tag}}">
            </li>
        @endforeach
    </ul>

@endsection
