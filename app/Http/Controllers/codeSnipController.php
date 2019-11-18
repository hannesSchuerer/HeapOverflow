<?php

namespace App\Http\Controllers;

use App\codesnip;

class codeSnipController extends Controller
{
    public function index()
    {
        $codeSnips = codesnip::all();
        return view('codeSnips.index', compact('codeSnips'));
    }

    public function show()
    {

    }

    public function create()
    {
        return view('codeSnips.create');
    }

    public function store()
    {
        $codeSnip = new codesnip();

        $codeSnip->codeSnip = request('codeSnip');

        $codeSnip->save();

        return redirect('codeSnips');
    }

    public function edit($id)
    {
        $codeSnips = codesnip::find($id);
        return view('codeSnips.edit', compact('codeSnips'));
    }

    public function update($id)
    {
        $codeSnips = codesnip::find($id);

        $codeSnips->codeSnip = request('codeSnip');

        $codeSnips->save();

        return redirect('/codeSnips');
    }

    public function destroy($id)
    {
        $codeSnips = codesnip::destroy($id);

        return redirect('/codeSnips');
    }
}
