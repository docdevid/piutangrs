<?php

namespace App\Http\Controllers;

use App\Models\Setings;
use Illuminate\Http\Request;

class SetingsController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setings $setings)
    {
        $setings->truncate();
        $request->validate([
            'tanda_tangan' => 'required',
            'nip' => 'required',
        ]);

        if ($setings->create($request->all())) {
            return back()->with('status', 'setings-export-updated');
        }
    }
}
