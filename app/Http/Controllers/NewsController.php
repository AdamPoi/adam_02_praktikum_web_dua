<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

  public function index()
  {
    return '<iframe src="https://www.educastudio.com/news" width="100%" height="100%"></iframe>';
  }

  public function show(string $slug)
  {
    return '<iframe src="https://www.educastudio.com/news/' . $slug . '" width="100%" height="300"></iframe>';
  }
}