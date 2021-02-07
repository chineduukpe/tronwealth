<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title',"Tron Wealth - Welcome to Tron Wealth")</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='{{asset("css/style.css")}}' >
</head>
<body>
    <div class="container-fluid">
        <ul id="products-dropdown" class="dropdown-content">
            <li><a href="">Cruise</a></li>
            <li><a href="">Audios</a></li>
        </ul>
        
        <ul id="slide-out" class="sidenav" style='padding-top: 4em'>
            <li>
                <div class="user-view">
                    <div class="background">
                        <x-slot name="logo">
                            <img src="{{asset('assets/img/tronlogo.png')}}" class='w-50 h50' alt="">
                        </x-slot>
                    </div>
                    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div></li>
                <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                <li><a href="#!">Second Link</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
            <div class="top-social">
                <div class="socials">
                    <a href="#"><i class="material-icons">facebook</i></a>
                    <a href="#"><i class="material-icons">instagram</i></a>
                    <a href="#"><i class="material-icons">pinterest</i></a>
                </div>
                <div class="right">
                    +2348012345678, info@tronwealth.com
                </div>
            </div>
            <nav>
                <div class="nav-wrapper ">
                    <div class="brand-logo">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </div>
                    <a href="#"  data-target="slide-out" id="mobile-menu-toggle" class="sidenav-trigger hide-on-med-and-up"><i class="material-icons">menu</i></a>
                    <ul  class="hide-on-med-and-down right">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="" data-target='products-dropdown' class="dropdown-button">Products</a>
                            
                        </li>
                        <li><a href="/register">Register</a></li>
                        <li ><a href="/login">Login</a></li>
                    </ul>
                    
                    <!-- <ul id="mobile-nav"  class="side-nav right">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="" data-target='products-dropdown' class="dropdown-button">Products</a>
                            
                        </li>
                        <li><a href="">Signup</a></li>
                        <li ><a href="">Login</a></li>
                    </ul> -->
                </div>
            </nav>
            
            
            
            @yield('web-content')
            
        </div>
        
        
        <!-- FOOTER -->
        <footer>
            <div class="row">
                <div class="col s12 m3 l3">
                    <img src="{{asset('assets/img/tronlogo.png')}}" class='responsive-img' alt="">
                    <p class="grey-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora excepturi temporibus similique, officia obcaecati quidem, sed tempore sequi assumenda.</p>
                </div>
                <div class="col s12 m3 l3">
                    <h6 class='white-text link-heading'>Quick Links</h6>
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Faq</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m3 l3">
                    <h6 class='white-text link-heading'>Features</h6>
                    <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Faq</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m3 l3">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="col s2"> <i class="material-icons red-text">map_marker</i> </div>
                                <div class="col s10">
                                    <h6 class="white-text">Office Address</h6>
                                    <p class="grey-text">
                                        Suite 1, third floor, standard plaza,
                                        Wuse Zone 5,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="col s2"> <i class="material-icons red-text">mail</i> </div>
                                <div class="col s10">
                                    <h6 class="white-text">Email Address</h6>
                                    <p class="grey-text">
                                        contact@tronwealth.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="col s2"> <i class="material-icons red-text">mail</i> </div>
                                <div class="col s10">
                                    <h6 class="white-text">Office Address</h6>
                                    <p class="grey-text">
                                        Suite 1, third floor, standard plaza,
                                        Wuse Zone 5,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <hr>
            <p class="white-text">Copyright &copy;2020 All rights reserved </p>
        </footer>
        
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous"></script>
        
        <script>
            
            
            $(document).ready(function(){
                $('.dropdown-button').dropdown();
                // $('#mobile-menu-toggle').sideNav()
                $('.sidenav').sidenav();
            });
            
        </script>
        @yield('page-scripts')
    </body>
    </html>