@extends('backend.layout.master')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel bg-light">
                <div class="container">
                    <h2 class="panel-heading text-center mt-2">เพื่มสินค้า</h2>
                    <form style="margin:15px;" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf @if (Session('status'))
                        <div class="alert alert-danger">
                            {{Session('status')}}
                        </div>

                        @endif @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="NameOfProduct">ชื่อสินค้า</label>
                            <input type="text" class="form-control" name="product_name" placeholder="ชื่อสินค้า" value="{{old('product_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="PriceOfProduct">ราคาสินค้า</label>
                            <input type="number" class="form-control" name="product_price" placeholder="ราคาสินค้า" value="{{old('product_price')}}">
                        </div>
                        <div class="form-group">
                            <label for="CommentOfProduct">รายละเอียดสินค้า</label>
                            <textarea class="form-control" rows="3" name="comment" placeholder="รายละเอียด" value="{{old('comment')}}"></textarea>
                        </div>

                        <label for="ImgOfProduct">รูปภาพสินค้า</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="img">
                            <label class="custom-file-label" for="customFile">เพื่มรูปภาพ</label>
                        </div>


                        <button type="submit" class="btn btn-primary mt-3 mb-5">บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
