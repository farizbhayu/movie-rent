@extends('layout')

@section('title', 'Selamat Datang')


@section('content')
    <div class="container">
        <h1 class="text-center display-4 m-3">Welcome to rent-Us</h1>
        <br/>
        <center>
        <div class="col-md-4 col-md-offset-2">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.joblo.com/assets/images/oldsite/posters/images/full/the-vow-poster-australia.jpg" class="d-block w-100" alt="">
                            {{-- <div class="carousel-caption d-none d-md-block">
                                <h5>The Vow</h5>
                            </div> --}}
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.joblo.com/assets/images/oldsite/posters/images/full/tsm-soow-poster-gallery.jpg" class="d-block w-100" alt="">
                            {{-- <div class="carousel-caption d-none d-md-block">
                                    <h5>The Spongebob Movie : Sponge Out of Water</h5>
                            </div> --}}
                        </div>
                        <div class="carousel-item">
                                <img src="https://www.joblo.com/assets/images/oldsite/posters/images/full/predestination-poster-hawke.jpg" class="d-block w-100" alt="">
                                {{-- <div class="carousel-caption d-none d-md-block">
                                        <h5>The Spongebob Movie : Sponge Out of Water</h5>
                                </div> --}}
                            </div>
                    </div>

                    <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
        </center>
    </div>
@endsection