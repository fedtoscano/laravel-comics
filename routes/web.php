<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navbarLinks = [
        [
            'id' => 1,
            'text' => 'characters',
            'active' => false,
        ],
        [
            'id' => 2,
            'text' => 'comics',
            'active' => false,
        ],
        [
            'id' => 3,
            'text' => 'movies',
            'active' => false,
        ],
        [
            'id' => 4,
            'text' => 'tv',
            'active' => false,
        ],
        [
            'id' => 5,
            'text' => 'games',
            'active' => false,
        ],
        [
            'id' => 6,
            'text' => 'collectibles',
            'active' => false,
        ],
        [
            'id' => 7,
            'text' => 'videos',
            'active' => false,
        ],
        [
            'id' => 8,
            'text' => 'fans',
            'active' => false,
        ],
        [
            'id' => 9,
            'text' => 'news',
            'active' => false,
        ],
        [
            'id' => 10,
            'text' => 'shop',
            'active' => false,
        ],
    ];
    return view('pages.home', compact("navbarLinks"));
});

