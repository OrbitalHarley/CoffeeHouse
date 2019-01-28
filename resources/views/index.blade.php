@extends('layouts')

@section('title', 'Home')

@section('navBar')
    @parent
@endsection

@section('content')
    <style>
        .products {
        	display: flex;
        	flex-wrap: wrap;
        }

        .product-card {
        	display: flex;
        	flex-direction: column;

        	padding: 2%;
        	flex:  0 0 200px;
            margin: 10px;
            border: 1px solid #ccc;
        	background-color: #FFF;
            box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
        }

        .product-image img {
        	width: 100%;
        }

        .product-info {
        	margin-top: auto;
        	padding-top: 20px;
        	text-align: center;
        }

        .product-btn {
            bottom: 0;
            right: 0;
        }


    </style>
   	<section class="products">
   		<div class="product-card">
   			<div class="product-image">
                <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
   			</div>
   			<div class="product-info">
   				<h5>Item For Sale</h5>
   				<h6>$99.99</h6>
   			</div>
            <div class="product-btn">
                <button class="product-btn btn btn-success">Learn More</button>
            </div>
   		</div>

   		<div class="product-card">
   			<div class="product-image">
                <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
   			</div>
   			<div class="product-info">
                <h5>Item For Sale</h5>
   				<h6>$99.99</h6>
   			</div>
            <div class="product-btn">
                <button class="product-btn btn btn-success">Learn More</button>
            </div>
   		</div>

   		<div class="product-card">
   			<div class="product-image">
                <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
   			</div>
   			<div class="product-info">
                <h5>Item For Sale</h5>
   				<h6>$99.99</h6>
   			</div>
            <div class="product-btn">
                <button class="product-btn btn btn-success">Learn More</button>
            </div>
   		</div>

        <div class="product-card">
      			<div class="product-image">
                   <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
      			</div>
      			<div class="product-info">
                   <h5>Item For Sale</h5>
      				<h6>$99.99</h6>
      			</div>
               <div class="product-btn">
                   <button class="product-btn btn btn-success">Learn More</button>
               </div>
      		</div>

        <div class="product-card">
      			<div class="product-image">
                   <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
      			</div>
      			<div class="product-info">
                   <h5>Item For Sale</h5>
      				<h6>$99.99</h6>
      			</div>
               <div class="product-btn">
                   <button class="product-btn btn btn-success">Learn More</button>
               </div>
      		</div>

        <div class="product-card">
      			<div class="product-image">
                   <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
      			</div>
      			<div class="product-info">
                   <h5>Item For Sale</h5>
      				<h6>$99.99</h6>
      			</div>
               <div class="product-btn">
                   <button class="product-btn btn btn-success">Learn More</button>
               </div>
      		</div>

        <div class="product-card">
      			<div class="product-image">
                   <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
      			</div>
      			<div class="product-info">
                   <h5>Item For Sale</h5>
      				<h6>$99.99</h6>
      			</div>
               <div class="product-btn">
                   <button class="product-btn btn btn-success">Learn More</button>
               </div>
      		</div>
        <div class="product-card">
      			<div class="product-image">
                   <img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">
      			</div>
      			<div class="product-info">
                   <h5>Item For Sale</h5>
      				<h6>$99.99</h6>
      			</div>
               <div class="product-btn">
                   <button class="product-btn btn btn-success">Learn More</button>
               </div>
      		</div>

   	</section>



    {{--<img src="{{ url('/images/SampleJPGImage_100kbmb.jpg') }}" id="img" alt="Sample photo">--}}


@endsection