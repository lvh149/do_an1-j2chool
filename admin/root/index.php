
    <!-- header -->
    <?php include_once "../header_index.php" ?>
    <!-- header -->
    <!-- sidebar left-->
        <?php
        include_once "../sidebar.php"
        ?>
    <!--/. end sidebar left-->

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>

                    <a href="#">
                    </a>
                </li>
                <li class="active">Tổng quan</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tổng quan</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-9">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-4 widget-left">
                            <span class="glyphicon glyphicon-signal icon-50" aria-hidden="true"></span>
                        </div>
                        <div class="col-sm-9 col-lg-8 widget-right">
                            <div class="large">8.000.000 đ</div>
                            <div class="text-muted">Doanh thu tháng 12</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">24</div>
                            <div class="text-muted">Số đơn hàng</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.row-->


        <!--end main-->

    <?php
        include_once "../footer.php";

    ?>