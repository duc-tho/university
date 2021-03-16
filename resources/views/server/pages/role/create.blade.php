@extends('server.index')
@section('title', 'Thêm vai trò')
@section('page-title', 'Thêm vai trò')
@section('page-content')
<div class="row">
    <div class="col-md-12 px-3">
        <x-admin.form.form method="POST" :cancelLink="route('admin.role.show', [$khoa['slug']])" :submitLink="route('admin.role.store', [$khoa['slug']])">
            <x-admin.form.input :col="4" :type="'text'" :label="'Tên vai trò'" :required="true" :placeholder="'Tên vai trò'" :fieldName="'name'" />
            <x-admin.form.input :col="4" :type="'text'" :label="'Tên hiển thị'" :required="true" :placeholder="'Tên hiển thị của vai trò này'" :fieldName="'display_name'" />
            <hr class="w-100 mx-3">
            <div class="col-12 px-3 pb-3">
                <h4 class="mb-2">Các quyền của vai trò này</h4>
            </div>

            @foreach ($permissions as $permission)
            <div class="col-xl-3 px-3">
                <div class="card card-info card-outline" data-type="permission-card">
                    <div class="card-header">
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input class="custom-control-input custom-control-input-info custom-control-input-outline" type="checkbox" id="permission-{{ $permission['id'] }}">
                            <label for="permission-{{ $permission['id'] }}" class="custom-control-label">
                                <h5 class="card-title">{{ $permission['display_name'] }}</h5>
                            </label>
                        </div>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($permission->childrens as $permissionChildren)
                            <div class="form-check col-md-12 px-1 pb-1">
                                {{-- <label class="w-100" for="">Xem</label> --}}
                                <div class="custom-control custom-switch form-control">
                                    <input type="checkbox" id="{{ $permission['id'].$permissionChildren['id'] }}" value="{{ $permissionChildren['id'] }}" class="custom-control-input" name="permission[]">
                                    <label class="custom-control-label ml-3" for="{{ $permission['id'].$permissionChildren['id'] }}" style="cursor: pointer;">
                                        <div title="{{ $permissionChildren['display_name'] }}" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; width: 175px;">{{ $permissionChildren['display_name'] }}</div>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </x-admin.form.form>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                //
            },
            //
            messages: {
            //
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Lấy tất cả thẻ card
        let permissionCards = $('[data-type^="permission-card"]');

        $(permissionCards).each((index, permissionCard) => {
            // lấy btn chackAll
            let checkAllBtn = $(permissionCard).find('div.card-header input[type="checkbox"]')[0];
            // lấy danh sách các btn quyền trong card body
            let checkListBtn = $(permissionCard).find('div.card-body input[type="checkbox"]');

            $(checkListBtn).each(function (index, item) {
                /** khi ấn vào 1 trong số các btn trong card body sẽ kiểm tra xem
                 * tất cả btn có checked hay ko
                 * nếu tất cả btn dều checked thì cho btn chọn tất cả checked = true ngược lại thì set false
                */
                function isAllBtnChecked() {
                    let checkAll = true;

                    $(checkListBtn).each(function (index, item) {
                        if (!item.checked) checkAll = false;
                    });

                    checkAllBtn.checked = checkAll;
                }

                // gọi hàm lần đầu khi code mới load để kiểm tra
                isAllBtnChecked();

                // gọi hàm mỗi khi click vào btn
                $(item).click(isAllBtnChecked);
            });

            // Khi ấn btn chọn tất cả thì set tất cả btn trong card body checked = giá trị của btn chọn tất cả
            $(checkAllBtn).click(function() {
                $(checkListBtn).each(function (index, item) {
                    item.checked = checkAllBtn.checked;
                });
            })

            //
        });
    });
</script>
@endsection
