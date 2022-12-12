<?php
get_header();
$term_id = get_query_var('cat');
$term = get_term( $term_id, 'category' );
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
        'cat'              => $term_id,
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
        'posts_per_page'         => 10,
        //'posts_per_archive_page' => 10,
        // 'nopaging'               => false,
        'paged'                  => get_query_var( 'paged' ),
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
    if(isset($_GET['s'])){
        $keyword = $_GET['s'];
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
            'cat'              => $term_id,
            's'                => $keyword,
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
            'posts_per_page'         => 10,
            //'posts_per_archive_page' => 10,
            // 'nopaging'               => false,
            'paged'                  => get_query_var( 'paged' ),
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
    }
if(isset($_GET['sort'])){
    $getValue= $_GET['sort'];
    if($getValue == 'area') {
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => -1,
            'meta_key'          => 'area',
            'orderby'           => 'meta_value_num',
            'order'             => 'ASC'
        );
    }
    if($getValue == 'price-low'){
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => -1,
            'meta_key'          => 'price',
            'orderby'           => 'meta_value_num',
            'order'             => 'ASC'
        );
    }
    if($getValue == 'price-high'){
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => -1,
            'meta_key'          => 'price',
            'orderby'           => 'meta_value_num',
            'order'             => 'DESC'
        );
    } 
}
if(isset($_GET['tag'])){
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
        'cat'              => $term_id,
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
        'tag'           => $_GET['tag'],
        // 'tag_id'        => 5,
        // 'tag__and'      => array( 1, 2 ),
        // 'tag__in'       => array( 1, 2 ),
        // 'tag__not_in'   => array( 1, 2 ),
        // 'tag_slug__and' => array( 'red', 'blue' ),
        // 'tag_slug__in'  => array( 'red', 'blue' ),

        // Pagination Parameters
        'posts_per_page'         => 10,
        //'posts_per_archive_page' => 10,
        // 'nopaging'               => false,
        'paged'                  => get_query_var( 'paged' ),
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
}
if(isset($_GET['type'])){
    $getValue = $_GET['type'];
    $args = array(
        'numberposts'   => -1,
        'post_type'     => 'post',
        'meta_key'      => 'type',
        'meta_value'    => $getValue
    );  
}
if(isset($_GET['location'])){
    $getValue = $_GET['location'];
    $args = array(
        'numberposts'   => -1,
        'post_type'     => 'post',
        'meta_key'      => 'location',
        'meta_value'    => $getValue
    );
}
if(isset($_GET['location']) && isset($_GET['type']) && isset($_GET['price'])) {
    if($_GET['price'] == '<50K'){
        $args = array(
            'meta_query'     => array(
                array(
                    'key'     => 'location',
                    'value'   => $_GET['location'],
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'type',
                    'value'   => $_GET['type'],
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'price',
                    'type'    => 'numeric',
                    'value'   => array( 0, 50000 ),
                    'compare' => 'BETWEEN',
                ),
            ),
        );
    } else if($_GET['price'] == '50K-100K'){
        $args = array(
            'meta_query'     => array(
                array(
                    'key'     => 'location',
                    'value'   => $_GET['location'],
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'type',
                    'value'   => $_GET['type'],
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'price',
                    'type'    => 'numeric',
                    'value'   => array( 50000, 100000 ),
                    'compare' => 'BETWEEN',
                ),
            ),
        );
    } else if($_GET['price'] == '>100K') {
        $args = array(
            'meta_query'     => array(
                array(
                    'key'     => 'location',
                    'value'   => $_GET['location'],
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'type',
                    'value'   => $_GET['type'],
                    'compare' => 'LIKE',
                ),
                array(
                    'key'     => 'price',
                    'type'    => 'numeric',
                    'value'   => array( 100000, 10000000 ),
                    'compare' => 'BETWEEN',
                ),
            ),
        );
    }
};
$query = new WP_Query( $args );
?>
<div class="property-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 row">
                <div class="col-12">
                    <div class="search-property d-flex flex-wrap">
                        <p>21 Properties</p>
                        <form action="" method="get">
                            <div class="search-form rounded-pill">
                                <input class="rounded-pill" type="text" placeholder="Search your keyword" name="s">
                                <button class="rounded-circle text-center">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                        <div class="dropdown">
                            <button class="sort-by-dropdown btn btn-secondary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?= $sort == 'area' ? 'active' : ''; ?>" href="?sort=area">Area</a></li>
                                <li><a class="dropdown-item <?= $sort == 'price-low' ? 'active' : ''; ?>" href="?sort=price-low">Price (Min -> Max)</a></li>
                                <li><a class="dropdown-item <?= $sort == 'price-high' ? 'active' : ''; ?>" href="?sort=price-high">Price (Max -> Min)</a></li>
                            </ul>
                        </div>
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
                <?= $term->description; ?>
                <?php
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col-lg-6">
                    <div class="property-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="property-img" style="background-image: url('<?= get_the_post_thumbnail_url()?>');">
                                <div class="property-img-content d-flex">
                                    <i class="fa-solid fa-user"></i>
                                    <p>MD Mrikon</p>
                                    <span>|</span>
                                    <p>Compare</p>
                                    <span>|</span>
                                    <p>Details</p>
                                </div>
                            </div>
                        </a>
                        <div class="property-info">
                            <a href="./propertydetail.php?id=<?= $house['id']?>">    
                                <h3><?= get_the_title()?></h3>
                            </a>
                            <i class="fa-solid fa-location-dot"></i>
                            <span><?= get_field('location')?></span>
                            <div class="for-sell-small">
                                <span><?= get_field('purpose')?></span>
                            </div>
                            <p><?= the_excerpt()?></p>
                            <span class="apartment-price">$ <?= number_format(get_field('price')); ?></span>
                            <div class="apartment-detail d-flex">
                                <p>Bedroom: <?= get_field('bedrooms')?></p>
                                <p>Bathroom: <?= get_field('bathrooms')?></p>
                                <p>Size: <?= get_field('area')?> sq ft</p>
                            </div>
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
            <div class="col-lg-4 col-md-5">
                    <div class="price-selector">
                        <div class="categories-selection-item d-flex">
                        <span>|</span>
                        <h3>Price</h3>
                        </div>
                        <div class="price-range">
                            <input type="range" class="form-range custom-range" name="price" min="1" max="100" value="50" id="customRange1">
                            <p class="range-text">$<span id="rangeId1"></span>k</p>
                        </div>
                    </div>
                <div class="categories-selector">
                    <div class="categories-selection-item d-flex">
                        <span>|</span>
                        <h3>Categories</h3>
                    </div>
                    <div class="categories-selection">
                        <ul>
                            <a href="?type=Villa">
                                <li class="row">
                                    <p class="col-8">Villa</p>
                                    <p class="col-2 text-center">(26)</p>
                                </li>
                            </a>
                            <a href="?type=Apartment">
                                <li class="row">
                                    <p class="col-8">Apartment</p>
                                    <p class="col-2 text-center">(21)</p>
                                </li>
                            </a>
                            <a href="?type=Indastrial">
                                <li class="row">
                                    <p class="col-8">Indastrial</p>
                                    <p class="col-2 text-center">(8)</p>
                                </li>
                            </a>
                            <a href="?type=Global World">
                                <li class="row">
                                    <p class="col-8">Global World</p>
                                    <p class="col-2 text-center">(13)</p>
                                </li>
                            </a>
                            <a href="?type=Residantial">
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
                    <a href="?location=NewYork">
                        <div class="place-selection-item rounded-pill d-flex justify-content-between">
                            <p class="col-8">New York</p>
                            <div class="number-circle rounded-circle col-4">
                                <p>26</p>
                            </div>
                        </div>
                    </a>
                    <a href="?location=London">
                        <div class="place-selection-item rounded-pill d-flex justify-content-between">
                            <p>London</p>
                            <div class="number-circle rounded-circle">
                                <p>16</p>
                            </div>
                        </div>
                    </a>
                    <a href="?location=Ha Noi">
                        <div class="place-selection-item rounded-pill d-flex justify-content-between">
                            <p>Ha Noi</p>
                            <div class="number-circle rounded-circle">
                                <p>22</p>
                            </div>
                        </div>
                    </a>
                    <a href="?location=Melbourne">
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
                    <?= $term->description; ?>
                    <?php
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="popular-proparty-item d-flex">
                        <?php the_post_thumbnail('thumbnail') ?>
                            <div class="popular-proparty-item-text">
                                <a href="<?php the_permalink();?>">
                                    <h5><?= get_the_title()?></h5>
                                </a>
                                <div class="d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p><?= get_field('location')?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    endif;
                    ?>
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
<script>
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
</script>
<?php get_footer(); ?>