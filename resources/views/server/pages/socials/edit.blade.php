@extends('server.index')
@section('title', 'Quản Trị Icon')
@section('page-title', 'Sửa Icon ' .$socials['name'])
@section('page-content')
    <!--/.row-->
    <div class="row">
        <div class="col-sm-12 px-3">
            <x-admin.form.form method="POST" :cancelLink="route('admin.socials.show', [$khoa['slug']])"
                :submitLink="route('admin.socials.update', [$khoa['slug'], $socials['id']])">
                <div class="row">
                    <x-admin.form.alert :col="12" class="bg-olive color-palette">
                        <b>Lưu ý: </b>Các trường có dấu <span class="text-danger"><b>*</b></span> là bắt buộc!
                    </x-admin.form.alert>
                    <x-admin.form.input :data="$socials" :col="3" :type="'text'" :label="'Tên Icon'" :required="true" :placeholder="'Tên Icon'" :fieldName="'name'" />
                    <x-admin.form.input :data="$socials" :col="3" :type="'text'" :label="'Link Icon'" :required="true" :placeholder="'Link'" :fieldName="'link'" />
                    <x-admin.form.input :data="$socials" :col="3" :type="'text'" :label="'Fas Fa Icon'" :required="true" :placeholder="'Fas Fa Icon'" :fieldName="'fa_icon'" />
                    <x-admin.form.checkbox :data="$socials" :col="3" :label="'Trạng thái'" :required="true" :fieldName="'status'" :labelContent="'Đang hoạt động'" />
                </div>
            </x-admin.form.form>
        </div>
    </div>
    </div>
@endsection
