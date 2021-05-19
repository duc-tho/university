@extends('server.index')
@section('title', 'Thêm Liên Kết Footer')
@section('page-title', 'Thêm Liên Kết Footer')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.footer_link.show', [$khoa['slug']])" :submitLink="route('admin.footer_link.update', [$khoa['slug'], $footer_link['id']])"
        :deleteLink="route('admin.footer_link.delete', [$khoa['slug'], $footer_link['id']])">

        <x-admin.form.select :required="true" :col="3" :fieldName="'footer_link_category_id'" :label="'Danh Mục Footer'">
            @foreach ($footer_link_category as $item)
            <option value="{{$item->id}}" {{ old('footer_link_category_id')  ?? $footer_link['footer_link_category_id']  == $item->id ? "selected" : '' }} >{{$item->title}}</option>
            @endforeach
        </x-admin.form.select>

            <x-admin.form.input :data="$footer_link" :col="3" :type="'text'" :label="'Tên Footer'" :required="true" :placeholder="'Tên Footer'" :fieldName="'title'" />
            <x-admin.form.input :data="$footer_link" :col="6" :type="'text'" :label="'Link'" :required="true" :placeholder="'Link'" :fieldName="'link'" />
        </x-admin.form.form>
    </div>
</div>
</div>
@endsection
