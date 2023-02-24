<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return 'Selamat Datang';
  }
  public function about()
  {
    return " <h3>NIM  : 2141720185</h3>
                  <h3>Nama  : Adam Rafi Rezandi</h3>
                  <h3>Kelas  : TI 2H </h3>
                </div>
";
  }
  public function articles(int $id)
  {
    return "Ini merupakan halaman artikel dengan id $id";
  }
}
