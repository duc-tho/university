@extends('server.index')
@section('title', 'Quản Trị Chuyên Mục')
@section('page-title', 'Quản Trị Chuyên Mục')
@section('page-content')
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-2 d-flex align-items-center justify-content-between">
                            <a href="{{ route('admin.category.create', [$khoa->slug]) }}">
                                <button class="btn btn-info btn-sm">
                                    <i class="fas fa-plus"></i> Thêm Danh Mục
                                </button>
                            </a>
                            <div class="ml-auto d-inline-block">
                                <div class="input-group input-group-sm">
                                    <form action="{{ route('admin.category.show', [$khoa['slug']]) }}" method="get">
                                        <select class="form-control custon-select" style="width:auto !important"
                                            data-toggle="tooltip" name="item-per-page"
                                            onchange="this.parentElement.submit();">
                                            <option value="6"
                                                {{ $category_list->perPage() == 6 ? 'selected disabled' : '' }}>Hiện 6
                                                mục</option>
                                            <option value="9"
                                                {{ $category_list->perPage() == 9 ? 'selected disabled' : '' }}>Hiện 9
                                                mục</option>
                                            <option value="12"
                                                {{ $category_list->perPage() == 12 ? 'selected disabled' : '' }}>Hiện 12
                                                mục</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body pb-0">
                            <div class="row d-flex align-items-stretch">
                                @foreach ($category_list as $category)
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <a href="{{ route('admin.category.edit', [$khoa['slug'], $category['id']]) }}">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-number">{{ $category->title }}</span>
                                                <span class="info-box-text">Tạo ngày :
                                                    {{ ConvertDatabaseTimeToDMY($category['created_at']) }}</span>
                                                <span class="info-box-text">
                                                    Trạng Thái:
                                                    @switch($category->status)
                                                        @case(1)
                                                        <span class="text-center">Hoạt Động</span>
                                                        @break
                                                        @case(0)
                                                        <span class="text-center">Không Hoạt Động</span>
                                                        @break
                                                        @default
                                                    @endswitch
                                                </span>
                                                <span class="progress-description">
                                                    Người Tạo: {{ $category->created_by }}
                                                </span>
                                                @if($category->parent_id==0)
                                                <span class="progress-description">Không thuộc mục nào</span>
                                                @else
                                                @foreach ($category_list as $category2)
                                                @if ($category->parent_id == $category2->id)
                                                <span class="progress-description">Thuộc mục : {{$category2->title}}</span>
                                                @endif
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                @endforeach
                                {{-- @foreach ($category_list as $category)
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                        <div class="card bg-light">
                                            <div class="card-header text-muted border-bottom-0">
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7 ">
                                                        <h2 class="lead text-max"><b>{{ $category->title }}</b></h2>
                                                        <p class="text-muted text-sm text-max"><b>Tạo ngày : </b>
                                                            {{ ConvertDatabaseTimeToDMY($category['created_at']) }} </p>
                                                        <ul class="ml-4 mb-0 fa-ul text-max">
                                                            <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-dice-d20"></i></span>Trạng Thái:
                                                                @switch($category->status)
                                                                    @case(1)
                                                                    <span class="text-center">Hoạt Động</span>
                                                                    @break
                                                                    @case(0)
                                                                    <span class="text-center">Không Hoạt Động</span>
                                                                    @break
                                                                    @default
                                                                @endswitch
                                                                <br><br>
                                                            <li class="small"><span class="fa-li"><i class="fas fa-chalkboard-teacher"></i></span>Người Tạo:
                                                                {{ $category->created_by }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <img src="{{ asset($category->image ?? 'dist/img/imgdefault.png') }}"
                                                            alt="image" class="img-circle img-fluid img-max
                                                            ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a href="{{ route('admin.category.edit', [$khoa['slug'], $category['id']]) }}"
                                                        class="btn btn-sm bg-teal">
                                                        <i class="fas fa-user-edit"></i> Sửa
                                                    </a>
                                                    <a href="{{ route('admin.category.delete', [$khoa['slug'], $category['id']]) }}"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa !')">
                                                        <i class="fas fa-exclamation-triangle"></i> Xóa
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach --}}

                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-5 hidden-xs">
                                    <div class="dataTables_info" id="example-datatable_info" role="status"
                                        aria-live="polite">
                                        <strong>Trang {{ $category_list->currentPage() }} /
                                            {{ $category_list->lastPage() }}</strong>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-xs-12">
                                    <div>
                                        <ul class="pagination pagination-sm mb-0 d-flex justify-content-end">
                                            {{ $category_list->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
