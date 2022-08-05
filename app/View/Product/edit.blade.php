@extends('product.layout')

@section('product')


<div class="justify-content-center">
    <a  class="btn btn-secondary mb-3 ">Back</a>
</div>

<div class=" ">
    <form  method="post">
        @csrf
        @method('PUT')
        <table class="p-3 " >
                            <tr class="m-3 ">
                                <div class="form-group m-3" >
                                    <th><label for="name"> Name:</label>   </th>
                                    <!-- <td><input type="text" name="name" id="name" value="{{$product->name}}"></td> -->
                                </div>
                            </tr>

                            <tr>
                                <div class="form-group" >
                                    <th><label for="email"> Details:</label></th>
                                    <!-- <td><textarea name="details" id="email" cols="50" rows="2" >{{$product->details}}</textarea></td> -->
                                </div>
                            </tr>

                            <tr>
                                <div class="form-group" >
                                    <th><label for="address"> Price:</label></th>
                                    <td><input type="text" name="price" id="address"  value="{{$product->price}}"></td>
                                </div>
                            </tr>

                            <tr>
                                <div class="form-group" >
                                    <th><label for="mobile"> Photos:</label></th>
                                    <td><input type="text" name="photos" id="mobile"  value="{{$product->photos}}"></td>
                                </div>
                            </tr>


                            <tr>
                                <div class="form-group" >
                                    <th><label for="mobile"> Available:</label></th>
                                    <td>
                                        <select class="form-select" id="genter" name='available' >
                                            <!-- <option value="true" {{ $product->available == 'true' ? 'selected' : '' }}>InActivate</option>
                                            <option value="false" {{ $product->available == 'false' ? 'selected' : '' }}>Activate</option> -->
                                        </select>
                                    </td>
                                </div>
                            </tr>

        </table>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>




@endsection
