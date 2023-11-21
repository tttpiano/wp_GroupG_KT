<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        background-color: #f2f2f2;
    }
    .square-image img {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
    .custom-margin-right {
        margin-right: 15px !important;
    }
    .ds-a {
        text-decoration: none;
        color: black;
    }
</style>
<div class="col-lg-5 col-md-12 mx-auto custom-margin-right mt-5" style="background-color: white;">
    <div class="row align-items-center p-3">
        <div class="square-image col-sm-5 col-md-4 col-lg-5 p-0">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
            }
            ?>
        </div>
        <div class="col-sm-7 col-md-8 col-lg-7">
            <h5>
                <a class="ds-a" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <p class="mb-1" style="font-size: 14px; overflow: hidden; max-height: 100px;">
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php the_permalink(); ?>"
               style="font-size: 13px; color: #f1a56c; text-decoration: none; margin-bottom: 10px; font-weight: bold">Read More</a>
        </div>
    </div>
</div>