<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view_data = [
            'data' => Rack::all()
        ];
        return view('pages.data.rack', $view_data);
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
            'rack' => 'required|min:3',
        ]);

        $body = [
            'name' => $request->rack
        ];

        Rack::create($body);
        return redirect()->back()->withToastSuccess('Rack Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rack $rack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $body = [
            'name' => $request->rack
        ];
        $getFindId = Rack::findOrFail($id);
        if ($getFindId) {
            $getFindId->update($body);
            return redirect()->back()->withToastSuccess('Rack Updated Successfully!');
        } else {
            return redirect()->back()->with('toast_error', 'Failed Updated!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, Rack $rack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if ($id) {
            Rack::destroy($id);
            return redirect()->back()->withToastSuccess('Rack Delete Successfully!');
        } else {
            return redirect()->back()->with('toast_error', 'Failed Delete!');
        }
    }
}
