@extends('layout')

@section('content')

    <h1 class="title">Edit CodeSnip</h1>

    <form method="POST" action="/codeSnips/{{$codeSnips->id}}">
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="codeSnip">CodeSnip</label>

            <div>

                <textarea class="textarea" type="textarea" cols="40" rows="20" name="codeSnip" placeholder="CodeSnip">{{$codeSnips->codeSnip}}</textarea>

            </div>
        </div>

        <div>
            <div class="control">
                <button type="submit" class="button is-link">Update CodeSnip</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/codeSnips/{{$codeSnips->id}}">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <div>
            <div class="control">
                <button type="submit" class="button">Delete CodeSnip</button>
            </div>
        </div>
    </form>
@endsection
