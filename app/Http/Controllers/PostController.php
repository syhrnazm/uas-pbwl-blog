<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
use App\Category; 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Post::paginate(10);
        return view('post.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = category::All();
        return view('post.add', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_date'     => 'required',
            'post_slug'     => 'required',
            'post_tittle'   => 'required',
            'post_text'     => 'required',
            'post_cat_id'   => 'required'
         ]);

        $rows=Post::create([
            'post_date'     => $request->post_date,
            'post_slug'     => $request->post_slug,
            'post_tittle'   => $request->post_tittle,
            'post_text'     => $request->post_text,
            'post_cat_id'   => $request->post_cat_id
        ]);

       return redirect('post'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cat = Category::All();
         $rows = Post::findOrFail($id);
        return view('post.edit', compact('rows','cat'));
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
        $rows = Post::find($id);
         $rows->update([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_tittle' => $request->post_tittle,
            'post_text' => $request->post_text,
            'post_cat_id' => $request->post_cat_id   
         ]);

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
        $rows = Post::findOrFail($id);
        $rows->delete();

        return redirect('post');
    }
    }
}
