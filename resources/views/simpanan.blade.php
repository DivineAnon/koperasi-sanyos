<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KOPERASI SANYOS MITRA SEJATI</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/template/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/template/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="assets/template/mmenu/assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/template/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="assets/template/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="assets/template/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="assets/template/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="assets/template/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="assets/template/global/vendor/jquery-mmenu/jquery-mmenu.css">
    <link rel="stylesheet" href="assets/template/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="assets/template/global/vendor/waves/waves.css">
    <link rel="stylesheet" href="assets/template/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
    <link rel="stylesheet"
        href="assets/template/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
    <link rel="stylesheet" href="assets/template/mmenu/assets/examples/css/tables/datatable.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="assets/template/global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/template/global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="assets/template/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!-- Scripts -->
    <script src="assets/template/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();

    </script>

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>

<body>
    <div class="page custom-body">
        <h1 class="text-center"><b>KOPERASI SANYOS MITRA SEJATI</b></h3>
            <div class="custom-right">
                <h2>{{ Auth::user()->name }}</h2>
                <a href="{{ url('/') }}" class="custom-button"><i class="icon md-long-arrow-left"></i> Kembali</a>
                <a href="{{ route('logout') }}" class="custom-button"><i class="icon md-power"></i> Logout</a>
            </div>

            <div class="panel mt-10">
                <h2 style="text-align: center"><b>DATA SIMPANAN</b></h2>
                <header class="panel-heading">
                    <div class="panel-actions">
                        <div class="dt-buttons btn-group">
                            <a href="" class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="exampleTableTools" type="button"><span>Copy</span></a>
                            <a href="" class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="exampleTableTools" type="button"><span>CSV</span></a>
                            <a href="" class="btn btn-secondary buttons-print" tabindex="0" aria-controls="exampleTableTools" type="button"><span>Print</span></a>
                        </div>
                    </div>
                    <h3 class="panel-title">
                        <a href="" class="btn btn-primary waves-effect waves-classic"style="color: aliceblue"><i class="icon md-plus"></i>Tambah Data</a>
                    </h3>
                </header>
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>No Anggota</th>
                                <th>Nama Anggota</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Pekerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>5516 Adolfo Green</td>
                                <td>Littelhaven</td>
                                <td>85</td>
                                <td>2014/06/13</td>
                                <td>Damon</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row waves-effect waves-classic"><i class="icon md-edit"></i> Ubah</a>
                                    <a href="" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row waves-effect waves-classic"><i class="icon md-delete"></i> Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
    <script src="assets/template/global/vendor/datatables.net/jquery.dataTables.js"></script>
    <script src="assets/template/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="assets/template/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
    <script src="assets/template/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
    <script src="assets/template/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
    <script src="assets/template/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
    <script src="assets/template/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="assets/template/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="assets/template/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
    <script src="assets/template/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
    <script src="assets/template/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
    <script src="assets/template/global/vendor/datatables.net-buttons/buttons.print.js"></script>
    <script src="assets/template/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
    <script src="assets/template/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
    <script src="assets/template/global/vendor/asrange/jquery-asRange.min.js"></script>
    <script src="assets/template/global/vendor/bootbox/bootbox.js"></script>

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
    <script>
        Config.set('assets', 'assets/template/mmenu/assets');

    </script>

    <!-- Page -->
    <script src="assets/template/mmenu/assets/js/Site.js"></script>
    <script src="assets/template/global/js/Plugin/asscrollable.js"></script>
    <script src="assets/template/global/js/Plugin/slidepanel.js"></script>
    <script src="assets/template/global/js/Plugin/switchery.js"></script>
    <script src="assets/template/global/js/Plugin/datatables.js"></script>

    <script src="assets/template/mmenu/assets/examples/js/tables/datatable.js"></script>
    <script src="assets/template/mmenu/assets/examples/js/uikit/icon.js"></script>
</body>

</html>
