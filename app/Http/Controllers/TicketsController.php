<?php

namespace practicaUno\Http\Controllers;

use Illuminate\Http\Request;

use practicaUno\Http\Requests;
use practicaUno\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function lastest()
    {
    	return view('tickets.list');
    }

    public function popular()
    {
    	return view('tickets.list');
    }

    public function open()
    {
    	return view('tickets.list');
    }

    public function closed()
    {
    	return view('tickets.list');
    }

    public function details($id)
    {
    	return view('tickets.details');
    }
}
