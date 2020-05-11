@extends('layouts.fronttemplate')
@section('content')
   <div class="container">
       <img src="{{ asset('upload/images/'.$product->image) }}" alt="" class="tumbnail">
   </div>
    @endsection
