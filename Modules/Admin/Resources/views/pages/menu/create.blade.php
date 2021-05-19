@extends('server.index')
@section('title', 'Thêm Menu')
@section('page-title', 'Thêm Menu')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.menu.show', [$khoa['slug']])" :submitLink="route('admin.menu.store', [$khoa['slug']])">
            <x-admin.form.input :col="3" :type="'text'" :label="'Tên Menu'" :required="true" :placeholder="'Tên Menu'" :fieldName="'name'" />
            
            <x-admin.form.select :required="true" :col="3" :fieldName="'parent_id'" :label="'Menu Cha :'">
                <option value="0">Không Thuộc Menu Nào</option>
                @isset($menu_list )
                    @foreach ($menu_list as $item)
                        @if ( $item->parent_id == 0 && $item->faculty_id == $khoa->id )
                            <option class="optionGroup2 " value="{{ $item->id }}" {{ old('parent_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                                @foreach ($menu_list as $item2)
                                    @if ($item->id == $item2->parent_id)
                                        <option disabled  value="{{ $item2->id }}"{{ old('parent_id') == $item->id ? 'selected' : '' }}>&nbsp; &nbsp;{{ $item2->name }}</option>
                                    @endif
                                @endforeach
                            </option>
                        @endif
                    @endforeach
                @endisset

            </x-admin.form.select>
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
