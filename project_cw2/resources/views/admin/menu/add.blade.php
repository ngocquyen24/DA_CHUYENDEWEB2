@extends('admin.main')

@section('head')
<<<<<<< HEAD
<<<<<<< HEAD
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
=======
=======
>>>>>>> danhmuc_list
    <!-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

@endsection

@section('content')
    <form action="" method="POST">
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Danh Mục</label>
                <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label>Danh Mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0"> Danh Mục Cha </option>
                    @foreach($menus as $menu)
<<<<<<< HEAD
<<<<<<< HEAD
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
=======
=======
>>>>>>> danhmuc_list
                    <option value="{{$menu->id}}"> {{$menu->name}} </option>
                    @endforeach

                    <option value=""></option>

<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
                </select>
            </div>

            <div class="form-group">
                <label>Mô Tả </label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
<<<<<<< HEAD
<<<<<<< HEAD
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file" name="thumb"  class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>
=======
                <textarea id="editor" class="form-control"></textarea>
            </div>

>>>>>>> danhmuc_list
=======
                <textarea id="editor" class="form-control"></textarea>
            </div>

>>>>>>> danhmuc_list


            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
<<<<<<< HEAD
<<<<<<< HEAD
    <script>
        CKEDITOR.replace('content');
    </script>
=======
=======
>>>>>>> danhmuc_list
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
@endsection
