<?php
include 'framework/page-builder/controller/bk_pd_cfg.php';
include 'inc/blocks/rubik_parent.php';
include 'inc/blocks/has_sb/rubik_block_7.php';
include 'inc/libs/rubik_query.php';
include 'inc/libs/rubik_get_configs.php';

add_action( 'widgets_init', 'rubik_child_widgets_init' );
function rubik_child_widgets_init() {
    register_sidebar(
        array(
            'name' => 'Header Sidebar 1',
            'id' => 'header-sidebar-1',
            'before_widget' => '',
            'after_widget' => ''
        )
    );

    register_sidebar(
        array(
            'name' => 'Header Sidebar 2',
            'id' => 'header-sidebar-2',
            'before_widget' => '',
            'after_widget' => ''
        )
    );

}

function rubik_get_header () {

    echo '<div style="text-align: center; padding: 20px;">';
    dynamic_sidebar( 'header-sidebar-1' );
    echo '</div>';

    $rubik_option = rubik_core::bk_get_global_var('rubik_option');
    $bkHeaderType = '';
    if ((isset($rubik_option['bk-header-type'])) && (($rubik_option['bk-header-type']) != NULL)){
        $bkHeaderType = $rubik_option['bk-header-type'];
    }else {
        $bkHeaderType == 'header1';
    }

    if ($bkHeaderType == 'header2') {
        if ((isset($rubik_option['bk-header-2-options'])) && (($rubik_option['bk-header-2-options']) != NULL)){
            $headerStyle = $rubik_option['bk-header-2-options'];
            if($headerStyle == 'style-1') {
                $bkHeaderType = 'header2';
            }elseif($headerStyle == 'style-2') {
                $bkHeaderType = 'header5';
            }elseif($headerStyle == 'style-3') {
                $bkHeaderType = 'header6';
            }elseif($headerStyle == 'style-4') {
                $bkHeaderType = 'header8';
            }elseif($headerStyle == 'style-5') {
                $bkHeaderType = 'header9';
            }elseif($headerStyle == 'style-6') {
                $bkHeaderType = 'header14';
            }
        }
    }else if ($bkHeaderType == 'header12') {
        if ((isset($rubik_option['bk-header-12-options'])) && (($rubik_option['bk-header-12-options']) != NULL)){
            $headerStyle = $rubik_option['bk-header-12-options'];
            if($headerStyle == 'style-1') {
                $bkHeaderType = 'header12';
            }elseif($headerStyle == 'style-2') {
                $bkHeaderType = 'header13';
            }else {
                $bkHeaderType = 'header12';
            }
        }
    }

    if ($bkHeaderType == 'header1') {
        get_template_part( 'library/templates/headers/rubik_header_1' );
    }
    elseif ($bkHeaderType == 'header2') {
        get_template_part( 'library/templates/headers/rubik_header_2' );
    }
    elseif ($bkHeaderType == 'header3') {
        get_template_part( 'library/templates/headers/rubik_header_3' );
    }
    elseif ($bkHeaderType == 'header4') {
        get_template_part( 'library/templates/headers/rubik_header_4' );
    }
    elseif ($bkHeaderType == 'header5') {
        get_template_part( 'library/templates/headers/rubik_header_5' );
    }
    elseif ($bkHeaderType == 'header6') {
        get_template_part( 'library/templates/headers/rubik_header_6' );
    }
    elseif ($bkHeaderType == 'header7') {
        get_template_part( 'library/templates/headers/rubik_header_7' );
    }
    elseif ($bkHeaderType == 'header8') {
        get_template_part( 'library/templates/headers/rubik_header_8' );
    }
    elseif ($bkHeaderType == 'header9') {
        get_template_part( 'library/templates/headers/rubik_header_9' );
    }
    elseif ($bkHeaderType == 'header10') {
        get_template_part( 'library/templates/headers/rubik_header_10' );
    }
    elseif ($bkHeaderType == 'header11') {
        get_template_part( 'library/templates/headers/rubik_header_11' );
    }
    elseif ($bkHeaderType == 'header12') {
        get_template_part( 'library/templates/headers/rubik_header_12' );
    }
    elseif ($bkHeaderType == 'header13') {
        get_template_part( 'library/templates/headers/rubik_header_13' );
    }
    elseif ($bkHeaderType == 'header14') {
        get_template_part( 'library/templates/headers/rubik_header_14' );
    }
    else {
        get_template_part( 'library/templates/headers/rubik_header_1' );
    }

    echo '<div style="text-align: center; padding: 20px;">';
    dynamic_sidebar( 'header-sidebar-2' );
    echo '</div>';

}
