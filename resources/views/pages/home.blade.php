@extends('layouts.app') @section('custom-css')

<style>
    nav.navbar {
        background: rgba(0, 0, 0, 0.3);
    }
</style>

@endsection @section('body') {{-- hero --}}
<div id="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
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
<div class="container" id="home_content">
    <div class="row" id="types">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title"><i class="fa fa-television fa-5x icon" aria-hidden="true"></i>WEB DEVELOPMENT</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 services">
                    <p class="servicestitle">FREE WEB 
                        <span class="price">FREE <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p> 
                    <p>
                        5 Pages of content, NetTrac Template based. Fast and Free!
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">STARTER WEB
                        <span class="price">Php 10,000 <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        6 Pages of content, ideal to get your corporate identity on the net.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">CORPORATE WEB
                        <span class="price">Php 15,000 <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        10 Pages of content, with Database for Dynamic contents.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">ENTERPRISE WEB
                        <span class="price">Php 30,000 <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        20 Pages of content, 3 Database and Ecommerce setup.
                    </p>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-12">
                    
                    <h1 class="title"><i class="fa fa-envelope fa-5x icon" aria-hidden="true"></i> BULK EMAIL</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 services">
                    <p class="servicestitle">BE 1000
                         <span class="price">Php 400/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        Sends 1000 emails per month from your control panel.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">BE 2500
                         <span class="price">Php 800/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        Sends 2500 emails per month from your control panel.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">BE 3500
                         <span class="price">Php 1,000/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        Sends 3500 emails per month from your control panel.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">BE 10000
                         <span class="price">Php 2,400/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        Sends 10000 emails per month from your control panel.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title"> <i class="fa fa-tasks fa-5x icon" aria-hidden="true"></i> HOSTING</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 services">
                    <p class="servicestitle">STARTER LINUX
                        <span class="price">Php 149/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        500 MB Storage, 5 POP3 Email Accounts
                        5GB transfer per month
                        PHP4/5 and MYSQL for 3
                        Databases, Unlimited Email Forwarding.
                    </p>
                </div>
                <div class="col-md-3 services">
                    <p class="servicestitle">BASIC LINUX
                        <span class="price">PPhp 229/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        1 GB Storage, 30 POP3 Email Accounts.
                        25GB transfer Bandwidth per month.
                        PHP4/5 MYSQL for up to 6 Databases.
                        Unlimited Email Forwarding.
                        Host 2 domains.
                    </p>
                </div>
            
        

                <div class="col-md-3 services">
                    <p class="servicestitle">BUSINESS LINUX
                        <span class="price">Php 299/month <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </p>
                    <p>
                        2 GB Storage, 100 POP3 Email Accounts.
                        25GB transfer Bandwidth per month.
                        PHP4/5 MYSQL for up to 6 Databases.
                        Unlimited Email Forwarding.
                        Host 3 domains.
                    </p>
                </div>
           </div>
        </div>
    </div>
</div>

@stop