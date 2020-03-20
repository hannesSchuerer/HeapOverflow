@extends('layouts.layoutCodeSnips')

@section('title', 'Create CodeSnip')

@section('content')

    <h1 class="title">Create a new CodeSnip</h1>

    <form method="POST" action="/codeSnips">
        {{csrf_field()}}

        <div>
            <textarea class="textarea {{ $errors->has('codeSnip') ? 'is-danger' : ''}}" cols="40" rows="20" type="textarea" name="codeSnip" placeholder="Add your CodeSnip">{{ old('codeSnip') }}</textarea>
        </div>
        <div class="form-group">
            <select class="form-control" id="selectTag" name="selectedTag" required focus>
                <option value="" disabled selected>Please select a tag</option>
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->tag}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <div class="control">
                <button type="submit" class="button is-link">Create CodeSnip</button>
            </div>
        </div>

       @include('errors')

    </form>

@endsection
