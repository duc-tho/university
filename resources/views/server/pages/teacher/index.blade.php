@extends('server.index')
@section('title', 'Quản Trị Giảng Viên')
@section('page-title', 'Quản Trị Giảng Viên')
@section('page-content')
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-2 d-flex align-items-center justify-content-between">
                            <a href="{{ route('admin.teacher.create', [$khoa->slug]) }}">
                                <button class="btn btn-info btn-sm">
                                    <i class="fas fa-plus"></i> Thêm Giảng Viên
                                </button>
                            </a>
                            <div class="ml-auto d-inline-block">
                                <div class="input-group input-group-sm">
                                    <form action="{{ route('admin.teacher.show', [$khoa['slug']]) }}" method="get">
                                        <select class="form-control custon-select" style="width:auto !important"
                                            data-toggle="tooltip" name="item-per-page"
                                            onchange="this.parentElement.submit();">
                                            <option value="6"
                                                {{ $teacher_list->perPage() == 6 ? 'selected disabled' : '' }}>Hiện 6 mục
                                            </option>
                                            <option value="9"
                                                {{ $teacher_list->perPage() == 9 ? 'selected disabled' : '' }}>Hiện 9 mục
                                            </option>
                                            <option value="12"
                                                {{ $teacher_list->perPage() == 12 ? 'selected disabled' : '' }}>Hiện 12
                                                mục</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body pb-0">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($teacher_list as $teacher)
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                        <div class="card bg-light">
                                            <div class="card-header text-muted border-bottom-0">
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="lead text-max"><b>{{ $teacher->name }}</b></h2>
                                                        <p class="text-muted text-sm text-max"><b>Tạo ngày : </b>
                                                            {{ ConvertDatabaseTimeToDMY($teacher['created_at']) }}
                                                        </p>
                                                        <ul class="ml-4 mb-0 fa-ul text-muted text-max">
                                                            <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-dice-d20"></i></span>Trạng Thái:
                                                                @switch($teacher->status)
                                                                    @case(1)
                                                                    <span class="text-center">Hoạt Động</span>
                                                                    @break
                                                                    @case(0)
                                                                    <span class="text-center">Không Hoạt Động</span>
                                                                    @break
                                                                    @default
                                                                @endswitch
                                                                <br><br>
                                                            <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-chalkboard-teacher"></i></span>Người
                                                                Tạo:
                                                                {{ $teacher->created_by }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <img src="{{ asset($teacher->image) }}" alt="sdfsdf"
                                                            class="img-circle img-fluid img-max">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a href="{{ route('admin.teacher.edit', [$khoa['slug'], $teacher['id']]) }}"
                                                        class="btn btn-sm bg-teal">
                                                        <i class="fas fa-user-edit"></i> Sửa
                                                    </a>
                                                    <a href="{{ route('admin.teacher.delete', [$khoa['slug'], $teacher['id']]) }}"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                                        <i class="fas fa-exclamation-triangle"></i> Xóa
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-5 hidden-xs">
                                    <div class="dataTables_info" id="example-datatable_info" role="status"
                                        aria-live="polite">
                                        <strong>Trang {{ $teacher_list->currentPage() }} /
                                            {{ $teacher_list->lastPage() }}</strong>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-xs-12">
                                    <div>
                                        <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                                            {{ $teacher_list->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </div>
@endsection
