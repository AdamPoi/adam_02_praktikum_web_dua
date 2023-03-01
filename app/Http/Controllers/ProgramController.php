<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
  public function karir()
  {
    return $this->show('karir');
  }

  public function magang()
  {
    return $this->show('magang');

  }
  public function kunjunganIndustri()
  {
    return $this->show('kunjungan-industri');
  }

  public function show(string $program)
  {
    return '<iframe src="https://www.educastudio.com/program/' . $program . '" width="100%" height="100%"></iframe>';
  }
}