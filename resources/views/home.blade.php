@extends('layout.master')



@section('title' , 'home')
    

@section('body')
<section class="hero-section">
    <div class="hs-slider owl-carousel">
       @foreach ($slider as $slider)
           
        <div class="hs-item set-bg" data-setbg="./assets/images/{{$slider->photo}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href="#pricing-section" class="primary-btn">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->

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
                      creating training schedules and nutrition schedules
                    </p>
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

<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($classes as $class)

            <div class="col-lg-6 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="./assets/images/{{$class->photo}}" alt="class photo" height="300rem">
                    </div>
                    <div class="ci-text">
                        <span>{{$class->class}}</span>
                        <h4>{{$class->class_name}}</h4>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="./img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>registration now to get more deals</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    <a href="#pricing-section" class="primary-btn  btn-normal">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->



<!-- Pricing Section Begin -->
<section class="pricing-section spad" id="pricing-section">


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($price as $price)
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>{{$price->months}}</h3>
                    <div class="pi-price">
                        <h2>{{$price->price}} JD</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>{{$price->details_1}}</li>
                        <li>{{$price->details_2}}</li>
                        <li>{{$price->details_3}}</li>
                        
                    </ul>
                    
                  <button type="button" class="primary-btn pricing-btn" data-toggle="modal" data-price="{{$price->price}}" data-target="#exampleModalCenter"> 
                        Subscribe now
                      </button></a>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->

<!-- Gallery Section End -->

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
                    <a href="#pricing-section" class="primary-btn btn-normal appoinment-btn">appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
               
                @foreach ($coaches as $coach)
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="./assets/images/{{$coach->photo}}">
                        <div class="ts_text">
                            <h4>{{$coach->name}}</h4>
                            <span>{{$coach->position}}</span>
                            <div class="tt_social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               
               
                @endforeach
                      {{-- @dd(auth()->user()); --}}
               
        </div>
    </div>
</section> 
<!-- Team Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>Jordan , Aqaba<br/> Pizza Street</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>0780-711-811</li>
                        <li>0790-668-886</li>
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


{{-- modal start  --}}


<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" >
        <div class="modal-header" style="background-color: black; color:white;>
          <h5 class="modal-title" id="exampleModalLongTitle">Send a subscription request!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: #753003;">
         <p id="modalP">
            Are you sure about a request to subscribe to this subscription?
            <em class="blockquote-footer" id="modalP">The subscription request will reach the gym manager
                 and you will need to go there to confirm this request</em>
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          <button type="button" id="confirmSubscriptionBtn" class="btn btn-outline-success">Confirm subscription</button>
        </div>
      </div>
    </div>
  </div>



{{-- modal end  --}}


<!-- Modal for Login Required -->
<div class="modal fade" id="loginRequiredModal" tabindex="-1" role="dialog" aria-labelledby="loginRequiredModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginRequiredModalLabel">Login Required</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          You need to log in to confirm the subscription.
        </div>
        <div class="modal-footer">
          <button type="button" id="closebutton" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="/login" class="btn btn-primary">Log In</a> <!-- Add a link to your login page -->
        </div>
      </div>
    </div>
  </div>
  



<!-- Modal for Subscription Success -->
<div class="modal fade" id="subscriptionSuccessModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="subscriptionSuccessModalLabel">Subscription Confirmed</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Your subscription request has been sent to the gym coach. Your subscription will be registered when you complete the procedures in the gym
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>








  
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    $(".pricing-btn").click(function () {
      // Get the price from the clicked button's data attribute
      var price = $(this).data("price");

      @if (Auth::check())
        // Get the user ID
        var userId = "{{ Auth::user()->id }}"; // Use the Auth facade to get the user's ID

        // Get the CSRF token
        var csrfToken = "{{ csrf_token() }}";

        // Make an AJAX POST request to your controller with the CSRF token
        $.ajax({
          type: "POST",
          url: "/confirm-subscription", // Replace with the actual URL of your controller
          data: {
            price: price,
            user_id: userId,
            _token: csrfToken // Include the CSRF token in the request data
          },
          success: function (response) {
            // Do nothing here, the success modal will be shown inside the modal button click event
          },
          error: function (error) {
            // Handle the error if needed
            console.log(error);
          }
        });
      @else
        $('#loginRequiredModal').modal('show');
        $('#exampleModalCenter').modal('hide');

      @endif
    });

    // Add a click event handler for the "Confirm subscription" button inside the modal
    $('#confirmSubscriptionBtn').click(function () {
      // Show the "Subscription Success" modal
      $('#exampleModalCenter').modal('hide');
      $('#subscriptionSuccessModal').modal('show');
    });

    $('#closebutton').click(function () {
      // Show the "Subscription Success" modal
      $('#exampleModalCenter').modal('hide');
    });
  });
</script>

@endsection