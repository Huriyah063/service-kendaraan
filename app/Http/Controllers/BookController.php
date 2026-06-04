<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index (){

        
        $books = Book::all();
        return view('books.index', data: compact( 'books'));
    }
    public function create (){

        return view('books.create');
    }
    public function store (Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        book::create($validatedData);
        return redirect('/books')->with('success', 'Book created successfully.');

    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'))
        ->with('success', 'books updated successfully.');
    }
    
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')
    -> with('success', 'books deleted successfully.');
    }
    
}

