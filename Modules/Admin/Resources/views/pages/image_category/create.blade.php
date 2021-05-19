@extends('server.index')
@section('title', 'Thêm danh mục hình ảnh')
@section('page-title', 'Thêm danh mục hình ảnh')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.image_category.show', [$khoa['slug']])" :submitLink="route('admin.image_category.store', [$khoa['slug']])">

            <x-admin.form.select :required="true" :col="6" :fieldName="'faculty_id'" :label="'Khoa'">
                <option value="{{$khoa['id']}}" selected>{{$khoa['name']}}</option>
            </x-admin.form.select>

            <x-admin.form.select :required="true" :col="6" :fieldName="'parent_id'" :label="'Danh mục cha'">
                <option value="0">Đây là danh mục cha</option>
                @foreach ($image_categorys as $image_category)
                <option value="{{ $image_category['id'] }}">{{ $image_category['title'] }}</option>
                @endforeach
            </x-admin.form.select>

            <x-admin.form.input :col="3" :type="'text'" :label="'Tên danh mục'" :required="true" :placeholder="'Tên danh mục'" :fieldName="'title'" />

            <x-admin.form.input :col="3" :type="'text'" :label="'Slug'" :required="true" :placeholder="'Đường dẫn URL'" :fieldName="'slug'" />

            <x-admin.form.input :col="3" :type="'number'" :label="'Thứ tự'" :required="false" :placeholder="'Thứ tự của menu này'" :value="0" :fieldName="'display_order'" />

            <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :checked="true" :required="false" :fieldName="'status'" :labelContent="'Tắt - Bật'" />
        </x-admin.form.form>
    </div>
</div>
</div>

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
@endsection
