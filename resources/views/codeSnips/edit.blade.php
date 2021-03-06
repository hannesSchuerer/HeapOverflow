@extends('layouts.layoutCodeSnips')

@section('title', 'Edit CodeSnip')

@section('content')

    <h1 class="title">Edit CodeSnip</h1>

    <form method="POST" action="/codeSnips/{{$codeSnip->id}}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="codeSnip">CodeSnip</label>

            <div>

                <textarea class="textarea {{ $errors->has('codeSnip') ? 'is-danger' : ''}}" type="textarea" cols="40" rows="20" name="codeSnip" placeholder="CodeSnip">{{$codeSnip->codeSnip}}</textarea>

            </div>
        </div>

        <div>
            <div class="control">
                <button type="submit" class="button is-link">Update CodeSnip</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/codeSnips/{{$codeSnip->id}}">
        @method('DELETE')
        @csrf
        <div>
            <div class="control">
                <button type="submit" class="button">Delete CodeSnip</button>
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
