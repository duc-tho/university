@extends('server.index')
@section('title', 'Quản Trị số liệu')
@section('page-title', 'Danh sách số liệu')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between">
                        <a href="{{route('admin.statistic.create', [$khoa->slug])}}">
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-plus"></i> Thêm số liệu
                            </button>
                        </a>
                        <div class="ml-auto d-inline-block">
                            <div class="input-group input-group-sm">
                                <form action="{{ route('admin.statistic.show', [$khoa['slug']]) }}" method="get">
                                    <select class="form-control custon-select" style="width:auto !important" data-toggle="tooltip" name="item-per-page" onchange="this.parentElement.submit();">
                                        <option value="6" {{ $statistics->perPage() == 8 ? 'selected disabled' : ''  }}>Hiện 8 mục</option>
                                        <option value="9" {{ $statistics->perPage() == 12 ? 'selected disabled' : ''  }}>Hiện 12 mục</option>
                                        <option value="12" {{ $statistics->perPage() == 16 ? 'selected disabled' : ''  }}>Hiện 16 mục</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($statistics as $statistic)
                            <div class="col-md-3 col-sm-6 col-12">
                                <a href="{{ route('admin.statistic.edit', [$khoa['slug'], $statistic['id']]) }}">
                                    <div class="info-box shadow">
                                        <span class="info-box-icon bg-success color-palette"><i class="fas fa-list-ol"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text font-weight-bold text-dark">{{ $statistic['name'] }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-5 hidden-xs">
                                <div class="dataTables_info" id="example-datatable_info" statistic="status" aria-live="polite">
                                    <strong>Trang {{ $statistics->currentPage() }} / {{ $statistics->lastPage() }}</strong>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div>
                                    <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                                        {{ $statistics->links() }}
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
