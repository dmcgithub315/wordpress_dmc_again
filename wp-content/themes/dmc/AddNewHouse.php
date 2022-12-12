<?php /* Template Name: AddNewHouse */ ?>
<?php
get_header();
if(isset($_POST['post'])){
    if($_POST['purpose'] === 'For Rent'){
        $my_post = array(
            'post_title'    => $_POST['title'],
            'post_content'  => $_POST['description'],
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_category' => array( 2, 36 ),
        );
    } else {
        $my_post = array(
            'post_title'    => $_POST['title'],
            'post_content'  => $_POST['description'],
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_category' => array( 2, 35 ),
        );
    };

    // Insert the post into the database.
    $post_id = wp_insert_post( $my_post, $wp_error );
    update_post_meta( $post_id, 'price', $_POST['price'] );
    update_post_meta( $post_id, 'location', $_POST['location'] );
    update_post_meta( $post_id, 'locationdetail', $_POST['locationdetail'] );
    update_post_meta( $post_id, 'bedrooms', $_POST['bedrooms'] );
    update_post_meta( $post_id, 'bathrooms', $_POST['bathrooms'] );
    update_post_meta( $post_id, 'kitchens', $_POST['kitchens'] );
    update_post_meta( $post_id, 'livingrooms', $_POST['livingrooms'] );
    update_post_meta( $post_id, 'garages', $_POST['garages'] );
    update_post_meta( $post_id, 'area', $_POST['area'] );
    update_post_meta( $post_id, 'type', $_POST['type'] );
    update_post_meta( $post_id, 'yearbuild', $_POST['yearbuild'] );
    update_post_meta( $post_id, 'amenities', $_POST['amenities'] );
    update_post_meta( $post_id, 'equipment', $_POST['equipment'] );
    update_post_meta( $post_id, 'orienten', $_POST['orienten'] );
    update_post_meta( $post_id, 'length', $_POST['length'] );
    update_post_meta( $post_id, 'width', $_POST['width'] );
    update_post_meta( $post_id, 'height', $_POST['height'] );
    update_post_meta( $post_id, 'floor', $_POST['floor'] );
    update_post_meta( $post_id, 'floors', $_POST['floors'] );
    update_post_meta( $post_id, 'purpose', $_POST['purpose'] );
    update_post_meta( $post_id, 'album', $_POST['albumlink'] );
    echo "Add house successfully! View house: " . $post_id . "  " . $_POST['price'];
}
?>
<div class="pages-content">
    <div class="container">
        <div class="add-proparty-list d-flex">
            <button data-tab="#description" class="add-proparty-tag active">
                <span>Description</span>
            </button>
            <button data-tab="#set-location" class="add-proparty-tag">
                <span>Set Location</span>
            </button>
            <button data-tab="#gallary" class="add-proparty-tag">
                <span>Gallary</span>
            </button>
            <button data-tab="#additional-info" class="add-proparty-tag">
                <span>Additional Info</span>
            </button>
            <button data-tab="#property-type" class="add-proparty-tag border border-0">   
                <span>Property Type</span>
            </button>
        </div>
        <div class="form-tabs">
            <form action="" method="post">
                <div id="description" class="add-proparty-form active row shadow p-3 mb-5 bg-body rounded"> 
                    <div class="col-12">
                        
                        <div>
                            <p>Property Title</p>
                            <input class="form-control" name="title" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Property Type</p>
                            <select class="form-select" name="type" aria-label="Default select example">
                                <option value="Villa">Villa</option>
                                <option value="House">House</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Garages</p>
                            <select class="form-select" name="garages" aria-label="Default select example" >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Bedrooms</p>
                            <select class="form-select" name="bedrooms" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Bathrooms</p>
                            <select class="form-select" name="bathrooms" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Kitchen</p>
                            <select class="form-select" name="kitchens" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Living room</p>
                            <select class="form-select" name="livingrooms" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0);" onclick="setActiveTab('#set-location');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                    </div>
                </div>
                <div id="set-location" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                    <div class="col-12">
                        <div>
                            <p>Location</p>
                            <input class="form-control" name="location" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Location Detail</p>
                            <input class="form-control" name="locationdetail" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Floor(Apartment)</p>
                            <input class="form-control" name="floor" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Area</p>
                            <input class="form-control" name="area" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Price</p>
                            <input class="form-control" name="price" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Floors</p>
                            <select class="form-select" name="floors" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value=">3">>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Orienten</p>
                            <select class="form-select" name="orienten" aria-label="Default select example" value="South">
                                <option value="West">West</option>
                                <option value="East">East</option>
                                <option value="North">North</option>
                                <option value="South">South</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0);" onclick="setActiveTab('#gallary');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                    </div>
                </div>
                <div id="gallary" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                    <div class="col-md-4">
                        <div>
                            <p>Length</p>
                            <input class="form-control" name="length" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <p>Width</p>
                            <input class="form-control" name="width" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <p>Height</p>
                            <input class="form-control" name="height" type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <p>Year Build</p>
                            <input class="form-control" name="yearbuild" type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="large-input">
                            <p>Description</p>
                            <input class="form-control" name="description" type="text">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="javascript:void(0);" onclick="setActiveTab('#additional-info');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                    </div>
                </div>
                <div id="additional-info" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                    <div class="col-12">
                        <div>
                            <div>
                                <p>Equipment</p>
                                <select class="form-select" name="equipment" aria-label="Default select example">
                                    <option value="Full">Full</option>
                                    <option value="Base">Base</option>
                                    <option value="Nothing">Nothing</option>
                                </select>
                                
                            </div>
                            <p>Amenities:</p>
                            <div class="d-flex row checkbox-amenities">
                                <form action="addhouse.php">
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Air Conditioner</p>
                                        <input type="checkbox" name="amenities[]" value="Air Conditioner">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Fencing</p>
                                        <input type="checkbox" name="amenities[]" value="Fencing">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Internet</p>
                                        <input type="checkbox" name="amenities[]" value="Internet">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Hospital</p>
                                        <input type="checkbox" name="amenities[]" value="Hospital">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>School</p>
                                        <input type="checkbox" name="amenities[]" value="School">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Park</p>
                                        <input type="checkbox" name="amenities[]" value="Park">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Dishwasher</p>
                                        <input type="checkbox" name="amenities[]" value="Dishwasher">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Floor Convering</p>
                                        <input type="checkbox" name="amenities[]" value="Floor Convering">
                                    </div>
                                    <div class="d-flex col-md-3 col-6">
                                        <p>Wardrobes</p>
                                        <input type="checkbox" name="amenities[]" value="Wardrobes">
                                    </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                        <a href="javascript:void(0);" onclick="setActiveTab('#property-type');" class="btn btn-success float-end next-tab-btn btn-next">Next</a>
                    </div>
                    </div>
                </div>
                <div id="property-type" class="add-proparty-form row shadow p-3 mb-5 bg-body rounded"> 
                    <div class="col-md-6">
                        <div>
                            <p>Image</p>
                            <input class="form-control" type="text" name="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Purpose</p>
                            <select class="form-select" name="purpose" aria-label="Default select example">
                                    <option value="For Rent">For Rent</option>
                                    <option value="For Sale">For Sale</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Album</p>
                            <textarea class="form-control" name="album"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Estate Location</p>
                            <textarea class="form-control" name="estatelocation"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Floor Plans</p>
                            <textarea class="form-control" name="floorplan"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p>Intro Video</p>
                            <textarea class="form-control" name="introvideo"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="post" class="btn btn-success submit-proparty" value="Post">
                </div>
            </form>
        </div>
        
        <a href="#header">
            <button class="go-header-btn">
                <i class="fa-solid fa-chevron-up"></i>
            </button>
        </a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script>
    function setActiveTab(tab_id) {
        $('.add-proparty-tag').removeClass('active');
        $("button[data-tab='" + tab_id +"']").addClass('active');

        $('.add-proparty-form').removeClass('active');
        $(tab_id).addClass('active');
    };
    jQuery(document).ready(function($) {
        $('.add-proparty-tag').click( function() {
            var tab = $(this).data('tab');
            setActiveTab(tab);
        });
    });
</script>
<?php
get_footer();
?>