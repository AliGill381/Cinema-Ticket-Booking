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
                            <option value="universal-cinema">Universal Cinema</option>
                            <option value="platinum-cinema">Platinum Cinema</option>
                            <option value="galaxy-cinema">Galaxy Cinema</option>
                            <option value="star-cinema">Star Cinema</option>
                            <option value="sunrise-cinema">Sunrise Cinema</option>
                        </select>
                    </div>
                    <div class="col-4 text-start tex">
                        <label style="font-weight: 800" for="movie">Movie</label>
                        <select id="movie" class="form-control">
                            <option value="movie1">Avengers: Endgame</option>
                            <option value="movie2">Spider-Man: No Way Home</option>
                            <option value="movie3">Black Panther</option>
                            <option value="movie4">Doctor Strange</option>
                            <option value="movie5">Guardians of the Galaxy</option>
                        </select>
                    </div>
                    <div class="col-4 text-start tex">
                        <label style="font-weight: 800" for="showtime">Showtime</label>
                        <select id="showtime" class="form-control">
                            <option value="10am">10:00 AM</option>
                            <option value="1230pm">12:30 PM</option>
                            <option value="3pm">03:00 PM</option>
                            <option value="6pm">06:00 PM</option>
                            <option value="9pm">09:00 PM</option>
                        </select>
                    </div>
                </div>
                <div class="w-100 text-end">
                    <div class="px-5 mt-4" >
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
