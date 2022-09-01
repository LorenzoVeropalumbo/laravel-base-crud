<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        $data = [
           'comics' =>  $comics
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Prima di tutto valido i dati
        $request->validate($this->getValidationRules()); 

        $form_data = $request->all();
        $new_comics = new Comic();
        $new_comics->fill($form_data);
        $new_comics->save();

        return redirect()->route('comics.show', ['comic' => $new_comics->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' =>  $comic
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comic = Comic::findOrFail($id);

        $data = [
            'comic' =>  $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Prima di tutto valido i dati
        $request->validate($this->getValidationRules()); 

        $form_data = $request->all();
        $comic_to_update = Comic::findOrFail($id);
        $comic_to_update->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();

        return redirect()->route('comics.index');
    }

    protected function getValidationRules() {
        
        return [
            'title' => 'required|max:130',
            'description' => 'required|max:60000',
            'thumb' => 'required|max:60000',            
            'price' => 'required|max:999999.99',
            'series' => 'required|max:40',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:40',
        ];
    }
}
