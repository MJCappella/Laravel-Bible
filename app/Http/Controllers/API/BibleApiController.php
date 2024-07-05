<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BibleApp;

class BibleApiController extends Controller
{
    public function Apiindex()
    {
        $books = BibleApp::select('book_name')->distinct()->get();
        return response()->json($books);
    }

    public function Apishow($book)
    {
        $chapters = BibleApp::where('book_name', $book)->select('chapter')->distinct()->get();
        return response()->json($chapters);
    }

    public function ApishowChapter($book, $chapter)
    {
        $verses = BibleApp::where('book_name', $book)->where('chapter', $chapter)->get();
        return response()->json($verses);
    }

    public function Apishowverse($book, $chapter, $verse)
    {
        $individual_verses = BibleApp::where('book_name', $book)->where('chapter', $chapter)->where('verse', $verse)->get();
        return response()->json($individual_verses);
    }
}
