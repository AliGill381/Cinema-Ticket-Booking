<div style="padding: 50px">
    <h1>Select Your Movie Adventure</h1>
    <div class="slick-carousel">
        <div class="d-flex" style="justify-content: center">
            <input type="text" value="{{ $cinemaId }}" class="d-none cinema-id" name="" id="">
            @foreach ($tickets as $movie)
                <div class="image_container">
                    <input type="radio" name="cinema_location" value="{{ $movie->movie_id }}"
                        id="cinema{{ $movie->movie_id }}" class="cinema-radio">
                    <label for="cinema{{ $movie->movie_id }}" class="image-text">
                        <img class="slider-img" src="{{ asset($movie->movie->movies_image) }}" width="550"
                            height="280"class="d-block w-100" alt="Movie Slide">
                        <div class="text-overlay"><span>
                                {{ $movie->movie->movies_description }} <br>
                                {{ $movie->movie->movies_name }}
                                <br>
                        </div>
                        <div class="text-center w-100">
                            <span class="cinema-name">Price: {{ $movie->movie->movies_price }}</span>
                        </div>
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="">
        <button class="btn custom_btn "> <a style="color: bisque; text-decoration:none" href="{{ url('/') }}"> Prev
            </a></button>
        <button class="btn custom_btn" id="next-btn">Next</button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#next-btn').click(function() {
            let movieid = $('input[name="cinema_location"]:checked').val();
            let selectedCinemaId = $('.cinema-id').val();
            let url = '/showtimes/' + movieid + '/' + selectedCinemaId;

            console.log(url);

            // Update the browser's address bar without reloading the page
            // history.pushState(null, '', url);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('.page_append').html('');
                    $('.page_append').append(response.html);
                    // Re-initialize any scripts or plugins for the newly added content if necessary
                },
                error: function(xhr) {
                    console.log('Error:', xhr.responseText);
                }
            });
        });

        window.addEventListener('popstate', function() {
            let url = window.location.pathname;
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('.page_append').html('');
                    $('.page_append').append(response.html);
                },
                error: function(xhr) {
                    console.log('Error:', xhr.responseText);
                }
            });
        });
    });
</script>
