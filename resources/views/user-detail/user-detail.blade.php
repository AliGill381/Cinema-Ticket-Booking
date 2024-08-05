@extends('welcome')

@section('content')
    <div class="content-wrapper">
        <div class="container mt-5">
            <div class="header-bg">
                <div class="header-text">
                    <h1>User Ticket Details</h1>
                </div>
            </div>
            @if (isset($total_booking) && count($total_booking) > 0)
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cinemaSelect">Select Cinema</label>
                            <select class="form-control" id="cinemaSelect">
                                <option value="">Select Cinema</option>
                                @foreach ($total_booking as $booking)
                                    <option value="{{ $booking->cinema_id }}"
                                        data-movie="{{ $booking->cinemaTicket->movie->movies_name ?? 'N/A' }}"
                                        data-showtime="{{ $booking->cinemaTicket->show_time ?? '' }}"
                                        data-tickets="{{ $booking->total_Seats ?? '' }}">
                                        {{ $booking->cinema->cinema_name ?? '' }}
                                        {{ $booking->cinemaTicket->show_time ?? '' }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div id="loader" class="loader" style="display: none;"></div>
                        <div id="movieDetails" class="info-section">
                            <div class="row info-section">
                                <div class="col-md-4 info-label">
                                    <i class="fas fa-film info-icon"></i>Movie:
                                </div>
                                <div class="col-md-8 info-value" id="movieValue"></div>
                            </div>
                            <div class="row info-section">
                                <div class="col-md-4 info-label">
                                    <i class="fas fa-clock info-icon"></i>Showtime:
                                </div>
                                <div class="col-md-8 info-value" id="showtimeValue"></div>
                            </div>
                            <div class="row info-section">
                                <div class="col-md-4 info-label">
                                    <i class="fas fa-users info-icon"></i>Tickets Purchased:
                                </div>
                                <div class="col-md-8 info-value" id="ticketsValue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning">
                    No bookings available. Please check back later.
                </div>
            @endif
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cinemaSelect').on('change', function() {
            var selectedOption = $(this).find('option:selected');
            var movie = selectedOption.data('movie');
            var showtime = selectedOption.data('showtime');
            var tickets = selectedOption.data('tickets');

            $('#loader').show(); // Show loader

            // Simulate a delay for demonstration (e.g., 1 second)
            setTimeout(function() {
                if (movie) {
                    $('#movieValue').text(movie);
                    $('#showtimeValue').text(showtime);
                    $('#ticketsValue').text(tickets);
                    $('#movieDetails').addClass('active');
                } else {
                    $('#movieDetails').removeClass('active');
                }
                $('#loader').hide(); // Hide loader
            }, 1000);
        });
    });
</script>
