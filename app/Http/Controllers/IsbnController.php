<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class IsbnController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('isbn/index2');
  }

}
