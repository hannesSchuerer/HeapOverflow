@extends('layouts.layout')

@section('title', 'Create CodeSnip')

@section('content')

    <h1 class="title">Create a new CodeSnip</h1>

    <form method="POST" action="/codeSnips">
        {{csrf_field()}}

        <div>
            <textarea class="textarea" cols="40" rows="20" type="textarea" name="codeSnip" placeholder="Add your CodeSnip"></textarea>
        </div>
        <div>
            <div class="control">
                <button type="submit" class="button is-link">Create CodeSnip</button>
            </div>
        </div>

@endsection
