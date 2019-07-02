<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #77D6C3;">
    <img src="flags/flag-of-United-Arab-Emirates.jpg" style="width:30px; height:18px; margin-right:10px" />
    <a href="./" class="navbar-brand">
        <span class="logoFont">WHERE</span><span style="color:#129077; font-size: 18pt;">SERT</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <?php
            error_reporting(0);
            if($myEmail)
            {
                ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger">Welcome <?=$userFullName?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="myAccount">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="logout">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="wheresert-blog">Blog</a>
                </li>
                <li>
                    <div style="margin-bottom:30px">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                </li>
                <li>
                    <div id="google_translate_element"></div>
                </li>

                <?php
            }
            else
            {
                ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="wheresert-blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="wheresert-sign-up">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="wheresert-sign-in">Login</a>
                </li>
                <li>
                    <div style="margin-bottom:30px">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                </li>
                <li>
                    <div id="google_translate_element"></div>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>
