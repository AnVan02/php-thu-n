
<form class="mx-auto p-3 border border-primary" method="post" action="/admin/sanpham">
<h1 class="text-primary p-2 h3" ></h1>
<div class="mb-3 row">
    <div class="col-md-6">
         <label>Tên sản phẩm</label> <input class="form-control" name="tensp" >
    </div>
    <div class="col-md-6">
         <label>Giá SP</label> <input class="form-control" name="giasp" type="number">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-6">
         <label>Ngày</label> <input class="form-control" name="ngay" type="date">
    </div>
    <div class="col-md-6">
         <label>Hình</label> <input class="form-control" name="hinh" type="text">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-6">
         <label>Loại</label> 
         <select class="form-control" name="idLoai">
             <?php $loaisp = \App\Models\Loaisp::all();?>
             @foreach ($loaisp as $loai )
             <option value="{{$loai->id}}"> {{$loai->tenLoai}}</option>
             @endforeach
        </select>
    </div>
    <div class="col-md-6">
         <label>Hot</label> 
         <div class="form-control">
            <input name="hot" type="radio" value="1"> Hot
            <input name="hot" type="radio" value="0" checked> Không hot
         </div>
    </div>
</div>
<div class="mb-3 row">
    <label>Mô tả</label> 
    <textarea name="mota" rows="5" class="form-control"></textarea>    
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-warning py-2 px-5" >Lưu</button>
</div>  @csrf
</form> 
@endsection