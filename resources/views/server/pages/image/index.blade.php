@extends('server.index')
@section('title', 'Quản Trị hình ảnh')
@section('page-title', 'Các hình ảnh')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between px-4">
                        <a href="{{route('admin.image.create', [$khoa->slug])}}">
                            <button class="btn btn-info btn-sm">
                                <i class="fas fa-plus"></i> Thêm hình ảnh
                            </button>
                        </a>
                        {{-- <div class="ml-auto d-inline-block">
                            <div class="input-group input-group-sm">
                                <form action="{{ route('admin.image.show', [$khoa['slug']]) }}" method="get">
                        <select class="form-control custon-select" style="width:auto !important" data-toggle="tooltip" name="item-per-page" onchange="this.parentElement.submit();">
                            <option value="6" {{ $images->perPage() == 8 ? 'selected disabled' : ''  }}>Hiện 8 mục</option>
                            <option value="9" {{ $images->perPage() == 12 ? 'selected disabled' : ''  }}>Hiện 12 mục</option>
                            <option value="12" {{ $images->perPage() == 16 ? 'selected disabled' : ''  }}>Hiện 16 mục</option>
                        </select>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($image_category_list as $category_item)
                    <div class="col-md-3 col-sm-6 col-12">
                        <a href="{{ route('admin.image.show', [$khoa['slug'], 'category' => $category_item['id']]) }}">
                            <div class="info-box shadow">
                                {{-- <span class="info-box-icon bg-success color-palette"><i class="fas fa-list-ol"></i></span> --}}

                                <div class="info-box-content" style="width: 100%;">
                                    <span class="info-box-text font-weight-bold text-dark">{{ $category_item['title'] }}</span>
                                    <span class="info-box-text font-weight-bold text-secondary">{{ $category_item->parent['title'] ?? 'Danh mục cha' }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                    </div>
                    @endforeach

                    @if ($image_category)
                    <hr class="w-100 mx-3">
                    <div class="col-12 px-3 pb-3">
                        <h4 class="mb-2">Các hình ảnh về {{ $image_category['title'] }}</h4>
                    </div>
                    <div class="row px-3">
                        @foreach ($image_category->images as $image)
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset($image['image']) }}" alt="{{ $image['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $image['title'] ?? 'Chưa có tiêu đề ảnh'}}</h5>
                                    <p class="card-text text-muted" style="font-size: small;">{{ $image['description'] ?? 'Chưa có mô tả về ảnh' }}</p>
                                    <small class="text-muted d-block"><i class="fas fa-info-circle"></i> Trạng thái: <span class="text-success">{{ $image['status'] == 1 ? 'Hoạt động' : 'Tắt' }}</span></small>
                                    <small class="text-muted d-block"><i class="fas fa-info-circle"></i> Tạo bởi: {{ $image['created_by'] ?? '?' }} / {{ ConvertDatabaseTimeToDMY($image['created_at']) }}</small>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <div class="d-flex" style="gap: 5px;">
                                        <a href="{{ route('admin.image.edit', [$khoa->slug, $image['id']]) }}">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Sửa
                                            </button>
                                        </a>
                                        <a href="{{ route('admin.image.delete', [$khoa->slug, $image['id']]) }}">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Xóa
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif



                </div>
            </div>

            <!-- /.card-body -->
            {{-- <div class="card-footer">
                <div class="row">
                    <div class="col-sm-5 hidden-xs">
                        <div class="dataTables_info" id="example-datatable_info" image="status" aria-live="polite">
                            <strong>Trang {{ $images->currentPage() }} / {{ $images->lastPage() }}</strong>
        </div>
    </div>
    <div class="col-sm-7 col-xs-12">
        <div>
            <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                {{ $images->links() }}
            </ul>
        </div>
    </div>
</div>
</div> --}}
</div>
<!-- /.card -->
</div>
</div>
</div><!-- /.container-fluid -->
</div>
@endsection
