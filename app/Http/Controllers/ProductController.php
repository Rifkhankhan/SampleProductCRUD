<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('Product.home',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0',
            'image' => "required|mimes:jpg,jpeg,png"
        ]);


        $brand_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $image_extendtion = strtolower($brand_image->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$image_extendtion;
        $up_location = 'public/image/';
        $last_img = $up_location.$image_name;
        $brand_image->move($up_location,$last_img);


       $Product=DB::table('products')->insert([
        'name' => $request->name,
        'status' => $request->status,
        'price' => $request->price,
        'image' => $brand_image,
       ]);

        return redirect()->route('product.index')->with('success','successfully inserted');
        // return view('Product.home',compact('customer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=DB::table('products')->where('id',$id)->first();
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=DB::table('products')->where('id',$id)->first();
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gt:0',
            'image' => "required|mimes:jpg,jpeg,png",
            'status' => "required"
        ]);

        $brand_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $image_extendtion = strtolower($brand_image->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$image_extendtion;
        $up_location = 'public/image/';
        $last_img = $up_location.$image_name;
        $brand_image->move($up_location,$last_img);

        DB::table('products')->where('id',$id)->update([
            'name'=>$request->name,
            "image"=>$brand_image,
            "price"=>$request->price,
            "status"=>$request->status,
        ]);

        return redirect()->route('product.index')->with('success','successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();

        return redirect()->back();
    }
}
