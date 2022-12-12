<?php get_header(); 
    /*
     * The WordPress Query class.
     *
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     */
    $args = array(
        
        // Post & Page Parameters
        // 'p'            => 1,
        // 'name'         => 'hello-world',
        // 'page_id'      => 1,
        // 'pagename'     => 'sample-page',
        // 'post_parent'  => 1,
        // 'post__in'     => array( 1, 2, 3 ),
        // 'post__not_in' => array( 1, 2, 3 ),

        // Author Parameters
        // 'author'      => '1,2,3',
        // 'author_name' => 'admin',

        // Category Parameters
        // 'cat'              => $term_id,
        // 'category_name'    => 'blog',
        // 'category__and'    => array( 1, 2 ),
        // 'category__in'     => array( 1, 2 ),
        // 'category__not_in' => array( 1, 2 ),

        // Type & Status Parameters
        // 'post_type'   => 'any',
        // 'post_status' => 'any',

        // Choose ^ 'any' or from below, since 'any' cannot be in an array
        // 'post_type' => array(
        //     'post',
        //     'page',
        //     'revision',
        //     'attachment',
        //     'my-post-type',
        // ),

        'post_status' => array(
            'publish',
            // 'pending',
            // 'draft',
            // 'auto-draft',
            // 'future',
            // 'private',
            // 'inherit',
            // 'trash',
        ),

        // Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        // 'ignore_sticky_posts' => false,
        // 'year'                => 2012,
        // 'monthnum'            => 1,
        // 'w'                   => 1,
        // 'day'                 => 1,
        // 'hour'                => 12,
        // 'minute'              => 5,
        // 'second'              => 30,

        // Tag Parameters
        // 'tag'           => 'cooking',
        // 'tag_id'        => 5,
        // 'tag__and'      => array( 1, 2 ),
        // 'tag__in'       => array( 1, 2 ),
        // 'tag__not_in'   => array( 1, 2 ),
        // 'tag_slug__and' => array( 'red', 'blue' ),
        // 'tag_slug__in'  => array( 'red', 'blue' ),

        // Pagination Parameters
        // 'posts_per_page'         => 3,
        'showposts'              => 3,
        //'posts_per_archive_page' => 10,
        // 'nopaging'               => false,
        // 'paged'                  => get_query_var( 'paged' ),
        //'offset'                 => 3,

        // Custom Field Parameters
        // 'meta_key'       => 'key',
        // 'meta_value'     => 'value',
        // 'meta_value_num' => 10,
        // 'meta_compare'   => '=',
        // 'meta_query'     => array(
        //     array(
        //         'key'     => 'color',
        //         'value'   => 'blue',
        //         'type'    => 'CHAR',
        //         'compare' => '=',
        //     ),
        //     array(
        //         'key'     => 'price',
        //         'value'   => array( 1,200 ),
        //         'compare' => 'NOT LIKE',
        //     ),
        // ),

        // Taxonomy Parameters
        // 'tax_query' => array(
        //     'relation' => 'AND',
        //     array(
        //         'taxonomy'         => 'color',
        //         'field'            => 'slug',
        //         'terms'            => array( 'red', 'blue' ),
        //         'include_children' => true,
        //         'operator'         => 'IN',
        //     ),
        //     array(
        //         'taxonomy'         => 'actor',
        //         'field'            => 'id',
        //         'terms'            => array( 1, 2, 3 ),
        //         'include_children' => false,
        //         'operator'         => 'NOT IN',
        //     )
        // ),

        // Permission Parameters -
        //'perm' => 'readable',

        // Parameters relating to caching
        // 'no_found_rows'          => false,
        // 'cache_results'          => true,
        // 'update_post_term_cache' => true,
        // 'update_post_meta_cache' => true,

    );

