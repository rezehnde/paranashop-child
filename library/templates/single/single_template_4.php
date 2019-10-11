<?php get_header(); ?>
<?php 
    $social_share = array();
    global $post;
    $meta_ar = array( 'author', 'date', 'postcomment', 'postview' );
    $rubik_option = rubik_core::bk_get_global_var('rubik_option');
    $rubik_top_share_items = $rubik_option['top-share-items-shown'];
    $rubik_bottom_share_items = $rubik_option['bottom-share-items-shown'];
    $share_box = $rubik_option['bk-sharebox-bottom-sw'];
    $social_share_top = array();
    $social_share_bottom = array();
    if ($share_box){
        $social_share_bottom['fb'] = $rubik_option['bk-fb-bottom-sw'];
        $social_share_bottom['tw'] = $rubik_option['bk-tw-bottom-sw'];
        $social_share_bottom['gp'] = $rubik_option['bk-gp-bottom-sw'];
        $social_share_bottom['pi'] = $rubik_option['bk-pi-bottom-sw'];
        $social_share_bottom['stu'] = $rubik_option['bk-stu-bottom-sw'];
        $social_share_bottom['li'] = $rubik_option['bk-li-bottom-sw'];
        
        $social_share_bottom['fb_text'] = $rubik_option['bk-fb-bottom-text'];
        $social_share_bottom['tw_text'] = $rubik_option['bk-tw-bottom-text'];
        $social_share_bottom['gp_text'] = $rubik_option['bk-gp-bottom-text'];
        $social_share_bottom['pi_text'] = $rubik_option['bk-pi-bottom-text'];
        $social_share_bottom['stu_text'] = $rubik_option['bk-stu-bottom-text'];
        $social_share_bottom['li_text'] = $rubik_option['bk-li-bottom-text'];
    }
    $share_box_top = $rubik_option['bk-sharebox-top-sw'];
    if ($share_box_top){
        $social_share_top['fb'] = $rubik_option['bk-fb-top-sw'];
        $social_share_top['tw'] = $rubik_option['bk-tw-top-sw'];
        $social_share_top['gp'] = $rubik_option['bk-gp-top-sw'];
        $social_share_top['pi'] = $rubik_option['bk-pi-top-sw'];
        $social_share_top['stu'] = $rubik_option['bk-stu-top-sw'];
        $social_share_top['li'] = $rubik_option['bk-li-top-sw'];
        
        $social_share_top['fb_text'] = $rubik_option['bk-fb-top-text'];
        $social_share_top['tw_text'] = $rubik_option['bk-tw-top-text'];
        $social_share_top['gp_text'] = $rubik_option['bk-gp-top-text'];
        $social_share_top['pi_text'] = $rubik_option['bk-pi-top-text'];
        $social_share_top['stu_text'] = $rubik_option['bk-stu-top-text'];
        $social_share_top['li_text'] = $rubik_option['bk-li-top-text'];
    }
    $authorbox_sw = $rubik_option['bk-authorbox-sw'];
    $postnav_sw = $rubik_option['bk-postnav-sw'];
    $related_sw = $rubik_option['bk-related-sw'];
    $comment_sw = $rubik_option['bk-comment-sw'];
