@extends('layouts.web')

@section('web-content')

<div class="slider">
    <ul class="slides">
        <li class="slider-item">
            <img src="{{asset('assets/img/slider/4.jpg')}}" alt="">
            <!-- <div class="caption">
                <h3>A new generation</h3>
            </div> -->
            <div class="row">
                <div class="col s6">
                    <div class="caption left-align">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today to get the best discounts</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="caption left-right">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="slider-item">
            <img src="{{asset('assets/img/slider/3.jpg')}}" alt="">
            <!-- <div class="caption">
                <h3>A new generation</h3>
            </div> -->
            <div class="row">
                <div class="col s6">
                    <div class="caption left-align">
                        <h4 class="red-text">Be the best!</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="caption left-right">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="slider-item">
            <img src="{{asset('assets/img/slider/4.jpg')}}" alt="">
            <!-- <div class="caption">
                <h3>A new generation</h3>
            </div> -->
            <div class="row">
                <div class="col s6">
                    <div class="caption left-align">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="caption left-right">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="slider-item">
            <img src="{{asset('assets/img/slider/5.jpg')}}" alt="">
            <!-- <div class="caption">
                <h3>A new generation</h3>
            </div> -->
            <div class="row">
                <div class="col s6">
                    <div class="caption left-align">
                        <h4 class="red-text">Shop with ease</h4>
                        <h3 class="white-text">At your doorstep</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="caption left-right">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="slider-item">
            <img src="{{asset('assets/img/slider/4.jpg')}}" alt="">
            <!-- <div class="caption">
                <h3>A new generation</h3>
            </div> -->
            <div class="row">
                <div class="col s6">
                    <div class="caption left-align">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="caption left-right">
                        <h4 class="red-text">Welcome</h4>
                        <h3 class="white-text">Shop with us today</h3>
                        <h3 class="white-text">Get the best of deals</h3>
                        <button class='btn red white-text btn-lg'>Collection</button>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<!-- SHIPPING SECTION -->
<div class="shipping-section white">
    <div>
        <h1> <i class="material-icons red-text">time_to_leave</i> Free Shipping </h1>
        <p class>All Cost Inclusive</p>
    </div>
    <div>
        <h1> <i class="material-icons red-text">money</i> Secure Payment </h1>
        <p>All Fast and easy</p>
    </div>
    <div>
        <h1> <i class="material-icons red-text">lock</i> Money Return </h1>
        <p>Free shopping voucher</p>
    </div>
    <div>
        <h1> <i class="material-icons red-text">support</i> 24/7 Support </h1>
        <p>Online and offline</p>
    </div>
</div>
<!-- END SHIPPING SECTION -->

<!-- PRODUCTS SECTION -->
<div class="container-fluid p-5" id="product-section">
    <h6 class="center-align red-text">New Collection</h6>
    <h3 class="center-align heading">Trending Products</h3>
    
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active"  href="#trendingproducts">Trending</a></li>
                <li class="tab col s3"><a href="#newarrivals">New Arrivals</a></li>
            </ul>
        </div>
        <div id="trendingproducts" class="col s12">
            <div class="row">
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite</i></a>
                    <img src="{{asset('assets/img/electronics/tv.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/ac.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/camera.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/ac2.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/printer.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/headphone.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/desktop.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/ac3.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <a href="#" class="fav-button"><i class="material-icons pulse">favorite_border</i></a>
                    <img src="{{asset('assets/img/electronics/headphone2.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="center-align block">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="newarrivals" class="col s12">
            <div class="row">
                <div class="col s12 m4 l3 product">
                    <img src="{{asset('assets/img/electronics/iphone.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="gold-text">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <img src="{{asset('assets/img/electronics/ac2.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="gold-text">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col s12 m4 l3 product">
                    <img src="{{asset('assets/img/electronics/desktop2.png')}}" alt="" class="responsive-img">
                    <div class="caption">
                        <h6 class="grey-text center-align">LG 45" TV set</h6>
                        <p class="small-text red-text darken-2 center-align"><del>N</del>45,000</p>
                        <p>
                            <span class="gold-text">
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons yellow-text text-darken-2">star</i>
                                <i class="material-icons text-darken-2">star</i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PRODUCS SECTION -->

<!-- COUNTDOWN SECTION -->
<div class="countdown-section row p-2">
    <div class="col s12 l6 offset-l6">
        <span class="white-text center-text red btn">Limited Offer</span>
        <h3 class="fw-700"><span class="red-text">COUNTDOWN</span> New update</h3>
        <h3>Coming Soon</h3>
        <h3>0 <span class="text-10 red-text">D</span> 0<span class="text-10 red-text">H</span> 0<span class="text-10 red-text">M</span> 00<span class="text-10 red-text">s</span></h3>
    </div>
</div>
<!-- END COUNTDOWN SECTION -->

<!-- START TESTIMONIAL SECTION -->
<div class="testimonial-section p-5 row shadow">
    <h6 class="red-text center-text">Testimonials</h6>
    <h4 class="grey-text center-text mb-5">Our Social Media</h4>
    <div class="testimonial col s12 l4 mt-2">
        <div class="block">
            <img src="{{asset('assets/img/default.jpg')}}" alt="" class="testimonial-img">
        </div>
        <h6 class="grey-text center-text">Very reliable Product delivery system. I paid as a stocklist and it was fast</h6>
        <h6 class="red-text center-text">Chinedu Ukpe</h6>
    </div>
    <div class="testimonial col s12 l4">
        <div class="block">
            
            <img src="{{asset('assets/img/default.jpg')}}" alt="" class="testimonial-img">
        </div>
        <h6 class="grey-text center-text">Very reliable Product delivery system. I paid as a stocklist and it was fast</h6>
        <h6 class="red-text center-text">Chinedu Ukpe</h6>
    </div>
    <div class="testimonial col s12 l4">
        <div class="block">
            <img src="{{asset('assets/img/default.jpg')}}" alt="" class="testimonial-img">
        </div>
        <h6 class="grey-text center-text">Very reliable Product delivery system. I paid as a stocklist and it was fast</h6>
        <h6 class="red-text center-text">Chinedu Ukpe</h6>
    </div>
</div>

<!-- END TESTIMONIAL SECTION -->
@endsection

@section('page-scripts')
<script>
    
    
    $(document).ready(function(){
        $('.slider').slider({
            fullWidth: true,
            interval: 3000,
            indicators: false,
        });
        
        $('.tabs').tabs();
    });
</script>
@endsection