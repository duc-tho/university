@extends('server.index')
@section('title', 'Sửa danh mục hình ảnh')
@section('page-title', 'Sửa danh mục hình ảnh')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.image_category.show', [$khoa['slug']])" :submitLink="route('admin.image_category.update', [$khoa['slug'], $image_category['id']])" :deleteLink="route('admin.image_category.delete', [$khoa['slug'], $image_category['id']])">

            <x-admin.form.select :required="true" :col="6" :fieldName="'faculty_id'" :label="'Khoa'">
                <option value="{{$khoa['id']}}" selected>{{$khoa['name']}}</option>
            </x-admin.form.select>

            <x-admin.form.select :required="true" :col="6" :fieldName="'parent_id'" :label="'Danh mục cha'">
                <option value="0">Đây là danh mục cha</option>
                @foreach ($image_categorys as $image_category_item)
                <option value="{{ $image_category_item['id'] }}" {{ old('parent_id') ?? $image_category['parent_id'] == $image_category_item['id'] ? 'selected' : '' }}>{{ $image_category_item['title'] }}</option>
                @endforeach
            </x-admin.form.select>

            <x-admin.form.input :data="$image_category" :col="3" :type="'text'" :label="'Tên danh mục'" :required="true" :placeholder="'Tên danh mục'" :fieldName="'title'" />

            <x-admin.form.input :data="$image_category" :col="3" :type="'text'" :label="'Slug'" :required="true" :placeholder="'Đường dẫn URL'" :fieldName="'slug'" />

            <x-admin.form.input :data="$image_category" :col="3" :type="'number'" :label="'Thứ tự'" :required="false" :placeholder="'Thứ tự của menu này'" :value="0" :fieldName="'display_order'" />

            <x-admin.form.checkbox :data="$image_category" :col="3" :label="'Trạng thái'" :checked="true" :required="false" :fieldName="'status'" :labelContent="'Tắt - Bật'" />
        </x-admin.form.form>
    </div>
</div>
</div>

{{-- <script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                'name': {
                    required: true
                },
                'display_name': {
                    required: true
                },
            },
            //
            messages: {
                'name': {
                    required: 'Chưa nhập tên vai trò nè!'
                },
                'display_name': {
                    required: 'Chưa nhập tên hiển thị của vai trò nè!'
                },
            }
        });
    });
</script> --}}
@endsection
