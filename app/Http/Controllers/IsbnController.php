<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookInStorageController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(int $storage_id)
  {
    $books = Book::with('bookInfo')->where('storage_id', $storage_id)->get();
    return view('storages/books', compact('books'));
  }
}
