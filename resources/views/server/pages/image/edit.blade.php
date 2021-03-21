@extends('server.index')
@section('title', 'Thêm hình ảnh')
@section('page-title', 'Thêm hình ảnh')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.image.show', [$khoa['slug'], 'category' => $image['image_category_id']])" :submitLink="route('admin.image.update', [$khoa['slug'], $image['id']])">

            <x-admin.form.select :required="true" :col="6" :fieldName="'image_category_id'" :label="'Chuyên mục'">
                <option value="0">Chọn chuyên mục</option>
                @foreach ($image_category as $category)
                <optgroup label="{{ $category['title'] }}">
                    @foreach ($category->childrens ?? [] as $child_category)
                    <option value="{{ $child_category['id'] }}" {{ old('parent_id') ?? $child_category['id'] == $image['image_category_id'] ? 'selected' : '' }}>{{ $child_category['title'] }}</option>
                    @endforeach
                </optgroup>
                @endforeach
            </x-admin.form.select>

            <x-admin.form.input :data="$image" :col="3" :type="'text'" :label="'Tên ảnh'" :required="true" :placeholder="'Tên ảnh'" :fieldName="'title'" />

            <x-admin.form.input :data="$image" :col="3" :type="'text'" :label="'Mô tả'" :required="false" :placeholder="'Mô tả ảnh'" :fieldName="'description'" />

            <x-admin.form.input :data="$image" :col="3" :type="'text'" :label="'Tạo bởi'" :required="true" :placeholder="'Người tạo ảnh'" :fieldName="'created_by'" :readonly="true" />

            <x-admin.form.input :data="$image" :col="3" :type="'number'" :label="'Thứ tự'" :required="false" :placeholder="'Thứ tự của ảnh này'" :value="0" :fieldName="'display_order'" />

            <x-admin.form.checkbox :data="$image" :col="3" :label="'Trạng thái'" :checked="true" :required="false" :fieldName="'status'" :labelContent="'Tắt - Bật'" />

            <x-admin.form.file :data="$image" :col="3" :label="'Ảnh'" :required="true" :fieldName="'image'" />
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
