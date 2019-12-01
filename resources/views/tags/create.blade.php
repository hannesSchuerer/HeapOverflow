@extends('layouts.layoutTags')

@section('title', 'Create Tag')

@section('content')

    <h1 class="title">Create a new Tag</h1>

    <form method="POST" action="/tags">
        {{csrf_field()}}

        <div>
            <input class="textarea {{ $errors->has('tag') ? 'is-danger' : ''}}" cols="40" rows="20" type="textarea" name="tag" value="{{ old('tag') }}" placeholder="Add your Tag">
        </div>
        <div>
            <div class="control">
                <button type="submit" class="button is-link">Create Tag</button>
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
