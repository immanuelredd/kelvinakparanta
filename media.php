 <?php define('TITLE', 'Media | Kelvin Akparanta'); ?>
 <?php require_once('includes/head_section.php');  ?>
 <link rel="stylesheet" href="static/css/style.css">
 </head>

 <body>
     <div class="wrapper">
         <header class="media">
             <?php include(ROOT_PATH . "/includes/header.php"); ?>
             <main class="gallery_main">
                 <div>
                     <p>Memories last forever</p>
                     <h1>
                         Media Center
                     </h1>
                 </div>
             </main>
         </header>
         <section class="content media_content">
             <div class="gallery_title">
                 <h2>Gallery</h2>
             </div>
             <div class="gallery">
                 <?php
                    foreach ($images as $image) {
                        echo "<figure class='gallery__item'><img src='/static/images/$image[img]' alt='$image[title]'></figure>";
                    } ?>
             </div>
             <div class="design_title">
                 <h2>Designs</h2>
             </div>
             <div class="designs">
                 <?php
                    foreach ($designs as $image) {
                        echo "<figure class='gallery__item'><img src='/static/images/$image[design]' alt='$image[title]'></figure>";
                    } ?>
             </div>
             <div class="video_title">
                 <h2>Videos</h2>
             </div>
             <div class="videos">
                 <?php
                    foreach ($videos as $video) {
                        echo "<figure class='video'>
                        <video controls>
                        <source src='/static/images/$video[vid]' type='video/mp4'> Your browser does not support the video tag.
                        </video>
                        </figure>";
                    } ?>
             </div>
         </section>
         <?php include(ROOT_PATH . "/includes/footer.php"); ?>