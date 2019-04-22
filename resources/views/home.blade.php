@extends('backend.layout.master')
@section('title', 'Admin-home')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">


                    You are logged in!
                    <br>
                    <a href="product">จัดการระบบ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
