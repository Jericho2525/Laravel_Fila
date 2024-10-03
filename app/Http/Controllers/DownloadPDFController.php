<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DownloadPDFController extends Controller
{
  public function download(User $record){
    dd($record);
  }
}
