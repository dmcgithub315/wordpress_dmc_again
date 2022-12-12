<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
$date = date('Y', time());
$id = get_the_ID();

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


?>
<div class="detail-content">
    <div class="container">
        <div class="detail-content-banner col-12 d-lg-flex justify-content-between">
            <div class="house-title">
                <h3><?= get_the_title()?></h3>
                <div class="house-location d-flex">
                    <i class="fa-solid fa-location-dot"></i>
                    <p><?= get_field('locationdetail')?></p>
                </div>
                <div class="apartment-detail d-flex">
                    <p>Bedroom: <?= get_field('bedrooms')?></p>
                    <p>Bathroom: <?= get_field('bathrooms')?></p>
                    <p>Size: <?= get_field('area')?> sq ft</p>
                </div>
            </div>
            <div class="house-data">
                <!-- <a href="/mingrand/public/edithouse.php?id=<?= $data['id']?>" 
                    class="btn btn-success <?= (($data['ownerId'] == $_SESSION['userid']) || ($_SESSION['permision'] == '1'))? "" : "d-none" ?>">Edit
                </a>
                <a href="/mingrand/public/deletehouse.php?id=<?= $data['id']?>" 
                class="btn btn-success <?= (($data['ownerId'] == $_SESSION['userid']) || ($_SESSION['permision'] == '1')) ? "" : "d-none" ?>" 
                onclick="return confirmDelete()">Delete
                </a> -->
                <!-- <form method="POST" action="deletehouse.php" onsubmit="return confirmDelete()">
                    <button type="submit">Delete</button>
                </form> -->
                <h5>$ <?= number_format(get_field('price'))?>.00</h5>
                <div class="house-button">
                    <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                            foreach($posttags as $tag) {
                                echo '<a href="../category/house?tag=' .$tag->name .'">' . strtoupper($tag->name) . '</a>'; 
                            }
                        }
                    ?>  
                </div>
                <div class="blog-item-info d-flex">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p><?= the_date('Y-m-d')?></p>
                    <i class="fa-solid fa-eye"></i>
                    <p>4263</p>
                    <i class="fa-solid fa-message"></i>
                    <p>68</p>
                </div>
            </div>
            </div>
            <?php echo do_shortcode(get_field('album')); ?>
            
        </div>
        <div class="detail-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 row">
                        <div class="daily-apartment-title">
                            <h5><?= get_field('location') . " " . get_field('type')?></h5>
                            <p><?= get_the_content()?></p>
                        </div>
                        <div class="property-details row">
                            <h5>Property Details</h5>
                                <div class="col-xl-4 col-6">
                                    <p>Bedrooms: <?= get_field ('bedrooms')?></p>
                                    <p>All Rooms: <?= get_field('bedrooms')+get_field('bathrooms')+get_field('livingrooms')+get_field('kitchens')+get_field('garages')?></p>
                                    <p>Kitchen: <?=get_field('kitchens')?></p>
                                    <p>Type: <?= get_field('type')?></p>
                                </div>
                                <div class="col-xl-4 col-6">
                                    <p>Bathrooms: <?= get_field('bathrooms')?></p>
                                    <p>Livingroom: <?= get_field('livingrooms')?></p>
                                    <p>Year Build: <?= get_field('bathrooms')?></p>
                                    <p>Area: <?= get_field('area')?> sq ft</p>
                                </div>
                                <div class="col-xl-4 col-6">
                                    <p>Orienten: <?= get_field('orienten')?></p>
                                    <p>Plot Size: <?= get_field('length')?>*<?= get_field('width')?>*<?= get_field('height')?></p>
                                    <p>Garages: <?= get_field('garages')?></p>
                                </div>
                            </div>
                            <div class="property-details row">
                                <h5>Amenities</h5>
                                <div class="d-flex flex-row flex-wrap">
                                    <?php foreach(get_field('amenities') as $amenitieskey => $amenitiesitem):?>
                                    <div class="amenities-item d-flex">
                                        <i class="fa-solid fa-check"></i>
                                        <p><?= $amenitiesitem?></p>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                            <div class="property-details row">
                                <h5>Additional Details</h5>
                                <div class="col-md-4 col-6">
                                    <p>Remodale Year: <?= $date-get_field('yearbuild') == 0 ? '< 1' : $date-get_field('yearbuild') ?> year</p>
                                    <p>Equipment: <?= get_field('equipment')?></p>
                                </div>
                                <div class="col-md-4 col-6">
                                    <p>Diposit: <?= get_field('purpose') == 'For Sale'?number_format(intval(get_field('price')/3)):number_format((get_field('price')*3))?>$</p>
                                    <p>Pool Size: 1620</p>
                                </div>
                                <div class="col-md-4 col-6">
                                    <p>Floors: <?= get_field('floors')?></p>
                                    <p <?= get_field('type') != 'Apartment'?"class='d-none'":'' ?>>Floor: <?= get_field('floor')?></p>
                                </div>
                            </div>
                            <div class="property-details row">
                                <h5>Proparty Attchment</h5>
                                <div class="property-download col-md-4 col-6"></div>
                                <div class="property-download col-md-4 col-6"></div>
                            </div>
                            <div class="property-details">
                                <div class="d-flex justify-content-between">
                                    <h5>Estate Location</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Satelite
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeStateLine('#sateline1')">Sateline 1</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeStateLine('#sateline2')">Sateline 2</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeStateLine('#sateline3')">Sateline 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="sateline1" class="estate-location-img estate-location-img1 active"></div>
                                <div id="sateline2" class="estate-location-img estate-location-img2"></div>
                                <div id="sateline3" class="estate-location-img estate-location-img3"></div>
                            </div>
                            <div class="property-details">
                                <div class="d-flex justify-content-between">
                                    <h5>Floor Plans</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Floor Plan
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeFloorPlan('#floorplan1')">First Floor</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeFloorPlan('#floorplan2')">Second Floor</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeFloorPlan('#floorplan3')">Third Floor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="floorplan1" class="floor-plan-img floor-plan-img1 active"></div>
                                <div id="floorplan2" class="floor-plan-img floor-plan-img2"></div>
                                <div id="floorplan3" class="floor-plan-img floor-plan-img3"></div>
                            </div>
                            <div class="property-details">
                                <div class="d-flex justify-content-between">
                                    <h5>Intro Video</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Video Tour
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeVideoIntro('#video-house1')">Video Intro</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeVideoIntro('#video-house2')">Video Bedroom</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeVideoIntro('#video-house3')">Video Livingroom</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <video id="video-house1" class="video-house active" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/video-house1.mp4"></video>
                                <video id="video-house2" class="video-house" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/video-house2.mp4"></video>
                                <video id="video-house3" class="video-house" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/video-house3.mp4"></video>
                            </div>
                            <div class="property-details">
                                <div class="d-flex justify-content-between">
                                    <h5>Whats Nearby?</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            NEARBY
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeNearBy('#education')">EDUCATION</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeNearBy('#hospital')">HOSPITAL</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeNearBy('#mall')">MALL</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div id="education" class="itility-nearby active">
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img library-img"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://www.google.com/search?q=Eureka+Valley%2FHarvey+Milk+Branch+Library&oq=Eureka+Valley%2FHarvey+Milk+Branch+Library&aqs=chrome..69i57&sourceid=chrome&ie=UTF-8" target="_blank">
                                                    <h5>Eureka Valley/Harvey Milk Branch Library</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img academy-img"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://www.google.com/search?q=Mibaly+Extension+%26+Academy&oq=Mibaly+Extension+%26+Academy&aqs=chrome..69i57&sourceid=chrome&ie=UTF-8" target="_blank">
                                                    <h5>Mibaly Extension & Academy</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img school-img"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://www.google.com/search?q=Nilgao+School&oq=Nilgao+School&aqs=chrome..69i57&sourceid=chrome&ie=UTF-8" target="_blank">
                                                    <h5>Nilgao School</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="hospital" class="itility-nearby">
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img hospital-img1"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://hongngochospital.vn/" target="_blank">
                                                    <h5>Bệnh Viện Hồng Ngọc</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img hospital-img2"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://benhvienthucuc.vn/co-so-286-thuy-khue-bung-no-uu-dai/?utm_source=google&utm_medium=cpc&utm_content=luongvv&utm_campaign=Search_ThuongHieu_BenhVienThuCuc&gclid=CjwKCAjw79iaBhAJEiwAPYwoCJuPcbcwpXKQSaUuriz09SRZnGJqA5RE6ld7G2XTxWl5Solkh5JonxoCEzoQAvD_BwE" target="_blank">
                                                    <h5>Bệnh Viện Thu Cúc</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img hospital-img3"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="http://bachmai.gov.vn/" target="_blank">
                                                    <h5>Bệnh Viện Bạch Mai</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mall" class="itility-nearby">
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img mall-img1"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://thegarden.com.vn/" target="_blank">
                                                    <h5>Trung Tâm Thương Mại The Garden</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img mall-img2"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="http://www.iph.vn/vn/shopping-center/" target="_blank">
                                                    <h5>Indochina Plaza HaNoi</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nearby-itility d-lg-flex justify-content-between">
                                        <div class="nearby-itility-content d-lg-flex">
                                            <div class="nearby-itility-img mall-img3"></div>
                                            <div class="nearby-itility-detail">
                                                <a href="https://vincom.com.vn/vincom-center-tran-duy-hung" target="_blank">
                                                    <h5>VinCom Center Trần Duy Hưng</h5>
                                                </a>
                                                <p>consectetuLorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                        <div class="nearby-itility-feedback text-xl-end">
                                            <p>32 REVIEWS</p>
                                            <div class="itility-star-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                                <i class="fa-solid fa-star havent-vote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-details">
                                <div class="d-lg-flex justify-content-between">
                                    <h5>Page statistics</h5>
                                    <div class="page-statistics-link">
                                        <a href="#">Hours</a>
                                        <a href="#">Weekly</a>
                                        <a href="#">Monthly</a>
                                    </div>
                                </div>
                                <div class="chart-img"></div>
                            </div>
                            
                            <!-- <div class="property-feedback-slide">
                            <?php foreach($data2 as $keyFeedBack => $feedback):?>
                                <div class="property-feedback-item d-xl-flex">
                                    <div class="user-feedback-avt avt-circle-1 rounded-circle" style="background-image: url('<?= $feedback['avatar']?>')"></div>
                                    <div class="house-feedback-content">
                                        <div class="user-info-content d-flex justify-content-between">
                                            <div class="user-info-detail">
                                                <h5><?= $feedback['position']?></h5>
                                                <h4><?= $feedback['name']?></h4>
                                            </div>
                                            <div class="house-feedback-detail text-end">
                                                <div class="house-feedback-days d-flex">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <p><?= $feedback['date']?></p>
                                                </div>
                                                <div class="itility-star-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star havent-vote"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsuLorem ips  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                                    </div>
                                </div>
                            <?php endforeach?>
                            </div> -->
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
                                <?php endforeach?>
                                <hr>
                            </div>
                            <?php comment_form()?>
                            <!-- <div class="comment-form">
                                <div class="comment-form-title d-lg-flex justify-content-between">
                                    <h4>Post Your Comment</h4>
                                    <div class="itility-star-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star havent-vote"></i>
                                    </div>
                                </div>
                                <hr>
                                <form class="comment-form-detail row" action="propertydetail.php?id=<?= $id?>" method="post">
                                    <div class="col-md-6">
                                        <p>ENTER YOUR NAME</p>
                                        <input type="text" class="form-control" placeholder="Your name here..." name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <p>ENTER YOUR MAIL</p>
                                        <input type="text" class="form-control" placeholder="Your mail here..." name="mail">
                                    </div>
                                    <div class="col-12">
                                        <p>ENTER YOUR MESSAGE</p>
                                        <input type="text" class="form-control" placeholder="Enter your message here..." name="message">
                                    </div>
                                    <button class="btn btn-success rounded-pill" name="comment">Submit Now</button>
                                </form>
                            </div> -->
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="price-selector">
                                <div class="categories-selection-item d-flex">
                                <span>|</span>
                                <h3>Price</h3>
                                </div>
                                <form class="price-range" method="POST">
                                    <input type="range" class="form-range custom-range" min="1" max="100" value="50" id="customRange1" name="price">
                                    <p class="range-text">$<span id="rangeId1"></span>k</p>
                                </form>
                            </div>
                            <div class="categories-selector">
                                <div class="categories-selection-item d-flex">
                                    <span>|</span>
                                    <h3>Categories</h3>
                                </div>
                                <div class="categories-selection">
                                    <ul>
                                        <a href="propertylist.php?type=Villa">
                                            <li class="row">
                                                <p class="col-8">Villa</p>
                                                <p class="col-2 text-center">(26)</p>
                                            </li>
                                        </a>
                                        <a href="propertylist.php?type=Apartment">
                                            <li class="row">
                                                <p class="col-8">Apartment</p>
                                                <p class="col-2 text-center">(21)</p>
                                            </li>
                                        </a>
                                        <a href="propertylist.php?type=Indastrial">
                                            <li class="row">
                                                <p class="col-8">Indastrial</p>
                                                <p class="col-2 text-center">(8)</p>
                                            </li>
                                        </a>
                                        <a href="propertylist.php?type=Global World">
                                            <li class="row">
                                                <p class="col-8">Global World</p>
                                                <p class="col-2 text-center">(13)</p>
                                            </li>
                                        </a>
                                        <a href="propertylist.php?type=Residantial">
                                            <li class="row">
                                                <p class="col-8">Residantial</p>
                                                <p class="col-2 text-center">(36)</p>
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                    <div class="information-selector">
                        <div class="categories-selection-item d-flex">
                            <span>|</span>
                            <h3>Information</h3>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Car Garrage
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Car Garrage</a></li>
                            <li><a class="dropdown-item" href="#">Bathroom</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bathroom
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bathroom</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bedroom
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bedroom</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Front Ground
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Front Ground</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="place-selector">
                        <div class="categories-selection-item d-flex">
                            <span>|</span>
                            <h3>Place</h3>
                        </div>
                        <a href="propertylist.php?location=NewYork">
                            <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                <p class="col-8">New York</p>
                                <div class="number-circle rounded-circle col-4">
                                    <p>26</p>
                                </div>
                            </div>
                        </a>
                        <a href="propertylist.php?location=London">
                            <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                <p>London</p>
                                <div class="number-circle rounded-circle">
                                    <p>16</p>
                                </div>
                            </div>
                        </a>
                        <a href="propertylist.php?location=HaNoi">
                            <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                <p>Ha Noi</p>
                                <div class="number-circle rounded-circle">
                                    <p>22</p>
                                </div>
                            </div>
                        </a>
                        <a href="propertylist.php?location=Melbourne">
                            <div class="place-selection-item rounded-pill d-flex justify-content-between">
                                <p>Melbourne</p>
                                <div class="number-circle rounded-circle">
                                    <p>41</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="area-selector">
                        <div class="categories-selection-item d-flex">
                            <span>|</span>
                            <h3>Area</h3>
                        </div>
                        <div class="price-range">
                            <input type="range" class="form-range custom-range" min="0" max="3056" value="1500" id="customRange2">
                            <p class="range-text"><span id="rangeId2"></span> sq ft</p>
                        </div>
                    </div>
                    <div class="popular-proparty">
                        <div class="categories-selection-item d-flex">
                            <span>|</span>
                            <h3>Popular Proparty</h3>
                        </div>
                        <div class="popular-proparty-item d-flex">
                            <div class="img-circle rounded-circle"></div>
                            <div class="popular-proparty-item-text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <div class="d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>12A Hotlit City New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="popular-proparty-item d-flex">
                            <div class="img-circle rounded-circle"></div>
                            <div class="popular-proparty-item-text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <div class="d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>12A Hotlit City New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="popular-proparty-item d-flex">
                            <div class="img-circle rounded-circle"></div>
                            <div class="popular-proparty-item-text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <div class="d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>12A Hotlit City New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="popular-proparty-item d-flex border border-0">
                            <div class="img-circle rounded-circle"></div>
                            <div class="popular-proparty-item-text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <div class="d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>12A Hotlit City New York</p>
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
                
