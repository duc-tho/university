@extends('server.index')
@section('title', 'Quản Trị Danh Mục Footer')
@section('page-title', 'Danh Mục Footer')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between">
                        <a href="{{route('admin.footer_link_category.create', [$khoa->slug])}}">
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-plus"></i> Thêm Danh Mục Footer
                            </button>
                        </a>
                        <div class="ml-auto d-inline-block">
                            <div class="input-group input-group-sm">
                                <form action="{{ route('admin.footer_link_category.show', [$khoa['slug']]) }}" method="get">
                                    <select class="form-control custon-select" style="width:auto !important" data-toggle="tooltip" name="item-per-page" onchange="this.parentElement.submit();">
                                        <option value="6" {{ $footer_link_category_list->perPage() == 8 ? 'selected disabled' : ''  }}>Hiện 8 mục</option>
                                        <option value="9" {{ $footer_link_category_list->perPage() == 12 ? 'selected disabled' : ''  }}>Hiện 12 mục</option>
                                        <option value="12" {{ $footer_link_category_list->perPage() == 16 ? 'selected disabled' : ''  }}>Hiện 16 mục</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($footer_link_category_list as $footer_link_category)
                            <div class="col-md-3 col-sm-6 col-12">
                                <a href="{{ route('admin.footer_link_category.edit', [$khoa['slug'], $footer_link_category['id']]) }}">
                                    <div class="info-box shadow">
                                        <span class="info-box-icon bg-success color-palette"><i class="fas fa-list-ol"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text font-weight-bold text-dark">{{ $footer_link_category['title'] }}</span>
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
                                <div class="dataTables_info" id="example-datatable_info" footer_link_category_list="status" aria-live="polite">
                                    {{-- <strong>Trang {{ $footer_link_category_list->currentPage() }} / {{ $footer_link_category_list->lastPage() }}</strong> --}}
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div>
                                    <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                                        {{-- {{ $footer_link_category_list->links() }} --}}
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
