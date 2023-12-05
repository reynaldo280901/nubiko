<?php

namespace App\Http\Controllers;
use App\Models\DataNubiko;

use Illuminate\Http\Request; // Update this line

class MarketplaceController extends Controller
{
    public function showMarketplaceForm($expedisi, $datefilter)
{
    $dates = \DB::table('data_nubiko')->get();
    return view('nubiko.marketplace', ['dates' => $dates, 'expedisi' => $expedisi, 'datefilter' => $datefilter]);
}

public function chooseMarketplace(Request $request)
{
    $request->validate([
        'datefilter' => 'required|date',
        'expedisi' => 'required',
    ]);

    $datefilter = $request->input('datefilter');
    session(['datefilter' => $datefilter]);

    $expedisi = $request->input('expedisi');
    session(['expedisi' => $expedisi]);

    return view('nubiko.marketplace', ['datefilter' => $datefilter, 'expedisi' => $expedisi]);
}

}