@extends('server.index')
@section('title', 'Sửa số liệu')
@section('page-title', 'Sửa số liệu')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.statistic.show', [$khoa['slug']])" :submitLink="route('admin.statistic.update', [$khoa['slug'], $statistic['id']])" :deleteLink="route('admin.statistic.delete', [$khoa['slug'], $statistic['id']])">

            <x-admin.form.select :required="true" :col="6" :fieldName="'faculty_id'" :label="'Khoa'">
                <option value="{{$khoa['id']}}" selected>{{$khoa['name']}}</option>
            </x-admin.form.select>

            <x-admin.form.input :data="$statistic" :col="3" :type="'text'" :label="'Tên trường'" :required="true" :placeholder="'Tên trường'" :value="'javascript:'" :fieldName="'name'" />

            <x-admin.form.input :data="$statistic" :col="3" :type="'number'" :label="'Giá trị'" :required="true" :placeholder="'Giá trị'" :value="0" :fieldName="'value'" />
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
