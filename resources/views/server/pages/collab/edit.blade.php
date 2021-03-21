@extends('server.index')
@section('title', 'Quản Trị Logo Hợp Tác')
@section('page-title', 'Sửa Logo Hợp Tác')
@section('page-content')
    <!--/.row-->
    <div class="row">
        <div class="col-sm-12 px-3">
            <x-admin.form.form method="POST" :cancelLink="route('admin.collab.show', [$khoa['slug']])"
                :submitLink="route('admin.collab.update', [$khoa['slug'], $collab['id']])">
                <div class="row">
                    <x-admin.form.alert :col="12" class="bg-olive color-palette">
                        <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                    </x-admin.form.alert>

                    <x-admin.form.input  :data="$collab" :col="3" :type="'text'" :label="'Tiêu Đề Logo'" :required="true" :placeholder="'Tiêu Đề Logo'" :fieldName="'title'" />
                    <x-admin.form.input :data="$collab" :col="3" :type="'text'" :label="'Link'" :required="true" :placeholder="'Link'" :fieldName="'link'" />
                    <x-admin.form.input :data="$collab" :col="3" :type="'number'" :label="'Display Order'" :required="true" :placeholder="'Display Order'" :fieldName="'display_order'" :value="0" />
                    <x-admin.form.checkbox :data="$collab" :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
                    <x-admin.form.file :data="$collab" :col="3" :label="'Ảnh đại diện'" :required="false" :fieldName="'image_url'" />


                </div>
            </x-admin.form.form>
        </div>
    </div>
    </div>

@endsection
