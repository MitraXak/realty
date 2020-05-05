<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\realty;
use App\Image;
class RealtiesController extends Controller

{

    public function article($id) {

        $realty = realty::find($id);
        $images = Image::all();
        return view('post', ['posts' => $realty,
        'images' => $images]);

    }

}