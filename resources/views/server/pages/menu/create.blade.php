@extends('server.index')
@section('title', 'Thêm vai trò')
@section('page-title', 'Thêm vai trò')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.menu.show', [$khoa['slug']])" :submitLink="route('admin.menu.store', [$khoa['slug']])">
            <x-admin.form.input :col="3" :type="'text'" :label="'Tên Menu'" :required="true" :placeholder="'Tên Menu'" :fieldName="'name'" />
            <x-admin.form.input :col="3" :type="'text'" :label="'Liên kết'" :required="true" :placeholder="'Liên kết của menu này'" :value="'javascript:'" :fieldName="'url'" />
            <x-admin.form.input :col="3" :type="'number'" :label="'Thứ tự'" :required="true" :placeholder="'Thứ tự của menu này'" :value="0" :fieldName="'display_order'" />
            <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :checked="true" :required="false" :fieldName="'status'" :labelContent="'Tắt - Bật'" />
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
