<?php
//really simple lookup array for product finishes. accepts (string)short finish code as a parameter returns array or false.
if ( ! function_exists( 'finishes_lookup' ) ) :
	function finishes_lookup($finish) {

        if(!$finish):
            return false;
        endif;

        $finishes_array = array(
            'bzp' => array('title' => 'Bright Zinc Plate', 'img' => 'img_path'),
            'pg' =>  array('title' => 'Pre Galvanised', 'img' => 'img_path'),
            'hdg' =>  array('title' => 'Hot Dip Galvanised', 'img' => 'img_path'),
            'epc' =>  array('title' => 'Epoxy Powder Coat', 'img' => 'img_path'),
            'ss' =>  array('title' => 'Stainless Steel', 'img' => 'img_path'),
            'wp' =>  array('title' => 'Waterproof', 'img' => 'img_path'),
        );

        $finish_return = $finishes_array[$finish];

        if(!empty($finish_return)):
            return $finish_return;
        else:
            return false;
        endif;

    }
endif;
?>
