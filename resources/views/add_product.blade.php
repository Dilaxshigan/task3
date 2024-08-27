@extends('layouts.app')
@section('title','')
@section('main-content')

<div class= "fs-4 mt-3 ms-5">Product Management > Add Product</div>

<div class="container my-5">
        <div class="card shadow p-4">
            <form>
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
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
                    <textarea class="form-control" id="productDetails" rows="3"></textarea>
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
                <div class="d-flex justify-content-between align-items-center border-top pt-2 mb-3">
                    <div class="w-25">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price">
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

                <!-- Upload Section -->
                <div class="text-center">
                    <button type="button" class="btn btn-brown text-white w-100 mb-3">+</button>
                    <p>Upload Image</p>
                    <div class="d-flex justify-content-center align-items-start gap-2">
                          <div class="border border-2 border-dark-subtle border-dashed p-4 d-flex justify-content-center align-items-center fs-3" style="width: 322px; height: 322px;">
                            +
                         </div>
                        <div class="d-flex flex-column justify-content-between">
                               <div class="border border-2 border-dark-subtle border-dashed p-4 d-flex justify-content-center align-items-center fs-3" style="width: 100px; height: 100px;">
                                  +
                               </div>
                                <div class="border border-2 border-dark-subtle border-dashed p-4 mt-2 d-flex justify-content-center align-items-center fs-3" style="width: 100px; height: 100px;">
                                     +
                               </div>
                               <div class="border border-2 border-dark-subtle border-dashed p-4 mt-2 d-flex justify-content-center align-items-center fs-3" style="width: 100px; height: 100px;">
                                  +
                               </div>
                         </div>
                     </div>
              </div>

                <!-- Save Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-brown text-white px-2">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/add_product.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/add_product.js') }}"></script>
@endsection