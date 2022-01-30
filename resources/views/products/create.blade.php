@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            สร้างผลิตภัณฑ์ใหม่
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('productname') is-invalid @enderror"
                                id="productname" name="productname" placeholder="ชื่อผลิตภัณฑ์" value="{{ old('productname') }}">
                            <label for="productname">ชื่อผลิตภัณฑ์</label>
                            <span class="text-danger">
                                @error('productname')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control @error('productprice') is-invalid @enderror" id="productprice" name="productprice"
                                placeholder="ราคา" value="{{ old('productprice') }}">
                            <label for="productprice">ราคา</label>
                            <span class="text-danger">
                                @error('productprice')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea type="text" class="form-control @error('productdesc') is-invalid @enderror" id="productdesc" name="productdesc"
                                style="height: 100px" placeholder="คำอธิบาย">{{ old('productdesc') }}</textarea>
                            <label for="productdesc">คำอธิบาย</label>
                            <span class="text-danger">
                                @error('productdesc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="fileupload">รูปตัวอย่าง</label>
                            <input type="file" class="form-control" id="fileupload" name="fileupload">
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
                        <a href="{{ route('product.index') }}" class="btn btn-light">ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