</div>
<?php endwhile;
endif;
get_footer();
?>
<script type="text/javascript">
    var sync1 = $(".slider");
    var sync2 = $(".navigation-thumbs");

    var thumbnailItemClass = '.owl-item';

    var slides = sync1.owlCarousel({
        video:true,
        startPosition: 1,
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:false,
        nav: false,
        dots: true
    }).on('changed.owl.carousel', syncPosition);

    function syncPosition(el) {
    $owl_slider = $(this).data('owl.carousel');
    var loop = $owl_slider.options.loop;

    if(loop){
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);
        if(current < 0) {
            current = count;
        }
        if(current > count) {
            current = 0;
        }
    }else{
        var current = el.item.index;
    }

    var owl_thumbnail = sync2.data('owl.carousel');
    var itemClass = "." + owl_thumbnail.options.itemClass;


    var thumbnailCurrentItem = sync2
    .find(itemClass)
    .removeClass("synced")
    .eq(current);

    thumbnailCurrentItem.addClass('synced');

    if (!thumbnailCurrentItem.hasClass('active')) {
        var duration = 300;
        sync2.trigger('to.owl.carousel',[current, duration, true]);
    }   
    }
    var thumbs = sync2.owlCarousel({
    startPosition: 4,
    items:5,
    loop:false,
    margin:10,
    autoplay:false,
    nav: false,
    dots: false,
    onInitialized: function (e) {
        var thumbnailCurrentItem =  $(e.target).find(thumbnailItemClass).eq(this._current);
        thumbnailCurrentItem.addClass('synced');
    },
    })
    .on('click', thumbnailItemClass, function(e) {
        e.preventDefault();
        var duration = 300;
        var itemIndex =  $(e.target).parents(thumbnailItemClass).index();
        sync1.trigger('to.owl.carousel',[itemIndex, duration, true]);
    }).on("changed.owl.carousel", function (el) {
    var number = el.item.index;
    $owl_slider = sync1.data('owl.carousel');
    $owl_slider.to(number, 100, true);
    });

    var video1 = document.getElementById('video-house1');
    var played1 = false;
    video1.addEventListener('click', function(){
        if(!played1) {
            video1.play();
            played1 = !played1;
        }
        else {
            video1.pause();
            played1 = !played1;
        }
    });
    var video2 = document.getElementById('video-house2');
    var played2 = false;
    video2.addEventListener('click', function(){
        if(!played2) {
            video2.play();
            played2 = !played2;
        }
        else {
            video2.pause();
            played2 = !played2;
        }
    });
    var video3 = document.getElementById('video-house3');
    var played3 = false;
    video3.addEventListener('click', function(){
        if(!played3) {
            video3.play();
            played3 = !played3;
        }
        else {
            video3.pause();
            played3 = !played3;
        }
    });
    $(document).ready(function(){
    $('.property-feedback-slide').slick({
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrow: false,
        autoplay: true,
    });
    });
    var slider = document.getElementById("customRange1");
    var output = document.getElementById("rangeId1");
    output.innerHTML = slider.value; 

    slider.oninput = function() {
    output.innerHTML = this.value;
    }
    var slider2 = document.getElementById("customRange2");
    var output2 = document.getElementById("rangeId2");
    output2.innerHTML = slider2.value; 

    slider2.oninput = function() {
    output2.innerHTML = this.value;
    }

    function changeStateLine(estate_id) {
        $('.estate-location-img').removeClass('active');
        $(estate_id).addClass('active');
    };

    function changeFloorPlan(floor_id) {
        $('.floor-plan-img').removeClass('active');
        $(floor_id).addClass('active');
    };

    function changeVideoIntro(video_id) {
        $('.video-house').removeClass('active');
        $(video_id).addClass('active');
    };

    function changeNearBy(itility_id) {
        $('.itility-nearby').removeClass('active');
        $(itility_id).addClass('active');
    };

    function confirmDelete(){
        if(confirm("You want to delete this house ?"))
            return true;
        
        return false;
    }

</script>