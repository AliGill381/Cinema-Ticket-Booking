<!-- resources/views/your-page.blade.php -->

@extends('welcome')
@section('content')
    <h1>Select a Cinema to Begin Your Movie Adventure</h1>
    <div class="slick-carousel">
        <div class="d-flex" style="justify-content: center">
            <div class="image_container">
                <input type="radio" name="cinema_location" id="cinema1" class="cinema-radio">
                <label for="cinema1" class="image-text">
                    <img class="carousal-img" src="{{ asset('images/cinema1.jpg') }}" class="d-block w-100" alt="First Slide">
                    <div class="text-overlay"><span> Bringing Stories to Life on the Big Screen. <br>Emporium Mall, Abdul
                            Haque Road, Johar Town, Lahore, Punjab </span>
                    </div>
                    <div class="text-center w-100">
                        <h3 class="cinema-name">Universal Cinema</h3>
                    </div>
                </label>
            </div>
            <div class="image_container">
                <input type="radio" name="cinema_location" id="cinema2" class="cinema-radio">
                <label for="cinema2" class="image-text">
                    <img class="carousal-img" src="{{ asset('images/cinema2.jpg') }}" class="d-block w-100" alt="Second Slide">
                    <div class="text-overlay"><span> Bringing Stories to Life on the Big Screen. <br>Emporium Mall, Abdul
                            Haque Road, Johar Town, Lahore, Punjab </span>
                    </div>
                    <div class="text-center w-100">
                        <h3 class="cinema-name">Platinum Cinema</h3>
                    </div>
                </label>
            </div>
        </div>
    </div>
    <div>
        <button class="btn custom_btn">Prev</button>
        <button class="btn custom_btn">Next</button>
    </div>
@endsection
