@extends('product.layout')

@section('product')

<!--
@if($user=='product')
    <h2 class='text-center'>Entroll A New {{$user}}</h2>
@elseif($user=='order')
    <h2 class='text-center'>Entroll A New {{$user}}</h2>
@endif
 -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($message=Session::get('success'))
    <div class=" alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class=" mt-3 p-3 colomn">
            <div class="justify-content-center">
                <!-- <a href="{{route('product.show',$user='product')}}" class="btn btn-secondary mb-3 ">Back</a> -->
            </div>
            <div>

                <form  method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="p-3 " >
                                <tr>
                                    <th><label for="name"> Name:</label></th>
                                    <td><input type="text" name="name" id="name"></td>
                                </tr>
                                <tr>
                                    <th><label for="price"> Price:</label></th>
                                    <td><input type="number" name="price" id="price"></td>
                                </tr>

                                <tr>
                                    <th><label for="photos"> Photos:</label></th>
                                    <td><input type="file" name="photos" id="photos"></td>
                                    <td><input type="hidden" name="status" id="status" value='active'></td>
                                </tr>

                            </table>

                            <button type="submit" class="btn btn-success">Create</button>
                    </form>

            <!-- @endif -->
            </div>

    </div>


@endsection
