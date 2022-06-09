<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    public function show() {
        return view('commitment.show');
    }
}
