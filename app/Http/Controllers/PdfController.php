<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(){
    
        // $name = "sameer";
        // $email = 'maharjansameer2123gmail.com';
        $name = ['Sameer', 'Ameer'];
        foreach ($name as $key => $value) {
            $pdf = Pdf::loadView('index',compact('value'))->setPaper('a4','portrait')->save(public_path('idcard'.time().rand(9999,99999).'.pdf'));
        }
        // return $pdf->stream();

        
     
    }
}
