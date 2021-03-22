@extends('server.index')
@section('title', 'Quản Trị Danh Mục')
@section('page-title', 'Thêm Danh Mục')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.category.show', [$khoa['slug']])" :submitLink="route('admin.category.store', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Thuộc Khoa'">
                    <option value="{{ $khoa->id }}" {{ old('faculty_id') == $khoa->id ? 'selected' : '' }}>
                        {{ $khoa->name }}</option>

                </x-admin.form.select>


                <x-admin.form.select :required="true" :col="3" :fieldName="'parent_id'" :label="' Thuộc Danh Mục'">
                    <option value="0">
                        Đây là danh mục cha
                    </option>
                    @isset($category_list )
                    @foreach ($category_list as $item)
                    @if ( $item->parent_id != 0 && $item->faculty_id == $khoa->id )
                    <option value="{{ $item->id }}" {{ old('parent_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->title }}
                    </option>
                    @endif
                    @endforeach
                    @endisset

                </x-admin.form.select>

                <x-admin.form.input :col="3" :type="'text'" :label="'Tên Danh Mục'" :required="true" :placeholder="'Tên Danh Mục'" :fieldName="'title'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Slug danh mục'" :required="true" :placeholder="'Slug danh mục'" :fieldName="'slug'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Descriptions'" :required="true" :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Keywords'" :required="true" :placeholder="'Meta Keywords'" :fieldName="'meta_keywords'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Người Tạo'" :required="false" :placeholder="'Người Tạo'" :fieldName="'created_by'" :value="Auth::user()['first_name']" />
                <x-admin.form.input :col="3" :type="'number'" :label="'Display Order'" :required="true" :placeholder="'Display Order'" :fieldName="'display_order'" :value="0" />


                {{--<x-admin.form.input :col="3" :type="'text'" :label="'Người Đăng'" :required="false"
                        :placeholder="'Người Đăng'" :fieldName="'updated_by'" /> --}}

                <x-admin.form.checkbox :col="3" :label="'Hiển thị ở Trang Chủ'" :required="true" :fieldName="'show_at_home'" :labelContent="'Đang hoạt động'" />

                <x-admin.form.checkbox :col="3" :label="'Hiển thị ở Trang Tin Tức'" :required="true" :fieldName="'show_at_news'" :labelContent="'Đang hoạt động'" />

                <x-admin.form.checkbox :col="3" :label="'Hiển thị ở Trang Thông Báo'" :required="true" :fieldName="'show_at_notification'" :labelContent="'Đang hoạt động'" />


                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />


            </div>
        </x-admin.form.form>
    </div>
</div>
</div>

{{-- <script>
        let url = document.querySelector('input[base_url]').attributes['base_url'].value;
        let faculty = document.getElementById('faculty_id');
        let category = document.getElementById('parent_id');
        faculty.addEventListener('change', () => {
            category.innerHTML = '<option value="" aria-readonly="true">Chọn Danh Mục</option>';
            if (!faculty.value) return;
            getCategoryByFaculty(faculty.value, url).then(html => category.innerHTML = html);
        });
    </script> --}}

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
