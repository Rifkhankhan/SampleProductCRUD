@extends('product.layout')

@section('product')


        <!-- @if($user=='order') -->
            <table class="table table-bordered  table-hover " >
                <thead class="text-center thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- @foreach($pro as $product)
                        <tr class="text-center">
                            <td>{{++$i}}</td>
                            <td>{{$order->id}}</td>

                            <td>{{$pro->name}}</td>
                            <td>{{$pro->price}}</td>

                            <td>{{$pro->image}}</td>
                            <td>{{$pro->status}}</td>
                    @endforeach -->
                </tbody>
            </table>
        <!-- @endif -->




@endsection
