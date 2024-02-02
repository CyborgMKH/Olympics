<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        $id=Auth::id();
        $tickets=Ticket::where('user_id',$id)->where('paid',1)->get();
        return view('ticket.ticket',compact('tickets'));
    }
}
