@extends('layouts.app')
    @section('custom-css')
    <style>
        nav.navbar {
            background: rgba(0, 0, 0, 0.3);
        }
        #test {
            display: none;
            height: 120px;
            line-height: 10rem;
        }
    </style>
    @endsection 
@section('body') {{-- hero --}}
<div class="visible-md visible-lg">
<div id="hero">
    <div class="hero-overlay"></div>
    <div  class="container">
        <div class="row">
            <div class="col-xs-12 hgt">
                <div id="hero-content">
                    <h2 class="fadeInDown">UNLIMITED HOSTING OPTIONS</h2>
                    <h1 class="fadeInRight">GET ALL THE BUSINESS TOOLS YOU NEED</h1>
                    <h3 class="fadeInUp"> Your lowest Cost Solutions</h3>
                </div>
                
            </div>

        </div>
    </div>
</div>
</div>
<div class="visible-sm visible-xs">
    <div id="sm-hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content" style="padding-top: 250px;">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- Wrapper for slides -->
                <div class="carousel-inner"   role="listbox">
                    <div class="item active">
                        <h3>UNLIMITED HOSTING OPTIONS</h3>
                    </div>
                    <div class="item">
                        <h3>GET ALL THE BUSINESS TOOLS YOU NEED</h3>
                    </div>
                    <div class="item">
                        <h3>NEED A WEBSITE?</h3>
                        <h2>NetTrac is your Lowest Cost Solutions</h2>
                    </div>
                </div>
                
                <!-- Left and right controls -->
            </div>

        </div>

    </div>
</div>

    <div class="container" id="home_content section0">
        <div class="row" id="types">
            <div class="col-md-12" target="learnmore">
                <section>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title"><i class="fa fa-television fa-2x icon" aria-hidden="true"></i>WEB DEVELOPMENT</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 services">
                        <p class="servicestitle">
                           <a class="title" href="{{ url('contact-us?package=free-web') }}">FREE WEB </a>
                        </p> 
                        <p>
                            5 Pages of content, NetTrac Template based. Fast and Free! 
                        </p>
                       <a class="price" href="{{ url('contact-us?package=free-web') }}">FREE <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3 services">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=starter-web') }}">STARTER WEB</a>
                        </p>
                        <p>
                            6 Pages of content, ideal to get your corporate identity on the net.
                        </p>
                        <a class="price" href="{{ url('contact-us?package=starter-web') }}">Php 10,000 <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3 services">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=corporate-web') }}">CORPORATE WEB</a>    
                        </p>
                        <p>
                            10 Pages of content, with Database for Dynamic contents.
                        </p>
                        <a class="price" href="{{ url('contact-us?package=corporate-web') }}">Php 15,000 <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3 services">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=enterprise-web') }}"> ENTERPRISE WEB </a>  
                        </p>
                        <p>
                            20 Pages of content, 3 Database and Ecommerce setup.
                        </p>
                        <a class="price" href="{{ url('contact-us?package=enterprise-web') }}">Php 30,000 <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 class="title"><i class="fa fa-envelope fa-2x icon" aria-hidden="true"></i> BULK EMAIL</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 services b">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=be-1000') }}">BE 1000</a>       
                        </p>
                        <p>
                            Sends 1000 emails per month from your control panel.
                        </p>
                            <a class="price" href="{{ url('contact-us?package=be-1000') }}">Php 400/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3 services b">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=be-2500') }}">BE 2500</a>   
                        </p>
                        <p>
                            Sends 2500 emails per month from your control panel.
                        </p>
                            <a class="price" href="{{ url('contact-us?package=be-2500') }}">Php 800/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3 services b">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=be-3500') }}">BE 3500</a>
                        </p>
                        <p>
                            Sends 3500 emails per month from your control panel.
                        </p>
                            <a class="price" href="{{ url('contact-us?package=be-3500') }}">Php 1,000/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                
                    <div class="col-md-3 services">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=be-10000') }}">BE 10000</a>
                        <p>
                            Sends 10000 emails per month from your control panel.
                        </p>
                        <a class="price" href="{{ url('contact-us?package=be-10000') }}">Php 2,400/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
                </section>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title"> <i class="fa fa-tasks fa-2x icon" aria-hidden="true"></i> HOSTING</h1>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-md-3 services h">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=starter-linux') }}">STARTER LINUX</a>
                        </p>
                        <p  style="margin-bottom:30px;">
                            500 MB Storage, 5 POP3 Email Accounts
                            5GB transfer per month
                            PHP4/5 and MYSQL for 3
                            Databases, Unlimited Email Forwarding.
                        </p>
                        <a class="price" href="{{ url('contact-us?package=starter-linux') }}">Php 149/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3 services h">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=basic-linux') }}">BASIC LINUX</a>
                        <p>
                            1 GB Storage, 30 POP3 Email Accounts.
                            25GB transfer Bandwidth per month.
                            PHP4/5 MYSQL for up to 6 Databases.
                            Unlimited Email Forwarding.
                            Host 2 domains.
                        </p>
                            <a class="price" href="{{ url('contact-us?package=basic-linux') }}">PPhp 229/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </p>
                    </div>
                    <div class="col-md-3 services h">
                        <p class="servicestitle">
                            <a class="title" href="{{ url('contact-us?package=business-linux') }}">BUSINESS LINUX</a>
                        </p>
                        <p>
                            2 GB Storage, 100 POP3 Email Accounts.
                            25GB transfer Bandwidth per month.
                            PHP4/5 MYSQL for up to 6 Databases.
                            Unlimited Email Forwarding.
                            Host 3 domains.
                        </p>
                            <a class="price" href="{{ url('contact-us?package=business-linux') }}">Php 299/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>   
                    </div>
               </div>
            </div>
        </div>
    </div>
<div class="container">
   <div>Hello,</div>
</div>
@stop
@section('custom-js')
<script>
    $(document).ready(function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        setTimeout(function() {
            // $('.hero-content').fadeIn().addClass(animationName).one(animationEnd,
            $('#hero-content h2').show().addClass('animated').one(animationEnd, function() {
                $('#hero-content h1').show().addClass('animated').one(animationEnd, function() {
                     $('#hero-content h3').show().addClass('animated');
                });
            });
            }, 30);
            // $('.hero-content h2').addClass('animated').show();
    });

</script>

@endsection