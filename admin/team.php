<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <?php 
        $thisPage = "Team";
            include 'header.php';
            ?>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <h3 class="page-title">Team</h3>
                    <div class="panel panel-headline demo-icons">
                        <div class="panel-heading">
                            <h3 class="panel-title">Team 1</h3>
                            <button type="button" class="lnr lnr-pencil right" data-toggle="modal" data-target="#"></button>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4 col-sm-6 text-center">
                                <div class="row wow animated zoomIn" data-wow-delay="0.1s">
                                    <div class="col-md-8 col-md-offset-2">
                                        <img class="img-circle img-responsive center-block" src="../img/team-img/iskan2.jpeg" alt="Iskandar Sholeh">
                                    </div>
                                </div>
                                <h4 class="wow animated fadeInUp" data-wow-delay="0.2s">Iskandar Sholeh</h4>
                                <p class="member-title wow animated fadeIn" data-wow-delay="0.3s">CEO-Founder</p>
                                <div class="row text-center wow animated fadeInDown" data-wow-delay="0.5s">
                                    <div class="team-member-contact">
                                        <a href="#" data-toggle="tooltip" title="Contact with Facebook" class="team-facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Contact with Twitter" class="team-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Contact with Google-plus" class="team-google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6r col-md-offset-1">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="jenis" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="benefit" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" name="harg" required="required">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning">Edit</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-headline demo-icons">
                        <div class="panel-heading">
                            <h3 class="panel-title">Team 2</h3>
                            <button type="button" class="lnr lnr-pencil right" data-toggle="modal" data-target="#"></button>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4 col-sm-6 text-center">
                                <div class="row wow animated zoomIn" data-wow-delay="0.1s">
                                    <div class="col-md-8 col-md-offset-2">
                                        <img class="img-circle img-responsive center-block" src="../img/team-img/raffi.JPG" alt="Iskandar Sholeh">
                                    </div>
                                </div>
                                <h4 class="wow animated fadeInUp" data-wow-delay="0.2s">Rafi Abyyan</h4>
                                <p class="member-title wow animated fadeIn" data-wow-delay="0.3s">CTO</p>
                                <div class="row text-center wow animated fadeInDown" data-wow-delay="0.5s">
                                    <div class="team-member-contact">
                                        <a href="#" data-toggle="tooltip" title="Contact with Facebook" class="team-facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Contact with Twitter" class="team-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Contact with Google-plus" class="team-google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6r col-md-offset-1">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="jenis" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="benefit" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" name="harg" required="required">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning">Edit</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-headline demo-icons">
                        <div class="panel-heading">
                            <h3 class="panel-title">Team 3</h3>
                            <button type="button" class="lnr lnr-pencil right" data-toggle="modal" data-target="#"></button>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4 col-sm-6 text-center">
                                <div class="row wow animated zoomIn" data-wow-delay="0.1s">
                                    <div class="col-md-8 col-md-offset-2">
                                        <img class="img-circle img-responsive center-block" src="../img/team-img/arina.jpg" alt="Iskandar Sholeh">
                                    </div>
                                </div>
                                <h4 class="wow animated fadeInUp" data-wow-delay="0.2s">Dinda Arinawati</h4>
                                <p class="member-title wow animated fadeIn" data-wow-delay="0.3s">Bussnis Planner</p>
                                <div class="row text-center wow animated fadeInDown" data-wow-delay="0.5s">
                                    <div class="team-member-contact">
                                        <a href="#" data-toggle="tooltip" title="Contact with Facebook" class="team-facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Contact with Twitter" class="team-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" data-toggle="tooltip" title="Contact with Google-plus" class="team-google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6r col-md-offset-1">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="jenis" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="benefit" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" name="harg" required="required">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-warning">Edit</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- END MAIN CONTENT -->
            </div>
            <!-- END MAIN -->
            <div class="clearfix"></div>
            <footer>
                <div class="container-fluid">
                    <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
                </div>
            </footer>
        </div>


        <!-- END WRAPPER -->
        <!-- Javascript -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>