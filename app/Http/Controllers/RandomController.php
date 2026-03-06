<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RandomController extends Controller
{
    public function select(){
        $stud = random_int(1,9);
        return view('students.random', [
            'stud' => $stud]);
}
}
