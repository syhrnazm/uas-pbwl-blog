<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Post; 


class PhotoController extends Controller
{
   
    public function index()
    {
        $rows = Photo::Paginate(10);
        return view('photo.index', compact('rows'));
    }

    public function create()
    {
        $post = Post::ALl();
        return view('photo.add' , compact('post'));
    }


    public function store(Request $request)
     {

        $rows = new Photo();
        $rows->pho_date = $request->input('pho_date');
        $rows->pho_tittle = $request->input('pho_tittle');
        $rows->pho_text = $request->input('pho_text');
        $rows->pho_post_id = $request->input('pho_post_id');

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $gambar->move('upload/', $filename);
            $rows->gambar = $filename;
        }

            $rows->save();
            return redirect('photo');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
         $post = Post::All();
         $rows = Photo::findOrFail($id);
        return view('photo.edit', compact('rows','post'));
    }

    
    public function update(Request $request, $id)
    {
        
        $rows = Photo::find($id);
        $rows->pho_date = $request->input('pho_date');
        $rows->pho_tittle = $request->input('pho_tittle');
        $rows->pho_text = $request->input('pho_text');
        $rows->pho_post_id = $request->input('pho_post_id');

         if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $gambar->move('upload/', $filename);
            $rows->gambar = $filename;
        }
        

        $rows->save();      
        return redirect('photo'); 
    }

    
    public function destroy($id)
    {
        $row = Photo::findOrFail($id);
        $row->delete();

        return redirect('photo');
    }
}
