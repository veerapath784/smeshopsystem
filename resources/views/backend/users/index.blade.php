@extends('backend.layout.master')
@section('title', 'Admin/home/product')
@section('content') @if (Session('status'))
<div class="alert alert-success mt-3">
    {{Session('status')}}
</div>
@endif

<div class="card-header mt-3">
    <i class="icon icon-puzzle"></i>รายชื่อผู้ใช้
    <a href="#" class="float-right btn btn-primary btn-sm" id="toggleForm">
                        <i class="fa fa-plus"></i> เพิ่ม </a>
</div>
<table class="table table-responsive-sm table-bordered table-striped table-sm text-center">
    <thead>

        <tr>
            <th>รายการที่</th>
            <th>ชื่อผุู้ใช้</th>
            <th>อีเมล</th>
            <th>สถานะผู้ใช้</th>
            <th>กลุ่มผู้ใช้</th>

        </tr>
    </thead>
    <tbody>
         @foreach($users as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td></td>
            <td>{{$users->type}}</td>

            <td>
                    <div class="btn-group" role="group">
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> แก้ไข</a>
                        <a href="javaScript: deleteItem('{{$users->id  }}')" class="btn btn-sm btn-danger ">
                            <i class="fa fa-trash mt-2"></i>
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
                    axios.delete('/admin/users/' + id).then(function (response) {
                        window.location.href = "/admin/users";
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
