@extends('server.index')
@section('title', 'Quản Trị Danh Mục')
@section('page-title', 'Thêm Danh Mục')
@section('page-content')
    <!--/.row-->
    <div class="row">
        <div class="col-sm-12 px-3">
            <x-admin.form.form method="POST" :cancelLink="route('admin.category.show', [$khoa['slug']])"
                :submitLink="route('admin.category.store', [$khoa['slug']])">
                <div class="row">
                    <x-admin.form.alert :col="12" class="bg-olive color-palette">
                        <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                    </x-admin.form.alert>

                    <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Thuộc Khoa'">
                        <option value="" aria-readonly="true">Chọn Khoa</option>
                        @foreach ($faculty_list as $faculty)
                            <option value="{{ $faculty->id }}"
                                {{ old('faculty_id') == $faculty->id ? 'selected' : '' }}>
                                {{ $faculty->name }}</option>
                        @endforeach
                    </x-admin.form.select>


                    <x-admin.form.select :required="true" :col="3" :fieldName="'parent_id'" :label="' Thuộc Danh Mục'">
                        <option value="" aria-readonly="true">Chọn Danh Mục</option>
                        <option value="0" class="optionGroup">Không Thuộc Danh Mục Nào</option>
                        @isset($category_list)
                            @foreach ($category_list as $item)
                                @if ($item->parent_id == 0)
                                    <option value="{{ $item->id }}" class="optionGroup"
                                        {{ old('parent_id') == $item->id ? 'selected' : '' }}> {{ $item->title }}
                                        @foreach ($category_list as $item2)
                                            @if ($item->id === $item2->parent_id)
                                    <option value="{{ $item2->id }}" class="optionGroup2"
                                        {{ old('parent_id') == $item2->id ? 'selected' : '' }}>
                                        &nbsp;&nbsp;&nbsp;{{ $item2->title }}
                                        @foreach ($category_list as $item3)
                                            @if ($item2->id === $item3->parent_id)
                                    <option value="{{ $item3->id }}" class="optionGroup3"
                                        {{ old('parent_id') == $item3->id ? 'selected' : '' }}>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item3->title }}
                                        @foreach ($category_list as $item4)
                                            @if ($item3->id === $item4->parent_id)
                                    <option value="{{ $item4->id }}" class="optionGroup4"
                                        {{ old('parent_id') == $item4->id ? 'selected' : '' }} disabled>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $item4->title }} </option>
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
                    </x-admin.form.select>

                    <x-admin.form.input :col="3" :type="'text'" :label="'Tên Danh Mục'" :required="true"
                        :placeholder="'Tên Danh Mục'" :fieldName="'title'" />

                    <x-admin.form.input :col="3" :type="'text'" :label="'Slug danh mục'" :required="true"
                        :placeholder="'Slug danh mục'" :fieldName="'slug'" />

                    <x-admin.form.input :col="3" :type="'text'" :label="'Meta Descriptions'" :required="true"
                        :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />

                    <x-admin.form.input :col="3" :type="'text'" :label="'Meta Keywords'" :required="true"
                        :placeholder="'Meta Keywords'" :fieldName="'meta_keywords'" />

                    <x-admin.form.input :col="3" :type="'text'" :label="'Người Tạo'" :required="false"
                        :placeholder="'Người Tạo'" :fieldName="'created_by'" />

                    <x-admin.form.input :col="3" :type="'text'" :label="'Người Đăng'" :required="false"
                        :placeholder="'Người Đăng'" :fieldName="'updated_by'" />

                    <x-admin.form.select :required="true" :col="3" :fieldName="'show_at_home'"
                        :label="'Hiển thị ở Trang Chủ'">
                        <option value="0" aria-readonly="true">Ẩn</option>
                        <option value="1" aria-readonly="true">Hiện</option>
                    </x-admin.form.select>

                    <x-admin.form.select :required="true" :col="3" :fieldName="'show_at_news'"
                        :label="'Hiển thị ở Trang Tin Tức'">
                        <option value="0" aria-readonly="true">Ẩn</option>
                        <option value="1" aria-readonly="true">Hiện</option>
                    </x-admin.form.select>

                    <x-admin.form.select :required="true" :col="3" :fieldName="'show_at_notification'"
                        :label="'Hiển thị ở Trang Thông Báo'">
                        <option value="0" aria-readonly="true">Ẩn</option>
                        <option value="1" aria-readonly="true">Hiện</option>
                    </x-admin.form.select>

                    <x-admin.form.select :required="true" :col="3" :fieldName="'display_order'" :label="'Display Order'">
                        <option value="0" aria-readonly="true">Ẩn</option>
                        <option value="1" aria-readonly="true">Hiện</option>
                    </x-admin.form.select>

                    <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'"
                        :labelContent="'Đang hoạt động'" />

                    <x-admin.form.multi-select :col="6" :label="'Vai trò'" :required="false" :fieldName="'role'">
                        {{-- @foreach ($roles as $role)
                    <option value="{{$role['id']}}" {{ in_array($role['id'], old('role') ?? []) ? "selected" : '' }}>{{$role['display_name']}}</option>
                    @endforeach --}}
                    </x-admin.form.multi-select>
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
