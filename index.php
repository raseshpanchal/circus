<!DOCTYPE html>
<html>
<head>
    <title>WHERESERT</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/website.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="logoFont">WHERE</span><span style="color:#129077; font-size: 18pt;">SERT</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="about">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="projects">Become A Vendor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="signup">User Sign Up/ Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid homeSlide">
        <h1 style="margin-left:-50px">FIND A BEST <span id="showPost">DESIGNER</span> IN YOUR CITY</h1>

        <form>
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3" style="padding:0px">
                        <select class="form-control">
                            <option value="Dubai">Search in Dubai</option>
                            <option value="Abu Dhabi">Search in Abu Dhabi</option>
                            <option value="Sharjah">Search in Sharjah</option>
                        </select>

                    </div>
                    <div class="col-lg-6" style="padding-right:0px">
                        <input type="text" name="txt_search" id="txt_search" class="form-control" placeholder="Search for a Talent / Services / Professional">
                    </div>
                    <div class="col-lg-3" style="margin-left:-20px">
                        <button type="button" class="btn btn-info" id="btnFind">FIND IT NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">

            </div>

        </div>
        </form>

    </div>

    <?php include_once('footer-01.php') ?>
    <?php include_once('footer-02.php') ?>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#btnFind').click(function(){
                var lookingFor = $('#txt_search').val();
                $('#showPost').text(lookingFor);
            });
        });
    </script>

</body>
</html>
