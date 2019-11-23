@extends('layouts.layout')

@section('title', 'Create CodeSnip')

@section('content')

    <h1 class="title">Create a new CodeSnip</h1>

    <form method="POST" action="/codeSnips">
        {{csrf_field()}}

        <div>
            <textarea class="textarea {{ $errors->has('codeSnip') ? 'is-danger' : ''}}" cols="40" rows="20" type="textarea" name="codeSnip" placeholder="Add your CodeSnip">{{ old('codeSnip') }}</textarea>
        </div>
        <div>
            <div class="control">
                <button type="submit" class="button is-link">Create CodeSnip</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>

@endsection
