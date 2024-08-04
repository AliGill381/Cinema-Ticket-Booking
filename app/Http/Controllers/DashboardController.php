<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\CinemaTicket;
use Illuminate\Http\Request;

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
        $show_time = CinemaTicket::all()->where('movie_id',$moviesid)->select('show_time','movie_id','id');
        $cinemas = Cinema::all();
        $html = view('cenima/showtimes',  compact('cinemaId','tickets', 'show_time', 'moviesid', 'cinemas'))->render();
        return response()->json([
            'html' => $html,
        ], 200);
    }
}
