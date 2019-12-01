@extends('layouts.layoutTags')

@section('title', 'Edit Tag')

@section('content')

    <h1 class="title">Edit Tag</h1>

    <form method="POST" action="/tags/{{$tag->id}}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="codeSnip">Tag</label>

            <div>

                <input class="text {{ $errors->has('tag') ? 'is-danger' : ''}}" type="text" name="tag" placeholder="Tag" value="{{$tag->tag}}">

            </div>
        </div>

        <div>
            <div class="control">
                <button type="submit" class="button is-link">Update Tag</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/tags/{{$tag->id}}">
        @method('DELETE')
        @csrf
        <div>
            <div class="control">
                <button type="submit" class="button">Delete Tag</button>
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