$query = new WP_Query( $args );
$new_query = new WP_Query( 'post_type=blog&showposts=3' );
$querySale = new WP_Query( 'post_type=post&cat=35&showposts=3' );
$queryRent = new WP_Query( 'post_type=post&cat=36&showposts=3' );
?>
<div class="banner-bottom-container container">
    <div class="banner-bottom row">
        <div class="sell-poparty col-md-4 text-center">
        <div class="circle rounded-circle">
            <img class="circle-img" src="http://localhost/dmc/wp-content/uploads/2022/11/icon1.png" alt="icon 1">
        </div>
        <h3 class="banner-bottom-heading">Sell Poparty</h3>
        <p class="banner-bottom-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="sell-poparty col-md-4 text-center">
        <div class="circle rounded-circle">
            <img class="circle-img" src="http://localhost/dmc/wp-content/uploads/2022/11/icon2.png" alt="icon 2">
        </div>
        <h3 class="banner-bottom-heading">Daily Apartment</h3>
        <p class="banner-bottom-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="sell-poparty col-md-4 text-center">
        <div class="circle rounded-circle">
            <img class="circle-img" src="http://localhost/dmc/wp-content/uploads/2022/11/icon3.png" alt="icon 3">
        </div>
        <h3 class="banner-bottom-heading">Family House</h3>
        <p class="banner-bottom-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
    </div>
    <div class="slide-heading-form row text-center">
        <span class="slide-slogan">We are offering the best real estate</span>
        <span class="slide-heading">Best House For You</span>
    </div>
    <div class="best-house-list row">
        <?php
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-12 col-lg-6 col-xl-4">
                <a href="<?php the_permalink();?>">
                    <div class="best-house-item" style="background-image: url('<?= get_the_post_thumbnail_url()?>')">
                        <div class="for-sell text-center">
                        <span>For sell</span>
                        </div>
                        <div class="owner-form">
                        <div class="owner-avt rounded-circle ">
                            <img class="rounded-circle" src="<?= get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '80']); ?>" alt="owner1">
                        </div>
                        <div class="owner-info">
                            <span><?= get_the_author();?></span>
                            <div class="best-house-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span><?= get_field('location')?></span>
                            </div>
                        </div>
                        <button id="house-like1" class="house-like">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                        </div>
                        <div class="best-house-info justify-content-between">
                        <div class="best-house-price">
                            <span>$ <?= number_format(get_field('price')) ?>.00</span>
                        </div>
                        <div class="best-house-detail">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/icon/best-house-icon1.png" alt="best-house-icon1">
                            <span><?=get_field('bedrooms')?></span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/icon/best-house-icon2.png" alt="best-house-icon2">
                            <span><?=get_field('bathrooms')?></span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/icon/best-house-icon3.png" alt="best-house-icon3">
                            <span><?=get_field('area')?> sq ft</span>
                        </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile;
        endif;
        ?>
    </div>
</div>
<div class="video-slide text-center">
    <div class="container">
        <div class="video-slide-text">
        <h2>The Mordan House Video</h2>
        <p>Lorem ipsum dolor  amet, consectetur adipisicing elit Lorem ipsum dolor  amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <video id="video-home" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/video-house1.mp4"></video>
    </div>
    <div class="play-button">
    </div>
</div>
</div>
<div class="populer-categores container">
<div class="slide-heading-form row text-center">
    <span class="slide-slogan">We are offring the best real estate</span>
    <span class="slide-heading">Popular Categories</span>
</div>
<div class="categores-list row">
    <div class="col-md-4">
        <div class="categores-item">
            <div class="orchard-item">
            <div class="categores-text">
                <p class="categores-heading">Orchard</p>
                <div class="text-center">
                <p>3 Propaties</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="categores-item">
            <div class="rose-cottage-item">
            <div class="categores-text">
                <p class="categores-heading">Rose Cottage</p>
                <div class="text-center">
                <p>6 Propaties</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="categores-item">
            <div class="ong-barn-item">
            <div class="categores-text">
                <p class="categores-heading">Ong Barn</p>
                <div class="text-center">
                <p>2 Propaties</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="categores-item">
            <div class="beach-hous-item">
            <div class="categores-text">
                <p class="categores-heading">Beach Hous</p>
                <div class="text-center">
                <p>7 Propaties</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="categores-item">
            <div class="family-hous">
            <div class="categores-text">
                <p class="categores-heading">Family House</p>
                <div class="text-center">
                <p>1 Propaties</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="testomonial">
    <div class="testomonial-container">

        <div class="slide-heading-form row text-center">
        <span class="slide-slogan">Our Testomonial </span>
        <span class="slide-heading">What Client Say</span>
        <p class="testomonial-note">Lorem ipsum dolor  amet, consectetur adipisicing elit Lorem ipsum dolor sit amet</p>
        </div>
        <div class="user-feedback-slide">
            <!-- <?php foreach($data2 as $keyUser => $user):?>
                <div class="user-feedback text-center">
                    <div class="avt-circle rounded-circle" style="background-image: url('<?= $user['avatar']?>')">
                    </div>
                    <div class="user-feedback-text">
                    <p class="user-feedback-name"><?= $user['name']?></p>
                    <p class="user-feedback-detail"><?= substr($user['feedback'], 0, 150)?></p>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    </div>
                </div>
            <?php endforeach?> -->
        </div>
    </div>
