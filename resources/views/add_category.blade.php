@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="fs-4 mt-3 ms-5">Category Management > Add Category</div>
<div class="container my-5 custom-width">
    <div class="card shadow p-4">
        <form action="{{ route('upload_category') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row mb-3">
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <div class="upload-box position-relative border border-2 border-dark-subtle border-dashed d-flex justify-content-center align-items-center fs-3 bg-light big-box">
                        +
                        <input type="file" accept="image/*" class="file-input position-absolute w-100 h-100 start-0 top-0 opacity-0 cursor-pointer" name="category_image">
                        <button type="button" class="delete-btn position-absolute top-0 end-0 m-2 d-none cursor-pointer">X</button>
                    </div>
                </div>
                <div class="col-md-6 mt-md-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" placeholder="Category name" name="category_title">
                </div>
            </div>
            <div class="d-flex flex-column align-items-end">
                <button type="submit" class="btn bg-custom text-white no-hover-1" onclick="confirmation(event)">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/add_category.css') }}">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/add_category.js') }}"></script>
@endsection
