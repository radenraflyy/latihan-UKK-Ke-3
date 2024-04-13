<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowed;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view_data = [
            'data' => Borrowed::all()
        ];
        return view('pages.borrow', $view_data);
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
    public function store($book_id)
    {
        if ($book_id) {
            $body = [
                'user_id' => Auth::user()->id,
                'book_id' => $book_id,
                'date_borrow' =>  Carbon::now(),
                'status' => 'borrowed',
            ];
            Borrowed::create($body);
            return redirect()->back()->withToastSuccess('Succesfully Borrow Book!');
        } else {
            return redirect()->back()->withToastSuccess('Failed Borrow Book!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowed $borrowed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrowed $borrowed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        if ($id) {
            $body = [
                'date_return' =>  Carbon::now(),
                'status' => 'returned',
            ];
            Borrowed::findOrFail($id)->update($body);
            return redirect()->back()->withToastSuccess('Succesfully Return this Book!');
        } else {
            return redirect()->back()->withToastSuccess('Failed Return Book!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrowed $borrowed)
    {
        //
    }
}
