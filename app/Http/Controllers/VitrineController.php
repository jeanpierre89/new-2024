<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitrine;
use App\Models\Post;

class VitrineController extends Controller
{
    public function index(){

        $vitrine = Vitrine::query();
        $post = Post::query();

        return view('index', [
            'vitrine' => $vitrine,
            'post' => $post,
        ]);

    }
}
