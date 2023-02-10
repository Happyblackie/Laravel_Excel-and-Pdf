<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //import user model

//import the pdf class inside  PDFController:
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('pdf',compact('users'));
    }

    public function export()
    {
        $users = User::all();
       // $pdf = Pdf::loadView('pdf',compact('users')); b4 changed 
        $pdf = Pdf::loadView('pdfdownload',compact('users'));/*  pdfdownload is the NAME OF NEW BLADE FILE WITHOUT ANCHOR TAG DOWNLOAD LINK
        return $pdf->download('users.pdf'); */
    }
}
