<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\CinemaShowTime;
use App\Models\User;
use App\Models\UserBookingDetail;
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
        $tickets = CinemaShowTime::where('cinema_id', $cinemaId)->with('movie')->get()->unique('movie_id');
        $html = view('cenima/movies', compact('cinemaId', 'tickets'))->render();

        return response()->json([
            'html' => $html,
        ], 200);
    }
    public function showTime(Request $request, $moviesid, $cinemaId)
    {
        $cinema = Cinema::find($cinemaId);
        if (!$cinema) {
            if ($request->ajax()) {
                return response()->json([
                    'error' => 'Cinema not found',
                ], 404);
            } else {
                abort(404, 'Cinema not found');
            }
        }

        $tickets = CinemaShowTime::where('cinema_id', $cinemaId)->with('movie')->get()->unique('movie_id');
        $show_time = CinemaShowTime::where('movie_id', $moviesid)->select('show_time', 'movie_id', 'id')->get();
        $cinemas = Cinema::all();

        if ($request->ajax()) {
            $html = view('cenima/showtimes', compact('cinemaId', 'tickets', 'show_time', 'moviesid', 'cinemas'))->render();
            return response()->json([
                'html' => $html,
                'url' => url('/showtimes/' . $moviesid . '/' . $cinemaId),
            ], 200);
        } else {
            return view('cenima/showtimes', compact('cinemaId', 'tickets', 'show_time', 'moviesid', 'cinemas'));
        }
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
            $cenima_ticket = CinemaShowTime::find($ticket_id);
            $avalible_seats = $cenima_ticket->avaliable_seat;
            $seats = $request->seats;
            if (isset($avalible_seats) && ($avalible_seats == 0 || $avalible_seats < $seats)) {
                return response()->json([
                    'Error' => 'No seats avalible ',
                ], 500);
            }
            $user = new UserBookingDetail();
            $user->user_id = $userId;
            $user->cinema_id     = $cinema_id;
            $user->cinema_showtime_id = $ticket_id;
            $user->seats = $seats;
            $user->save();
            if ($user) {
                $new_seats = (int)$avalible_seats - $seats;
                $cenima_ticket->avaliable_seat = $new_seats;
                $cenima_ticket->save();
            }
            return response()->json([
                'Message' => 'Ticket Booked Successfully  is save Successfully ',
            ], 200);
        }
        else
        {
            return response()->json([
                'Error' => 'Login required for ticket booking.',
            ], 500); 
        }
    }
    public function userDetail(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $total_booking = UserBookingDetail::where('user_id', $user->id)
                ->selectRaw('SUM(seats) as total_Seats, cinema_showtime_id, cinema_id')
                ->groupBy('cinema_id', 'cinema_showtime_id')
                ->with(['cinema' => function ($query) {
                    $query->select('id', 'cinema_name');
                }, 'cinemaTicket'])
                ->get();
            return view('user-detail.user-detail', compact('total_booking'));
        } else {
            abort(404);
        }
    }
}
