@extends('backend.layout.master')
@section('content')
    <div class="card">
        <div class="card-header"><i class="fa fa-cogs"> แก้ไขสินค้า</i></div>
        <div class="card card-body">
            <h4>โปรดกรอกข้อมูลให้ครบถ้วน</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/admin/manage/application" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputName">ชื่อสินค้า: </label>
                    <input type="text" name="name" class="form-control" placeholder="กรอกชื่อสินค้า">
                </div>
                <div class="form-group">
                    <label for="inputVersion">ราคาสินค้า: </label>
                    <input type="text" name="version" class="form-control" placeholder="กรอกราคาสินค้า">
                </div>
                <div class="form-group">
                    <label for="inputComment">รายละเอียด: </label>
                    <input type="text" name="comment" class="form-control" placeholder="กรอกรายละเอียด">
                </div>
                 <div class="form-group">
                            <label for="inputDepartmentId">หมวดหมู่สินค้า: </label>
                            <select name="campus_id" id="inputCampusId" class="form-control">
                                <option value="1">ทดสอบ1</option>
                                <option value="1">ทดสอบ2</option>
                                <option value="1">ทดสอบ3</option>
                                <option value="1">ทดสอบ4</option>
                            </select>
                        </div>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">เพื่มรูปสินค้า</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>



                <button class="btn btn-primary"><i class="fa fa-save"> บันทึก</i></button>
            </form>
        </div>
    </div>

@endsection
