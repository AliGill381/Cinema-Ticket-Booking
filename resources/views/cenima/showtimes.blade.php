@extends('welcome')
@section('content')
    <h1>Select Your Movie Experience</h1>
    <div class="container p-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 text-start tex">
                        <label style="font-weight: 800" for="cinema-location">Cinema Location</label>
                        <select id="cinema-location" class="form-control">
                            @foreach ($cinemas as $cinema)
                                <option value="{{ $cinema->id }}" {{ $cinemaId == $cinema->id ? 'selected' : '' }}>
                                    {{ $cinema->cinema_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4 text-start tex">
                        <label style="font-weight: 800" for="movie">Movie</label>
                        <select id="movie" class="form-control">
                            @foreach ($tickets as $ticket)
                                <option value="{{ $ticket->movie_id }}" {{ $moviesid == $ticket->movie_id ? 'selected' : '' }}>
                                    {{ $ticket->movie->movies_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4 text-start tex">
                        <label style="font-weight: 800" for="showtime">Showtime</label>
                        <select id="showtime" class="form-control">
                            @foreach ($show_time as $time)
                            <option value="{{$time['id']}}">{{$time['show_time']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-100 text-end">
                    <div class="px-5 mt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
