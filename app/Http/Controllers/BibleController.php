<?php

namespace App\Http\Controllers;

use App\Models\BibleApp;
use Illuminate\Http\Request;

class BibleController extends Controller
{
    public function index()
    {
        $books = BibleApp::select('book_name')->distinct()->get();
        return view('bible.index', compact('books'));
    }

    public function show($book)
    {
        $chapters = BibleApp::where('book_name', $book)->select('chapter')->distinct()->get();
        return view('bible.show', compact('book', 'chapters'));
    }

    public function showChapter($book, $chapter)
    {
        $verses = BibleApp::where('book_name', $book)->where('chapter', $chapter)->get();
        return view('bible.chapter', compact('book', 'chapter', 'verses'));
    }

    public function showverse($book, $chapter, $verse)
    {
        $verses = BibleApp::where('book_name', $book)->where('chapter', $chapter)->where('verse', $verse)->get();
        return view('bible.verse', compact('book', 'chapter', 'verse', 'verses'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = BibleApp::where('text', 'LIKE', '%' . $query . '%')->get();
        return view('layouts.search_results', compact('results', 'query'));
    }
}
