@extends('server.index')
@section('title', 'Quản Trị Giáo Viên')
@section('page-title', 'Sửa Giáo Viên '.$teacher['position'].$teacher['name'])
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.teacher.show', [$khoa['slug']])" :submitLink="route('admin.teacher.update', [$khoa['slug'], $teacher['id']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">
                    <option value="" aria-readonly="true">Chọn Khoa</option>
                    @foreach ($faculty_list as $faculty)
                    <option value="{{$faculty->id}}" {{ old('faculty_id') ?? $teacher['faculty_id'] == $faculty->id ? "selected" : '' }}>{{$faculty->name}}</option>
                    @endforeach

                </x-admin.form.select>

                <x-admin.form.input :data="$teacher" :col="3" :type="'text'" :label="'Tên Giảng Viên'" :required="true" :placeholder="'Tên Giảng Viên'" :fieldName="'name'" />
                <x-admin.form.input :data="$teacher" :col="3" :type="'text'" :label="'Chức Vụ'" :required="true" :placeholder="'Chức Vụ'" :fieldName="'position'" />
                <x-admin.form.input :data="$teacher" :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" />
                <x-admin.form.input :data="$teacher" :col="3" :type="'text'" :label="'Người Cập Nhập'" :required="true" :placeholder="'Người Cập Nhập'" :fieldName="'updated_by'" />
                <x-admin.form.input :data="$teacher" :col="3" :type="'text'" :label="'Giới Thiệu Về Giảng Viên'" :required="false" :placeholder="'Giới Thiệu'" :fieldName="'intro'" />
                <x-admin.form.input :data="$teacher" :col="3" :type="'text'" :label="'Đánh Giá Của Giảng Viên'" :required="false" :placeholder="'Đánh Giá'" :fieldName="'evaluate'" />
                <x-admin.form.checkbox :data="$teacher" :col="3" :label="'Trạng thái'" :required="false" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
                <x-admin.form.file :data="$teacher" :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image'" />

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

@endsection
