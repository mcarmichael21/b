<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show() {
        return view('login');
    }

}
