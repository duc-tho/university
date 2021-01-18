@extends('server.index')
@section('title', 'Admin Home')
@section('page-title', 'Admin Home')

@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>

                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div><!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Special title treatment</h6>

                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Special title treatment</h6>

                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2 d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-info btn-sm">
                            <i class="fas fa-plus"></i>
                        </button>
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



                                    <th style="width:15%" class="text-center">
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
                                    </th>

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
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Lọc</button>
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr role="row">

                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_ID&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_ID&amp;sort=desc&amp;rows_per_page=10&amp;page=1">ID</a></th>


                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Name&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Name&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Tên</a></th>



                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_NewsCat%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_NewsCat%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Chuyên mục</a></th>




                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Author%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Author%09&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Viết bài</a></th>

                                    <th class="text-center sorting_desc" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1">Sửa bài</a></th>

                                    <th class="text-center sorting_desc" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_Datetime&amp;sort=asc&amp;rows_per_page=10&amp;page=1">Ngày đăng</a></th>


                                    <th class="text-center sorting" onclick="window.location.href='http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_CountView&amp;sort=desc&amp;rows_per_page=10&amp;page=1'"><a
                                            href="http://daihocdulich.edu.vn/admin3917/display/statistics.tpl/?News_ID=&amp;News_Name=&amp;News_UserEdit=&amp;News_Author=&amp;News_CountView=&amp;News_Datetime=&amp;News_Datetime_From=&amp;News_Datetime_To=&amp;order_by=News_CountView&amp;sort=desc&amp;rows_per_page=10&amp;page=1">Xem</a></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr role="row">
                                    <td class="text-center">1592</td>

                                    <td class="text-left">Thông báo kết quả thi chứng chỉ tin học B lớp khai giảng ngày 17/11/2020</td>

                                    <td class="text-center">Thông báo Trung tâm NN-TH</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-10</td>

                                    <td class="text-center">9</td>



                                </tr>
                                <tr role="row">

                                    <td class="text-center">1591</td>

                                    <td class="text-left">Thông báo lịch thi cuối kỳ khóa 15 học kỳ 1 năm học 2020-2021 Khoa Nghệ thuật, Mỹ thuật Công nghiệp</td>

                                    <td class="text-center">Thông báo phòng Đào tạo</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-10</td>

                                    <td class="text-center">17</td>



                                </tr>
                                <tr role="row">

                                    <td class="text-center">1588</td>

                                    <td class="text-left">Thông báo lịch thi cuối kỳ khóa 15 học kỳ I năm học 2020-2021 Khoa Kinh tế - Du lịch</td>

                                    <td class="text-center">Thông báo phòng Đào tạo</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-07</td>

                                    <td class="text-center">32</td>



                                </tr>
                                <tr role="row">

                                    <td class="text-center">1589</td>

                                    <td class="text-left">Thông báo lịch thi cuối kỳ khóa 15 học kỳ I năm học 2020 - 2021 Khoa Nghệ thuật và Mỹ thuật công nghiệp</td>

                                    <td class="text-center">Thông báo phòng Đào tạo</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-07</td>

                                    <td class="text-center">27</td>



                                </tr>
                                <tr role="row">

                                    <td class="text-center">1590</td>

                                    <td class="text-left">Thông báo lịch thi cuối kỳ khóa 15 học kỳ I năm học 2020-2021 Khoa Ngoại ngữ</td>

                                    <td class="text-center">Thông báo phòng Đào tạo</td>

                                    <td class="text-center">Kim Nga</td>

                                    <td class="text-center">
                                        Kim Nga </td>

                                    <td class="text-center">2021-01-07</td>

                                    <td class="text-center">37</td>



                                </tr>
                                <tr role="row">

                                    <td class="text-center">1587</td>

                                    <td class="text-left">Thông báo thời khóa biểu lớp Ielts 1 khóa 14, 15 khai giảng ngày 17/12/2020</td>

                                    <td class="text-center">Thông báo Trung tâm NN-TH</td>
                                    <td class="text-center">Hậu Hoàng</td>
                                    <td class="text-center">
                                        Hậu Hoàng </td>
                                    <td class="text-center">2020-12-28</td>
                                    <td class="text-center">40</td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1586</td>
                                    <td class="text-left">Thông báo lịch thi chứng chỉ tin học B lớp khai giảng ngày 17/11/2020</td>
                                    <td class="text-center">Thông báo Trung tâm NN-TH</td>
                                    <td class="text-center">Kim Nga</td>
                                    <td class="text-center">
                                        Kim Nga </td>
                                    <td class="text-center">2020-12-24</td>
                                    <td class="text-center">52</td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1585</td>
                                    <td class="text-left">Thông báo về việc thay đổi phòng thi lịch thi cuối kỳ khóa 13,14 học kỳ I năm học 2020-2021</td>
                                    <td class="text-center">Thông báo phòng Đào tạo</td>
                                    <td class="text-center">Kim Nga</td>
                                    <td class="text-center">
                                        Kim Nga </td>
                                    <td class="text-center">2020-12-22</td>
                                    <td class="text-center">129</td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1580</td>
                                    <td class="text-left">Thông báo về "Danh sách sinh viên đủ điều kiện công nhận và cấp bằng tốt nghiệp - Hệ cao đẳng chính quy khóa 8,9,10,11,12 - Đợt thi tốt nghiệp tháng 11/2020</td>
                                    <td class="text-center">Thông báo phòng Đào tạo</td>
                                    <td class="text-center">Hậu Hoàng</td>
                                    <td class="text-center">
                                        Hậu Hoàng </td>
                                    <td class="text-center">2020-12-21</td>
                                    <td class="text-center">69</td>
                                </tr>
                                <tr role="row">
                                    <td class="text-center">1581</td>
                                    <td class="text-left">Thông báo "Danh sách sinh viên không đủ điều kiện công nhận và cấp bằng tốt nghiệp - Hệ cao đẳng chính quy khóa 8,9,10,11,12 - Đợt thi tốt nghiệp tháng 11/2020</td>
                                    <td class="text-center">Thông báo phòng Đào tạo</td>
                                    <td class="text-center">Hậu Hoàng</td>
                                    <td class="text-center">
                                        Hậu Hoàng </td>
                                    <td class="text-center">2020-12-21</td>
                                    <td class="text-center">67</td>
                                </tr>
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
<!-- /.content -->
@endsection
