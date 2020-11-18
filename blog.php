<?php define('TITLE', 'Blog | Kelvin Akparanta'); ?>
<?php require_once('includes/head_section.php'); ?>

<link rel="stylesheet" href="static/css/style.css">
</head>

<body>

    <div class="wrapper">
        <header class="blog">
            <?php include(ROOT_PATH . '/includes/header.php'); ?>

            <main class="blog_main">
                <div class="text">
                    <h1>
                        kelvinkul and his activecode family at the #calabargopinkday 2020 origanised by pink africa foundation.
                    </h1>
                </div>

                <!--  <div class="login_register">
                    <a href="#">Register</a>
                    <a href="#">Login</a>
                </div>-->
            </main>

        </header>
        <section class="content blog_content">
            <div class="blog_article">
                <div class="main_content">
                    <h2 class="recent_post_title">Recent Posts</h2>
                    <div class="blog_post">
                        <div class="inner">
                            <img src="/static/images/KelvinAkparanta (1).jpg" alt="" class="post_img">
                            <div class="post_preview">
                                <h3>
                                    <a href="#">Raving act, internationalboy and kelvinkul spotted at summer slam 2020, live in calabar</a>
                                </h3>
                                <div class="author_date">
                                    <i class="far fa-user">
                                        <span>Kelvin Akparanta</span>
                                    </i>
                                    <i class="far fa-calendar">
                                        <span><?php echo date("d M Y") ?></span>
                                    </i>
                                </div>
                                <p class="preview_text">
                                    the city of calabar stood up at the just concluded #summer-slam2020 rave. The whitehouse Lounge and De-sauce collaborative part saw d creme la cream in calabar trooping in their.
                                </p>
                                <a href="single.php" class="btn">Read More</a>
                            </div>

                        </div>
                        <div class="inner">
                            <img src="/static/images/KelvinAkparanta (1).jpg" alt="" class="post_img">
                            <div class="post_preview">
                                <h3>
                                    <a href="#">Raving act, internationalboy and kelvinkul spotted at summer slam 2020, live in calabar</a>
                                </h3>
                                <div class="author_date">
                                    <i class="far fa-user">
                                        <span>Kelvin Akparanta</span>
                                    </i>
                                    <i class="far fa-calendar">
                                        <span><?php echo date("d M Y") ?></span>
                                    </i>
                                </div>
                                <p class="preview_text">
                                    the city of calabar stood up at the just concluded #summer-slam2020 rave. The whitehouse Lounge and De-sauce collaborative part saw d creme la cream in calabar trooping in their.
                                </p>
                                <a href="single.php" class="btn">Read More</a>
                            </div>

                        </div>
                        <div class="inner">
                            <img src="/static/images/KelvinAkparanta (1).jpg" alt="" class="post_img">
                            <div class="post_preview">
                                <h3>
                                    <a href="#">Raving act, internationalboy and kelvinkul spotted at summer slam 2020, live in calabar</a>
                                </h3>
                                <div class="author_date">
                                    <i class="far fa-user">
                                        <span>Kelvin Akparanta</span>
                                    </i>
                                    <i class="far fa-calendar">
                                        <span><?php echo date("d M Y") ?></span>
                                    </i>
                                </div>
                                <p class="preview_text">
                                    the city of calabar stood up at the just concluded #summer-slam2020 rave. The whitehouse Lounge and De-sauce collaborative part saw d creme la cream in calabar trooping in their.
                                </p>
                                <a href="single.php" class="btn">Read More</a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="side-bar">
                    <div class="search section">
                        <h2 class="search_title">Search</h2>
                        <form action="blog.php" method="post" class="search">
                            <input type="text" class="search-input" placeholder="search">
                        </form>
                    </div>
                    <div class="topic section">
                        <h2 class="topic_title">Topics</h2>
                        <div class="topics">
                            <ul>
                                <li><a href="">News</a></li>
                                <li><a href="">Inspiration</a></li>
                                <li><a href="">Fun</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php include(ROOT_PATH . '/includes/footer.php'); ?>