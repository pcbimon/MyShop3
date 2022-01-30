@extends('layout')
@section('title', 'Products')
@section('content')
    <div class="mt-3 d-flex justify-content-between">
        <div><label class="h5">รายการผู้ใช้งาน ทั้งหมด {{count($users)}} รายการ</label></div>
        <div><a class="btn btn-primary text-end" href="{{ route('user.create') }}">เพิ่มใหม่</a></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="col-1">ลำดับ</th>
                        <th>ชื่อผู้ใช้งาน</th>
                        <th>อีเมล</th>
                        <th class="col-1">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th>{{$loop->index+1}}</th>
                        <td>{{$user->firstname}} {{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-info"><i class="fas fa-edit"></i>
                                แก้ไข</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
