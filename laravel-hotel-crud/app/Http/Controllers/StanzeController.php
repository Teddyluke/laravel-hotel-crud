<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stanza;

class StanzeController extends Controller
{
  public function index() {

    $stanze = Stanza::all();
    return view('home', compact('stanze'));
  }

  public function show($id) {

    $stanza = Stanza::findOrfail($id);

    return view('stanza', compact('stanza'));
  }

  public function store(Request $request) {

    $data = $request -> all();
    $stanza = Stanza::create($data);
    return redirect() -> route('stanze-index');

  }
}
