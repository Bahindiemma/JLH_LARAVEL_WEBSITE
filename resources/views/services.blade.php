@extends('layout.app')

@section('content')
<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Popular Causes</h2>
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
                <div class="event-box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>Child protection training and advocacy</h4>
                    
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice</p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>Child protection training and advocacy</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice</p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>Child protection training and advocacy</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice</p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
             <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('assets/images/events/image_05.jpg') }}" alt="">
                    <h4>Child protection training and advocacy</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice</p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
             <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('assets/images/events/image_04.jpg') }}" alt="">
                    <h4>Child protection training and advocacy</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice</p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
             <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{ asset('assets/images/events/image_05.jpg') }}" alt="">
                    <h4>Child protection training and advocacy</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Protect your people and your reputation by ensuring staff are equipped with a social media policy that outlines the organization's online tone of voice</p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection