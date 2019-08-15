<?php
class rubik_block_7 extends rubik_section_parent  {

    public function render( $page_info ) {
        global $rubik_dynamic_css;

        $block_str = '';
        $uid = uniqid('block_7-');

        $bk_ajax_button = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_ajax_button', true );

        $rubik_dynamic_css = rubik_core::rubik_set_dynamic_css($page_info, $rubik_dynamic_css, $uid);

        $bk_layout = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_module_layout', true );
        if ($bk_layout != 'bkmodule-tall') {
            $bk_layout = '';
        }

        $cfg_ops = array();
        $cfg_ops = $this->cfg_options();
        $bk_post_icon = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_post_icon', true );
        $excerpt_length = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_excerpt_length', true );
        $module_cfg = bk_get_cfg::configs($cfg_ops['has_sb']['bk_block_7'], $page_info);    //get block config

        /** Tabs **/
        $rubik_tabs = get_post_meta( $page_info['page_id'], $page_info['block_prefix'].'_categorytabs', true );

        $rubikTabsToArray = explode(",",$rubik_tabs);

        $tabs_amount = intval(count($rubikTabsToArray));

        rubik_section_parent::$rubik_ajax_c[$uid]['post_icon'] = $bk_post_icon;
        rubik_section_parent::$rubik_ajax_c[$uid]['excerpt_length'] = $excerpt_length;

        rubik_section_parent::$rubik_ajax_c[$uid]['tabfirst']['content'] = '';
        rubik_section_parent::$rubik_ajax_c[$uid]['tabfirst']['offset'] = $module_cfg['offset'];
        rubik_section_parent::$rubik_ajax_c[$uid]['tabfirst']['entries'] = $module_cfg['limit'];
        rubik_section_parent::$rubik_ajax_c[$uid]['tabfirst']['prev'] = '';
        rubik_section_parent::$rubik_ajax_c[$uid]['tabfirst']['next'] = '';

        if($tabs_amount > 0) {
            for ($i=0; $i< $tabs_amount; $i++) {
                rubik_section_parent::$rubik_ajax_c[$uid]['tab'.$i]['cat'] = $rubikTabsToArray[$i];
                rubik_section_parent::$rubik_ajax_c[$uid]['tab'.$i]['content'] = '';
                rubik_section_parent::$rubik_ajax_c[$uid]['tab'.$i]['offset'] = 0;
                rubik_section_parent::$rubik_ajax_c[$uid]['tab'.$i]['entries'] = $module_cfg['limit'];
                rubik_section_parent::$rubik_ajax_c[$uid]['tab'.$i]['prev'] = '';
                rubik_section_parent::$rubik_ajax_c[$uid]['tab'.$i]['next'] = '';

            }
        }

        $the_query = bk_get_query::query($module_cfg, $uid);              //get query

        // print_r($the_query);

        $block_str .= '<div id="'.$uid.'" class="bkmodule module-block-7 clearfix '.$bk_layout.'">';
        if ( $the_query->have_posts() ) :
            $block_str .= rubik_core::bk_get_block_title($page_info, $rubikTabsToArray);  //render block title
        endif;

        $block_str .= '<div class="bk-block-7-wrap bk-module-inner">';
        $block_str .= $this->render_modules($the_query, $bk_post_icon, $excerpt_length);            //render modules
        $block_str .= '</div> <!-- bk-block-7-wrap -->';

        if($bk_ajax_button !== 'disable') {
            $block_str .= rubik_core::bk_module_ajax_pagination();
        }

        $block_str .= '</div>';

        unset($cfg_ops); unset($module_cfg); unset($the_query);     //free
        wp_reset_postdata();
        return $block_str;
    }
    public function render_modules ($the_query, $bk_post_icon, $excerpt_length){
        $render_modules = '';
        $bk_contentout2 = new bk_contentout2;
        $bk_contentout8 = new bk_contentout8;
        $bk_contentout3 = new bk_contentout3;
        $custom_var_out2 = array (
            'thumbnail'    => 'rubik-620-420',
            'post-icon'     => $bk_post_icon,
            'except_length' => $excerpt_length,
        );
        $custom_var_out8 = array (
            'thumbnail'     => 'rubik-210-140',
            'post-icon'     => $bk_post_icon,
            'meta'          => array('date'),
        );
        $custom_var_out_thumb_off = array (
            'thumbnail'    => 'off',
            'meta'         => array('date'),
        );
        if ( $the_query->have_posts() ) :
            $render_modules .= '<div class="row clearfix">';
            if ( $the_query->have_posts() ) :

                foreach( range( 1, 1) as $i ):
                    $the_query->the_post();
                    $render_modules .= '<div class="large-post row-type content_out col-md-8 col-sm-8 ">';
                    $render_modules .= $bk_contentout2->render($custom_var_out2);
                    $render_modules .=  '</div>';
                endforeach;

            endif;
                $render_modules .= '<div class="col-md-4 col-sm-4">';
                $render_modules .= '<ul class="block7-small-posts row">';

                if ( $the_query->have_posts() ) :

                    foreach( range( 1, 1) as $i ):
                        $the_query->the_post();
                        $render_modules .= '<li class="content_out bk-post-title-small col-md-12 col-sm-12 clearfix">';
                        $render_modules .= $bk_contentout8->render($custom_var_out8);
                        $render_modules .= '</li><!-- End post -->';
                    endforeach;

                endif;

                while ( $the_query->have_posts() ): $the_query->the_post();

                    $render_modules .= '<li class="small-post rubik-meta-inline bk-post-title-small content_out col-md-12 col-sm-12 clearfix">';
                    $render_modules .= $bk_contentout3->render($custom_var_out_thumb_off);
                    $render_modules .= '</li><!-- End post -->';

                endwhile;
                $render_modules .= '</ul> <!-- End list-post -->';
                $render_modules .= '</div>';
            $render_modules .= '</div><!-- Close render modules -->';
        endif;
        return $render_modules;
    }

}
