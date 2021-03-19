@extends('server.index')
@section('title', 'Quản Trị Tin Tức - Thông Báo')
@section('page-title', 'Quản Trị Tin Tức - Thông Báo')
@section('page-content')
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-2 d-flex align-items-center justify-content-between">
                            <a href="{{route('admin.news.create', [$khoa->slug])}}">
                                <button class="btn btn-info btn-sm">
                                    <i class="fas fa-plus"></i> Thêm dữ liệu
                                </button>
                            </a>
                            <div class="ml-auto d-inline-block">
                                <div class="input-group input-group-sm">
                                    <select class="form-control custon-select" style="width:auto !important"
                                        data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <option value="10" selected="">Hiện 10 mục</option>
                                        <option value="20">Hiện 25 mục</option>
                                        <option value="50">Hiện 50 mục</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap table-bordered table-hover">
                                <thead class="filter">
                                    <tr role="row">

                                        <th style="width:5%" class="text-center">
                                            <input class="form-control" type="text" name="News_ID" value="">
                                        </th>
                                        <th style="width:25%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:15%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:25%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:10%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:10%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:15%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:10%" class="text-center sorting_disabled">
                                            <button type="submit" class="btn btn-effect-ripple btn-primary"
                                                style="overflow: hidden; position: relative;">Special</button>
                                        </th>
                                    </tr>
                                </thead>
                                <thead>

                                    <tr role="row">
                                        <th class="text-center sorting">
                                            <a>ID</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a>Tiêu Đề</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a>Danh Mục </a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a>Hình Ảnh</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a>Thời Gian </a>
                                        </th>
                                        <th class="text-center sorting_desc">
                                            <a>Người tạo</a>
                                        </th>
                                        <th class="text-center sorting_desc">
                                            <a>Trạng Thái</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a><i class="fa fa-bolt"></i></a>
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($news_list as $news)
                                        <tr role="row">
                                            <td class="text-center">{{ $news->id }}</td>
                                            <td>{{ $news->title }}</td>

                                            @foreach ($categorylist as $category)
                                                @if ($category->id === $news->category_id)
                                                    <td class="text-center">{{$category->title}}</td>
                                                @break
                                                @endif
                                            @endforeach
                                            <td>
                                                <img width="200px" src="{{asset($news->image ?? "dist/img/imgdefault.png")}}" class="thumbnail">
                                            </td>
                                            <td class="text-center">{{ $news->event_time }}</td>
                                            <td class="text-center">{{ $news->created_by }}</td>

                                            @switch($news->status)
                                            @case(1)
                                            <td class="text-center">Đang Hoạt Động</td>
                                            @break
                                            @case(0)
                                            <td class="text-center">Ngưng Hoạt Động</td>
                                            @break
                                            @default
                                            @endswitch

                                            <td class="text-center">
                                                <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                                    <div class="mt-check-garden nutanhien">
                                                    <input id="{{$news->id}}" type="checkbox" >
                                                <label for="{{$news->id}}"> </label></div></label>
                                                    <!-- <input data-id="1579" type="checkbox" checked=""><span></span></label> -->
                                                <a href="{{ route('admin.news.edit', [$khoa['slug'], $news['id']]) }}" class="btn btn-warning btn-xs" >
                                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                                    Sửa</a>
                                                <a href="{{ route('admin.news.delete', [$khoa['slug'], $news['id']]) }}"  onclick="return confirm('Bạn có chắc chắn muốn xóa !')" class="btn btn-danger btn-xs"
                                                ><i class="fa fa-trash" aria-hidden="true"></i>
                                                    Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-5 hidden-xs">
                                    <div class="dataTables_info" id="example-datatable_info" role="status"
                                        aria-live="polite">
                                        <strong>1 / 57</strong>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-xs-12">
                                    <div>
                                        <ul class="pagination pagination-sm mb-0">
                                            <li class="page-item prev">
                                                <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item next">
                                                <a class="page-link" href="#"> <i class="fa fa-chevron-right"></i></a>
                                            </li>
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
