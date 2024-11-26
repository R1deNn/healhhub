<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadResultsController extends Controller
{
    public function index($filename){
        $file = storage_path("download\images/" . $filename);
        return response()->download($file);
    }
}
