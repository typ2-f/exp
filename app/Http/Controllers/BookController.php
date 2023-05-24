<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::where('user_id', Auth::user()->id)->get();
        return view('books/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        Book::create([
            'user_id' => $user_id,
            'isbn' => $request->isbn,
            'title' => $request->title,
        ]);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $book = Book::find($id);
        return view('books/show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $book = Book::find($id);
        return view('books/edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }
}
