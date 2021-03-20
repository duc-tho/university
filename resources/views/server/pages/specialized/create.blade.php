@extends('server.index')
@section('title', 'Quản Trị Ngành')
@section('page-title', 'Thêm Ngành')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.specialized.show', [$khoa['slug']])" :submitLink="route('admin.specialized.store', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">
                    <option value="" aria-readonly="true">Chọn Khoa :</option>
                    <option value="{{$khoa->id}}" {{ old('faculty_id') == $khoa->id ? "selected" : '' }} selected>{{$khoa->name}}</option>
                </x-admin.form.select>

                <x-admin.form.input :col="3" :type="'text'" :label="'Tên Ngành'" :required="true" :placeholder="'Tên Ngành'" :fieldName="'name'" />
                <x-admin.form.input :col="3" :type="'text'" :label="'Slug'" :required="true" :placeholder="'Slug'" :fieldName="'slug'" />
                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Keyword'" :required="true" :placeholder="'Meta Keyword'" :fieldName="'meta_keywords'" />


                <x-admin.form.textarea-mce  :col="6" :label="'Tóm Tắt Giới Thiệu'" :required="true" :fieldName="'intro_summary'" />
                <x-admin.form.textarea-mce  :col="6" :label="'Giới Thiệu'" :required="true" :fieldName="'intro'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Descriptions'" :required="true" :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'"  :value="Auth::user()['first_name']" />
                {{-- <x-admin.form.input :col="3" :type="'text'" :label="'Người Đăng'" :required="true" :placeholder="'Người Đăng'" :fieldName="'updated_by'" /> --}}

                <x-admin.form.input :col="3" :type="'text'" :label="'Trình Độ Đào Tạo'"  :required="false"  :placeholder="'Trình Độ Đào Tạo'" :fieldName="'level_educate'"/>
                <x-admin.form.input :col="3" :type="'text'" :label="'Hình Thức Đào Tạo'" :required="false" :placeholder="'Hình Thức Đào Tạo'" :fieldName="'type_educate'"/>
                <x-admin.form.input :col="3" :type="'text'" :label="'Thời Gian Đào Tạo'" :required="false" :placeholder="'Thời Gian Đào Tạo'" :fieldName="'type_time'"/>
                <x-admin.form.input :col="3" :type="'text'" :label="'Đối Tượng Đào Tạo'" :required="false" :placeholder="'Đối Tượng Đào Tạo'" :fieldName="'object_educate'" />


                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />

                <x-admin.form.file :col="3" :label="'Icon đại diện'" :required="false" :fieldName="'icons'" />

                <x-admin.form.file :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image'"  />

         
            </div>
        </x-admin.form.form>
    </div>
</div>
</div>
<script>
    $('input#name').keyup(function(event) {
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
