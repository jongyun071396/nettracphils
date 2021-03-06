@extends('layouts.master') 
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
    .add-to-cart{
        border-radius: 1px;
        border:0px;
    }
</style>
@endsection 
        {{-- DESKTOP --}}
@section('body') {{-- hero --}}

    <div id="hero">
        <div class="hero-overlay"></div>
        <div class="container">
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


        {{-- DESKTOP  --}}
<div class="visible-lg visible-md">
    <div class="container" id="home_content section0" style="padding:30px">
        <div class="row" id="types">
            <div class="col-md-12" target="learnmore">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title"><i class="fa fa-television fa-2x icon" aria-hidden="true"></i>WEB DEVELOPMENT</h1>
                    </div>
                </div>
                @foreach( $products['web_development'] as $product )
                <div class="col-md-3 services">
                    <p class="servicestitle">
                            {{ $product->title }}
                    </p>
                    <p>                       
                        {{ $product->description }}                        
                    </p>
                    <form method="POST" action="{{url('getCart')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a class="ghost-button2"><button type="submit" class="btn btn-default add-to-cart ghost-button">
                            @if($product->price == 0)
                                FREE <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            @else
                                Php {{number_format($product->price,2)}}/month
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            @endif
                          
                        </button></a>
                    </form>
                </div>
                @endforeach 
                <div class="row">
                        <div class="col-md-12">
                            <h1 class="title"><i class="fa fa-envelope fa-2x icon" aria-hidden="true"></i> BULK EMAIL</h1>
                        </div>
                </div>
                @foreach( $products['bulk_mail'] as $product )
                <div class="col-md-3 services">
                    <p class="servicestitle">
                            {{ $product->title }}
                    </p>
                    <p>
                        {{ $product->description }}    
                    </p>
                     <form method="POST" action="{{url('getCart')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <a class="ghost-button2"><button type="submit" class="btn btn-default add-to-cart ghost-button">
                            Php {{number_format($product->price,2)}}/month <i class="fa fa-shopping-cart"></i>
                                Add to cart
                        </button>
                        </a>

                    </form>
                </div>
                @endforeach 
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="title"> <i class="fa fa-tasks fa-2x icon" aria-hidden="true"></i> HOSTING</h1>
                    </div>
                </div>
                @foreach( $products['hosting'] as $product )
                <div class="col-md-3 services h">
                    <p class="servicestitle">
                        {{ $product->title }}
                    </p>
                    <p>  
                        {{ $product->description }}   
                    </p>
                     <form method="POST" action="{{url('getCart')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <a class="ghost-button2"><button type="submit" class="btn btn-default add-to-cart ghost-button" style="">
                            Php {{number_format($product->price,2)}}/month <i class="fa fa-shopping-cart"></i>
                                Add to cart
                        </button>
                        </a>
                    </form>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
<div class="visible-xs visible-sm">
    <div class="container" id="home_content section0" style="padding:30px">
        <div class="row" id="types">
            <div class="col-sm-12 col-xs-12" target="learnmore" style="padding:30px">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="title"><i class="fa fa-television icon" aria-hidden="true"></i>WEB DEVELOPMENT</h1>
                    </div>
                </div>
                <div class="row">
                @foreach( $products['web_development'] as $product )
                    <div class="col-md-3 services">
                           <p class="servicestitle">
                            {{ $product->title }}
                    </p>
                    <p>                       
                        {{ $product->description }}                        
                    </p>
                    <form method="POST" action="{{url('getCart')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-warning add-to-cart">
                            Php {{number_format($product->price,2)}}
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </form>
                </div>   
                @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title"><i class="fa fa-envelope icon" aria-hidden="true"></i> BULK EMAIL</h1>
                    </div>
                </div>
                <div class="row">
                 @foreach( $products['bulk_mail'] as $product )
                <div class="col-md-3 services">
                    <p class="servicestitle">
                            {{ $product->title }}
                    </p>
                    <p>
                        {{ $product->description }}    
                    </p>
                     <form method="POST" action="{{url('getCart')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-warning add-to-cart">
                            Php {{number_format($product->price,2)}}/month
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </form>
                </div>
                 @endforeach
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="title"> <i class="fa fa-tasks icon" aria-hidden="true"></i> HOSTING</h1>
                    </div>
                </div>
                <div class="row" style="">
                 @foreach( $products['hosting'] as $product )
                 <div class="col-md-3 services">
                    <p class="servicestitle">
                            {{ $product->title }}
                    </p>
                    <p>  
                        {{ $product->description }}   
                    </p>
                     <form method="POST" action="{{url('getCart')}}">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-warning add-to-cart" style="">
                            Php {{number_format($product->price,2)}}/month
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </form>
                </div>
                @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@stop @section('custom-js')
<script>
    $(document).ready(function() {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        setTimeout(function() {
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