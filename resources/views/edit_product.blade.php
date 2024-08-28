@extends('layouts.app')
@section('title','')
@section('main-content')

<div class= "fs-4 mt-3 ms-5">Product Management > Update Product</div>

<div class="container my-5">
        <div class="card shadow p-4">
        <form action="{{ route('update_product', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf 

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="title" value="{{$data->title}}">
                </div>
                
                <!-- Model Number -->
                <div class="mb-3">
                    <label for="modelNumber" class="form-label">Model Number</label>
                    <input type="text" class="form-control" id="modelNumber">
                </div>
                
                <!-- Categories -->
                <div class="mb-3">
                    <label for="categories" class="form-label">Categories</label>
                    <select class="form-select" id="categories">
                        <option selected>Select a category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                </div>

                <!-- Product Details -->
                <div class="mb-3">
                    <label for="productDetails" class="form-label">Product details</label>
                    <textarea class="form-control" id="productDetails" rows="3" name="description" value="{{$data->description}}"></textarea>
                </div>

                <!-- How to Use -->
                <div class="mb-3">
                    <label for="howToUse" class="form-label">How to use</label>
                    <textarea class="form-control" id="howToUse" rows="3"></textarea>
                </div>

                <!-- Shipping Details -->
                <div class="mb-3">
                    <label for="shippingDetails" class="form-label">Shipping details</label>
                    <textarea class="form-control" id="shippingDetails" rows="3"></textarea>
                </div>

                <!-- Price, Weight, QTY of a Box -->
                <div id="form-container">
                         <div class="d-flex justify-content-between align-items-center border-top pt-2 mb-3">
                             <div class="w-25">
                                   <label for="price" class="form-label">Price</label>
                                   <input type="text" class="form-control" id="price" name="price" value="{{$data->price}}">
                             </div>
                             <div class="w-25">
                                   <label for="weight" class="form-label">Weight</label>
                                   <input type="text" class="form-control" id="weight">
                             </div>
                             <div class="w-25">
                                   <label for="qty" class="form-label">QTY of a box</label>
                                   <input type="text" class="form-control" id="qty">
                             </div>
                        </div>
             </div>
            <button type="button" class="btn bg-custom text-white no-hover-1 w-100 mb-3" id="add-field-btn">+</button>

                <!-- Upload Section -->
                <div class="text-center">
                      <p>Upload Image</p>
                             <div class="d-flex justify-content-center align-items-start gap-2">
                                    <div class="upload-box position-relative border border-2 border-dark-subtle border-dashed d-flex justify-content-center align-items-center fs-3 bg-light big-box">
                                          +
                                        <input type="file" accept="image/*" class="file-input position-absolute w-100 h-100 start-0 top-0 opacity-0 cursor-pointer" name="image">
                                   </div>
                             <div class="d-flex flex-column justify-content-between">
                                    <div class="upload-box position-relative border border-2 border-dark-subtle border-dashed d-flex justify-content-center align-items-center fs-3 bg-light mb-2 small-box">
                                          +
                                        <input type="file" accept="image/*" class="file-input position-absolute w-100 h-100 start-0 top-0 opacity-0 cursor-pointer" >
                                 </div>
                                     <div class="upload-box position-relative border border-2 border-dark-subtle border-dashed d-flex justify-content-center align-items-center fs-3 bg-light mb-2 small-box">
                                          +
                                         <input type="file" accept="image/*" class="file-input position-absolute w-100 h-100 start-0 top-0 opacity-0 cursor-pointer">
                                     </div>
                                    <div class="upload-box position-relative border border-2 border-dark-subtle border-dashed d-flex justify-content-center align-items-center fs-3 bg-light small-box">
                                          +
                                       <input type="file" accept="image/*" class="file-input position-absolute w-100 h-100 start-0 top-0 opacity-0 cursor-pointer">
                                  </div>
                           </div>
                     </div>
                 </div>

                <!-- Save Button -->
                <div class="text-center mt-4">
                      <button type="submit" class="btn bg-custom text-white no-hover-1 px-2" onclick="confirmation(event)">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/add_product.css') }}">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/add_product.js') }}"></script>
@endsection