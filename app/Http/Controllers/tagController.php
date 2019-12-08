<?php

namespace App\Http\Controllers;

use App\Tag;

class tagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $tags = Tag::all();
        return view('/tags.index', compact('tags'));
    }

    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }

    public function create()
    {
        return view('tags/create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'tag' => ['required', 'unique:tag']
        ]);

        Tag::create($attributes);

        return redirect('/tags');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Tag $tag)
    {
        $attributes = request()->validate([
            'tag' => ['required', 'unique:tag']
        ]);

        $tag->update($attributes);

        return redirect('/tags');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect('/tags');
    }
}
