@extends('layout.master')



@section('title' , 'About us')
    

@section('body')


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>About us</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Why chose us?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-034-stationary-bike"></span>
                    <h4>Modern equipment</h4>
                    <p>Our gym contains the latest and best equipment, which is the most 
                        powerful of its kind and from the best manufacturers</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-033-juice"></span>
                    <h4>Healthy nutrition plan</h4>
                    <p>The plan is prepared by the best trainers specialized in 
                        creating training schedules and nutrition schedules</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Proffesponal training plan</h4>
                    <p>A special training schedule is created for you, taking into account
                        your goal, your body shape, and the ideal body suitable for your height</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Unique to your needs</h4>
                    <p>Everything you will need to build an athletic body is available in the gym,
                        whether it is equipment, a cardio gym, or anything else</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- About US Section Begin -->
<section class="aboutus-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="about-video set-bg" data-setbg="img/about-us.jpg">
                    <a href="https://www.youtube.com/watch?v=EliKtxSmEx8" class="play-btn video-popup"><i
                            class="fa fa-caret-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>What we have done</h2>
                    </div>
                    <div class="at-desc">
                        <p>At Gym and Fitness, we believe that fitness and wellbeing are the cornerstones
                             of a full and vibrant life. we began our journey as 
                             a family-owned business dedicated to providing exceptional gym equipment
                              at affordable prices. But, we dreamed bigger than just being an ordinary 
                              fitness equipment supplier; we aspired to lead the industry.</p>
                    </div>
                    <div class="about-bar">
                        <div class="ab-item">
                            <p>Body building</p>
                            <div id="bar1" class="barfiller">
                                <span class="fill" data-percentage="80"></span>
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                            </div>
                        </div>
                        <div class="ab-item">
                            <p>Training</p>
                            <div id="bar2" class="barfiller">
                                <span class="fill" data-percentage="85"></span>
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                            </div>
                        </div>
                        <div class="ab-item">
                            <p>Fitness</p>
                            <div id="bar3" class="barfiller">
                                <span class="fill" data-percentage="75"></span>
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About US Section End -->

<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $user)
            <div class="col-lg-4 col-sm-6">
                <div class="ts-item set-bg" data-setbg="./assets/images/{{$user->photo}}">
                    <div class="ts_text">
                        <h4>{{$user->name}}</h4>
                        <span>{{$user->position}}</span>
                        <div class="tt_social">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           
           
            @endforeach
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>registration now to get more deals</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    <a href="#" class="primary-btn  btn-normal">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Testimonial Section Begin -->

<!-- Testimonial Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>125-711-811</li>
                        <li>125-668-886</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>Support.gymcenter@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection