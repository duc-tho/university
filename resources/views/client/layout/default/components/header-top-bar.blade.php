{{-- <div class="collapse top-search" id="collapseExample">
    <div class="card card-block">
        <div class="newsletter-widget text-center">
            <form class="form-inline">
                <input type="text" class="form-control" placeholder="Nhập thông tin bạn muốn tìm">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- end newsletter -->
    </div>
</div><!-- end top-search -->

<div class="topbar-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                <div class="topsocial">
                    @foreach ($socials_icon as $item)
                    <a href="{{ checkURL($item['link']) }}" data-toggle="tooltip" data-placement="bottom" title="{{ $item['name'] }}"><i class="fa fa-{{ $item['fa_icon'] }} text-secondary"></i></a>
@endforeach
</div><!-- end social -->
</div><!-- end col -->

<div class="col-lg-4 hidden-md-down">
    <div class="topmenu text-center">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="javascript:0"><i class="fa fa-star"></i> Giáo viên</a></li>
            <li class="list-inline-item"><a href="javascript:0"><i class="fa fa-bolt"></i> Nhân viên</a></li>
            <li class="list-inline-item"><a href="javascript:0"><i class="fa fa-user-circle-o"></i> Sinh viên</a></li>
        </ul><!-- end ul -->
    </div><!-- end topmenu -->
</div><!-- end col -->

<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="topsearch text-right">
        <a data-toggle="collapse" href="javascript:0collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Tìm kiếm</a>
    </div><!-- end search -->
</div><!-- end col -->
</div><!-- end row -->
</div><!-- end header-logo -->
</div><!-- end topbar --> --}}

<div class="header-section py-5" id="background-color-new">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="logo">
                    <a href="/"><img src="{{ asset($logo) }}" alt="" style="width: 50%;"></a>
                </div><!-- end logo -->
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <div class="logo d-none d-lg-block">
                    {{-- <p class="news-header m-0" style="font-size: 50px;">T</p> --}}
                    <div class="logo">
                        <a href="/"><img src="{{ asset($intro_image ?? '') }}" alt="" style="width: 50%;"></a>
                    </div><!-- end logo -->
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end header -->
