@extends('layouts.app')
@section('title','')
@section('main-content')

<div class= "fs-4 mt-3 ms-5">Category Management</div>

<div class="container my-5">
    <div class="d-flex flex-column align-items-end mb-3">
         <a href="{{ route('add_category') }}" class="btn bg-custom text-white no-hover-1"> <i class="fas fa-plus me-2"></i>ADD NEW CATEGORY</a>
    </div>

    <table class="table table-borderless">
            <thead>
                <tr>
                    <th></th> <!-- Empty header for order numbers -->
                    <th>Categories Image</th>
                    <th>Categories Name</th>
                    <th></th> <!-- Empty header for icons -->
                </tr>
            </thead>
            <tbody>
              @foreach($category_s as $categories)
                <tr>
                    <ol><td><li></li></td></ol>
                    <td>
                       <img src="{{ asset('img/coconut.png') }}" alt="Category 1" class="rounded category-img">
                    </td>
                    <td>{{$categories->category_title}}</td>
                    <td>
                    <div class="ms-auto d-flex align-items-start">
                     <a href="{{ route('edit_category', $categories->id) }}" class="btn btn-link text-decoration-none me-5">
                           <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="{{ route('delete_category', $categories->id) }}" class="btn btn-link text-decoration-none">
                          <i class="fas fa-trash-alt"></i>
                     </a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/category.js') }}"></script>
@endsection