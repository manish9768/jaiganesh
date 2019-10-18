</div>
<!-- end:: Body -->
<!-- begin::Footer -->
<footer class="m-grid__item     m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                    &copy; {{date("Y")}} Copyright by
                    RRR
                    All rights reserved.
                </span>
            </div>
            <!-- <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <span class="m-nav__link-text">
                                About
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__item m-nav__item">
                        <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                            <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</footer>
<!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!--begin::Base Scripts -->
<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Resources -->
<script src="{{ asset('assets/app/js/bootbox.min.js') }}" type="text/javascript"></script>

<!--end::Page Resources -->
<script>
    jQuery(document).ready(function() {    
        bootbox.init();
    });

    $(document).on('click','a.confirm',function(e){
        var link = $(this).attr("href");
        e.preventDefault();
        bootbox.confirm($(this).attr('confirm-text'), function(confirmed) {
        if(confirmed)
        document.location.href = link;
        });
    });
</script>
</body>
<!-- end::Body -->

</html>