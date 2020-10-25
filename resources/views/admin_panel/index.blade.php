@include('admin_panel.layouts.header')

<!-- Content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="block-header col-xs-12">
                <h2>إحصائيات الزيارات</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-green hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="content">
                        <div class="text">زوار  يوم 17-10-2018</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="content">
                        <div class="text">زوار شهر أكتوبر</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-indigo hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="content">
                        <div class="text">إجمالي زيارات الموقع</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="block-header col-xs-12">
                <h2>روابط هامه</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="requests.php">
                    <div class="info-box bg-blue-grey hover-zoom-effect pointer">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">طلبات  جديدة</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="portfolio-cats.php">
                    <div class="info-box bg-teal hover-zoom-effect pointer">
                        <div class="icon">
                            <i class="material-icons">work</i>
                        </div>
                        <div class="content">
                            <div class="text">أعمالنا</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="blog.php">
                    <div class="info-box bg-cyan hover-zoom-effect pointer">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">مقال</div>
                            <div class="number count-to" data-from="0" data-to="20" data-speed="1000" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>
<!-- #END# Content -->
@include('admin_panel.layouts.footer')
</body>

</html>