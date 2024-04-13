<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rack;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view_data = [
            'data' => Book::all(),
            'list_category' => Category::all(),
            'list_rack' => Rack::all(),
        ];
        return view('pages.data.book', $view_data);
    }

    public function searchBook()
    {
        $view_data = [
            'data' => Book::all()
        ];
        return view('pages.books-user', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function setRack(Request $request, $id)
    {
        $request->validate([
            'rack_id' => 'required'
        ]);
        $getId = Book::findOrFail($id);
        if ($request->rack_id) {
            if ($getId) {
                $getId->update([
                    'rack_id' => $request->rack_id
                ]);
                return redirect()->back()->withToastSuccess('Success ' . $getId->title . ' to set ' . $getId->rack->name);
            }
        } else {
            return redirect()->back()->with('toast_error', 'Book Updated Fail!');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'author' => 'required|min:3',
            'publisher' => 'required|min:3',
            'image' => 'required',
            'publication' => 'required',
            'category_id' => 'required',
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $file_name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('image/books'), $file_name);
        }

        $body = [
            'title' => $request->title,
            'author' => $request->author,
            'image' => $file_name,
            'publisher' => $request->publisher,
            'publication' => $request->publication,
            'category_id' => $request->category_id,
        ];

        Book::create($body);
        return redirect()->back()->withToastSuccess('Book Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $getFindId = Book::findOrFail($id);

        $file_name = $getFindId->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $file_name = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('image/books'), $file_name);

            if ($getFindId->image && public_path('image/books/' . $getFindId->image)) {
                unlink(public_path('image/books/' . $getFindId->image));
            }
        }


        $body = [
            'title' => $request->title,
            'author' => $request->author,
            'image' => $file_name,
            'publisher' => $request->publisher,
            'publication' => $request->publication,
            'category_id' => $request->category_id,
        ];

        if ($getFindId) {
            $getFindId->update($body);
            return redirect()->back()->withToastSuccess('Book Updated Successfully!');
        } else {
            return redirect()->back()->with('toast_error', 'Book Updated Fail!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if ($id) {
            $getFindId = Book::findOrFail($id);
            $getFindId->delete();
            unlink(public_path('image/books/' . $getFindId->image));
            return redirect()->back()->withToastSuccess('Book Delete Successfully!');
        }
        return redirect()->back()->with('toast_error', 'Book Delete Fail!');
    }
}
