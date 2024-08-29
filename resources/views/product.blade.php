@extends('layouts.app')
@section('title','')
@section('main-content')

<div class= "fs-4 mt-3 ms-5">Product Management</div>

<div class="container my-5">
    <div class="d-flex flex-column align-items-end mb-3">
         <a href="{{ route('add_product') }}" class="btn bg-custom text-white no-hover-1"> <i class="fas fa-plus me-2"></i>ADD NEW PRODUCT</a>
    </div>

    <div class="d-flex flex-column align-items-end mb-3">
       <a href="{{ route('category') }}" class="btn text-custom border-custom bg-white no-hover">Category Management</a>
    </div>

    <div class="row g-4 mt-3">
            <!-- Product Card -->
             @foreach($product_s as $products)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card shadow p-3 d-flex flex-row align-items-center">
                    <img src="{{ asset('img/packet.jpg') }}" class="rounded me-3 display-img" alt="Product Image">
                    <div class="flex-grow-1">
                        <h6 class="mb-1">{{$products->description}}</h6>
                        <p class="mb-1">{{$products->title}}</p>
                        <p class="mb-0 fw-bold">{{$products->price}}</p>
                    </div>
                    <div class="ms-auto d-flex align-items-center">
                     <a href="{{ route('edit_product', $products->id) }}" class="btn btn-link text-decoration-none me-2">
                           <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="{{ route('delete_product', $products->id) }}" class="btn btn-link text-decoration-none">
                          <i class="fas fa-trash-alt"></i>
                     </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex flex-column align-items-center mt-4">
               {{$product_s->links()}}
        </div>  
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/product.js') }}"></script>
@endsection