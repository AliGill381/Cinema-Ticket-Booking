<!-- resources/views/your-page.blade.php -->

@extends('welcome')
@section('content')
    <div class="page_append">
        <h1>Select a Cinema to Begin Your Movie Adventure</h1>
        <div class="slick-carousel">
            <div class="d-flex" style="justify-content: center">
                {{-- <a href="{{ url('movies/' . $cinema->id) }}"> --}}
                @foreach ($cinemas as $cinema)
                    <div class="image_container">
                        <input type="text" class="d-none" value="{{ $cinema->id }}" name=""
                            id="cinemaid{{ $cinema->id }}">
                        <input type="radio" name="cinema_location" value="{{ $cinema->id }}"
                            id="cinema{{ $cinema->id }}" class="cinema-radio">
                        <label for="cinema{{ $cinema->id }}" class="image-text">
                            <img class="carousal-img" src="{{ asset($cinema->cinema_logo) }}" width="400" height="269"
                                class="d-block w-100" alt="First Slide">
                            <div class="text-overlay"><span>
                                    {{ $cinema->cinema_description }} <br>
                                    {{ $cinema->cinema_name }}
                                    <br>
                                    {{ $cinema->cinema_location }} </span>
                            </div>
                            <div class="text-center w-100">
                                <h3 class="cinema-name">{{ $cinema->cinema_name }}</h3>
                            </div>
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <p class="error_message page-btn" style="color: red"></p>
        <div class="page-btn"><button class="btn custom_btn" disabled>Prev</button>
            <button class="btn custom_btn" id="next-btn">Next</button>
        </div>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#next-btn').click(function() {
            let selectedCinemaId = $('input[name="cinema_location"]:checked').val();
            home(selectedCinemaId);
        });

        function home(selectedCinemaId) {
            if (!selectedCinemaId) {
                $('.error_message').text(' Please Select the Cinema First ');
                return;
            } else {
                let url = '/movies/' + selectedCinemaId;
                console.log(url);
                $('.loader-2').removeClass('d-none');
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('.page_append').html('');
                        $('.page_append').append(response.html);
                        $('.loader-2').addClass('d-none');
                    },
                    error: function(xhr) {
                        console.log('Error:', xhr.responseText);
                    }
                });
            }

        }
    });
</script>
