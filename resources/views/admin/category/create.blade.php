@extends('layouts.admintemplate')
@section('content')
    <div class="container">

        <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>


            <div class="form-group">
                <button class="form-control btn btn-success">Save Category</button>
            </div>
        </form>



    </div>
@endsection