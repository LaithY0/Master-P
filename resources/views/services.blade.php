@extends('layout.master')



@section('title' , 'Services')
    

@section('body')


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Services</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>What we do?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                <div class="ss-text">
                    <h4>Personal training</h4>
                    <p>A special training schedule is created for you, taking into account your goal, your body shape, and the ideal body suitable for your height
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                <div class="ss-text">
                    <h4>Group fitness classes</h4>
                    <p>You can also train among a group of people who have the same goals as you</p>
                    
                </div>
            </div>
            <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                <div class="ss-text second-row">
                    <h4>Body building</h4>
                    <p>A private, fully equipped hall only for bodybuilding training</p>
                    
                </div>
            </div>
            <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                <div class="ss-pic">
                    <img src="img/services/services-3.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                <div class="ss-text second-row">
                    <h4>Strength training</h4>
                    <p>A private, fully equipped hall only for Strength training</p>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text service-banner">
                    <h2>Exercise until the body obeys.</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    <a href="https://www.youtube.com/watch?v=dPK9jtT7Hg8" class="play-btn video-popup"><i
                            class="fa fa-caret-right"></i></a>
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
          Your subscription has been confirmed successfully.
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