?>
            <?php 
                $bkPostID = get_the_ID();      
                
                $postCategories = get_the_category($bkPostID);
                
                $postCatIDs = array();
                
                foreach($postCategories as $categoryKey => $postCategory) {
                    $postCatIDs[$categoryKey] = $postCategory->cat_ID;
                }
                
                rubik_section_parent::$rubik_ajax_c['s-cat-IDs'] = $postCatIDs;
                rubik_section_parent::$rubik_ajax_c['s-related-article-tab']['content'] = '';
                rubik_section_parent::$rubik_ajax_c['s-more-from-author-tab']['content'] = '';
                rubik_section_parent::$rubik_ajax_c['s-more-from-category-tab']['content'] = '';
                rubik_section_parent::$rubik_ajax_c['current_author'] = $post->post_author;
                rubik_section_parent::$rubik_ajax_c['s-related-articles']['offset'] = 0;
                rubik_section_parent::$rubik_ajax_c['s-author-articles']['offset'] = 0;
                rubik_section_parent::$rubik_ajax_c['s-category-articles']['offset'] = 0;
                rubik_section_parent::$rubik_ajax_c['s-related-articles']['entries'] = $rubik_option['bk-related-output'];;
                rubik_section_parent::$rubik_ajax_c['s-author-articles']['entries'] = $rubik_option['bk-related-output'];;
                rubik_section_parent::$rubik_ajax_c['s-category-articles']['entries'] = $rubik_option['bk-related-output'];;
                
                rubik_section_parent::$rubik_ajax_c['s-related-articles']['next'] = 0;
                rubik_section_parent::$rubik_ajax_c['s-author-articles']['next'] = 0;
                rubik_section_parent::$rubik_ajax_c['s-category-articles']['next'] = 0;
                
                rubik_section_parent::$rubik_ajax_c['s-related-articles']['prev'] = 1;
                rubik_section_parent::$rubik_ajax_c['s-author-articles']['prev'] = 1;
                rubik_section_parent::$rubik_ajax_c['s-category-articles']['prev'] = 1;
                
                $bkReviewSW = get_post_meta($bkPostID,'bk_review_checkbox',true);
                $postFormat = single_core::bk_post_format_detect($bkPostID);
                if($bkReviewSW == '1') {
                    $reviewPos = get_post_meta($bkPostID,'bk_review_box_position',true);
                }
                $bkPostLayout = get_post_meta($bkPostID,'bk_post_layout',true);
                
                $sidebar_option = '';
                $sidebar_option = get_post_meta($bkPostID,'bk_post_sb_select',true);
                if($sidebar_option == 'global') {
                    if(isset($rubik_option['single-sidebar-switch']) && ($rubik_option['single-sidebar-switch'] != 'enable')) {
                        $sidebar_option = 'disable';
                    }
                }
                
                if (($sidebar_option != '')&&($sidebar_option != 'global')) {
                    $sidebar = $sidebar_option;
                }else if((isset($rubik_option['single-page-sidebar'])) && ($rubik_option['single-page-sidebar'] != '')){
                    $sidebar = $rubik_option['single-page-sidebar'];
                }else {
                    $sidebar = '';
                }
                
                if(!is_active_sidebar($sidebar)) {
                    $sidebar_option = 'disable';
                }
                
                
                if($sidebar_option != 'disable') {
                    $sidebar_position = get_post_meta($bkPostID,'bk_sidebar_position',true);
                    if($sidebar_position == 'from-themeoptions') {
                        if(isset($rubik_option['single-sidebar-position'])) {
                            if($rubik_option['single-sidebar-position'] != 'left') {
                                $sidebar_position = 'right';
                                $sidebar_option_class = '';
                            }else {
                                $sidebar_position = 'left';
                                $sidebar_option_class = 'has-left-sidebar';
                            }
                        }else {
                            $sidebar_position = 'right';
                            $sidebar_option_class = '';
                        }
                    }else if($sidebar_position == 'left') {
                        $sidebar_option_class = 'has-left-sidebar';
                    }else {
                        $sidebar_option_class = '';
                    }
                }else {
                    $sidebar_position = '';
                    $sidebar_option_class = 'post-has-no-sidebar';
                }
                
                if ( $bkReviewSW == '1' ) { $itemprop =  'itemprop="itemReviewed"'; } else { $itemprop = 'itemprop="headline"'; }
                $bk_post_header = '';
                $bk_post_header .= '<div class="s_header_wraper"><div class="s-post-header">';
                $bk_post_header .=  rubik_core::bk_meta_cases('cat');
                $bk_post_header .= '<h1 '.$itemprop.'>'.get_the_title().'</h1>';
                $postSubTitle = get_post_meta($bkPostID,'bk_visual_subtitle',true);
                if($postSubTitle != '') {
                    $bk_post_header .= '<div class="bk-post-subtitle">'.$postSubTitle.'</div>';
                }
                $bk_post_header .= rubik_core::bk_get_post_meta($meta_ar);
                $bk_post_header .= '</div></div><!-- end single header -->';
                
                $heading_related = get_post_meta($bkPostID,'bk_heading_related_posts',true);
                if($heading_related == 'from-themeoptions') {
                    $heading_related = isset($rubik_option['single-heading-related-post']) ? $rubik_option['single-heading-related-post'] : 'disable';
                }
                $heading_related_entries = isset($rubik_option['single-heading-related-posts-entries']) ? $rubik_option['single-heading-related-posts-entries'] : '3';
                
                if($heading_related == 'enable') {
                    $bk_post_header .= single_core::bk_heading_related_posts(intval($heading_related_entries));
                }
                
                if ( function_exists( 'bk_share_box_no_cnt' ) ) {
                    if ($share_box_top) {
                        $bk_post_header .= '<div class="single-share-box-no-cnt top-pos">';
                        $bk_post_header .= single_core::bk_get_post_share($bkPostID, $social_share_top, $rubik_top_share_items);
                        $bk_post_header .= '</div>';
                    }
                }
            ?>
        <div class="single-page s-template-4" <?php if ( $bkReviewSW != '1' ) { echo 'itemscope itemtype="https://schema.org/Article"'; } else { echo 'itemscope itemtype="https://schema.org/Review"'; } ?>>
            <div class="article-wrap bkwrapper container <?php echo esc_attr($sidebar_option_class);?>">
                <div class="row bk-in-single-page bksection">

                    <div class="main <?php if ($sidebar_option != 'disable') {echo 'col-md-8';}else {echo 'col-md-12';}?>">
                        <?php echo rubik_core::bk_render_html_string($bk_post_header);?>
                        <div class="article-content clearfix" <?php if ( $bkReviewSW == '1' ) { echo 'itemprop="reviewBody"'; } else { echo 'itemprop="articleBody"'; } ?>>
