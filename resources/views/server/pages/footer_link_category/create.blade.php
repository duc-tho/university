@extends('server.index')
@section('title', 'Thêm danh mục Footer')
@section('page-title', 'Thêm danh mục Footer')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.footer_link_category.show', [$khoa['slug']])" :submitLink="route('admin.footer_link_category.store', [$khoa['slug']])">

            <x-admin.form.input :col="3" :type="'text'" :label="'Tên Danh Mục Footer'" :required="true" :placeholder="'Tên Danh Mục Footer'" :fieldName="'title'" />

            <x-admin.form.checkbox :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
        </x-admin.form.form>
    </div>
</div>
</div>
@endsection
