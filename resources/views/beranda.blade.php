<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KOPERASI SANYOS MITRA SEJATI</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/template/global/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/template/global/css/bootstrap-extend.min.css" />
    <link rel="stylesheet" href="assets/template/mmenu/assets/css/site.min.css" />

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/template/global/vendor/animsition/animsition.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/asscrollable/asScrollable.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/switchery/switchery.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/intro-js/introjs.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/slidepanel/slidePanel.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/jquery-mmenu/jquery-mmenu.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/flag-icon-css/flag-icon.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/waves/waves.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/chartist/chartist.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/jvectormap/jquery-jvectormap.css" />
    <link rel="stylesheet" href="assets/template/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css" />
    <link rel="stylesheet" href="assets/template/mmenu/assets/examples/css/dashboard/v1.css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/template/global/fonts/material-design/material-design.min.css" />
    <link rel="stylesheet" href="assets/template/global/fonts/brand-icons/brand-icons.min.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>

<body>
    <div class="page custom-body">
        <h1 class="text-center"><b>KOPERASI SANYOS MITRA SEJATI</b></h3>
        <div class="custom-right">
            <h2>{{ Auth::user()->name }}</h2>
            <a href="{{ route('logout') }}" class="custom-button"><i class="icon md-power"></i> Logout</a>
        </div>
        <div class="row custom-center">
            <div class="col-4 col-md-4 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">Anggota</h2>
                        <h2 class="card-text"><a href="{{ route('anggota') }}" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">Pinjaman</h2>
                        <h2 class="card-text"><a href="{{ route('pinjaman') }}" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">Simpanan</h2>
                        <h2 class="card-text"><a href="{{ route('simpanan') }}" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row custom-center">
            <div class="col-4 col-md-4 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">Neraca</h2>
                        <h2 class="card-text"><a href="" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">LKSB</h2>
                        <h2 class="card-text"><a href="" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">SHU</h2>
                        <h2 class="card-text"><a href="" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row custom-center" style="">
            <div class="col-6 col-md-6 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">KSPA</h2>
                        <h2 class="card-text"><a href="{{ route('kspa') }}" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12">
                <div class="card bg-info">
                    <div class="card-body text-center">
                        <h2 class="card-text" style="color: aliceblue">Rekening Anggota</h2>
                        <h2 class="card-text"><a href="{{ route('rekening-anggota') }}" class="custom-button"><i class="icon md-book"></i> Manage</a href="" class="custom-button"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core  -->
    <script src="assets/template/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="assets/template/global/vendor/jquery/jquery.js"></script>
    <script src="assets/template/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="assets/template/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="assets/template/global/vendor/animsition/animsition.js"></script>
    <script src="assets/template/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="assets/template/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="assets/template/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="assets/template/global/vendor/waves/waves.js"></script>

    <!-- Plugins -->
    <script src="assets/template/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
    <script src="assets/template/global/vendor/switchery/switchery.js"></script>
    <script src="assets/template/global/vendor/intro-js/intro.js"></script>
    <script src="assets/template/global/vendor/screenfull/screenfull.js"></script>
    <script src="assets/template/global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="assets/template/global/vendor/chartist/chartist.min.js"></script>
    <script src="assets/template/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
    <script src="assets/template/global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/template/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/template/global/vendor/matchheight/jquery.matchHeight-min.js"></script>
    <script src="assets/template/global/vendor/peity/jquery.peity.min.js"></script>

    <!-- Scripts -->
    <script src="assets/template/global/js/Component.js"></script>
    <script src="assets/template/global/js/Plugin.js"></script>
    <script src="assets/template/global/js/Base.js"></script>
    <script src="assets/template/global/js/Config.js"></script>

    <script src="assets/template/mmenu/assets/js/Section/Menubar.js"></script>
    <script src="assets/template/mmenu/assets/js/Section/Sidebar.js"></script>
    <script src="assets/template/mmenu/assets/js/Section/PageAside.js"></script>
    <script src="assets/template/mmenu/assets/js/Section/GridMenu.js"></script>

    <!-- Config -->
    <script src="assets/template/global/js/config/colors.js"></script>
    <script src="assets/template/mmenu/assets/js/config/tour.js"></script>

    <!-- Page -->
    <script src="assets/template/mmenu/assets/js/Site.js"></script>
    <script src="assets/template/global/js/Plugin/asscrollable.js"></script>
    <script src="assets/template/global/js/Plugin/slidepanel.js"></script>
    <script src="assets/template/global/js/Plugin/switchery.js"></script>
    <script src="assets/template/global/js/Plugin/matchheight.js"></script>
    <script src="assets/template/global/js/Plugin/jvectormap.js"></script>
    <script src="assets/template/global/js/Plugin/peity.js"></script>
    <script src="assets/template/mmenu/assets/examples/js/dashboard/v1.js"></script>
</body>

</html>
