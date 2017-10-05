@extends('layouts.app') @section('custom-css')
<style>
    nav.navbar {
        background: rgba(0, 0, 0, 0.3);
    }
</style>

@endsection @section('body') {{-- hero --}}
<div id="hero">
    <div class="container hero-content">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                  UNLIMITED HOSTING OPTIONS
                </div>
                <div class="item">
                    GET ALL THE BUSINESS TOOLS<br/> YOU NEED
                </div>

                <div class="item">
                   NEED A WEBSITE?<br/>
                   NetTrac is your Lowest Cost Solutions
                </div>
            </div>

            <!-- Left and right controls -->
     
        </div>
    </div>
</div>
<div class="container" id="home_content">
    <div class="row justify-content-md-center" id="types" style="margin-left:70px;">
        <div class="col-md-3 services">
            <i class="fa fa-desktop fa-5x" aria-hidden="true" style="padding-left:35%;color:#F2635F"></i>
            <p class="title" style="text-align: center;">DEVELOPMENT </p>
            <br/>
            <span class="servicestitle"> FREE WEB</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
FREE</span>
            <p class="definition">
                5 Pages of content, NetTrac Template based. Fast and Free!
            </p>

            <br/>

            <span class="servicestitle"> STARTER WEB</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 10,000</span>
            <p class="definition">
                6 Pages of content, ideal to get your corporate identity on the net.
            </p>

            <br/>
            <span class="servicestitle"> CORPORATE WEB</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 15,000</span>
            <p class="definition">
                10 Pages of content, with Database for Dynamic contents.
            </p>
            <br/>
            <span class="servicestitle"> ENTERPRISE WEB</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 30,000</span>
            <p class="definition">
                20 Pages of content, 3 Database and Ecommerce setup.
            </p>
        </div>
        <div class="col-md-3 col-md-offset-1 services">
            <i class="fa fa-tasks fa-5x" aria-hidden="true" style="padding-left:36%;color:#F2635F"></i>
            <p class="title" style="text-align: center;">HOSTING</p>
            <br/>
            <span class="servicestitle"> STARTER LINUX</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 149/month</span>
            <p class="definition">
                500 MB Storage, 5 POP3 Email Accounts 5GB transfer per month PHP4/5 and MYSQL for 3 Databases, Unlimited Email Forwarding.
            </p>
            <br/>

            <span class="servicestitle"> BASIC LINUX</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 229/month</span>
            <p class="definition">
                1 GB Storage, 30 POP3 Email Accounts. 25GB transfer Bandwidth per month. PHP4/5 MYSQL for up to 6 Databases. Unlimited Email Forwarding. Host 2 domains.
            </p>
            <br/>

            <span class="servicestitle"> BUSINESS LINUX</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 299/month</span>
            <p class="definition">
                2 GB Storage, 100 POP3 Email Accounts. 25GB transfer Bandwidth per month. PHP4/5 MYSQL for up to 6 Databases. Unlimited Email Forwarding. Host 3 domains.
            </p>
        </div>
        <div class="col-md-3 col-md-offset-1 services">
            <i class="fa fa-envelope fa-5x" aria-hidden="true" style="padding-left: 35%;color:#F2635F"></i>
            <p class="title" style="text-align: center;">BULK MAIL</p>
            <br/>
            <span class="servicestitle"> BE 1000</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 400/month</span>
            <p class="definition">
                Sends 1000 emails per month from your control panel.
            </p>
            <br/>

            <span class="servicestitle"> BE 2500</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 800/month</span>
            <p class="definition">
                Sends 2500 emails per month from your control panel.
            </p>
            <br/>

            <span class="servicestitle"> BE 3500</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 1,000/month</span>
            <p class="definition">
                Sends 3500 emails per month from your control panel.
            </p>
            <br/>

            <span class="servicestitle"> BE 10000</span>
            <br/>
            <span class="label-important"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
Php 2,400/month</span>
            <p class="definition">
                Sends 10000 emails per month from your control panel.
            </p>
        </div>
    </div>
</div>

@stop