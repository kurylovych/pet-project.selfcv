<?php

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
  $intros = App\Intro::all();
  $abouts = App\About::all();
  $educs = App\Educ::all();
  $jobs = App\Job::all();
  $comments = App\Comment::all();
  $contacts = App\Contact::all();
  return view('home', compact('intros','abouts', 'educs', 'jobs', 'comments', 'contacts'));
});

Route::get('/projects', function () {
  $projects = App\Project::all();
  return view('projects', compact('projects'));
});

Route::get('/project/{id}', function ($id) {
  $project = App\Project::find($id);
  return view('project', compact('project'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
