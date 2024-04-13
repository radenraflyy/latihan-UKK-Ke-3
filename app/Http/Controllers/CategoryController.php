<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view_data = [
            'data' => Category::all()
        ];

        return view('pages.data.category', $view_data);
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);
        $body = [
            'name' => $request->name
        ];
        Category::create($body);
        return redirect()->back()->withToastSuccess('Succesfully Create Categeory');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $body = [
            'name' => $request->name
        ];

        $getFindId = Category::findOrFail($id);
        if ($getFindId) {
            $getFindId->update($body);
            return redirect()->back()->withToastSuccess('Succesfully Update Categeory');
        } else {
            return redirect()->back()->with('toast_error', 'Failed Update Categeory');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $title = 'Delete Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        if ($id) {
            Category::destroy($id);
            return redirect()->back()->withToastSuccess('Succesfully Delete Categeory');
        } else {
            return redirect()->back()->with('toast_error', 'Failed Delete Categeory');
        }
    }
}
