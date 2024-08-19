<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumsRequest;
use App\Http\Requests\UpdateAlbumsRequest;
use App\Models\Albums;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('albums.index',[
            'albums' => Albums::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('albums.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbumsRequest $request)
    {
        //
        Albums::create($request->validated());

        Session::flash('success','Album added successfully');
        return redirect()->route('albums.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Albums $album)
    {
        //
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Albums $album)
    {
        return view('albums.edit', compact('album'));
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumsRequest $request, Albums $album)
    {
        $album->update($request->validated());
        Session::flash('success', 'Album updated successfully');
        return redirect()->route('albums.show', $album->id);
    }    

    /**
     * Remove the specified resource from storage.
     */

     public function trash($id)
     {
         Albums::Destroy($id);
         Session::flash('success','Album trashed successfully');
         return redirect() -> route('albums.index');
     }
 
     public function destroy($id)
     {
         $album = Albums::withTrashed() -> where('id', $id) -> first();
         $album -> forceDelete();
         Session::Flash('success', 'Album deleted successfully');
         return redirect() -> route ('albums.index');
     }
 
     public function restore($id)
     {
         $album = Albums::withTrashed() -> where('id', $id) -> first();
         $album -> restore();
         Session::Flash('success', 'Album restored successfully');
         return redirect() -> route('albums.trashed');
     }
 

}
