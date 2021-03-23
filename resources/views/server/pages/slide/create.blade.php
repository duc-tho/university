@extends('server.index')
@section('title', 'Quản Trị Slide')
@section('page-title', 'Thêm Slide')
@section('page-content')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.slide.show', [$khoa['slug']])" :submitLink="route('admin.slide.store', [$khoa['slug']])">
            <div class="row">
                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">
                    <option value="{{$khoa->id}}" {{ old('faculty_id') == $khoa->id ? "selected" : '' }} selected>{{$khoa->name}}</option>
                </x-admin.form.select>

                <x-admin.form.input :col="3" :type="'text'" :label="'Tên Slide'" :required="true" :placeholder="'Tên Slide'" :fieldName="'name'" />

                <x-admin.form.input :col="3" :type="'number'" :label="'Display Order'" :required="true" :placeholder="'Display Order'" :fieldName="'display_order'" :value="0" />

                <x-admin.form.select :required="true" :col="3" :fieldName="'browser_target'" :label="'Browser_Target'">
                    <option value="_blank" aria-readonly="true"> _blank </option>
                    <option value="_self" aria-readonly="true"> _self</option>
                    <option value="_parent" aria-readonly="true"> _parent</option>
                    <option value="_top" aria-readonly="true"> _top</option>
                </x-admin.form.select>

                <x-admin.form.input :col="3" :type="'text'" :label="'Mô Tả'" :required="false" :placeholder="'Mô Tả'" :fieldName="'description'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Người Tạo'" :required="true" :placeholder="'Người Tạo'" :fieldName="'created_by'" :value="Auth::user()['first_name']" />
                {{--
                <x-admin.form.input :col="3" :type="'text'" :label="'Người Cập Nhập'" :required="true" :placeholder="'Người Cập Nhập'" :fieldName="'updated_by'" /> --}}

                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" :checked="true" />

                <x-admin.form.file :col=" 3" :label="'Ảnh'" :required="false" :fieldName="'link'" />
            </div>
        </x-admin.form.form>
    </div>
</div>
</div>

@endsection
