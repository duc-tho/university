@extends('server.index')
@section('title', 'Quản Trị Slide')
@section('page-title', 'Sửa Slide - ' .$slide['name'])
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.slide.show', [$khoa['slug']])" :submitLink="route('admin.slide.update', [$khoa['slug'], $slide['id']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">
                    <option value="" aria-readonly="true">Chọn Khoa :</option>
                    @foreach ($faculty_list as $faculty)
                    <option value="{{$faculty->id}}" {{ old('faculty_id') ?? $slide['faculty_id'] == $faculty->id ? "selected" : '' }}>{{$faculty->name}}</option>
                    @endforeach
                </x-admin.form.select>

                <x-admin.form.input :data="$slide" :col="3" :type="'text'" :label="'Tên Slide'" :required="true" :placeholder="'Tên Slide'" :fieldName="'name'" />

                <x-admin.form.input :data="$slide" :col="3" :type="'text'" :label="'Display Order'" :required="true" :placeholder="'Display Order'" :fieldName="'display_order'" />

                <x-admin.form.select :required="true" :col="3" :fieldName="'browser_target'" :label="'Browser_Target'">
                    <option value="0"  {{ $slide['browser_target'] == 0 ? 'selected' : '' }}  aria-readonly="true" > _blank </option>
                    <option value="1"  {{ $slide['browser_target'] == 1 ? 'selected' : '' }} aria-readonly="true" > _self</option>
                    <option value="2"  {{ $slide['browser_target'] == 2 ? 'selected' : '' }} aria-readonly="true" > _parent</option>
                    <option value="3"  {{ $slide['browser_target'] == 3 ? 'selected' : '' }} aria-readonly="true" > _top</option>
                </x-admin.form.select>



                <x-admin.form.checkbox :data="$slide" :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
                <x-admin.form.input :data="$slide"  :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" />
                <x-admin.form.input :data="$slide" :col="3" :type="'text'" :label="'Người Cập Nhập'" :required="true" :placeholder="'Người Cập Nhập'" :fieldName="'updated_by'" />
                <x-admin.form.file :data="$slide" :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'link'" />
                <x-admin.form.textarea-mce :data="$slide" :col="6" :label="'Mô Tả'" :required="true" :fieldName="'description'" />
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
