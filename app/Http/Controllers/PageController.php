<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
/*
Route::get('/imp/{info}',function($info) {
    $vorname = 'Max';
    $nachname = 'Muster';
    $age = 20;

    // In der View (imp.blade.php) sind die Variablen vorname, nachnmae und
    // age verfügbar. ES können beliebige Variablen weitergeleit werden.

    return view('imp', [
        'vorname' => $vorname,
        'nachname' => $nachname,
        'age' => $age,
        'info' => ""
    ]);
});
*/
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function me()
    {
        return view('test');
    }

    public function impressum()
    {
        return view('impressum');
    }

    public function contact()
    {
        return view('imp');
    }

    public function info($id)
    {
        return view('students.index', [
            'id' => $id
        ]);
    }
}
