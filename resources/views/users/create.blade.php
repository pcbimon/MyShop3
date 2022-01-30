@extends('layout')
@section('title', 'Products')
@section('content')
    <div class="card mt-3">
        <h5 class="card-header">สร้างผู้ใช้ใหม่</h5>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname"
                                        placeholder="ชื่อจริง" value="{{old('firstname')}}">
                                    <label for="firstname">ชื่อจริง</label>
                                    <span class="text-danger">
                                        @error('firstname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname"
                                        placeholder="นามสกุล" value="{{old('lastname')}}">
                                    <label for="lastname">นามสกุล</label>
                                    <span class="text-danger">
                                        @error('lastname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="อีเมล"  value="{{old('email')}}">
                                    <label for="email">อีเมล</label>
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                                        placeholder="รหัสผ่าน" value="{{old('password')}}">
                                    <label for="password">รหัสผ่าน</label>
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 d-grid">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> บันทึก</button>
                    </div>
                    <div class="col-md-3 d-grid">
                        <a href="{{ route('user.index') }}" class="btn btn-light"><i class="fas fa-arrow-left"></i> ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
