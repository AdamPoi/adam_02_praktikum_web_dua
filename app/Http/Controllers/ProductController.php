<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function show(string $slug)
  {
    return '<iframe src="https://www.educastudio.com/category/' . $slug . '" width="100%" height="100%"></iframe>';
  }
}