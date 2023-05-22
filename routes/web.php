<?php

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
Route::get('resources/img/{filename}', function ($filename) {
    $path = resource_path('img/' . $filename);
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
})->name('resource.img')->where('filename', '.*');

Route::get('/', function () {
    $data = [
        'character',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop',

    ];

    $products = [
        'products' => config('comics')
    ];
    //dd(config('comics'));

    $footerLinks = [
        'dc_comics' => [
            'title' => 'dc comics',
            'links' => [
                'characters',
                'comics',
                'movies',
                'tv',
                'games',
                'videos',
                'news',
            ]
        ],

        'dc' => [
            'title' => 'dc',
            'links' => [
                'terms of use',
                'privacy policy (new)',
                'ad choices',
                'advertising',
                'jobs',
                'subscriptions',
                'talent workshops',
                'cpsc certificates',
                'ratings',
                'shop help',
                'contact us',

            ]
        ],

        'sites' => [
            'title' => 'sites',
            'links' => [
                'dc',
                'mad magazine',
                'dc kids',
                'dc universe',
                'dc power visa',
            ]
        ],

        'shop' => [
            'title' => 'shop',
            'links' => [
                'shop dc',
                'shop dc collectibles',
            ]
        ]

    ];

    return view('home', compact('data', 'products', 'footerLinks'));
})->name('home');

Route::get('/products.comicBooks', function () {

    return view('products.comicBooks');
})->name('products.comicBooks');