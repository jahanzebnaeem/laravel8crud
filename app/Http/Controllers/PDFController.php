<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Project;

class PDFController extends Controller
{
    public function getPDF() {
        $projects = Project::all();
        $pdf = PDF::loadView('pdf.project', ['projects'=>$projects]);
        // return $pdf->download('project.pdf');
        return $pdf->stream('project.pdf');
    }
}
