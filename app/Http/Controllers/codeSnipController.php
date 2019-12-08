<?php

namespace App\Http\Controllers;

use App\CodeSnip;

class codeSnipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $codeSnips = CodeSnip::where('userId', auth()->id())->get();
        return view('codeSnips.index', compact('codeSnips'));
    }

    public function show(CodeSnip $codeSnip)
    {
        return view('codeSnips.show', compact('codeSnip'));
    }

    public function create()
    {
        return view('codeSnips.create');
    }

    public function store()
    {
        $attributes = request()->validate([
           'codeSnip' => ['required', 'min:10']
        ]);

        $attributes['userId'] = auth()->id();

       CodeSnip::create($attributes);

       return redirect('/codeSnips');
    }

    public function edit(CodeSnip $codeSnip)
    {
        return view('codeSnips.edit', compact('codeSnip'));
    }

    public function update(CodeSnip $codeSnip)
    {
       $attributes = request()->validate([
           'codeSnip' => ['required', 'min:10']
       ]);

       $codeSnip->update($attributes);

       return redirect('/codeSnips');
    }

    public function destroy(CodeSnip $codeSnip)
    {
        $codeSnip->delete();
        return redirect('/codeSnips');
    }
}
