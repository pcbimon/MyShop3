@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="mt-3 d-flex justify-content-between">
        <div>
            <label class="h5">รายการผลิตภัณฑ์ทั้งหมด {{count($products)}} รายการ</label>
        </div>
        <div>
            <a class="btn btn-primary text-end" href="{{ route('product.create') }}"><i class="fas fa-plus"></i>
                เพิ่มใหม่</a>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-1" scope="col">ลำดับ</th>
                    <th scope="col">ชื่อผลิตภัณฑ์</th>
                    <th scope="col">คำอธิบาย</th>
                    <th class="col-1" scope="col">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$product->productName}}</td>
                        <td>{{$product->productDesc}}</td>
                        <td>
                            <a href="{{ route('product.edit', [$product->id]) }}" class="btn btn-info">แก้ไข</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
