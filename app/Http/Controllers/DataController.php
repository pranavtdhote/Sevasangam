<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DataController extends Controller
{
  //
  public function index(): View
  {
    $ngodata = DB::select('select * from ngo');

    return view('donation', ['ngodata'=> $ngodata]);
}
