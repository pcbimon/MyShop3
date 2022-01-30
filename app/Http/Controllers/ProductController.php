<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        $rules = [
            'productname'=>'required|max:50',
            'productdesc'=>'required|min:10',
            'productprice'=>'required'
        ];
        $customMessages=[
            'productname.required' => 'กรุณากรอกชื่อผลิตภัณฑ์',
            'productname.max' => 'ชื่อผลิตภัณฑ์ต้องมีตัวอักษรไม่เกิน 50 ตัวอักษร',
            'productdesc.required' => 'กรุณากรอกคำอธิบาย',
            'productdesc.min' => 'คำอธิบายต้องมีตัวอักษรตั้งแต่ 10 ตัวอักษรขึ้นไป',
            'productprice.required' => 'กรุณากรอกราคา',
        ];
        $request->validate($rules,$customMessages);

        $product = new Product();
        $product->productName = $request->productname;
        $product->price = $request->productprice;
        $product->productDesc = $request->productdesc;
        $product->save();

        if($request->hasFile('fileupload')){
            $file = $request->file('fileupload');
            $path = Storage::putFileAs('public',$file,$product->id.'.'.$file->extension());
            $path = str_replace('public/','',$path);

            $product = Product::find($product->id);
            $product->fileUpload = $path;
            $product->save();
        }

        return redirect()->route('product.index');
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
        $product = Product::find($id);
        return view('products.edit',['id'=>$id,'product'=>$product]);
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
        $rules = [
            'productname'=>'required|max:50',
            'productdesc'=>'required|min:10',
            'productprice'=>'required'
        ];
        $customMessages=[
            'productname.required' => 'กรุณากรอกชื่อผลิตภัณฑ์',
            'productname.max' => 'ชื่อผลิตภัณฑ์ต้องมีตัวอักษรไม่เกิน 50 ตัวอักษร',
            'productdesc.required' => 'กรุณากรอกคำอธิบาย',
            'productdesc.min' => 'คำอธิบายต้องมีตัวอักษรตั้งแต่ 10 ตัวอักษรขึ้นไป',
            'productprice.required' => 'กรุณากรอกราคา',
        ];
        $request->validate($rules,$customMessages);

        $product = Product::find($id);
        $product->productName = $request->productname;
        $product->price = $request->productprice;
        $product->productDesc = $request->productdesc;
        $product->save();

        if($request->hasFile('fileupload')){
            $file = $request->file('fileupload');
            $path = Storage::putFileAs('public',$file,$product->id.'.'.$file->extension());
            $path = str_replace('public/','',$path);

            $product = Product::find($product->id);
            $product->fileUpload = $path;
            $product->save();
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
