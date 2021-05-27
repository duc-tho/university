@extends('admin::index')
@section('title', 'Quản Trị Giới Thiệu ')
@section('page-title', 'Quản Trị Giới Thiệu ')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between">
                        <a href="{{ route('admin.about.create', [$khoa->slug]) }}">
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-plus"></i> Thêm Giới Thiệu
                            </button>
                        </a>
                        <div class="ml-auto d-inline-block">
                            <div class="input-group input-group-sm">
                                <form action="{{ route('admin.about.show', [$khoa['slug']]) }}" method="get">
                                    <select class="form-control custon-select" style="width:auto !important" data-toggle="tooltip" name="item-per-page" onchange="this.parentElement.submit();">
                                        <option value="6" {{ $about_list->perPage() == 6 ? 'selected disabled' : '' }}>Hiện 6 mục
                                        </option>
                                        <option value="9" {{ $about_list->perPage() == 9 ? 'selected disabled' : '' }}>Hiện 9 mục
                                        </option>
                                        <option value="12" {{ $about_list->perPage() == 12 ? 'selected disabled' : '' }}>Hiện 12 mục
                                        </option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            @foreach ($about_list as $about)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light shadow">
                                    <div class="card-header text-dark bg-secondary">
                                        <h5 class="m-0 text-center" style="overflow: hidden;text-overflow: ellipsis;">
                                            <b style="white-space: nowrap;">{{ $about->title }}</b>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-center">
                                                <img src="{{ asset($about->image ?? 'dist/img/imgdefault.png') }}" alt="Don't have any image!" class="img-fluid rounded">
                                            </div>
                                            <div class="col-7">
                                                <div class="text-muted text-sm text-max">
                                                    <b>Trạng thái: </b>
                                                    <span class="text-center {{ $about->status == 1 ? 'text-success' : 'text-danger' }}">
                                                        {{ $about->status == 1 ? 'Công khai' : 'Không công khai' }}
                                                    </span>
                                                </div>
                                                <div class="text-muted text-sm text-max">
                                                    <b>Tạo ngày: </b>
                                                    {{ ConvertDatabaseTimeToDMY($about['created_at']) }}
                                                </div>
                                                <div class="text-muted text-sm text-max">
                                                    <b>Chỉnh sửa: </b>
                                                    {{ ConvertDatabaseTimeToDMY($about['updated_at']) ?? 'Chưa bao giờ' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer card-footer bg-light p-2 d-flex justify-content-center">
                                        <div class="text-right">
                                            <a href="{{ route('admin.about.edit', [$khoa['slug'], $about['id']]) }}" class="btn btn-sm bg-teal">
                                                <i class="fas fa-user-edit"></i> Sửa
                                            </a>
                                            <a href="{{ route('admin.about.delete', [$khoa['slug'], $about['id']]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                                <i class="fas fa-exclamation-triangle"></i> Xóa
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-5 hidden-xs">
                                <div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite">
                                    <strong>Trang {{ $about_list->currentPage() }} /
                                        {{ $about_list->lastPage() }}</strong>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div>
                                    <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                                        {{ $about_list->links() }}
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
