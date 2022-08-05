@extends('product.layout')

@section('product')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><img src="{{ asset($product->image) }}"></td>
                <td>{{$product->status}}</td>
                <td>
                    <a href="{{route('product.show',$product->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('product.destroy',$product->id)}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
