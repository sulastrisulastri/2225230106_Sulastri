<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Pelajar;
use Illuminate\View\View;

class PelajarController extends Controller
{

    public function index(): View
    {
        $pelajar = Pelajar::all();
        return view('pelajar.index')->with('pelajar', $pelajar);
    }

    
    public function create(): View
    {
        return view('pelajar.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Pelajar::create($input);
        return redirect('pelajar')->with('flash_message', 'Pelajar Added!');
    }

    public function show(string $id): View
    {
        $pelajar = Pelajar::find($id);
        return view('pelajar.show')->with('pelajar', $pelajar);
    }

    public function edit(string $id): View
    {
        $pelajar = Pelajar::find($id);
        return view('pelajar.edit')->with('pelajar', $pelajar);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $pelajar = Pelajar::find($id);
        $input = $request->all();
        $pelajar->update($input);
        return redirect('pelajar')->with('flash_message', 'Pelajar Updated!');
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Pelajar::destroy($id);
        return redirect('pelajar')->with('flash_message', 'Pelajar deleted!');
    }
    }



