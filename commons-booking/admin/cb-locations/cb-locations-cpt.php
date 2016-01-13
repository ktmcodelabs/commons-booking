<?php
/**
 *
 * @package   Commons_Booking
 * @author    Florian Egermann <florian@macht-medien.de
 * @license   GPL-2.0+
 * @link      http://www.wielebenwir.de
 * @copyright 2015 wielebenwir
 */

/**
 * Register the custom post type: locations
 *
 * @package Commons_Booking_Items_Metabox
 * @author  Florian Egermann <florian@wielebenwir.de>
 */


class CB_Locations_CPT extends CPT_Core {

    /**
     * Register Location Post Type. 
     */
    public function __construct( $slug ) {

        $this->slug = $slug;

        // Register this cpt
        // First parameter should be an array with Singular, Plural, and Registered name
        parent::__construct(
            array( 
                __( 'Location', $this->slug ), 
                __( 'Locations', $this->slug ), 
                'cb_locations' 
                ),
            array( 
                'supports' => array( 'title', 'editor', 'thumbnail' ), 
                'show_in_menu' => true,
                'menu_position' => 32,
                'menu_icon' => 'dashicons-location-alt'
                )
        );


    }

}

?>