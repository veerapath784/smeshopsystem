@extends('backend.layout.master')
@section('title', 'Admin/home/product')
@section('content') @if (Session('status'))
<div class="alert alert-success mt-3">
    {{Session('status')}}
</div>
@endif

<div class="card-header mt-3">
    <i class="icon icon-puzzle"></i>สินค้าทั้งหมด
    <a href={{ route( 'product.create') }} class="float-right btn btn-primary btn-sm" id="toggleForm">
                        <i class="fa fa-plus"></i> เพิ่ม </a>
</div>
<table class="table table-responsive-sm table-bordered table-striped table-sm text-center">
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
            <td><img src="/{{$product->img}}" alt="{{$product->name}}" width="auto"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->comment}}</td>
            <td>
                <div class="btn-group" role="group">
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> แก้ไข</a>
                    <a href="javaScript: deleteItem('{{$product->id  }}')" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@section('script')
    <script>
        var deleteItem = function deleteItem(id) {

            swal.fire({
                title: "แน่ใจหรือไม่ ?",
                text: "คุณต้องการลบข้อมูลนี้จริงหรือไม่ ?",
                type: "warning",
                showCancelButton: true,
            }).then(function (result) {
                if (result.value) {
                    axios.delete('/admin/product/' + id).then(function (response) {
                        window.location.href = "/admin/product";
                    }).catch(function (error) {
                        console.log(error.response)
                        swal('เกิดข้อผิดพลาด', 'ไม่สามารถลบข้อมูลได้ \n ' + error.response.statusText,
                            'error');
                    });
                }
            })


        }

    </script>
    @endsection
@endsection