</div>
<div class="our-propartes container">
    <div class="slide-heading-form text-center">  
        <span class="slide-slogan">Meet Our Agent</span>
        <span class="slide-heading">Our Propertes</span>
        <div class="rent-sell-option-btn nav nav-tabs mb-2">
        <button class="nav-link active" id="nav-rent-tab" data-bs-toggle="tab" data-bs-target="#nav-rent" type="button" role="tab" aria-controls="nav-rent" aria-selected="true">Rent</button>
        <button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">Sell</button>
    </div>
</div>
<div class="tab-content p-3 border bg-light" id="nav-tabContent">
    <div class="tab-pane fade active show daily-apartment-list row" id="nav-rent" role="tabpanel" aria-labelledby="nav-rent-tab">
        <?php
        if ($queryRent->have_posts()) : while ($queryRent->have_posts()) : $queryRent->the_post();
        ?>
            <div class=" col-md-6 col-xl-4">
            <a href="<?php the_permalink();?>">
                <div class="daily-apartment-item">
                <div class="daily-apartment-img" style="background-image: url('<?= get_the_post_thumbnail_url()?>')">
                </div>
                <div class="owner-form">
                    <div class="owner-avt">
                    <div class="avt-clone">
                        <div class="rounded-circle avt-clone-circle" style="background-image: url('<?= get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '80']); ?>')"></div>
                    </div>
                    </div>
                    <div class="owner-info">
                    <span><?= get_the_author()?></span>
                    <div class="best-house-location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?= get_field('location')?></span>
                    </div>
                    </div>
                    <div class="house-like">
                    <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
                <div class="daily-apartment-text">
                    <h2><?= get_field('type')?></h2>
                    <i class="fa-solid fa-location-dot"></i>
                    <span><?= get_field('location')?></span>
                    <div class="for-sell-small">
                    <span><?= get_field('purpose')?></span>
                    </div>
                    <p><?= substr(get_the_content(), 0, 80)?>...</p>
                </div>
                <div class="daily-apartment-detail">
                    <span>$<?= number_format(get_field('price'))?></span>
                    <span><?= get_field('purpose')?></span>
                    <span><?= the_date('Y-m-d')?></span>
                </div>
                </div>
            </a>
            </div>
        <?php endwhile;
        endif;
        ?>
    </div>
    <div class="tab-pane fade daily-apartment-list row" id="nav-sell" role="tabpanel" aria-labelledby="nav-sell-tab">
        <?php
        if ($querySale->have_posts()) : while ($querySale->have_posts()) : $querySale->the_post();
        ?>
            <div class=" col-md-6 col-xl-4">
                <a href="<?php the_permalink();?>">
                    <div class="daily-apartment-item">
                    <div class="daily-apartment-img" style="background-image: url('<?= get_the_post_thumbnail_url()?>')">
                    </div>
                    <div class="owner-form">
                        <div class="owner-avt">
                        <div class="avt-clone">
                            <div class="rounded-circle avt-clone-circle" style="background-image: url('<?= get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '80']); ?>')"></div>
                        </div>
                        </div>
                        <div class="owner-info">
                        <span><?= get_the_author()?></span>
                        <div class="best-house-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span><?= get_field('location')?></span>
                        </div>
                        </div>
                        <div class="house-like">
                        <i class="fa-solid fa-heart"></i>
                        </div>
                    </div>
                    <div class="daily-apartment-text">
                        <h2><?= get_field('type')?></h2>
                        <i class="fa-solid fa-location-dot"></i>
                        <span><?= get_field('location')?></span>
                        <div class="for-sell-small">
                        <span><?= get_field('purpose')?></span>
                        </div>
                        <p><?= substr(get_the_content(), 0, 80)?>...</p>
                    </div>
                    <div class="daily-apartment-detail">
                        <span>$<?= number_format(get_field('price'))?></span>
                        <span><?= get_field('purpose')?></span>
                        <span><?= date('Y-m-d')?></span>
                    </div>
                    </div>
                </a>
            </div>
        <?php endwhile;
        endif;
        ?>
    </div>
</div>
</div>
<div class="submit-property text-center">
<div class="slide-heading-form row">
    <span class="slide-slogan">Buy Or Sell</span>
    <span class="slide-heading">Submit Property</span>
</div>

