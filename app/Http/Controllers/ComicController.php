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

    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];

        $new_comic->save();

        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('comics.show', $new_comic);
    }
}
