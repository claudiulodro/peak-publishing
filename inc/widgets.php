<?php

class Peak_Publishing_MEM_Block_Full extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'peak_publishing_mem_block_full',
            'MEM Block: Full',
            array( 
                'description' => __( 'Full width MEM block', 'peak_publishing' ), 
            )
        );
    }
 
    public function widget( $args, $instance ) {
        get_template_part( 'template-parts/mem-block-full', get_post_type() );
    }
}

class Peak_Publishing_MEM_Block_Large extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'peak_publishing_mem_block_large',
            'MEM Block: Large',
            array( 
                'description' => __( '2/3 width MEM block', 'peak_publishing' ), 
            )
        );
    }
 
    public function widget( $args, $instance ) {
        get_template_part( 'template-parts/mem-block-large', get_post_type() );
    }
}

class Peak_Publishing_MEM_Block_Small extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'peak_publishing_mem_block_small',
            'MEM Block: Small',
            array( 
                'description' => __( '1/3 width MEM block', 'peak_publishing' ), 
            )
        );
    }
 
    public function widget( $args, $instance ) {
        get_template_part( 'template-parts/mem-block-small', get_post_type() );
    }
}

class Peak_Publishing_MEM_Block_Spacer extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'peak_publishing_mem_block_spacer',
            'MEM Block: Spacer',
            array( 
                'description' => __( 'A spacer or divider MEM block', 'peak_publishing' ), 
            )
        );
    }
 
    public function widget( $args, $instance ) {
        get_template_part( 'template-parts/mem-block-spacer', get_post_type() );
    }
}

class Peak_Publishing_River_Block_Full extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'peak_publishing_river_block_full',
            'River Block: Full',
            array( 
                'description' => __( 'One full width river post', 'peak_publishing' ), 
            )
        );
    }
 
    public function widget( $args, $instance ) {
        get_template_part( 'template-parts/river-block-full', get_post_type() );
    }
}

class Peak_Publishing_River_Block_Small extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'peak_publishing_river_block_small',
            'River Block: Small',
            array( 
                'description' => __( 'A row of river posts', 'peak_publishing' ), 
            )
        );
    }
 
    public function widget( $args, $instance ) {
        get_template_part( 'template-parts/river-block-small', get_post_type() );
    }
}

add_action( 'widgets_init', function() { 
    register_widget( 'Peak_Publishing_MEM_Block_Full' );
    register_widget( 'Peak_Publishing_MEM_Block_Large' );
    register_widget( 'Peak_Publishing_MEM_Block_Small' ); 
    register_widget( 'Peak_Publishing_MEM_Block_Spacer' ); 
    register_widget( 'Peak_Publishing_River_Block_Full' ); 
    register_widget( 'Peak_Publishing_River_Block_Small' ); 
} );