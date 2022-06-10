@extends('layout.app')

@section('content')

<!--  ************************* Page Title Starts Here ************************** -->
        
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>About Our Charity</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> About Us</li>
            </ul>
        </div>
    </div>
</div>


 <!--  ************************* About Us Starts Here ************************** -->    
   
<div class="about-us container-fluid">
<div class="container">

    <div class="row natur-row no-margin w-100">
        <div class="text-part col-md-6">
            <h2>About Our Charity</h2>
            <p>
                Justice Livelihoods Health JLH is an indigenous
registered Non-Governmental Organization. This
Local NGO was formed to see the lives of the poor
disadvantaged communities transformed from poverty
to opportunity from inequality to justice and from
despair to hope.
            </p>
        </div>
        <div class="image-part col-md-6">
            <div class="about-quick-box row">
                <div class="col-md-6">
                    <div class="about-qcard">
                       <i class="fas fa-user"></i>
                        <p>Become a Volunteer</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-search-dollar red"></i>
                        <p>Quick Fundraise</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-donate yell"></i>
                        <p>Give Donation</p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="about-qcard ">
                       <i class="fas fa-hands-helping blu"></i>
                        <p>Help Someone</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>     



<!-- ################# Mission Vision Start Here #######################--->

<section class="container-fluid mission-vision">
  <div class="container">
      <div class="row mission">
          <div class="col-md-6 mv-det">
              <h1>Our Mission</h1>
              <p>
                The mission of JLH is to follow our Lord and Saviour Jesus Christ in
                securing a holistic approach to sustainable improvements in the
                lives of poor and disadvantaged people,particularly those affected
                by conflict and insecurity.
              </p>
          </div>
          <div class="col-md-6 mv-img">
              <img src="{{ asset('assets/images/misin.jpg') }}" alt="">
          </div>
      </div>
      <div class="row vision">
          <div class="col-md-6 mv-img">
               <img src="{{ asset('assets/images/vision.jpg') }}" alt="">
          </div>
          <div class="col-md-6 mv-det">
               <h1>Our Vision</h1>
               <p>
                Our vision is to see Jesus Christ’s approach to
                transformation of lives of poor and disadvantaged
                communities from poverty to opportunity, from inequality
                to Justice and from despair to hope.
               </p>
          </div>
      </div>
  </div>
</section>

<!--################### Our Team Starts Here #######################--->
<section class="our-team team-11">
    <div class="container">
        <div class="session-title row">
              <h2>Meet our Team</h2>
        </div>
        <div class="row team-row">
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>MR. ERONE MARTIN</h4>
                        <i>Chairman Board of Directors</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>MR. SEKABANJA EDWARD KATO SAMUEL</h4>
                        <i>Board Secretary</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>MR. GREENWOOD MARK EDWARD</h4>
                        <i>Ex-Officio</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>MRS. IDEMBE BUNGA CAROLINE PROSCOVIA</h4>
                        <i>Member</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row team-row">
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>PR. BWAMBALE ALFONSE</h4>
                        <i>Member</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>PR. OKELLO GEOFFREY</h4>
                        <i>Member</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>MR. KABANDA PETER</h4>
                        <i>Member</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{ asset('assets/images/team/team-memb1.jpg') }}" alt="">
                    <div class="det-o">
                        <h4>MR. OCEN FREDRICK</h4>
                        <i>Member</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection