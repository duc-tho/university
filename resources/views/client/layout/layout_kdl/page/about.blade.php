@extends('client.layout.layout_kdl.index')
@section('title','Giới Thiệu')
@section('main')
<section class="w3l-about-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Giới Thiệu {{$faculty->name}}</h2>
            <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Giới thiệu</p>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5">
        <div class="container py-md-5">
            <div class="cwp4-two row">
                @foreach($about as $item)
                <div class="cwp4-text col-lg-6">
                    <h3>{{ $item->title}}</h3>
                    <p>{{ $item->intro}}</p>
                </div>
                <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="{{asset($item->image)}}" class="img-fluid" alt="" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
{{-- <section class="w3l-features-1">
    <!-- /features -->
    <div class="features py-4">
        <div class="container pb-5">
            <div class="fea-gd-vv row ">
                <div class="float-lt feature-gd col-lg-4 col-sm-6">

                    <div class="icon-info">
                        <h5>Đào Tạo</h5>
                        <p>Khoa Du lịch bậc Đại học gồm có 3 ngành: Quản trị dịch vụ du lịch và lữ hành, Quản trị nhà hàng và dịch vụ ăn uống, Quản trị khách sạn; bậc Cao đẳng gồm 4 ngành: Quản trị khách sạn, Quản trị lữ hành, Quản trị dịch vụ du lịch và lữ hành, Hướng dẫn viên du lịch; bậc Trung cấp chuyên nghiệp gồm 3 ngành: Hướng dẫn viên du lịch, Nghiệp vụ Nhà hàng - Khách sạn, Quản trị lữ hành. Đây được xem là những ngành nghề thu hút nhân lực hiện nay và được mệnh danh là ngành "công
                            nghiệp không khói".
                        </p>
                    </div>

                </div>
                <div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">

                    <div class="icon-info">
                        <h5>Sứ mệnh</h5>
                        <p>Khoa du lịch – BQLĐATL Trường Đại học Du lịch Sài Gòn có sứ mệnh đào tạo cho xã hội nguồn nhân lực chất lượng cao, phục vụ sự nghiệp phát triển văn hóa dân tộc nói riêng và sự nghiệp công nghiệp hóa, hiện đại hóa đất nước; góp phần nâng cao dân trí, đào tạo nhân lực, bồi dưỡng nhân tài cho đất nước.
                        </p>
                    </div>
                </div>
                <div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-4">

                    <div class="icon-info">
                        <h5>Tầm nhìn</h5>
                        <p>Với tầm nhìn: “Xây dựng Khoa Du lịch – BQLĐATL Trường Đại học Du lịch Sài Gòn thành địa chỉ đào tạo, nghiên cứu và cung ứng dịch vụ khoa học công nghệ có chất lượng và uy tín trong lĩnh vực kinh tế và kinh doanh du lịch, đáp ứng nhu cầu về nguồn nhân lực du lịch có chất lượng cao và từng bước tiếp cận chuẩn mực quốc tế”. Khoa Du lịch – BQLĐATL Trường Đại Học Du lịch Sài Gòn đặc biệt chú trọng đến chất lượng đào tạo, nghiên cứu khoa học và hợp tác quốc tế trên cơ sở
                            nguồn lực vững mạnh của BQLĐATL Trường Đại Học Du lịch Sài Gòn – “một trong những trung tâm đào tạo, nghiên cứu, đầu mối giao lưu văn hoá, khoa học, giáo dục lớn nhất ở Miền Nam”.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //features -->
</section> --}}
<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <div class="heading text-center mx-auto">
                <h3 class="head">Tại sao bạn phải chọn khoa Du Lịch Đại Học Du Lịch Sài Gòn</h3>
                <p class="my-3 head">Khoa Du lịch – BQLĐATL Trường Đại học Du lịch Sài Gòn cũng tạo thêm cơ hội để khai thác hiệu quả hơn các nguồn lực hiện có của BQLĐATL Trường Đại học Du lịch Sài Gòn, góp phần thực hiện tốt chức năng nhiệm vụ của một đại học trọng điểm đa ngành ở miền Nam.</p>

            </div>
            <div class="middle-section row mt-5 pt-3">
                <div class="three-grids-columns col-lg-3 col-sm-6 text-center">
                    <div class="icon"> <span class="fa fa-graduation-cap" aria-hidden="true"></span></div>
                    <h4>Tốt nghiệp</h4>
                    <p>Trường đạt tỉ lệ 90% sinh viên đầu vào và đầu ra</p>
                </div>
                <div class="three-grids-columns col-lg-3 col-sm-6 mt-sm-0 mt-5 text-center">
                    <div class="icon"> <span class="fa fa-user" aria-hidden="true"></span></div>
                    <h4>Kỹ năng thực hành</h4>
                    <p>Sinh viên ra trường đều được trang bị kỹ năng ở mọi mặt</p>
                </div>
                <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                    <div class="icon"> <span class="fa fa-book" aria-hidden="true"></span></div>
                    <h4>Tài liệu</h4>
                    <p>Được cung cấp những tài liệu bổ ích, những kiến thức quan trọng </p>
                </div>
                <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                    <div class="icon"> <span class="fa fa-bed" aria-hidden="true"></span></div>
                    <h4>Du lịch</h4>
                    <p>Là nơi lí tưởng cho những chuyến đi vui vẻ hạnh phúc</p>
                </div>
            </div>
        </div>
    </div>
</section>
 @stop
