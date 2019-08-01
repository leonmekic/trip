<?php

namespace Leon\Trip;

use App\Http\Controllers\Controller;
use Leon\Trip\Models\Trip;
use Illuminate\Support\Facades\DB;

class TripsController extends Controller
{
    public function index()
    {
//        $trips = DB::table('trips')->get();
        $trips = Trip::all();

        return response()->json($trips);
    }
}
