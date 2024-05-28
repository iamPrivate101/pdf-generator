<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Festival;
use Illuminate\Http\Request;

class leaflet extends Controller
{
    public function nepalMap()
    {
        return view('leafletmap');
    }

    public function festival($district = null)
    {
        if ($district) {
            // dd($district);
            $district_name = District::where('district_name', $district)->first();
            if ($district_name) {

                // Fetch all festivals for the given district
                $festivals = Festival::where('district', $district_name->id)->get();
                if ($festivals->isEmpty()) {
                    return response()->json(['festival' => 'No festival data']);
                } else {
                    return response()->json(['festivals' => $festivals]);
                }
            }else{
                return response()->json(['festival' => 'No festival data']);
            }
        } else {
            return response()->json(['festival' => 'District not specified'], 400);
        }
    }
}
