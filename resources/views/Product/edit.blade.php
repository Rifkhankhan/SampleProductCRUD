@extends('product.layout')

@section('product')

        <div class="justify-content-center">
            <a href="{{route('product.index')}}" class="btn btn-secondary mb-3 ">Back</a>
        </div>

        <div class="container">
            <form action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$product->price}}" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="">
                            <option value="active" {{ $product->status == 'active' ? 'selected' : '' }} class="form-control">Active</option>
                            <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }} class="form-control">InActive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Current Image</label>
                        <img style="width:150px;height:150px;margin:0%;padding:0%;" class="form-control" src="{{ asset($product->image) }}">
                    </div>

                    <div class="form-group">
                        <label>New Image</label>
                        <input type="file" name="image"  class="form-control" >
                        <input type="hidden" name="oldimage" value="{{$product->image}}" class="form-control">
                    </div>


                <button type='submit' class="btn btn-primary" class="form-control">Update</button>
            </form>
        </div>


@endsection
