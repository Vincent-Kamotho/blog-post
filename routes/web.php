<?php

use App\Models\Author;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author', function() {

    // Post::create([
    //     'author_id' => 1,
    //     'title' => 'John Post',
    //     'content' => 'This post belongs to John about health'
    // ]);
    // Post::create([
    //     'author_id' => 2,
    //     'title' => 'Mike Post',
    //     'content' => 'This post belongs to Mike about adventure'
    // ]);
    // Post::create([
    //     'author_id' => 3,
    //     'title' => 'Lisa Post',
    //     'content' => 'This post belongs to Lisa about technology'
    // ]);
    // Post::create([
    //     'author_id' => 2,
    //     'title' => 'Mike Post',
    //     'content' => 'This post belongs to Mike about meditation'
    // ]);


    $author = Author::all();
    return view('authors', compact('author'));
    
    
    // Author::create([
    //     'name' => 'John Doe',
    //     'email' => 'johndoe@gmail.com',
    //     'phone_number' => '0700123456'
    // ]);
    // Author::create([
    //     'name' => 'Michael King',
    //     'email' => 'mikeking@gmail.com',
    //     'phone_number' => '0700234567'
    // ]);
    // Author::create([
    //     'name' => 'Lisa Queen',
    //     'email' => 'lisaqueen@gmail.com',
    //     'phone_number' => '0700345678'
    // ]);
});
