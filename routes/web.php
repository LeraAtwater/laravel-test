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

// Route::get('/', function () {
//   return view('home.index', []);
// })->name('home.index');

// Route::get('/contact', function () {
//   return view('home.contact', []);
// })->name('home.contact');

//shortcut for Route function that return simple html and no extras
Route::view('/', 'home.index')->name('home.index');

Route::view('/contact', 'home.contact')->name('contact.index');

$posts = [
  1 => [
    'title' => 'Intro to Laravel',
    'content' => 'This is a short intro to Laravel',
    'is_new' => true,
    'has_comments' => true
  ],
  2 => [
    'title' => 'Intro to PHP',
    'content' => 'This is a short intro to PHP',
    'is_new' => false
  ],
  3 => [
    'title' => 'A third post',
    'content' => 'This is the third in the array',
    'is_new' => true,
    'has_comments' => true
  ],
  4 => [
    'title' => 'Post No. 4',
    'content' => 'This is the last post',
    'is_new' => false
  ]
];

Route::get('/posts', function() use($posts) {
  //shortcut is: compact($posts) ===  ['posts' => $posts])
  return view('posts.index', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id)  use($posts) {

  abort_if(!isset($posts[$id]), 404);

  return view('posts.show', ['post' => $posts[$id]]);
})->name('posts.show');

Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
  return 'Posts from ' . $daysAgo . ' days ago';
})->where([
  'daysAgo' => '[0-9]+'
])->name('posts.recent.index');
