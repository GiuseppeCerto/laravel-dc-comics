<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

        $comics = Comic::all();


        return view('comics.index', compact('comics'));

    }

    public function show(Comic $comic){

        // $comic = Comic::find($id);

        return view('comics.show',compact('comic'));
    }

    public function create(){

        return view('comics.create');
    }
}
