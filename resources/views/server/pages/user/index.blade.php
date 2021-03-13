@extends('server.index')
@section('title', 'Quản Trị Người Dùng')
@section('page-title', 'Quản Trị Người Dùng')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between">
                        <a href="{{route('admin.user.create', [$khoa->slug])}}">
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-plus"></i> Thêm Người Dùng
                            </button>
                        </a>
                        <div class="ml-auto d-inline-block">
                            <div class="input-group input-group-sm">
                                <form action="{{ route('admin.user.show', [$khoa['slug']]) }}" method="get">
                                    <select class="form-control custon-select" style="width:auto !important" data-toggle="tooltip" name="item-per-page" onchange="this.parentElement.submit();">
                                        <option value="6" {{ $users->perPage() == 6 ? 'selected disabled' : ''  }}>Hiện 6 người dùng</option>
                                        <option value="9" {{ $users->perPage() == 9 ? 'selected disabled' : ''  }}>Hiện 9 người dùng</option>
                                        <option value="12" {{ $users->perPage() == 12 ? 'selected disabled' : ''  }}>Hiện 12 người dùng</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($users as $user)
                            <div class="col-md-4">
                                <!-- Widget: user widget style 1 -->
                                <div class="card card-widget widget-user shadow">
                                    <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="widget-user-header bg-info">
                                        <h3 class="widget-user-username">{{ $user['last_name'] }} {{ $user['first_name'] }}</h3>
                                        <h5 class="widget-user-desc">{{ $user['faculty']['name'] }}</h5>
                                    </div>
                                    <div class="widget-user-image">
                                        <div style="position: relative; height: 90px; width: 90px; overflow: hidden; border-radius: 50%; border: #fff solid 3px;     box-shadow: 0 1px 11px -2px #00000050;">
                                            <img class="elevation-2" src="{{ asset($user->avatar ?? "dist/img/avatar5.png") }}" alt="{{ $user['nickname'] }}" style="height: 100%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <!-- /.col -->
                                            <div class="col-sm-6 border-right">
                                                <div class="description-block">
                                                    <a href="{{ route('admin.user.edit', [$khoa['slug'], $user['id']]) }}" class="btn btn-info w-100"><i class="fa fa-edit"></i> Sửa</a>
                                                </div>
                                                <!-- /.description-block -->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="description-block">
                                                    <div class="description-block">
                                                        <a href="{{ route('admin.user.delete', [$khoa['slug'], $user['id']]) }}" class="btn btn-danger w-100"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- /.description-block -->
                                            </div><!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                        <div class="row pt-2">
                                            <ul class="nav flex-column w-100">
                                                @foreach ($user['roles'] as $role)
                                                <li class="nav-item">
                                                    <a href="javascript:" class="nav-link text-center">
                                                        {{ $role['display_name'] }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-5 hidden-xs">
                                <div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite">
                                    <strong>Trang {{ $users->currentPage() }} / {{ $users->lastPage() }}</strong>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div>
                                    <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                                        {{ $users->links() }}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection
