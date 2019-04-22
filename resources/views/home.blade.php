@extends('backend.layout.master')
@section('title', 'Admin-home')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Profile-Admin</h4>
                </div>


            <div class="container mt-4 ">
                <div class="row">
                    <div class="col-5"><img src="https://via.placeholder.com/200x250" alt=""></div>
                    <div class="col-5 " > Name : {{ auth()->user()->name}} <br>
                                         Email : {{ auth()->user()->email}} <br>
                                         กลุ่มผู้ใช้ :{{auth()->user()->type}} <br>
                                         เบอร์ติดต่อ: {{auth()->user()->phone}}<br>
                                         Line: {{auth()->user()->line}}
                    </div>
                </div>
            </div>
            <div class="btn btn grop">


                <a href="#" class="btn btn-primary mt-3">แก้ไขข้อมูลส่วนตัว</a></div>
        </div>
    </div>
</div>
</div>
@endsection
