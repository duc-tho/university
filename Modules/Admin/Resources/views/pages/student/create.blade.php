@extends('server.index')
@section('title', 'Quản Trị Sinh Viên')
@section('page-title', 'Thêm Sinh Viên')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.student.show', [$khoa['slug']])" :submitLink="route('admin.student.store', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">

                    <option value="{{$khoa->id}}" {{ old('faculty_id') == $khoa->id ? "selected" : '' }}>{{$khoa->name}}</option>

                </x-admin.form.select>

                <x-admin.form.input :col="3" :type="'text'" :label="'Tên Sinh Viên'" :required="true" :placeholder="'Tên Sinh Viên'" :fieldName="'name'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" :value="Auth::user()['first_name']" />


                {{-- <x-admin.form.input :col="3" :type="'text'" :label="'Người Cập Nhập'" :required="true" :placeholder="'Người Cập Nhập'" :fieldName="'updated_by'" /> --}}


                <x-admin.form.textarea-mce :col="12" :label="'Giới Thiệu Về Sinh Viên'" :required="true" :fieldName="'intro'" />

                <x-admin.form.textarea-mce :col="12" :label="'Đánh Giá Của Sinh Viên'" :required="true" :fieldName="'evaluate'" />

                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />

                <x-admin.form.file :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image'" />

            </div>
        </x-admin.form.form>
    </div>
</div>
</div>

@endsection