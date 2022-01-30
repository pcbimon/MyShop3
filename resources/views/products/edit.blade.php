@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            แก้ไขผลิตภัณฑ์รหัส {{ $id }}
        </div>
        <div class="card-body">
            <form action="{{ route('product.update', $id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="productname" name="productname"
                                placeholder="ชื่อผลิตภัณฑ์" value="{{ $product->productName }}">
                            <label for="productname">ชื่อผลิตภัณฑ์</label>
                            <span class="text-danger">
                                @error('productname')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="productprice" name="productprice"
                                placeholder="ราคา" value="{{ $product->price }}">
                            <label for="productprice">ราคา</label>
                            <span class="text-danger">
                                @error('productprice')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea type="text" class="form-control" id="productdesc" name="productdesc"
                                style="height: 100px" placeholder="คำอธิบาย">{{ $product->productDesc }}</textarea>
                            <label for="productdesc">คำอธิบาย</label>
                            <span class="text-danger">
                                @error('productdesc')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="fileupload">รูปตัวอย่าง</label>
                            <input type="file" class="form-control" id="fileupload" name="fileupload" onchange="preview_image(event)" accept="image/*">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-self-center">
                        @if ($product->fileUpload != null)
                            <img id="previewImage"  src="{{asset('/storage/'.$product->fileUpload)}}" height="300" alt="">
                        @else
                            <img src="https://via.placeholder.com/300x300?text=No+Image" class="h-100" alt="">
                        @endif

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
            <div class="row mt-3">
                <form action="{{ route('product.delete',$id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="col-md-6 d-grid">
                        <button class="btn btn-danger">ลบ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
            var output = document.getElementById('previewImage');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@stop
