@extends('layout')
@section('title', 'Home')
@section('content')
<div class="mt-3 d-flex justify-content-between">
    <div>
        <label class="h5">รายการผลิตภัณฑ์ทั้งหมด XXX รายการ</label>
    </div>
    <div>
        <a class="btn btn-primary text-end" href="{{ route('product.create') }}"><i class="fas fa-plus"></i> เพิ่มใหม่</a>
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
          <tr>
            <th scope="row">1</th>
            <td>ทดสอบผลิตภัณฑ์</td>
            <td>คำอธิบาย</td>
            <td>
                <a href="{{route('product.edit',[1])}}" class="btn btn-info">แก้ไข</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>ทดสอบผลิตภัณฑ์</td>
            <td>คำอธิบาย</td>
            <td>
                <a href="{{route('product.edit',[2])}}" class="btn btn-info">แก้ไข</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>ทดสอบผลิตภัณฑ์</td>
            <td>คำอธิบาย</td>
            <td>
                <a href="{{route('product.edit',[3])}}" class="btn btn-info">แก้ไข</a>
            </td>
          </tr>
        </tbody>
      </table>
</div>
@stop
