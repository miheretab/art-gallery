<?php

use Illuminate\Support\Facades\Route;
use App\Models\Subscriber;
use Illuminate\Http\Request;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', fn() => view('index'))->name('home');

Route::get('/paintings', fn() => view('paintings'))->name('paintings');

Route::get('/about', fn() => view('about'))->name('about');

Route::get('/contact', fn() => view('contact'))->name('contact');

//Route::get('/painting/{id}', fn($id) => view('painting'))->name('painting');

Route::post('/subscribe', function (Request $request) {
    $request->validate([
        'email' => 'required|email|unique:subscribers,email',
        'name' => 'required|string|max:255'
    ]);

    $s = Subscriber::create([
        'email' => $request->email,
        'name' => $request->name
    ]);

    return redirect()->back()->with('success', 'Thank you for subscribing!');
})->name('subscribe');