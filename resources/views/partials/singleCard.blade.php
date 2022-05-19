@extends('app')


@section('main')
    <div class="container-main-card">

    </div>
    <div class="bg-blue">
        <img src="{{ $comics['thumb'] }}" alt="{{ $comics['series'] }}">
        <a href="/">
            <button class="view-gallery">VIEW GALLERY</button>
        </a>
    </div>
    <div class="section-main-1">
        <div class="container-infoCard">
            <h2>
                {{ $comics['title'] }}
            </h2>
            <div class="bann-green">
                <div class="price">
                    <span class="white">US.Price {{ $comics['price'] }}</span>
                    <span class="green">AVAILABLE</span>
                </div>
                <div class="check-availability">
                    Check Availability
                </div>
            </div>
            <div class="paragrafo">
                <p>
                    {{ $comics['description'] }}
                </p>
            </div>
        </div>
        <div class="advertisement">
            <span>ADVERTISEMENT</span>
            <img src="images/advertise.jpg" alt="">
        </div>
    </div>
    <div class="section-main-2">
        <div class="talent">
            <h3>Talent</h3>
            <div class="talent-content">
                <div class="container-artists">
                    <div class="art-by"> Art by:</div>
                    <div class="artists">
                        <span class="artist">
                            @foreach ($comics['artists'] as $artist)
                                {{ $artist }},
                            @endforeach
                        </span>
                    </div>
                </div>

                <div class="container-writers">
                    <div class="written-by"> Written-by:</div>
                    <div class="writers">
                        <span class="writers">
                            @foreach ($comics['writers'] as $writers)
                                {{ $writers }},
                            @endforeach
                        </span>
                    </div>
                </div>

            </div>


        </div>
        <div class="specs">
            <h3>Specs</h3>

            <div class="series">
                <p>
                    Series:
                </p>
                <span class="blue">{{ $comics['series'] }}</span>

            </div>
            <div class="usprice">
                <p>
                    U.S Price:
                </p>
                {{ $comics['price'] }}
            </div>

            <div class="date">
                <p>On Sale Date:</p>
                {{ $comics['sale_date'] }}
            </div>
        </div>
    </div>
@endsection