<!-- ARTICAL CONTENT -->
                            <?php if(isset($reviewPos) && ($reviewPos != 'below')) {?>
                            <?php echo single_core::bk_post_review_boxes($bkPostID, $reviewPos);?>
                            <?php }?>
                            <?php echo single_core::bk_single_content($bkPostID);?>
                            <?php if(isset($reviewPos) && ($reviewPos == 'below')) {?>
                            <?php echo single_core::bk_post_review_boxes($bkPostID, $reviewPos);?>
                            <?php }?>
                        </div><!-- end article content --> 
                    <?php wp_link_pages( array(
							'before' => '<div class="post-page-links">',
							'pagelink' => '<span>%</span>',
							'after' => '</div>',
						)
					 ); 
                    ?>
<!-- TAGS -->
                    <?php
            			$tags = get_the_tags();
                        if ($tags): 
                            echo single_core::bk_single_tags($tags);
                        endif; 
                    ?>

<!-- AUTHOR BOX -->
<?php if ($authorbox_sw) {?>
<?php
    $bk_author_id = $post->post_author;
    echo rubik_core::bk_author_details($bk_author_id);
?>
<?php }?> 
<?php echo single_core::bk_get_article_info(get_the_ID());?>

<?php echo do_shortcode ('[shareaholic app="recommendations" id_name="post_below_content"]'); ?>

<!-- SHARE BOX -->
                    <?php 
                        if ($share_box) {    
                            $bk_bottom_share = '';
                            $bk_bottom_share .= '<div class="single-share-box-no-cnt bottom-pos">';
                            $bk_bottom_share .= single_core::bk_get_post_share($bkPostID, $social_share_bottom, $rubik_bottom_share_items);
                            $bk_bottom_share .= '</div>';
                            echo rubik_core::bk_render_html_string($bk_bottom_share);
                        }
                    ?>
<!-- NAV -->
                    <?php
                        if($postnav_sw) {   
                            $next_post = get_next_post();
                            $prev_post = get_previous_post();
                            $postNavStyle = get_post_meta($bkPostID,'bk_post_nav_style',true);
                            
                            if($postNavStyle == 'from-themeoptions') {
                                $postNavStyle = $rubik_option['bk-post-nav-style'];
                            }
                            
                            if ($postNavStyle == 'under-content') {
                                if (!empty($prev_post) || !empty($next_post)):
                                    echo single_core::bk_single_static_post_nav($next_post, $prev_post);
                                endif;
                            }else if ($postNavStyle == 'fixed-position') {
                                if (!empty($prev_post) || !empty($next_post)): 
                                    echo single_core::bk_single_post_nav($next_post, $prev_post);
                                endif;
                            }else {
                                if (!empty($prev_post) || !empty($next_post)):
                                    echo single_core::bk_single_static_post_nav($next_post, $prev_post);
                                endif;
                            }
                            
                        }
                    ?>

<!-- RELATED POST -->
                    <?php if ($related_sw){?>  
                        <div id="s-related-articles" class="related-box">
                            <div class="related-box-tabs">
                                <a id="s-related-article-tab" class="related-tab <?php echo esc_attr($bkPostID);?> active" href="#"><?php esc_html_e('Related articles', 'rubik');?></a>
                                <a id="s-more-from-author-tab" class="related-tab <?php echo esc_attr($bkPostID);?> " href="#"><?php esc_html_e('More from author', 'rubik');?></a>
                                <a id="s-more-from-category-tab" class="related-tab <?php echo esc_attr($bkPostID);?> " href="#"><?php esc_html_e('More from category', 'rubik');?></a>
                            </div>
                            <?php 
                                $bk_related_num = $rubik_option['bk-related-output']; 
                                echo (single_core::bk_related_posts($bk_related_num));?>
                            <?php echo rubik_core::bk_module_related_post_pagination();?>
                        </div>
                    <?php }?>
<!-- COMMENT BOX -->
                    <?php if($comment_sw) {?>
                        <?php comments_template(); ?>
                    <?php }?>
                    </div>
                    <?php if ($rubik_option['bk-recommend-box'] == 1) {?>
                        <?php get_template_part( 'library/bk_recommend_box');?>
                    <?php }?>
                    <!-- Sidebar -->
                    <?php if ($sidebar_option != 'disable') {?>
                    <div class="sidebar col-md-4">
                        <div class="sidebar-wrap <?php if($rubik_option['single-stick-sidebar'] == 'enable') echo 'stick';?>" id="bk-single-sidebar">
                            <?php 
                                if (strlen($sidebar)) {
                                    dynamic_sidebar($sidebar);
                                }else {
                                    dynamic_sidebar('home_sidebar');
                                }                                                   
                            ?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    
<?php get_footer(); ?>
