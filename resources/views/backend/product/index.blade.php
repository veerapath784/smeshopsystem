@extends('backend.layout.master')
@section('title', 'Admin/home/product')
@section('content') @if (Session('status'))
<div class="alert alert-success mt-3">
    {{Session('status')}}
</div>
@endif

<div class="card-header">
    <i class="icon icon-puzzle"></i>สินค้าทั้งหมด
    <a href={{ route( 'product.create') }} class="float-right btn btn-primary btn-sm" id="toggleForm">
                        <i class="fa fa-plus"></i> เพิ่ม </a>
</div>
<table class="table">
    <thead>

        <tr>
            <th>รายการที่</th>
            <th>รูปภาพสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคา</th>
            <th>รายระเอียดสินค้า</th>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td><img src="{{$product->img}}" alt="{{$product->name}}"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->comment}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
