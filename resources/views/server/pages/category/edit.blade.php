@extends('server.index')
@section('title', 'Quản Trị Danh Mục')
@section('page-title', 'Sửa Danh Mục '. $category['title'])
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 ">
        <div class="panel panel-primary">
            <div class="panel-body">
                @include('errors.note')
                <form method="post" enctype="multipart/form-data" role="form" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Lưu</button>
                                    <a href="{{route('admin.category.show', [$khoa->slug])}}" class="btn btn-danger"><i class="fas fa-window-close"  onclick="return confirm('Bạn có chắc chắn muốn hủy !')"></i> Hủy bỏ</a>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Thuộc Khoa : </label>
                                        <select required name="faculty_id" class="form-control">
                                            <option value="">Chọn Khoa</option>
                                            @foreach ($facultylist as $faculty)
                                                <option value="{{$faculty->id}}" @if($category->faculty_id == $faculty->id) selected @endif >{{$faculty->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thuộc Danh Mục Con: </label>
                                        <select required name="parent_id" class="form-control">
                                            <option value="">Chọn Danh Mục</option>
                                            <option value="0" class="optionGroup" >Không Thuộc Danh Mục Nào</option>
                                            @isset($category_list)
                                            @foreach ($category_list as $item)
                                            @if ($item->parent_id==0)
                                            <option value="{{$item->id}}" @if($category->parent_id == $item->id) selected @endif class="optionGroup"> {{ $item->title }}
                                                    @foreach($category_list as $item2)
                                                        @if($item->id === $item2->parent_id)
                                                            <option value="{{$item2->id}}" @if($category->parent_id == $item2->id) selected @endif class="optionGroup2" >&nbsp;&nbsp;&nbsp;{{$item2->title}}
                                                                @foreach($category_list as $item3)
                                                                    @if($item2->id === $item3->parent_id)
                                                                    <option value="{{$item3->id}}" @if($category->parent_id == $item3->id) selected @endif class="optionGroup3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$item3->title}}
                                                                        @foreach($category_list as $item4)
                                                                            @if($item3->id === $item4->parent_id)
                                                                            <option value="{{$item4->id}}" @if($category->parent_id == $item4->id) selected @endif class="optionGroup4" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$item4->title}} </option>
                                                                            @endif
                                                                        @endforeach
                                                                    </option>
                                                                    @endif
                                                                @endforeach
                                                            </option>
                                                        @endif
                                                    @endforeach
                                            </option>
                                            @endif
                                            @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tên Danh Mục : </label>
                                        <input required type="text" id="title" name="title"  value="{{$category->title}}"  class="form-control" placeholder="Nhập tên danh mục...">
                                    </div>
                                    <div class="form-group">
                                        <label>Slug Danh Mục : </label>
                                        <input required type="text" id="slug" name="slug"  value="{{$category->slug}}"  class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Meta description : </label>
                                        <input required type="text" id="meta_descriptions" name="meta_descriptions" value="{{$category->meta_descriptions}}"  class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label>Meta keywords : </label>
                                        <input required type="text" id="meta_keywords" name="meta_keywords" value="{{$category->meta_keywords}}" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Hiển thị tại trang chủ : </label>
                                        <select required name="show_at_home" class="form-control">
                                            <option value="0" @if($category->show_at_home==0) selected @endif>Không Hiển Thị</option>
                                            <option value="1" @if($category->show_at_home==1) selected @endif>Hiện Thị</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Hiển thị tại trang tin tức: </label>
                                        <select required name="show_at_news" class="form-control">
                                            <option value="0"  @if($category->show_at_news==0) selected @endif>Không Hiển Thị</option>
                                            <option value="1"  @if($category->show_at_news==1) selected @endif>Hiện Thị</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Hiển thị tại trang thông báo : </label>
                                        <select required name="show_at_notification" class="form-control">
                                            <option value="0"  @if($category->show_at_notification==0) selected @endif>Không Hiển Thị</option>
                                            <option value="1"  @if($category->show_at_notification==1) selected @endif>Hiện Thị</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Display order : </label>
                                        <select required name="display_order" class="form-control">
                                            <option value="1"  @if($category->display_order==1) selected @endif>Hiện Thị</option>
                                            <option value="0"  @if($category->display_order==0) selected @endif>Không Hiển Thị</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Người Tạo : </label>
                                        <input required type="text" id="created_by" name="created_by"
                                            value="{{ $category->created_by}}" class="form-control"
                                            placeholder="Nhập người tạo...">
                                    </div>

                                    <div class="form-group">
                                        <label>Người Đăng : </label>
                                        <input required type="text" id="updated_by" name="updated_by"
                                            value="{{  $category->updated_by }}" class="form-control"
                                            placeholder="Nhập người đăng...">
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select required name="status" class="form-control">
                                            <option value="1"  @if($category->status==1) selected @endif>Bật</option>
                                            <option value="0"  @if($category->status==0) selected @endif>Tắt</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
</div>

<script>
    CKEDITOR.editorConfig = function (config) {
        config.enterMode = CKEDITOR.ENTER_BR;
        config.autoParagraph = false;
        config.fillEmptyBlocks = false;
    };
</script>
<script>
    $('input#title').keyup(function(event) {
            /* Act on the event */
            var title, slug;
            //Lấy text từ thẻ input title
            title = $(this).val();
            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            $('input#slug').val(slug);
        });

</script>
@stop
