<footer class="footer ndt-non-bg">
    <div class="container">
        <div class="row">
            @foreach ($footer_link as $footer_category)
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">{{ $footer_category['title'] }}</h2>
                    <div class="link-widget">
                        <ul>
                            @foreach ($footer_category['child'] as $footer_item)
                            <li><a href="{{ checkURL($footer_item['link']) }}">{{ $footer_item['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- end widget -->
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->
    </div>
</footer>
