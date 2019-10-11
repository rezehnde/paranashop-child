<?php
/**
 * The template for displaying Search Results pages.
 *
 */
 ?> 
<?php get_header();?>
<?php
$rubik_option = rubik_core::bk_get_global_var('rubik_option');
$bk_post_icon = 'hide';
$sidebar_option_class = '';
if (isset($rubik_option) && ($rubik_option != '')): 
    $archiveLayout = $rubik_option['bk-search-layout'];
    if(isset($rubik_option['search_post_icon'])) {
        $bk_post_icon= $rubik_option['search_post_icon'];
    }else {
        $bk_post_icon = 'hide';
    }
    $sidebarPosition = $rubik_option['search-page-sidebar-position'];
    if($sidebarPosition == 'left'){
        $sidebar_option_class = 'has-left-sidebar';
    }else {
        $sidebar_option_class = '';
    }
endif;
?>
<div id="body-wrapper" class="wp-page">
    <div class="bkwrapper container <?php if($sidebar_option_class != '') echo esc_attr($sidebar_option_class);?> <?php if(($archiveLayout == 'large-blog-nosb') || ($archiveLayout == 'large-blog-2-nosb')){echo ('page-large-blog-nosb');}?>">
        <div class="row bksection">			
            <div class="bk-search-content bkpage-content <?php if ((!($archiveLayout == 'masonry-nosb')) && (!($archiveLayout == 'square-grid-3-s1')) && (!($archiveLayout == 'square-grid-3-s2')) && (!($archiveLayout == 'square-grid-3-s3')) && (!($archiveLayout == 'large-blog-nosb')) && (!($archiveLayout == 'large-blog-2-nosb')) && (!($archiveLayout == 'row-nosb'))): echo 'col-md-8 has-sb'; else: echo 'col-md-12 fullwidth';  endif;?>">                               
                <div class="row">
                    <div id="main-content" class="clear-fix" role="main">
                    	<div class="page-title-wrapper col-md-12">
                    		<div class="module-title">
                                <h2 class="heading"><?php printf( esc_html__( 'Search Results for: %s', 'rubik' ), get_search_query() ); ?></h2>
                            </div>
                        </div> 	
                        <?php
                            if (have_posts()) {
                                ?>
                                <script async src="https://cse.google.com/cse.js?cx=004148080502353816444:eyhspbc2erc"></script>
                                <div class="gcse-search"></div>
                                <?php
                                echo rubik_archive::archive_content_area($archiveLayout, $bk_post_icon);
                            }else {
                                ?>
                                <div class="search-no-result-wrap col-md-12">
                                    <h2>
                                    <?php esc_html_e('No results for your search, please try another search', 'rubik'); ?>
                                    </h2>
                                    <form action="<?php echo esc_url(home_url('/')); ?>/" id="searchform" method="get">
                                        <div class="searchform-wrap">
                                            <input type="text" placeholder="<?php esc_attr_e('Search...', 'rubik'); ?>" name="s" />
                                            <div class="search-icon">
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php }?>
    	            </div> <!-- end #main -->
                </div>
            </div> <!-- end #bk-content -->
            <?php
                if ((!($archiveLayout == 'masonry-nosb')) && (!($archiveLayout == 'square-grid-3-s1')) && (!($archiveLayout == 'square-grid-3-s2')) && (!($archiveLayout == 'square-grid-3-s3')) && (!($archiveLayout == 'large-blog-nosb')) && (!($archiveLayout == 'large-blog-2-nosb')) && (!($archiveLayout == 'row-nosb'))) {?>
                    <div class="sidebar col-md-4">
                        <div class="sidebar-wrap <?php if($rubik_option['search-stick-sidebar'] == 'enable') echo 'stick';?>" id="bk-search-sidebar">
                            <?php
                                if((isset($rubik_option['search-page-sidebar'])) && ($rubik_option['search-page-sidebar'] != '')){
                                    $sidebar = $rubik_option['search-page-sidebar'];
                                }else {
                                    $sidebar = '';
                                }
                                if (strlen($sidebar)) {
                                    dynamic_sidebar($sidebar);
                                }else {
                                    dynamic_sidebar();
                                }
                            ?>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
    </div>
</div>   
<?php get_footer(); ?>