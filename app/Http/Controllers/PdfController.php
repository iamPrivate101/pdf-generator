<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(){
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        $name = "sameer";
        $email = 'maharjansameer2123gmail.com';
        // $pdf = Pdf::loadView('index',compact('name','email'))->setPaper('a4','landscape')->save(public_path('idcard'.time().rand(9999,99999).'.pdf'));
        
        
        $filename = 'idcard_' . time() . '_' . rand(9999, 99999) . '.pdf';

// $pdf = PDF::loadView('index', compact('name', 'email'))
//     ->setPaper([0, 0, 85.6, 53.98], 'landscape') // Set custom paper size and orientation for PVC ID card
//     ->save(public_path($filename));

return response()->download(public_path($filename));
        // return $pdf->download();
    }
}
