@extends('layouts.admintemplate')
@section('content')
    <div class="container">
        <a href="{{ route('products.create') }}">Add Products </a>
        <br>
        <br>
        <br>
        <a href="{{ route('category.create') }}">Add Category</a>
    </div>
@endsection
