@extends('admin::index')
@section('title', 'Quản Trị Giới Thiệu Khoa')
@section('page-title', 'Thêm Giới Thiệu Khoa')
@section('page-content')
<!--/.row-->
<div class="row">

    <div class="col-sm-12 px-3">

        <x-admin.form.form method="POST" :cancelLink="route('admin.about.show', [$khoa['slug']])" :submitLink="route('admin.about.store', [$khoa['slug']])">

            <div class="row">

                <x-admin.form.alert :col="12" class="bg-olive color-palette">
                    <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                </x-admin.form.alert>

                <x-admin.form.select :required="true" :col="3" :fieldName="'faculty_id'" :label="'Khoa'">
                    <option value="{{$khoa->id}}" {{ old('faculty_id') == $khoa->id ? "selected" : '' }} selected>{{$khoa->name}}</option>
                </x-admin.form.select>

                <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" :checked="true" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Tiêu Đề Giới Thiệu'" :required="true" :placeholder="'Tiêu Đề'" :fieldName="'title'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Slug'" :required="true" :placeholder="'Slug'" :fieldName="'slug'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Descriptions'" :required="true" :placeholder="'Meta Descriptions'" :fieldName="'meta_descriptions'" />

                <x-admin.form.input :col="3" :type="'text'" :label="'Meta Keywords'" :required="true" :placeholder="'Meta Keywords'" :fieldName="'meta_keywords'" />

                <x-admin.form.input :col="3" :type="'number'" :label="'Thứ tự'" :required="true" :placeholder="'Thứ tự'" :fieldName="'display_order'" :value="0" />

                <x-admin.form.textarea-mce :col="6" :label="'Giới Thiệu'" :required="true" :fieldName="'intro'" />

                <x-admin.form.file :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image'" />

            </div>

        </x-admin.form.form>

    </div>

</div>
</div>
@endsection
