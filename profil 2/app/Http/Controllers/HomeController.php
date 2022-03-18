<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Galeri;


class HomeController extends Controller
{
    Public function Index(){
        $data['newss'] = News::orderBy('id','asc')->paginate();
        $data['galeris'] = Galeri::orderBy('id','desc')->paginate();

    
        return view('home.index', $data);
    }
}
