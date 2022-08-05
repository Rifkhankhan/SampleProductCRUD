@extends('product.layout')

@section('product')

        <div class="justify-content-center">
            <a href="{{route('product.index')}}" class="btn btn-secondary mb-3 ">Back</a>
        </div>
        <div>
            <table class="table table-bordered  table-hover " >
                <tr><th>ID</th><td>{{$product->id}}</td> </tr>
                <tr><th>Name</th><td>{{$product->name}}</td></tr>
                <tr><th>Price</th> <td>{{$product->price}}</td></tr>
                <tr><th>Image</th> <td><img style="width:150px;height:150px" src="{{ asset($product->image) }}"></td></tr>
                <tr><th>Status</th> <td>{{$product->status}}</td></tr>
            </table>
        </div>


@endsection
