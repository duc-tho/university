@extends('server.index')
@section('title', 'Quản Trị Tin Tức - Thông Báo')
@section('page-title', 'Thêm Tin Tức - Thông Báo')
@section('page-content')
    <!--/.row-->
    <div class="row">
        <div class="col-sm-12 px-3">
            <x-admin.form.form method="POST" :cancelLink="route('admin.news.show', [$khoa['slug']])"
                :submitLink="route('admin.news.store', [$khoa['slug']])">
                <div class="row">
                    <x-admin.form.alert :col="12" class="bg-olive color-palette">
                        <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                    </x-admin.form.alert>

                    <x-admin.form.select :required="true" :col="3" :fieldName="'category_id'" :label="'Chọn Danh Mục :'">
                        @foreach ($category_list as $category)
                            @if ($category->faculty_id == $khoa->id)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->title }}
                                </option>
                            @endif
                        @endforeach
                    </x-admin.form.select>

                    <x-admin.form.input :col="3" :type="'text'" :label="'Tiêu Đề '" :required="true"
                        :placeholder="'Tiêu Đề'" :fieldName="'title'" />
                    <x-admin.form.input :col="3" :type="'text'" :label="'Slug tiêu đề'" :required="true"
                        :placeholder="'Slug tiêu đề'" :fieldName="'slug'" />
                    <x-admin.form.input :col="3" :type="'date'" :label="'Thời Gian'" :required="true"
                        :placeholder="'Thời Gian'" :fieldName="'event_time'" />

                    <x-admin.form.textarea-mce :col="6" :label="'Nội Dung '" :required="true" :fieldName="'content'" />
                    <x-admin.form.textarea-mce :col="6" :label="'Mô Tả'" :required="true" :fieldName="'description'" />


                    <x-admin.form.input :col="3" :type="'text'" :label="'Vị Trí'" :required="false" :placeholder="'Vị Trí'"
                        :fieldName="'location'" />
                    <x-admin.form.input :col="3" :type="'text'" :label="'Tạo Bởi'" :required="false"
                        :placeholder="'Tạo Bởi'" :fieldName="'created_by'" />
                    <x-admin.form.input :col="3" :type="'text'" :label="'Đăng Bởi'" :required="false"
                        :placeholder="'Đăng Bởi'" :fieldName="'updated_by'" />
                    <x-admin.form.input :col="3" :type="'text'" :label="'Meta_Descriptions'" :required="false"
                        :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />
                    <x-admin.form.input :col="3" :type="'text'" :label="'Meta_Keywords'" :required="false"
                        :placeholder="'Meta Keywords'" :fieldName="'meta_keywords'" />
                    <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'"
                        :labelContent="'Đang hoạt động'" />
                    <x-admin.form.file :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image'" />

                </div>
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
