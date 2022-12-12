<?php get_header(); 
$new_query = new WP_Query( 'post_type=blog' );
if(isset($_GET['s'])){
    $new_query = new WP_Query( 'post_type=blog&s=' . $_GET['s'] );
}
if(isset($_GET['tag'])){
    $new_query = new WP_Query( 'post_type=blog&tag=' . $_GET['tag'] );
}
?>
<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                if ($new_query->have_posts()) : while ($new_query->have_posts()) : $new_query->the_post();
                ?>
                    <div class="blog-item">
                        <div class="blog-item-img" style="background-image: url('<?= get_the_post_thumbnail_url()?>')"></div>
                        <div class="blog-item-text">
                            <div class="blog-item-tag text-center">
                                <p>Business</p>
                            </div>
                            <h3><?= get_the_title()?></h3>
                            <div class="blog-item-info d-flex">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p><?= the_date('Y-m-d')?></p>
                                <i class="fa-solid fa-eye"></i>
                                <p>4263</p>
                                <i class="fa-solid fa-message"></i>
                                <p>68</p>
                            </div>
                            <p><?=substr(get_field('content1'), 0, 500)?></p>
                            <div class="blog-item-user d-flex justify-content-between">
                                <div class="blog-item-user-detail d-flex">
                                    <div class="user-avt-circle rounded-circle" style="background-image: url('<?= get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '80']); ?>');"></div>
                                    <p><?= get_the_author()?></p>
                                </div>
                                <a href="<?php the_permalink();?>" class="d-flex">
                                    <p>Read More</p>
                                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                endif;
                ?>
                <div class="page-number d-flex justify-content-center">
                    <div class="page-number-circle rounded-circle">
                        <i class="fa-solid fa-angles-left"></i>                           
                    </div>
                    <div class="page-number-circle rounded-circle">
                        <p>1</p>                          
                    </div>
                    <div class="page-number-circle rounded-circle">
                        <p>2</p>                          
                    </div>
                    <div class="page-number-circle rounded-circle">
                        <p>3</p>                          
                    </div>
                    <div class="page-number-circle rounded-circle">
                        <i class="fa-solid fa-ellipsis"></i>                     
                    </div>
                    <div class="page-number-circle rounded-circle">
                        <i class="fa-solid fa-angles-right"></i>                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form action="" method="get" class="place-selection-item search-keyword-form d-flex justify-content-between rounded-pill">
                    <input class="form-control rounded-pill" type="text" name="s" placeholder="Search your keyword">
                    <button class="number-circle rounded-circle">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form action="blog.php" method="post">
                <div class="blog-right-item about-me-blog text-center">
                    <div class="blog-right-title d-flex">
                        <span>|</span>
                        <h3>About Me</h3>
                    </div>
                    <div class="about-me-avt">
                        <div class="avt-circle rounded-circle"></div>
                    </div>
                    <h4>Mạnh Cường</h4>
                    <p>Web developer in Ha Noi. Hobies are coding, playing soccer and travel. My life motto is "No Pain, No Gain".</p>
                    <div class="about-me-contact">
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.skype.com" target="_blank">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                        <a href="https://www.pinterest.com" target="_blank">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-right-item">
                    <div class="blog-right-title d-flex">
                        <span>|</span>
                        <h3>Popular Feeds</h3>
                    </div>
                    <?php
                    if ($new_query->have_posts()) : while ($new_query->have_posts()) : $new_query->the_post();
                    ?>
                        <div class="blog-popular-feeds row">
                            <div class="blog-feeds-item col-xl-3">
                                <div class="avt-circle rounded-circle" style="background-image: url('<?= get_the_post_thumbnail_url()?>')"></div>
                            </div>
                            <div class="blog-feeds-text col-xl-9">
                                <a href="<?php the_permalink();?>">
                                    <h5><?= substr(get_the_title(), 0, 50)?></h5>
                                </a>
                                <div class="blog-feeds-date d-flex">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <p><?= the_date('Y-m-d')?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    endif;
                    ?>
                </div>
                <div class="blog-right-item categories-selector">
                    <div class="blog-right-title d-flex">
                        <span>|</span>
                        <h3>Categories</h3>
                    </div>
                    <div class="categories-selection">
                        <ul>
                            <li class="row">
                                <p class="col-8">Design</p>
                                <p class="col-2 text-center">26</p>
                            </li>
                            <li class="row">
                                <p class="col-8">Villa House</p>
                                <p class="col-2 text-center">21</p>
                            </li>
                            <li class="row">
                                <p class="col-8">Business</p>
                                <p class="col-2 text-center">8</p>
                            </li>
                            <li class="row">
                                <p class="col-8">Global World</p>
                                <p class="col-2 text-center">13</p>
                            </li>
                            <li class="row">
                                <p class="col-8">Residantial</p>
                                <p class="col-2 text-center">36</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="subcribe-form" class="blog-right-item blog-right-item-dark">
                    <div class="blog-right-title-dark d-flex">
                        <span>|</span>
                        <h3>Subcribe</h3>
                    </div>
                    <div class="blog-subcribe-form">
                        <p>Don't Miss Lasttest News</p>
                        <div class="blog-input">
                            <input class="form-control" type="text" placeholder="First Name" require>
                        </div>
                        <div class="blog-input">
                            <input class="form-control" type="text" placeholder="Last Name" require>
                        </div>
                        <div class="blog-input">
                            <input class="form-control" type="text" placeholder="Enter mail" require>
                        </div>
                        <button class="rounded-pill" onclick="subcribeForm()">Subcribe</button>
                    </div>
                </div>
                <div class="blog-right-item">
                    <div class="blog-right-title d-flex">
                        <span>|</span>
                        <h3>Instagram Feeds</h3>
                    </div>
                    <div class="instagram-feeds-img d-flex flex-wrap row">
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                        <div class="instagram-feeds-item col-4"></div>
                    </div>
                </div>
                <div class="add-banner-item">
                    <div class="add-banner text-center">
                        <span>380*500</span>
                        <h5>Add Banner</h5>
                    </div>
                </div>
                <div class="blog-right-item">
                    <div class="blog-right-title d-flex">
                        <span>|</span>
                        <h3>Popular Tag</h3>
                    </div>
                    <div class="blog-popular-list">
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Popular</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Art</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Business</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Design</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Devolper</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Creator</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Editorse</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Popular</span>
                        </div>
                        <div class="blog-popular-tag d-inline-block rounded-pill">
                            <span>Art</span>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
            <a href="#header">
                <button class="go-header-btn">
                    <i class="fa-solid fa-chevron-up"></i>
                </button>
            </a>
        </div>
    </div>
</div>
<?php
get_footer();
?>