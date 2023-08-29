<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Controller
{
    public function edit(PostModel $post)
    {
        // dd('hell');
        $user = Auth::user();

        // $this->authorize('update', $post);

        $content = $post->content;

        return $content;;
    }
}