<div class="submit-property-text container">
    <div class="submit-property-note row">
        <div class="col-md-2"></div>
        <p class="col-md-8">Lorem ipsum dolor amet, consecte Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt dolore magna consecteLorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <div class="col-md-2"></div>
    </div>
</div>
<div class="submit-buy-btn">
    <a href="./pages" class="btn btn-success submit-property-btn">Submit</a>
    <a href="./category/house" class="btn btn-success submit-property-btn">Buy</a href="propertydetail.php">
</div>
</div>
<div class="best-agent">
    <div class="best-agent-container container">
    <div class="slide-heading-form row text-center">
    <span class="slide-slogan">Meet Our Agent</span>
    <span class="slide-heading">Our Best Agent</span>
    </div>
    <div class="agent-list row">
    <!-- <?php foreach($dataAgent as $keyAgent=>$agent):?>
        <div class="col-md-4">
            <div class="agent-item text-center">
                <div class="agent-img1" style="background-image: url('<?= $agent['avatar']?>')">
                </div>
                <div class="agent-info">
                    <h2 class="agent-name"><?= $agent['name']?></h2>
                    <p class="agent-position"><?= $agent['position']?></p>
                    <div class="agent-contact">
                    <a href="<?= $agent['facebook']?>" target="_blank">
                        <div class="circle-icon rounded-circle">
                        <i class="fa-brands fa-facebook-f"></i>
                        </div>
                    </a>
                    <a href="<?= $agent['linkedin']?>" target="_blank">
                        <div class="circle-icon rounded-circle">
                        <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                    </a>
                    <a href="<?= $agent['instagram']?>" target="_blank">
                        <div class="circle-icon rounded-circle">
                        <i class="fa-brands fa-instagram"></i>
                        </div>
                    </a>
                    <a href="<?= $agent['twitter']?>" target="_blank">
                        <div class="circle-icon rounded-circle">
                        <i class="fa-brands fa-twitter"></i>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach?> -->
    </div>
    </div>
</div>
<div class="client-logo">
<div class="client-logo-container container">
    <div class="slide-heading-form row">
    <span class="slide-slogan">Buy Or Sell</span>
    <span class="slide-heading">Find Best Place For Leaving</span>
    </div>
    <div class="slide-heading-bottom">
    <p>Lorem ipsum dolor  amet, consecteLorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt dolore magna consecteLorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
    <form action="../category/house">
        <button class="btn btn-success">SUBMIT</button>
    </form>
    </div>
    <div class="client-logo-form row text-center">
    <div class="col horizontal-logo1">
        <img src="http://localhost/dmc/wp-content/uploads/2022/11/client-logo1.png" alt="client-logo">
    </div>
    <div class="col">
        <img src="http://localhost/dmc/wp-content/uploads/2022/11/client-logo2.png" alt="client-logo">
    </div>
    <div class="col">
        <img src="http://localhost/dmc/wp-content/uploads/2022/11/client-logo3.png" alt="client-logo">
    </div>
    <div class="col">
        <img src="http://localhost/dmc/wp-content/uploads/2022/11/client-logo4.png" alt="client-logo">
    </div>
    <div class="col horizontal-logo2">
        <img src="http://localhost/dmc/wp-content/uploads/2022/11/client-logo5.png" alt="client-logo">
    </div>
    </div>
</div>
</div>
<div class="news-slide">
<div class="news-slide-container container">
    <div class="slide-heading-form row text-center">
    <span class="slide-slogan">Blog & News</span>
    <span class="slide-heading">News Feeds</span>
    </div>
    <div class="news-list row">
        <?php
        if ($new_query->have_posts()) : while ($new_query->have_posts()) : $new_query->the_post();
        ?>
            <div class="news-item col-md-6 col-lg-4">
                <div class="news-img" style="background-image: url('<?= get_the_post_thumbnail_url()?>')"></div>
                <div class="news-info">
                <div class="news-creator">
                    <i class="fa-solid fa-user"></i>
                    <span><?= get_the_author()?></span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span><?= date('Y-m-d')?></span>
                </div>
                <div class="news-text">
                    <h2 class="news-heading"><?= get_the_title()?></h2>
                    <p class="news-detail"><?= substr(get_field('content1'), 0, 100) ?></p>
                    <a href="<?php the_permalink();?>">
                    <div class="arrow-circle rounded-circle">
                        <i class="fa-sharp fa-solid fa-right-long"></i>
                    </div>
                    </a>
                </div>
                </div>
            </div>
        <?php endwhile;
        endif;
        ?>
    </div>
</div>
</div>
<?php get_footer(); ?>