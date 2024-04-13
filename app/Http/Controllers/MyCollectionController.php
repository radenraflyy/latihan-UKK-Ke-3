<?php

namespace App\Http\Controllers;

use App\Models\MyCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view_data = [
            'data' => MyCollection::where('user_id', Auth::user()->id)->get()
        ];
        return view('pages.my-collection', $view_data);
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
        $body = [
            'user_id' => Auth::user()->id,
            'book_id' => $book_id,
        ];
        if ($book_id) {
            MyCollection::create($body);
            return redirect()->back()->withToastSuccess('Succesfully Add Collection this Book!');
        } else {
            return redirect()->back()->withToastSuccess('Failed Add Collection Book!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MyCollection $myCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyCollection $myCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyCollection $myCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if ($id) {
            MyCollection::destroy($id);
            return redirect()->back()->withToastSuccess('Succesfully Remove Collection this Book!');
        } else {
            return redirect()->back()->withToastSuccess('Failed Remove Collection Book!');
        }
    }
}
