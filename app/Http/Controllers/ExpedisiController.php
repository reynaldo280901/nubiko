<?php

namespace App\Http\Controllers;
use App\Models\DataNubiko;

use Illuminate\Http\Request; // Update this line

class ExpedisiController extends Controller
{
    public function showExpedisiForm($datefilter)
    {
        return view('nubiko.cek-expedisi', ['datefilter' => $datefilter]);
    }
    public function chooseExpedisi(Request $request)
{
    $request->validate([
        'datefilter' => 'required|date',
    ]);
    $datefilter = $request->input('datefilter');
    session(['datefilter' => $datefilter]);

    return view('nubiko.marketplace', ['datefilter' => $dateFilter]);

}
}