<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\View3D;

class BaseController extends Controller
{
    /**
     * Use Eloquent View3D Model to get all records and pass to view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = View3D::all();
        
        return view('base.index',compact("data") );
    }
}
