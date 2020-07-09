<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;


class AlbumController extends Controller
{
  
    public function index()
    {
        $rows = Album::Paginate(10);
        return view('album.index', compact('rows'));
    }

    public function create()
    {
        $pho = Photo::All();
        return view('album.add', compact('pho'));
    }

    
    public function store(Request $request)
    {
         
        $this->validate($request, [
            'album_name'     => 'required',
            'album_text'     => 'required',
            'album_pho_id'   => 'required'
         ]);

       $rows= Album::create([
            'album_name'    => $request->album_name,
            'album_text'    => $request->album_text,
            'album_pho_id'  => $request->album_pho_id
       ]);

       return redirect('album'); 
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
         $pho = Photo::All();
         $rows = Album::findOrFail($id);
         return view('album.edit', compact('rows','pho'));
    }


    public function update(Request $request, $id)
    {
       $rows = Album::find($id);
        $rows->update([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_pho_id' => $request->album_pho_id
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rows = Album::findOrFail($id);
        $rows->delete();

        return redirect('album');
    }
}
