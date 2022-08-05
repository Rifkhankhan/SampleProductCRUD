@extends('product.layout')

@section('product')

        <div class="justify-content-center">
            <a href="{{route('product.index')}}" class="btn btn-secondary mb-3 ">Back</a>
        </div>
        <div>
            <form action="{{route('product.update',$product->id)}}">
                <table class="table table-bordered  table-hover " >
                    <tr><th>ID</th><td>{{$product->id}}</td> </tr>
                    <tr><th>Name</th><td><input type="text" name="name" value="{{$product->name}}" required></td></tr>
                    <tr><th>Price</th> <td><input type="text" name="price" value="{{$product->price}}" required></td></tr>
                    <tr><th>Image</th> <td><input type="file" name="image" value="{{$product->image}}" required></td></tr>
                    <tr><th>Status</th> <td>
                        <select name="status" id="">
                            <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>InActive</option>
                        </select>
                    </td></tr>


                </table>
                <button type='submit' class="btn btn-primary">Update</button>
            </form>
        </div>


@endsection
