@extends('layout')
@section('title', 'Products')
@section('content')
    <div class="card mt-3">
        <h5 class="card-header">แก้ไขผลิตภัณฑ์รหัส {{ $id }}</h5>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                        id="firstname" name="firstname" placeholder="ชื่อจริง" value="">
                                    <label for="firstname">ชื่อจริง</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="นามสกุล" value="">
                                    <label for="lastname">นามสกุล</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="อีเมล"
                                        value="">
                                    <label for="email">อีเมล</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="รหัสผ่าน">
                                    <label for="password">รหัสผ่าน</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> บันทึก</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-3 d-grid">
                    <a href="{{ route('user.index') }}" class="btn btn-light"><i class="fas fa-arrow-left"></i>
                        ยกเลิก</a>
                </div>

                <div class="col-md-3">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> ลบ</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
