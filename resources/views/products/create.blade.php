@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            สร้างผลิตภัณฑ์ใหม่
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="productname" placeholder="ชื่อผลิตภัณฑ์">
                        <label for="productname">ชื่อผลิตภัณฑ์</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="productprice" placeholder="ราคา">
                        <label for="productprice">ราคา</label>
                    </div>
                    <div class="form-floating mt-3">
                        <textarea type="text" class="form-control" id="productdesc" style="height: 100px" placeholder="คำอธิบาย"></textarea>
                        <label for="productdesc">คำอธิบาย</label>
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="fileupload">รูปตัวอย่าง</label>
                        <input type="file" class="form-control" id="fileupload">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-self-center">
                    <img src="https://via.placeholder.com/300x300?text=Product+Image" class="h-100" alt="">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 d-grid">
                    <button class="btn btn-success">บันทึก</button>
                </div>
                <div class="col-md-3 d-grid">
                    <a href="{{ route('product.index')}}" class="btn btn-light">ยกเลิก</a>
                </div>
            </div>
        </div>
    </div>
@stop
