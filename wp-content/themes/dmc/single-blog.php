<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();

$args = array(
	'post_id' => $id,   // Use post_id, not post_ID
        // 'count'   => true // Return only the count
);
$args2 = array(
	'post_id' => $id,   // Use post_id, not post_ID
        'count'   => true // Return only the count
);
$comments_count = get_comments( $args2 );
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
$content = get_the_content();
$new_query = new WP_Query( 'post_type=blog' );
?>

<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="news-detail">
                    <div class="blog-item-tag text-center">
                        <p>Business</p>
                    </div>
                    <h3><?= get_the_title();?></h3>
                    <div class="blog-item-info d-flex">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>Marce 9, 2020</p>
                        <i class="fa-solid fa-eye"></i>
                        <p>4263</p>
                        <i class="fa-solid fa-message"></i>
                        <p>68</p>
                    </div>
                    <hr>
                    <div class="blog-slider">
                        <?php echo do_shortcode($content); ?>
                    </div>
                    <div class="news-detail-text">
                        <p><?= nl2br(get_field('content1'))?></p>
                    </div>
                    <audio controls>
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/audio/blog-single-audio.mp3" type="audio/mpeg">
                    </audio>
                    <h5>Lorem Ipsum Dolor Sit Amet</h5>
                    <div class="blog-quote d-flex<?php isset($data['quote']) ? "" :"d-none" ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/line-down.jpg" alt="">
                        <div class="blog-quote-content">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/blog-quote-img.jpg" alt="">
                            <h5><?= get_field('quote')?></h5>
                            <hr>
                            <p><?= get_field('author')?></p>
                        </div>
                    </div>
                    <div class="news-detail-text">
                        <p><?= nl2br(get_field('content2'))?></p>
                    </div>
                    <hr>
                    <div class="blog-tag-link d-flex justify-content-between">
                        <div class="blog-tag">
                        <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                                foreach($posttags as $tag) {
                                    echo '<a href="/dmc_again/category/blog?tag=' .$tag->name .'">' . strtoupper($tag->name) . '</a>'; 
                                }
                            }
                        ?>  
                        </div>
                        <div class="blog-link d-flex">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.skype.com/" target="_blank">
                                <i class="fa-brands fa-skype"></i>
                            </a>
                            <a href="https://www.pinterest.com/" target="_blank">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="blog-comment">
                        <div class="blog-comment-title d-flex">
                            <span>|</span>
                            <h3><?= $comments_count?> Comments</h3>
                        </div>
                        <?php foreach($comments as $comment):?>
                            <div class="blog-comment-content d-flex">
                                <div class="house-comment-avt rounded-circle" style="background-image: url('http://www.gravatar.com/avatar/<?= md5(strtolower(trim($commentGet['mail'])))?>.jpg?s=80')"></div>
                                <div class="blog-comment-detail">
                                    <h5><?= $comment->comment_author?></h5>
                                    <span><?= $comment->comment_date_gmt?></span>
                                    <p><?= $comment->comment_content?></p>
                                    <div class="d-flex">
                                        <a href="" class="reply-button">REPLY</a>
                                        <a class="reply-button <?= (($data['ownerId'] == $_SESSION['userid']) || ($_SESSION['permision'] == '1'))? "" : "d-none" ?>">DELETE</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                        <?php endforeach?>
                    </div>
                    <?php comment_form();?>
                    <!-- <div class="blog-reply row">
                        <div class="blog-comment-title d-flex">
                            <span>|</span>
                            <h3>Leave a Reply</h3>
                        </div>
                        <p>Your Email addres not be published  adipisicing elit, sed*</p>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Website">
                        </div>
                        <div class="col-12">
                            <input class="form-control" type="text" placeholder="Message">
                        </div>
                        <div class="save-info d-flex">
                            <input type="checkbox" name="" id="">
                            <p>Save my name, email, website for the next time</p>
                        </div>
                        <div>
                            <button class="btn btn-success">SUBMIT</button>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4">
                <form action="/dmc_again/category/blog/?s=" method="get" class="place-selection-item search-blog-form d-flex justify-content-between rounded-pill">
                    <input class="form-control rounded-pill" type="text" name="s" placeholder="Search your keyword">
                    <button class="number-circle rounded-circle">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <div class="blog-right-item about-me-blog text-center">
                    <div class="blog-right-title d-flex">
                        <span>|</span>
                        <h3>About Me</h3>
                    </div>
                    <div class="about-me-avt">
                        <div class="avt-circle rounded-circle"></div>
                    </div>
                    <h4>Sandara Mrikon</h4>
                    <p>Lorem ipsum dolor amet, Lore ipsum dolor sit amet, consectetur et adipisicing  eiLorem ipsum dolor sit amet</p>
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
                <div class="blog-right-item blog-right-item-dark">
                    <div class="blog-right-title-dark d-flex">
                        <span>|</span>
                        <h3>Subcribe</h3>
                    </div>
                    <div class="blog-subcribe-form">
                        <p>Don't Miss Lasttest News</p>
                        <div class="blog-input">
                            <input class="form-control" type="text" placeholder="First Name">
                        </div>
                        <div class="blog-input">
                            <input class="form-control" type="text" placeholder="Last Name">
                        </div>
                        <div class="blog-input">
                            <input class="form-control" type="text" placeholder="Enter mail">
                        </div>
                        <button class="rounded-pill">Subcribe</button>
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
<?php
endwhile;
endif;
get_footer();
?>