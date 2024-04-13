<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    public function view(): View
    {
        $view_data = [
            'data' => User::all()
        ];
        return view('components.export.user', $view_data);
    }
}
