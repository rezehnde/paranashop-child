<?php
class bk_get_cfg {
    static function configs($atts, $page_info) {
        $bk_configs = array();
        $atts = shortcode_atts(
                array(
                    'category_id'   => true,
                    'limit'         => false,
                    'feature'       => false,
                    'bg_color'      => false,
                    'offset'        => false,
                    'date_query'    => false,
                    'order'         => false,
                    'orderby'       => false,
                    'tags'          => false,
                    'editor_pick'   => false,
                    'editor_exclude' => false,
                ),$atts);

        $bk_configs['category_id'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_category', true );
        if($atts['limit'] == true){
            $bk_configs['limit'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_limit', true );
        }
        if($atts['feature'] == true) {
            $bk_configs['feature'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_feature', true );
        }
        if($atts['bg_color'] == true) {
            $bk_configs['bg_color'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_bg_color', true );
        }
        if($atts['offset'] == true) {
            $bk_configs['offset'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_offset', true );
        }
        if($atts['date_query'] == true) {
            $bk_configs['date_query'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_date_query', true );
        }
        if($atts['orderby'] == true) {
            $bk_configs['orderby']  = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_orderby', true );
        }
        if($atts['tags'] == true) {
            $bk_configs['tags']      = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_tags', true );
        }
        if($atts['editor_pick'] == true) {
            $bk_configs['editor_pick'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_editor_pick', true );
        }
        if($atts['editor_exclude'] == true) {
            $bk_configs['editor_exclude'] = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_editor_exclude', true );
        }
        return $bk_configs;
    }
}
