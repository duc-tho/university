@extends('server.index')
@section('title', 'Sửa danh mục Footer')
@section('page-title', 'Sửa danh mục Footer - '.$footer_link_category['title'])
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.footer_link_category.show', [$khoa['slug']])" :submitLink="route('admin.footer_link_category.update', [$khoa['slug'], $footer_link_category['id']])" :deleteLink="route('admin.footer_link_category.delete', [$khoa['slug'], $footer_link_category['id']])">
            <x-admin.form.input :data="$footer_link_category" :col="3" :type="'text'" :label="'Tên Danh Mục Footer'" :required="true" :placeholder="'Tên Danh Mục Footer'" :fieldName="'title'" />
            <x-admin.form.checkbox :data="$footer_link_category" :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
        </x-admin.form.form>
    </div>
</div>
</div>
@endsection
