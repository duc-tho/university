@extends('server.index')
@section('title', 'Quản Trị Khoa')
@section('page-title', 'Quản Trị Khoa')
@section('page-content')
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header p-2 d-flex align-items-center justify-content-between">
                            <a href="{{ route('GetAddFaculty') }}">
                                <button class="btn btn-info btn-sm">
                                    <i class="fas fa-plus"></i> Thêm Khoa
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

                                        <th style="width:15%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:25%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                        </th>
                                        <th style="width:10%" class="text-center">
                                            <input class="form-control" type="text" name="News_Name" value="">
                                            {{-- <select class="form-control" name="News_Author">
                                                <option value="0">--Tất cả--</option>
                                                <option value="35">ADMIN</option>
                                                <option value="42">Duy Trần</option>
                                                <option value="44">Kim Nga</option>
                                                <option value="45">Hậu Hoàng</option>
                                            </select> --}}
                                        </th>
                                        <th style="width:15%" class="text-center">
                                            <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                <input type="text" id="News_Datetime_From" name="News_Datetime_From"
                                                    class="form-control" placeholder="Từ" value="">
                                                <span class="form-control px-1"><i class="fa fa-chevron-right"></i></span>
                                                <input type="text" id="News_Datetime_To" name="News_Datetime_To"
                                                    class="form-control" placeholder="Đến" value="">
                                            </div>
                                        </th>
                                        <th style="width:15%" class="text-center">
                                            <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                <input type="text" id="News_Datetime_From" name="News_Datetime_From"
                                                    class="form-control" placeholder="Từ" value="">
                                                <span class="form-control px-1"><i class="fa fa-chevron-right"></i></span>
                                                <input type="text" id="News_Datetime_To" name="News_Datetime_To"
                                                    class="form-control" placeholder="Đến" value="">
                                            </div>
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
                                            <a> Tên Khoa</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a> Hình ảnh</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a>Giới Thiệu Tóm Tắt</a>
                                        </th>
                                        <th class="text-center sorting_desc">
                                            <a>Người tạo</a>
                                        </th>
                                        <th class="text-center sorting_desc">
                                            <a>Người đăng</a>
                                        </th>
                                        <th class="text-center sorting">
                                            <a><i class="fa fa-bolt"></i></a>
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($facultylist as $faculty)
                                        <tr role="row">
                                            <td class="text-center">{{ $faculty->id }}</td>
                                            <td> {{ $faculty->name }}</td>
                                            <td>
                                                <img width="200px" src="{{asset($faculty->image)}}" class="thumbnail">
                                            </td>
                                            <td class="text-center">{!! $faculty->intro_summary !!}</td>
                                            <td class="text-center">{{ $faculty->created_by }}</td>
                                            <td class="text-center">{{ $faculty->updated_by }}</td>
                                            <td class="text-center">
                                                <label class="status switch switch-primary" data-toggle="tooltip" title=""
                                                    data-original-title="Xuất bản">
                                                    <input data-id="1579" type="checkbox" checked=""><span></span></label>
                                                <a href="{{asset('admin/faculty/edit/'.$faculty->id)}}" class="btn btn-warning btn-xs" >
                                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                                    Sửa</a>
                                                <a href="{{asset('admin/faculty/delete/'.$faculty->id)}}"  onclick="return confirm('Bạn có chắc chắn muốn xóa !')" class="btn btn-danger btn-xs"
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
