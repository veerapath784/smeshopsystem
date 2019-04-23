<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Helpers\ImageUpload;

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
        $data = [
            'products' => $products
            ];
        return view('backend.product.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->forget('status');
        return view('backend.product.create');
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
            'product_name' => 'required|max:100',
            'product_price' => 'required',
            'comment' => 'required',


        ]);
               $imageName = "https://via.placeholder.com/450x580";
               if (request()->has('img')) {
                $imageUpload = new ImageUpload(request()->file('img'), 'images/img');
                $imageUpload->width = 450;
                $imageUpload->height = 580;
                $imageName = $imageUpload->execute();
               }



        $product = new Product();
        $product->name = request()->input('product_name');
        $product->price = request()->input('product_price');
        $product->comment = request()->input('comment');
        $product->img = $imageName;

        if($product->save()){
            $request->session()->flash('status', 'เพื่ม '.$request->product_name.' สำเร็จ ');
            return redirect('admin/product/');
        }
        else{
        }
        $request->session()->flash('status', 'เพื่ม'.$request->product_name.'ไม่สำเร็จ');

        return view('backend.product.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $product->delete();
        return response()->json();
    }

}

