@extends('layout.app')

@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Thematic Areas</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i>Services</li>
            </ul>
        </div>
    </div>
</div>



<!-- ################# Events Start Here#######################--->
<section class="events">
    <div class="container">
       
        <div class="event-ro row">
            <div class="col-md-4 col-sm-6">
                <div class="event-box box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>JUSTICE</h4>
                    <p class="desic">This thematic focuses on Child Protectiion Project (CPP)</p>
                    <button class="btn btn-success btn-sm w-100 align-self-end">Read more</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>LIVELIHOODS</h4>
                    <p class="desic">This thematic focuses on Agri-Livelihoods Project(ALP), Agro-Forestry in Gulu, Charcoal Making Project in Kasese, Solar Installation Project in Kasese, Village savings Groups and Enhancement of VSGs through Community Based Trainers in Kasese.
                    </p>
                    <button class="btn btn-success btn-sm w-100">Read more</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>HEALTH</h4>
                    <p class="desic">This thematic focuses on Establishing Community Therapy Practice(ECTP)-Gulu</p>
                    <button class="btn btn-success btn-sm w-100">Read more</button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="container mt-4">
    <div class="row gy-4">
        <div class="col-lg-4">
            <div class="box p-4 bg-dark text-white">
                <h1>One</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, perspiciatis.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box p-4 bg-dark text-white">
                <h1>Two</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor soluta omnis esse placeat, sunt illo possimus pariatur, facere enim, numquam iure reiciendis. Laborum, ut!</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box p-4 bg-dark text-white">
                <h1>Three</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta laboriosam vel sint dolores quae velit ducimus, quasi consectetur eum dolorem ullam sunt provident quo alias sed! Odio at a in eaque. Eius maiores natus nam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div> --}}

@endsection