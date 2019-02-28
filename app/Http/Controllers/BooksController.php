<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Requests\StoreBook;


class BooksController extends Controller
{

    public function index()
    {
        $books = Book::with('author')->orderBy('id', 'desc')
                     ->paginate(10);

        return view('book.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::get();
        return view('book.create', compact('authors'));
    }

    public function store(StoreBook $request)
    {
        Book::create([
            'author_id' => $request->author,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::get();

        return view('book.edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreBook $request
     * @param Book      $book
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBook $request, Book $book)
    {

        $book->update([
            'name' => $request->name,
            'author_id' => $request->author,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return back();
    }
}
