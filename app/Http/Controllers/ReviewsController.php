<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $view_data = [
            'data' => Book::where('id', $id)->latest()->first(),
            'list_review' => Review::all(),
        ];
        return view('pages.view-detail-book', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $book_id)
    {
        $request->validate([
            'review' => 'required:min:3|max:125',
            'rating' => 'required'
        ]);

        $getFindById = Book::findOrFail($book_id);

        $body = [
            'user_id' => Auth::user()->id,
            'book_id' => $book_id,
            'review' => $request->review,
            'rating' => $request->rating
        ];

        if ($book_id && Auth::user()->id) {
            Review::create($body);
            return redirect()->back()->withToastSuccess('Succsess Add Review for this ' . $getFindById->title);
        }
    }
}
