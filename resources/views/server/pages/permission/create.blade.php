@extends('server.index')
@section('title', 'Tạo quyền')
@section('page-title', 'Tạo quyền')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <form id="form" method="POST" enctype="multipart/form-data" role="form" action="{{ route('admin.permission.store', [$khoa['slug']]) ?? '#' }}">
            @csrf
            <div class="card card-primary card-outline">
                <div class="card-header p-2">
                    <div class="d-flex justify-content-between px-3">
                        <div>
                            <button class="btn btn-info btn-sm" type="submit" name="submit"><i class="fas fa-save"></i> Tạo</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <x-admin.form.alert :col="12" class="bg-info color-palette">
                            Chức năng này dùng để tạo (grenerate) ra các quyền từ các Module trong config 1 cách tự động tránh nhập tay
                        </x-admin.form.alert>

                        <x-admin.form.select :required="true" :col="12" :fieldName="'module'" :label="'Chọn module quyền cần tạo'">
                            <option value="" aria-readonly="true">Chọn Module cần tạo</option>
                            @foreach ($modules as $key => $module)
                            <option value="{{ $key }}-{{ $module['display_name'] }}">{{ $module['display_name'] }}</option>
                            @endforeach
                        </x-admin.form.select>

                        @foreach ($default_permission as $perm)
                        <div class="form-check col-md-3 px-3">
                            <label class="w-100" for="{{ $perm['name'] }}">{{ $perm['display_name'] }}</label>
                            <div class="custom-control custom-switch form-control">
                                <input type="checkbox" id="{{  $perm['name'] }}" class="custom-control-input" name="module_permission[]" value="{{ $perm['name'] }}-{{ $perm['display_name'] }}" checked>
                                <label class="custom-control-label ml-3" for="{{ $perm['name'] }}" style="cursor: pointer;">{{ $perm['name'] }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </form>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                'module': {
                    required: true
                },
            },
            //
            messages: {
                'module': {
                    required: 'Chưa chọn module nè!'
                },
            }
        });
    });
</script>
@endsection
