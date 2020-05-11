@extends('layouts.admintemplate')
@section('content')
    <div class="container">


            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="2" ></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Size</label>
                    <input type="text" name="size" class="form-control">
                </div>


                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <br>

                <label for="category">Category:</label>

                <select name="category_id">
                    @foreach($categories as $category )
                        <option value="{{ $category->id}}">{{ $category->name }}</option>
                    @endforeach

                </select>
                <br>
                <br>
                <div class="form-group">
                    <button class="form-control btn btn-success" type="submit">Save Product</button>
                </div>
            </form>






    </div>

@endsection