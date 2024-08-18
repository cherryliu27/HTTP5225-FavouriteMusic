<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('artists.index',[
            'artists' => Artist::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('artists.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        //
        Artist::create($request->validated());

        Session::flash('success','Artist added successfully');
        return redirect()->route('artists.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
        return view('artists.show', compact('artist'));
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        //
        return view('artists.edit', compact('artist'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        //
        $artist->update($request->validated());
        Session::flash('success', 'Artist updated successfully');
        return redirect()->route('artists.show', $artist->id);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function trash($id)
    {
        //
        Artist::Destroy($id);
        Session::flash('success','Artist trashed successfully');
        return redirect() -> route('artists.index');
    }

    public function destroy($id)
    {
        $artist = Artist::withTrashed() -> where('id', $id) -> first();
        $artist -> forceDelete();
        Session::Flash('success', 'Artist deleted successfully');
        return redirect() -> route ('artists.index');
    }

    public function restore($id)
    {
        $artist = Artist::withTrashed() -> where('id', $id) -> first();
        $artist -> restore();
        Session::Flash('success', 'Artist restored successfully');
        return redirect() -> route('artists.trashed');
    }

}


