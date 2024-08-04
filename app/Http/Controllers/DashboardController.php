<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\CinemaTicket;
use App\Models\User;
use App\Models\UserBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $cinemas = Cinema::all();
        return view('cenima/home', compact('cinemas'));
    }
    public function movies(Request $request)
    {
        $cinemaId = $request->id;
        $cinema = Cinema::find($cinemaId);
        if (!$cinema) {
            return response()->json([
                'error' => 'Cinema not found',
            ], 404);
        }
        $tickets = CinemaTicket::where('cinema_id', $cinemaId)->with('movie')->get()->unique('movie_id');
        $html = view('cenima/movies', compact('cinemaId', 'tickets'))->render();

        return response()->json([
            'html' => $html,
        ], 200);
    }
    public function showTime(Request $request)
    {
        $cinemaId = $request->id1;
        $moviesid = $request->id;
        $cinema = Cinema::find($cinemaId);
        if (!$cinema) {
            return response()->json([
                'error' => 'Cinema not found',
            ], 404);
        }
        $tickets = CinemaTicket::where('cinema_id', $cinemaId)->with('movie')->get()->unique('movie_id');
        $show_time = CinemaTicket::all()->where('movie_id', $moviesid)->select('show_time', 'movie_id', 'id');
        $cinemas = Cinema::all();
        $html = view('cenima/showtimes',  compact('cinemaId', 'tickets', 'show_time', 'moviesid', 'cinemas'))->render();
        return response()->json([
            'html' => $html,
        ], 200);
    }
    public function login(Request $request)
    {
        $credentials =
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['message' => 'Login successful'], 200);
        }
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
    public function userTicketBooking(Request $request)
    {
        // return $request;   
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $cinema_id = $request->cinema_id;
            // $movie_id = $request->movie_id;
            $ticket_id = $request->show_time_id;
            $seats = $request->seats;
            $user = new UserBooking();
            $user->user_id = $userId;
            $user->user_id = $cinema_id;
            $user->user_id = $ticket_id;
            $user->seats = $seats;
            $user->save();
            return response()->json([
                'Message' => 'Recoreded is save Successfully ',
            ], 200);
        }
    }
}
