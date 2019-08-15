<?php
class bk_get_query extends rubik_section_parent {
    static function query($atts, $moduleID = '') {
        $rubik_option = rubik_core::bk_get_global_var('rubik_option');
        $args = array();

        $atts = shortcode_atts(
            array(
                'category_id'   => '',
                'limit'         => '',
                'feature'       => '',
                'offset'        => 0,
                'date_query'    => 0,
                'orderby'       => 'date',
                'tags'          => '',
                'editor_pick'   => '',
                'editor_exclude' => '',
            ),$atts);

        if(isset($atts['editor_pick']) && ($atts['editor_pick'] != null)) {
            $editorPickPosts = array_map('intval', explode(',',$atts['editor_pick']));
            $args = array(
                'post_type'         => 'post',
                'ignore_sticky_posts' => 1,
                'posts_per_page'    => $atts['limit'],
                'post__in'          =>  $editorPickPosts,
                'orderby'           => 'post__in',
                'offset'            => $atts['offset'],
            );
        }else {
            if ($atts['feature'] == 'yes') {
                $args = array(
                    'post__in'  => get_option( 'sticky_posts' ),
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => $atts['limit'],
                    'offset' => $atts['offset'],
                    'post_type' => 'post',
                );
            }else {
                $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'post_status' => 'publish',
                    'posts_per_page' => $atts['limit'],
                    'offset' => $atts['offset'],
                );
            }
            if ($atts['date_query'] > 0) {
                $args['date_query'] = array(array(
                    'column' => 'post_date_gmt',
                    'after' => $atts['date_query'].' days ago',
                ));
            }
            if ( $atts['category_id'] >= 1 ) {
                if (strpos($atts['category_id'], ",") > 0) {
                    $bkcategories = explode(',',$atts['category_id'],1000);
                }else {
                    $bkcategories = $atts['category_id'];
                }
                $args[ 'category__in' ] = $bkcategories;
            }
            if(isset($atts['editor_exclude']) && ($atts['editor_exclude'] != null)) {
                $editorExcludePosts = array_map('intval', explode(',',$atts['editor_exclude']));
                $args[ 'post__not_in' ] = $editorExcludePosts;
            }
            //tag in query
            if(isset($atts['tags']) && ($atts['tags'] != null)) {
                $args['tag__in'] = array_map('intval', explode(',',$atts['tags']));
            }
            switch ( $atts['orderby'] ) {

                //Date post
                case 'date' :
                    $args['orderby'] = 'date';
                    break;

                //Popular comment
                case 'comment_count' :
                    $args['orderby'] = 'comment_count';
                    break;

                //Popular Views
                case 'view_count' :
                    $args['meta_key'] = 'post_views_count';
                    $args['orderby']  = 'meta_value_num';
                    $args['order']    = 'DESC';
                    break;

                //Modified
                case 'modified' :
                    $args['orderby'] = 'modified';
                    break;

                // Review
                case 'top_review' :
                    $args['meta_key'] = 'bk_final_score';
                    $args['orderby']  = 'meta_value_num';
                    $args['order']    = 'DESC';
                    break;
                //Random
                case 'rand':
                    $args['orderby'] = 'rand';
                    break;

                //Alphabet decs
                case 'alphabetical_decs':
                    $args['orderby'] = 'title';
                    $args['order']   = 'DECS';
                    break;

                //Alphabet asc
                case 'alphabetical_asc':
                    $args['orderby'] = 'title';
                    $args['order']   = 'ASC';
                    break;

                // Default
                default:
                    $args['orderby'] = 'date';
                    break;
            }
        }
        $the_query = new WP_Query( $args );
        if($moduleID != null) {
            parent::$rubik_ajax_c[$moduleID]['args'] = $args;
        }
        unset($args);

        return $the_query;
    }
}
