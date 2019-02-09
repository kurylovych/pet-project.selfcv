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
    $educs = App\Educ::orderBy('id', 'desc')->get();
    $jobs = App\Job::all();
    $comments = App\Comment::all();
    $contacts = App\Contact::all();
    $skill_threes = App\SkillThree::all();
    $website_headers = App\WebsiteHeader::all();
    $links = App\Link::all();
    $navigations = App\Navigation::all();
    $projects = App\Project::orderBy('id', 'desc')->take(6)->get();
    return view('home', compact('intros', 'abouts', 'educs', 'jobs', 'comments', 'contacts', 'skill_threes', 'website_headers', 'projects', 'links', 'navigations'));
});

Route::get('/projects', function () {
    $projects = App\Project::all();
    $contacts = App\Contact::all();
    return view('projects', compact('projects', 'contacts'));
});

Route::get('/test', function () {

    return view('test');
});

Route::get('/project/{id}', function ($id) {
    $project = App\Project::find($id);
    $contacts = App\Contact::all();
    return view('project', compact('project', 'contacts'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
