@extends('layout.master')



@section('title' , 'Contact')
    

@section('body')


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Contact Us</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Contact us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title contact-title">
                    <span>Contact Us</span>
                    <h2>GET IN TOUCH</h2>
                </div>
                <div class="contact-widget">
                    <div class="cw-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Jordan , Aqaba<br/> Pizza Street</p>
                    </div>
                    <div class="cw-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>0780-711-811</li>
                            <li>0790-668-886</li>
                        </ul>
                    </div>
                    <div class="cw-text email">
                        <i class="fa fa-envelope"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="leave-comment">
                    @if ($errors->has('name') )
                    <p class="alert alert-danger ">{{ $errors->first('name') }}</p>
                     @endif
                         @if ($errors->has('email') )
                         <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
                     @endif
                         @if ($errors->has('phone') )
                         <p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
                     @endif
                         @if ($errors->has('comment') )
                         <p class="alert alert-danger ">{{ $errors->first('comment') }}</p>
                     @endif

                     @if (\Session::has('success'))
                     <div class="alert alert-success " id="success-alert">
                         <p>{{ \Session::get('success') }}</p>
                     </div>

                     <script>
                        var milliseconds = 4000;
                        setTimeout(function () {
                        document.getElementById('success-alert').remove();
                        }, milliseconds);
                        </script>
     
                 @endif

                    <form action="/snedComment" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="number" name="phone" placeholder="Phone">
                        <textarea name="comment" maxlength="255" placeholder="Comment"></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
                height="550" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- Contact Section End -->

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