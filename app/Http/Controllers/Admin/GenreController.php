<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function add()
    {
        return view('admin.genre.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/genre/create');
    }
}
