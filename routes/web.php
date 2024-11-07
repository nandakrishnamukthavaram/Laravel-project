<?php
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Jobs::all()]);
});
Route::get('/jobs/{id}', function ($id) {
    // Arr::first($jobs,function($job) use ($id){
    //     return $jobs['id'] == $id;
    // });
    // is same as
    $job = Jobs::find($id);
    return view('job', ['job' => $job]);
});

// // This returns a json array useful in creating Application Programming Interfaces
// Route::get('/exampleapi',function(){
//     return ["name" => "krishna","age" => 21,"work"=>"web developer"];
// });

// // This returns a string that displays on the web page;
// Route::get('/exampletext', function(){
//     return "hey there this is an example text <a href=\"/\" > click here </a> to head back to home page";
// });
