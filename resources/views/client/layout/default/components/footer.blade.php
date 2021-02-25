<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4><strong>{{ $contact_title }}</strong></h4>
                {{ $address }}
                <br>ĐT: {{ $phone }}
                <br>Email: {{ $email }}
                <br>Website: {{ $website_link }}
                <br>Hotline: {{ $hotline }}
            </div>
            <div class="col-lg-6">
                <div class="widget">
                    <div class="footer-text text-lg-right">
                        <a href="index.html"><img src="{{ asset($logo) }}" alt="" class="img-fluid"></a>
                        <p></p>
                        <div class="social">
                            @foreach ($socials_icon as $item)
                            <a href="{{ checkURL($item['link']) }}" data-toggle="tooltip" data-placement="bottom" title="{{ $item['name'] }}"><i class="fa fa-{{ $item['fa_icon'] }}"></i></a>
                            @endforeach
                        </div>

                        <hr class="invis">

                        <!-- <div class="newsletter-widget text-center">
                        <form class="form-inline">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                        </form>
                    </div> -->
                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">{{ $copyright }}</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->
