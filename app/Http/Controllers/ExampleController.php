<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show($name)
    {
    echo "This is Example $name ";
    }
}
