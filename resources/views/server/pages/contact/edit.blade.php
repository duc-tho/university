@extends('server.index')
@section('title', 'Quản Trị Thông Tin Liên Hệ')
@section('page-title', 'Sửa Thông Tin Liên Hệ')
@section('page-content')
    <!--/.row-->
    <div class="row">
        <div class="col-sm-12 px-3">
            <x-admin.form.form method="POST" :cancelLink="route('admin.contact.show', [$khoa['slug']])"
                :submitLink="route('admin.contact.update', [$khoa['slug'], $contact['id']])">
                <div class="row">
                    <x-admin.form.alert :col="12" class="bg-olive color-palette">
                        <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                    </x-admin.form.alert>
                    <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">
                        <option value="{{$khoa->id}}" {{ old('faculty_id') == $khoa->id ? "selected" : '' }} selected>{{$khoa->name}}</option>
                    </x-admin.form.select>


                    <x-admin.form.input :data="$contact" :col="3" :type="'email'" :label="'Email'" :required="true" :placeholder="'Email'" :fieldName="'email'" />
                    <x-admin.form.input :data="$contact" :col="3" :type="'number'" :label="'Phone'" :required="true" :placeholder="'Phone'" :fieldName="'phone'" />
                    <x-admin.form.input :data="$contact" :col="3" :type="'text'" :label="'Địa Chỉ'" :required="true" :placeholder="'Địa Chỉ'" :fieldName="'address_info'" />
                    <x-admin.form.input :data="$contact" :col="3" :type="'text'" :label="'Bản Đồ - Nhúng iframe '" :required="true" :placeholder="'Bản Đồ - Nhúng iframe'" :fieldName="'map_embed'"  />
                    <x-admin.form.input :data="$contact" :col="3" :type="'text'" :label="'Tiêu Đề Liên Hệ'" :required="true" :placeholder="'Tiêu Đề Liên Hệ'" :fieldName="'contact_title'" />
                    <x-admin.form.input :data="$contact" :col="3" :type="'text'" :label="'Website'" :required="true" :placeholder="'Website'" :fieldName="'website'" />
                    <x-admin.form.input :data="$contact" :col="3" :type="'number'" :label="'Hotline'" :required="true" :placeholder="'Hotline'" :fieldName="'hotline'" />
                    <x-admin.form.input :data="$contact" :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" :value="Auth::user()['first_name']" />
                    <x-admin.form.checkbox :data="$contact" :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />


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
