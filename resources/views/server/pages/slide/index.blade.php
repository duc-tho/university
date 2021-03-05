@extends('server.index')
@section('title', 'Slide')
@section('page-title', 'Slide page')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between">
                        <a href="{{route('GetAddSlide')}}">
                        <button type="submit" class="btn btn-info btn-sm">
                            <i class="fas fa-plus"></i> Thêm slide
                        </button></a>
                        <div class="ml-auto d-inline-block">
                            <div class="input-group input-group-sm">
                                <select class="form-control custon-select" style="width:auto !important" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
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

                                    <th class="text-center">
                                        <input class="form-control" type="text" name="News_Name" value="">
                                    </th>

                                    <!-- <th style="width:15%" class="text-center">
                                        <select class="form-control" name="News_NewsCat">
                                            <option value="0">----- Tất cả ------</option>
                                            <option value="2">-Tin tuyển sinh 2020</option>
                                            <option value="132"> &nbsp;&nbsp;&nbsp;&nbsp;-Hướng dẫn đăng ký hồ sơ xét tuyển</option>


                                            <option value="212"> &nbsp;&nbsp;&nbsp;&nbsp;-Từ SAIGONACT đến SAIGONTU</option>

                                            <option value="133">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Học phí - Học bổng</option>
                                            <option value="134">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Điều kiện học tập</option>
                                            <option value="135">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Chuẩn đầu ra</option>
                                            <option value="136">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Cơ hội việc làm</option>
                                            <option value="137">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Dịch vụ hỗ trợ sinh viên</option>
                                            <option value="138">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Đào tạo chất lượng cao</option>

                                            <option value="217"> &nbsp;&nbsp;&nbsp;&nbsp;-Tin tuyển sinh</option>


                                            <option value="5">-Sinh viên</option>
                                            <option value="140"> &nbsp;&nbsp;&nbsp;&nbsp;-Thông báo</option>

                                            <option value="203">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Thông báo Trung tâm NN-TH</option>
                                            <option value="204">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Thông báo phòng Đào tạo</option>
                                            <option value="205">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Thông báo phòng Công tác HSSV</option>
                                            <option value="209">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Trung tâm Thực tập</option>
                                            <option value="211">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Phòng Tài chính kế toán</option>

                                            <option value="145"> &nbsp;&nbsp;&nbsp;&nbsp;-Thực tập - Kiến tập</option>


                                            <option value="201"> &nbsp;&nbsp;&nbsp;&nbsp;-Việc làm</option>


                                            <option value="7">-Doanh nghiệp</option>
                                            <option value="155"> &nbsp;&nbsp;&nbsp;&nbsp;-Doanh nghiệp đối tác</option>


                                            <option value="156"> &nbsp;&nbsp;&nbsp;&nbsp;-Liên kết doanh nghiệp</option>


                                            <option value="157"> &nbsp;&nbsp;&nbsp;&nbsp;-Hợp tác doanh nghiệp</option>


                                            <option value="8">-Quốc tế</option>
                                            <option value="158"> &nbsp;&nbsp;&nbsp;&nbsp;-Hợp tác quốc tế</option>


                                            <option value="159"> &nbsp;&nbsp;&nbsp;&nbsp;-Đào tạo quốc tế</option>


                                            <option value="160"> &nbsp;&nbsp;&nbsp;&nbsp;-Liên kết quốc tế</option>


                                            <option value="161"> &nbsp;&nbsp;&nbsp;&nbsp;-Hội thảo quốc tế</option>


                                            <option value="9">-Tin tức</option>
                                            <option value="63"> &nbsp;&nbsp;&nbsp;&nbsp;-Tin tức - Hoạt động Saigonact</option>


                                            <option value="195"> &nbsp;&nbsp;&nbsp;&nbsp;-Chương trình học</option>


                                            <option value="197"> &nbsp;&nbsp;&nbsp;&nbsp;-Du học - Học bổng</option>


                                            <option value="198"> &nbsp;&nbsp;&nbsp;&nbsp;-Hướng nghiệp - Việc làm</option>


                                            <option value="200"> &nbsp;&nbsp;&nbsp;&nbsp;-Tuyển dụng</option>


                                            <option value="202"> &nbsp;&nbsp;&nbsp;&nbsp;-Cựu sinh viên</option>


                                            <option value="234"> &nbsp;&nbsp;&nbsp;&nbsp;-Hoạt động sinh viên</option>


                                            <option value="71">-Hợp tác - Nghiên cứu</option>
                                            <option value="126">-TUYỂN SINH</option>
                                            <option value="128"> &nbsp;&nbsp;&nbsp;&nbsp;-Tuyển sinh Cao đẳng</option>

                                            <option value="228">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Thông Báo</option>
                                            <option value="229">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Ngành Đào Tạo</option>

                                            <option value="129"> &nbsp;&nbsp;&nbsp;&nbsp;-Tuyển sinh Trung cấp</option>

                                            <option value="232">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Thông Báo</option>
                                            <option value="233">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;-Ngành đào tạo</option>

                                            <option value="213"> &nbsp;&nbsp;&nbsp;&nbsp;-Tuyển sinh trực tuyến</option>


                                            <option value="131">-10 lý do chọn SAIGONACT</option>
                                            <option value="185">-Trung tâm</option>
                                            <option value="190">-Đảng - Đoàn thể</option>
                                            <option value="191"> &nbsp;&nbsp;&nbsp;&nbsp;-Chi bộ Đảng</option>


                                            <option value="192"> &nbsp;&nbsp;&nbsp;&nbsp;-Công Đoàn</option>


                                            <option value="193"> &nbsp;&nbsp;&nbsp;&nbsp;-Đoàn Thanh niên</option>


                                            <option value="194"> &nbsp;&nbsp;&nbsp;&nbsp;-Hội Sinh viên</option>


                                        </select>
                                    </th> -->

                                    <th style="width:15%" class="text-center">
                                        <select class="form-control" name="News_Author">
                                            <option value="0">--Tất cả--</option>
                                            <option value="35">ADMIN</option>
                                            <option value="42">Duy Trần</option>
                                            <option value="44">Kim Nga</option>
                                            <option value="45">Hậu Hoàng</option>
                                        </select>
                                    </th>

                                    <th style="width:15%" class="text-center">
                                        <select class="form-control" name="News_UserEdit">
                                            <option value="0">--Tất cả--</option>
                                            <option value="35">ADMIN</option>
                                            <option value="42">Duy Trần</option>
                                            <option value="44">Kim Nga</option>
                                            <option value="45">Hậu Hoàng</option>
                                        </select>
                                    </th>

                                    <th style="width:15%" class="text-center">
                                        <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                            <input type="text" id="News_Datetime_From" name="News_Datetime_From" class="form-control" placeholder="Từ" value="">
                                            <span class="form-control px-1"><i class="fa fa-chevron-right"></i></span>
                                            <input type="text" id="News_Datetime_To" name="News_Datetime_To" class="form-control" placeholder="Đến" value="">
                                        </div>
                                    </th>

                                    <th style="width:5%" class="text-center sorting_disabled">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Special</button>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <thead>
                                <tr role="row">
                                    
                                

                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_ID&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_ID&amp;sort=desc&amp;rows_per_page=10&amp;page=1">ID</a></th>


                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Name&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Name&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Hình ảnh</a></th>



                                    <!-- <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_NewsCat%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_NewsCat%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1">số thứ tự</a></th> -->




                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Author%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Author%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Viết bài</a></th>

                                    <th class="text-center sorting_desc" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1">Sửa bài</a></th>

                                    <th class="text-center sorting_desc" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1">Ngày đăng</a></th>


                                    <!-- <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_CountView&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_CountView&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Xem</a></th> -->
                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_CountView&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                    href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_CountView&amp;sort=desc&amp;rows_per_page=10&amp;page=1"><i class="fa fa-bolt"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($slidelist as $item)
                                <tr role="row">
                                    <td class="text-center">{{$item -> id}}</td>

                                    <td>
										<img width="200px"  src="{{asset($item -> link)}}" class="thumbnail">
									</td>
                                  
                                    <td class="text-center">{{$item -> created_by }}</td>

                                    <td class="text-center">
                                        {{$item -> updated_by}} </td>

                                    <td class="text-center">{{$item->created_at}}</td>

                                   
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="{{$item->id}}" type="checkbox" >
                                        <label for="{{$item->id}}"> </label></div></label>
                                        <!-- <input data-id="1579" type="checkbox" checked=""><span></span></label> -->
                                        <a href="{{asset('admin/slide/edit/'.$item->id)}}" class="btn btn-warning btn-xs" title="" style="overflow: hidden;position: relative;" data-toggle="tooltip" data-original-title="Sửa"><i class="fa fa-flag"  aria-hidden="true"></i> Sửa</a>
                                        <a href="{{asset('admin/slide/delete/'.$item->id)}}" class="btn btn-danger btn-xs" title="" style="overflow: hidden;position: relative;" data-toggle="tooltip" data-original-title="Xóa"><i class="fa fa-trash"  aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- <tr role="row">

                                    <td class="text-center">1591</td>

                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-10</td>

                                    
                                    <td class="text-center">
                                    <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="2" type="checkbox" >
                                        <label for="2"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>


                                </tr>
                                <tr role="row">

                                    <td class="text-center">1588</td>

                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-07</td>

                                   
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="3" type="checkbox" >
                                        <label for="3"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>


                                </tr>
                                <tr role="row">

                                    <td class="text-center">1589</td>

                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-07</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="4" type="checkbox" >
                                        <label for="4"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                        
                                </tr>
                                <tr role="row">

                                    <td class="text-center">1590</td>

                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-07</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="5" type="checkbox" >
                                        <label for="5"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                <tr role="row">

                                    <td class="text-center">1587</td>

                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>
                                   
                                    <td class="text-center">Hậu Hoàng</td>
                                    <td class="text-center">
                                        Hậu Hoàng </td>
                                    <td class="text-center">2020-12-28</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="6" type="checkbox" >
                                        <label for="6"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1586</td>
                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>
                                    
                                    <td class="text-center">Kim Nga</td>
                                    <td class="text-center">
                                        Kim Nga </td>
                                    <td class="text-center">2020-12-24</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="7" type="checkbox" >
                                        <label for="7"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1585</td>
                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>
                               
                                    <td class="text-center">Kim Nga</td>
                                    <td class="text-center">
                                        Kim Nga </td>
                                    <td class="text-center">2020-12-22</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="8" type="checkbox" >
                                        <label for="8"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1580</td>
                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>
                                    
                                    <td class="text-center">Hậu Hoàng</td>
                                    <td class="text-center">
                                        Hậu Hoàng </td>
                                    <td class="text-center">2020-12-21</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="9" type="checkbox" >
                                        <label for="9"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1581</td>
                                    <td>
										<img width="200px" src="img/iphone7-plus-black-select-2016.jpg" class="thumbnail">
									</td>
                                    <td class="text-center">Hậu Hoàng</td>
                                    <td class="text-center">
                                        Hậu Hoàng </td>
                                    <td class="text-center">2020-12-21</td>
                                    <td class="text-center">
                                        <label class="status switch switch-primary" data-toggle="tooltip" title="" data-original-title="Xuất bản">
                                        <div class="mt-check-garden nutanhien">
                                        <input id="10" type="checkbox" >
                                        <label for="10"> </label></div></label>
                                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-flag" aria-hidden="true"></i> Sửa</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr> -->
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-5 hidden-xs">
                                <div class="dataTables_info" id="example-datatable_info" role="status" aria-live="polite">
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