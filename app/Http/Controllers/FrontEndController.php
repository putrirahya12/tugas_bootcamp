<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_post = [
            'title' => 'Belajar membaca buku pelajaran.',
            'author' => 'Bambang Pamungkas',
            'photo' => 'blogger/img/header-bg.jpg',
            'date' => '12 Desember 2019 11:20'
        ];

        return view('frontend.index', compact('last_post'));
    }

    /**
     * Display a listing of the resource category.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        return view('frontend.category');
    }

    /**
     * Display a listing of the search resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('frontend.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('frontend.detail');        
    }
}
