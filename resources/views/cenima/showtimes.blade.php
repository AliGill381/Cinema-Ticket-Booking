    <h1 class="text-center mb-4">Select Your Movie Experience</h1>
    <div class="container p-5">
        <form id="form_data">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <div class="row g-4">
                        <!-- Cinema Location Field -->
                        <div class="col-md-6 col-lg-3">
                            <label for="cinema-location" class="form-label">Cinema Location</label>
                            <select id="cinema-location" name="cinema_id" class="form-select">
                                @foreach ($cinemas as $cinema)
                                    <option value="{{ $cinema->id }}" {{ $cinemaId == $cinema->id ? 'selected' : '' }}>
                                        {{ $cinema->cinema_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Movie Field -->
                        <div class="col-md-6 col-lg-3">
                            <label for="movie" class="form-label">Movie</label>
                            <select id="movie" class="form-select" name="movie_id">
                                @foreach ($tickets as $ticket)
                                    <option value="{{ $ticket->movie_id }}"
                                        {{ $moviesid == $ticket->movie_id ? 'selected' : '' }}>
                                        {{ $ticket->movie->movies_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Showtime Field -->
                        <div class="col-md-6 col-lg-3">
                            <label for="showtime" class="form-label">Showtime</label>
                            <select id="showtime" name="show_time_id" class="form-select">
                                @foreach ($show_time as $time)
                                    <option value="{{ $time['id'] }}">{{ $time['show_time'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Seats Field -->
                        <div class="col-md-6 col-lg-3">
                            <label for="seats" class="form-label">Seats</label>
                            <select id="seats" name="seats" class="form-select">
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }} {{ $i > 1 ? 'Seats' : 'Seat' }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <p class="d-none display-btn" data-data="{{ Auth::check() }}"></p>
                    <!-- Submit Button -->
                    @if (!Auth::check())
                        <div class="d-flex justify-content-end mt-4 without_auth">
                            <button type="button" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm"
                                data-bs-toggle="modal" data-bs-target="#loginModal">
                                Submit
                            </button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-end mt-4 d-none with_auth">
                        <button type="submit"
                            class="btn btn-primary px-4 py-2 rounded-pill shadow-sm ticket-submit-form">Submit</button>
                    </div>




                </div>
            </div>
        </form>

    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <p class="invalid-feedback-email" style="color: red"></p>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <p class="invalid-feedback-password" style="color: red"></p>
                        </div>
                        <p class="error-message-data" style="color: red"></p>

                        <button type="submit" class="btn btn-primary login-submit-form">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modal_close" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    if ($('.display-btn').data('data') == 1) {
        $('.with_auth').removeClass('d-none');
    }
    $(document).ready(function() {
        $('.login-submit-form').on('click', function(e) {
            debugger;
            e.preventDefault();
            let url = '/login_page';
            let email = $('#email').val();
            let password = $('#password').val();
            console.log('email:', email); // Debugging
            console.log('password:', password); // Debugging
            let data = {
                email: email,
                password: password
            };

            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    $('.modal_close').click();
                    $('.without_auth').addClass('d-none');
                    $('.with_auth').removeClass('d-none');
                },
                error: function(xhr) {
                    debugger;
                    // Clear previous error messages
                    $('.invalid-feedback-email').text('');
                    $('.invalid-feedback-password').text('');
                    $('.error-message-data').text('');

                    // Handle errors
                    let response = xhr.responseJSON;

                    if (response.errors) {
                        if (response.errors.email) {
                            $('.invalid-feedback-email').html(response.errors.email.join(
                                '<br>'));
                        }
                        if (response.errors.password) {
                            $('.invalid-feedback-password').html(response.errors.password
                                .join('<br>'));
                        }
                    } else {
                        $('.error-message-data').text('Invalid credentials.');
                    }
                }
            });
        });
        $('.ticket-submit-form').on('click', function(e) {
            debugger;
            e.preventDefault();
            let url = '/user-ticket-booking';
            let data = $('#form_data').serialize();
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    $('.modal_close').click();
                    $('.without_auth').addClass('d-none');
                    $('.with_auth').removeClass('d-none');
                },
                error: function(xhr) {
                    debugger;
                    // Clear previous error messages
                    $('.invalid-feedback-email').text('');
                    $('.invalid-feedback-password').text('');
                    $('.error-message-data').text('');

                    // Handle errors
                    let response = xhr.responseJSON;

                    if (response.errors) {
                        if (response.errors.email) {
                            $('.invalid-feedback-email').html(response.errors.email.join(
                                '<br>'));
                        }
                        if (response.errors.password) {
                            $('.invalid-feedback-password').html(response.errors.password
                                .join('<br>'));
                        }
                    } else {
                        $('.error-message-data').text('Invalid credentials.');
                    }
                }
            });
        });
    });
</script>
