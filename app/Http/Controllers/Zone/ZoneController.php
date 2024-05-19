<?php

namespace App\Http\Controllers\Zone;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Thana;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function districts(Request $request)
    {
        $data = District::where('division_id', $request->id)
            ->orderBy('name', 'asc')
            ->get();
        return response()->json($data);
    }

    public function thanas(Request $request)
    {
        $data = Thana::where('district_id', $request->id)
            ->orderBy('name', 'asc')
            ->get();
        return response()->json($data);
    }
}
