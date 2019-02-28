<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\StoreAuthor;


class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::with('books')->orderBy('id', 'desc')
                         ->paginate(10);

        return view('author.index', compact('authors'));
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(StoreAuthor $request)
    {
        Author::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        return redirect()->route('authors.index');
    }

    public function show(Author $author)
    {
        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Author $author
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreAuthor $request
     * @param Author      $author
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAuthor $request, Author $author)
    {
        $author->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        return redirect()->route('authors.index');
    }

    /**
     *
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Author $author)
    {
        $author->books()->delete();

        $author->delete();

        return back();
    }
}
