<?php
/*
 * Sections Configuration
 */
function bk_init_sections() {
    $sections = array(
        'fullwidth'=>__('FullWidth Section','rubik'), 'has-rsb' => esc_html__('Content Section', 'rubik')
    );
    wp_localize_script( 'rubik-page-builder-script', 'bk_sections', $sections );
    $modules = array(
        'featured_slider' => array(
            'title' => esc_html__( 'Featured Slider', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/featured-slider.png',
            'tabdisable' => 'tab-option-3 tab-option-5',
            'options' => array(
                // Tab 1
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'meta_items' => array(
                    'title' => esc_html__('Meta Items', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'hide-cat' => esc_html__( 'Hide Category', 'rubik' ),
                        'hide-meta' => esc_html__( 'Hide Meta', 'rubik' ),
                        'hide-cat-meta' => esc_html__( 'Hide Category and Meta', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 7
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority in slider', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Choose a post category to be shown up', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 30
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '500',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'fw_slider' => array(
            'title' => esc_html__( 'Fullwidth Slider', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/fw-slider.png',
            'tabdisable' => 'tab-option-3 tab-option-5',
            'options' => array(
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'meta_items' => array(
                    'title' => esc_html__('Meta Items', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'hide-cat' => esc_html__( 'Hide Category', 'rubik' ),
                        'hide-meta' => esc_html__( 'Hide Meta', 'rubik' ),
                        'hide-cat-meta' => esc_html__( 'Hide Category and Meta', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'description' => esc_html__( 'Enter the number of posts', 'rubik' ),
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'boxed_slider' => array(
            'title' => esc_html__( 'Boxed Slider', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/boxed-slider.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'meta_items' => array(
                    'title' => esc_html__('Meta Items', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'hide-cat' => esc_html__( 'Hide Category', 'rubik' ),
                        'hide-meta' => esc_html__( 'Hide Meta', 'rubik' ),
                        'hide-cat-meta' => esc_html__( 'Hide Category and Meta', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority in slider', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 30
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'grid_carousel' => array(
            'title' => esc_html__( 'Grid Carousel', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-carousel.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 22
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'tech_grid' => array(
            'title' => esc_html__( 'Tech Grid', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/tech-grid.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px white for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'pyramid_grid' => array(
            'title' => esc_html__( 'Pyramid Grid', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/pyramid-grid.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px white for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_1' => array(
            'title' => esc_html__( 'Grid 1', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-1.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_2' => array(
            'title' => esc_html__( 'Grid 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-2.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3

                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_3' => array(
            'title' => esc_html__( 'Grid 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-3.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3

                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_4' => array(
            'title' => esc_html__( 'Grid 4', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-4.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_5' => array(
            'title' => esc_html__( 'Grid 5', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-5.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_6' => array(
            'title' => esc_html__( 'Grid 6', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-6.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_7' => array(
            'title' => esc_html__( 'Grid 7', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-7.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_8' => array(
            'title' => esc_html__( 'Grid 8', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-8.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_9' => array(
            'title' => esc_html__( 'Grid 9', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-9.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_10' => array(
            'title' => esc_html__( 'Grid 10', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-10.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_11' => array(
            'title' => esc_html__( 'Grid 11', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-11.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_12' => array(
            'title' => esc_html__( 'Grid 12', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-12.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px white for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_13' => array(
            'title' => esc_html__( 'Grid 13', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-13.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                        'bkmodule-color-overlay' => esc_html__( 'Color Overlay', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'item_border' => array(
                    'title' => esc_html__('Item Border', 'rubik' ),
                    'description' => esc_html__( 'Border 1px for each item ', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'options' => array(
                        'w-border' => esc_html__( 'On', 'rubik' ),
                        'no-border' => esc_html__( 'Off', 'rubik' ),
                    ),
                    'default' => 'w-border',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3

                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'grid_14' => array(
            'title' => esc_html__( 'Grid 14', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/grid-14.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3

                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 25
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'feature1' => array(
            'title' => esc_html__( 'Feature 1', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/featured-1.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'feature2' => array(
            'title' => esc_html__( 'Feature 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/featured-2.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'feature3' => array(
            'title' => esc_html__( 'Feature 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/feature-3.png',
            'tabdisable' => 'tab-option-3 tab-option-5',
            'options' => array(
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'meta_items' => array(
                    'title' => esc_html__('Meta Items', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'hide-cat' => esc_html__( 'Hide Category', 'rubik' ),
                        'hide-meta' => esc_html__( 'Hide Meta', 'rubik' ),
                        'hide-cat-meta' => esc_html__( 'Hide Category and Meta', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 28
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'feature4' => array(
            'title' => esc_html__( 'Feature 4', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/feature-4.png',
            'tabdisable' => 'tab-option-3 tab-option-5',
            'options' => array(
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'meta_items' => array(
                    'title' => esc_html__('Meta Items', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'hide-cat' => esc_html__( 'Hide Category', 'rubik' ),
                        'hide-meta' => esc_html__( 'Hide Meta', 'rubik' ),
                        'hide-cat-meta' => esc_html__( 'Hide Category and Meta', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 28
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 18
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'hero' => array(
            'title' => esc_html__( 'Hero', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/hero.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'layout' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'description' => esc_html__( 'Choose a Modyle Style for this module', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default Style', 'rubik' ),
                        'layout-2' => esc_html__( 'Style 2', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_1_fw' => array(
            'title' => esc_html__( 'Post Block 1', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/block-1.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_2_fw' => array(
            'title' => esc_html__( 'Post Block 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/small-posts.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_3_fw' => array(
            'title' => esc_html__( 'Post Block 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/block-3.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_4_fw' => array(
            'title' => esc_html__( 'Post Block 4', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/block-4.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 9
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_5_fw' => array(
            'title' => esc_html__( 'Post Block 5', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/block-5.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 8
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 17
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'carousel' => array(
            'title' => esc_html__( 'Carousel', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/carousel.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                // tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'layout' => array(
                    'title' => esc_html__('Carousel Type', 'rubik' ),
                    'description' => esc_html__( 'Choose a Carousel Type for this module', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'carousel-3',
                    'options' => array(
                        'carousel-2' => esc_html__( 'Carousel 2', 'rubik' ),
                        'carousel-3' => esc_html__( 'Carousel 3', 'rubik' ),
                        'carousel-4' => esc_html__( 'Carousel 4', 'rubik' ),
                        'carousel-2-tall' => esc_html__( 'Carousel 2 tall', 'rubik' ),
                        'carousel-3-tall' => esc_html__( 'Carousel 3 tall', 'rubik' ),
                        'carousel-4-tall' => esc_html__( 'Carousel 4 tall', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority as highest priority', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts ( Recommend at least 4 posts ', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'carousel_type2' => array(
            'title' => esc_html__( 'Carousel (Layout 2)', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/carousel-2.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-fw' => esc_html__( 'Full Width', 'rubik' ),
                    ),
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-center',
                    'options' => array(
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-left' => esc_html__( 'Left', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts ( Recommend at least 4 posts ', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),

                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'row_fw' => array(
            'title' => esc_html__( 'Row', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/row.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_2_fw' => array(
            'title' => esc_html__( 'Row 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/row-2.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_3_fw' => array(
            'title' => esc_html__( 'Row 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/row-3.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_tall_fw' => array(
            'title' => esc_html__( 'Row Tall', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/row-tall.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_tall_2_fw' => array(
            'title' => esc_html__( 'Row Tall 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/row-tall-2.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_tall_3_fw' => array(
            'title' => esc_html__( 'Row Tall 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/row-tall-3.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'masonry' => array(
            'title' => esc_html__( 'Masonry', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/masonry.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 3
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'masonry_2' => array(
            'title' => esc_html__( 'Masonry 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/masonry-2.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'masonry_3' => array(
            'title' => esc_html__( 'Masonry 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/masonry-3.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'square_grid' => array(
            'title' => esc_html__( 'Square Grid', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/square-grid.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'tall-layout' => esc_html__( 'Tall', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts ( Recommend at least 4 posts ', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'large_blog' => array(
            'title' => esc_html__( 'Large Blog', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/large-blog.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'columns_number' => array(
                    'title' => esc_html__('Columns Number', 'rubik' ),
                    'description' => esc_html__( 'Select the number of columns for this module', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => '1',
                    'options' => array(
                        '1' => esc_html__( '1', 'rubik' ),
                        '2' => esc_html__( '2', 'rubik' ),
                    ),
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Enter the excerpt length number', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 50
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 4
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 4
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 26
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '600',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'large_blog_2' => array(
            'title' => esc_html__( 'Large Blog 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/large-blog-2.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'columns_number' => array(
                    'title' => esc_html__('Columns Number', 'rubik' ),
                    'description' => esc_html__( 'Select the number of columns for this module', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => '1',
                    'options' => array(
                        '1' => esc_html__( '1', 'rubik' ),
                        '2' => esc_html__( '2', 'rubik' ),
                    ),
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Enter the excerpt length number', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 36
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 4
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 4
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 28
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'youtube_playlist_fw' => array(
            'title' => esc_html__( 'Youtube Playlist 1', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/youtube-playlist-1.png',
            'tabdisable' => 'tab-option-2 tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'youtube_playlist_url' => array(
                    'title' => esc_html__(' Youtube Playlist Link','rubik' ),
                    'description' => esc_html__( 'Put the Youtube Video Playlist Link here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
                // Tab 3
                'module_bg' => array(
                    'title' => esc_html__('Module Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_bg' => array(
                    'title' => esc_html__('Playing Title Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_color' => array(
                    'title' => esc_html__('Playing Title Color','rubik' ),
                    'description' => esc_html__( 'Put a color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#fff',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Module Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Module Title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Module Title Letter Spacing', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Module Title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'youtube_playlist_fw_2' => array(
            'title' => esc_html__( 'Youtube Playlist 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/youtube-playlist-2.png',
            'tabdisable' => 'tab-option-2 tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'youtube_playlist_url' => array(
                    'title' => esc_html__(' Youtube Playlist','rubik' ),
                    'description' => esc_html__( 'Put the Youtube Video Playlist here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
                // Tab 3
                'module_bg' => array(
                    'title' => esc_html__('Module Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_bg' => array(
                    'title' => esc_html__('Playing Title Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_color' => array(
                    'title' => esc_html__('Playing Title Color','rubik' ),
                    'description' => esc_html__( 'Put a color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#fff',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Module Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Module Title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Module Title Letter Spacing', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Module Title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'youtube_playlist_fw_3' => array(
            'title' => esc_html__( 'Youtube Playlist 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/youtube-playlist-3.png',
            'tabdisable' => 'tab-option-2 tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'youtube_playlist_url' => array(
                    'title' => esc_html__(' Youtube Playlist','rubik' ),
                    'description' => esc_html__( 'Put the Youtube Video Playlist here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
                // Tab 3
                'module_bg' => array(
                    'title' => esc_html__('Module Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_bg' => array(
                    'title' => esc_html__('Playing Title Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_color' => array(
                    'title' => esc_html__('Playing Title Color','rubik' ),
                    'description' => esc_html__( 'Put a color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#fff',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Module Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Module Title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 27
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Module Title Letter Spacing', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Module Title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'mailchimp_shortcode' => array(
            'title' => esc_html__( 'Mailchimp Shortcode', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/MailChimp.png',
            'tabdisable' => 'tab-option-2 tab-option-4 tab-option-5',
            'options' => array(
                'layout' => array(
                    'title' => esc_html__('Layout', 'rubik' ),
                    'description' => esc_html__( 'Wide/Boxed Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'wide',
                    'options' => array(
                        'wide' => esc_html__( 'Wide', 'rubik' ),
                        'boxed' => esc_html__( 'Boxed', 'rubik' ),
                    ),
                ),
                'shortcode' => array(
                    'title' => esc_html__('Mailchimp Shortcode', 'rubik' ),
                    'description' => esc_html__( 'Put Shortcode here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
                'module_margin' => array(
                    'title' => esc_html__('Module Margin', 'rubik' ),
                    'description' => esc_html__( 'Sequence: Top Right Bottom Left, For example: Margin Top and Bottom = 10px then put 10px 0 10px 0 (Empty = Default)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
            ),
        ),
        'promo_box' => array(
            'title' => esc_html__( 'Promo Box', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/promo-box.png',
            'tabdisable' => 'tab-option-2 tab-option-4 tab-option-5',
            'options' => array(
                'promo_box_title_1' => array(
                    'title' => esc_html__('Promo Box Title - #1', 'rubik' ),
                    'description' => esc_html__( 'Put Title Text Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_img_1' => array(
                    'title' => esc_html__('Promo Box Image URL - #1', 'rubik' ),
                    'description' => esc_html__( 'Put Image URL Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_url_1' => array(
                    'title' => esc_html__('Promo Box Destination URL - #1', 'rubik' ),
                    'description' => esc_html__( 'Put Image URL Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_title_2' => array(
                    'title' => esc_html__('Promo Box Title - #2', 'rubik' ),
                    'description' => esc_html__( 'Put Title Text Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_img_2' => array(
                    'title' => esc_html__('Promo Box Image URL - #2', 'rubik' ),
                    'description' => esc_html__( 'Put Image URL Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_url_2' => array(
                    'title' => esc_html__('Promo Box Destination URL - #2', 'rubik' ),
                    'description' => esc_html__( 'Put Image URL Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_title_3' => array(
                    'title' => esc_html__('Promo Box Title - #3', 'rubik' ),
                    'description' => esc_html__( 'Put Title Text Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_img_3' => array(
                    'title' => esc_html__('Promo Box Image URL - #3', 'rubik' ),
                    'description' => esc_html__( 'Put Image URL Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'promo_box_url_3' => array(
                    'title' => esc_html__('Promo Box Destination URL - #3', 'rubik' ),
                    'description' => esc_html__( 'Put Image URL Here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_background' => array(
                    'title' => esc_html__('Color: Module Background Color', 'rubik' ),
                    'description' => esc_html__( 'Put the color code to this field', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '',
                ),
            ),
        ),
        'custom_html' => array(
            'title' => esc_html__( 'Custom HTML', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/custom-html.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'custom_html' => array(
                    'title' => esc_html__('HTML Code', 'rubik' ),
                    'description' => esc_html__( 'Put your custom HTML code here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
            ),
        ),
        'shortcode' => array(
            'title' => esc_html__( 'Short Code', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/shortcode.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'shortcode' => array(
                    'title' => esc_html__('Shortcode', 'rubik' ),
                    'description' => esc_html__( 'Put Shortcode here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
            ),
        ),
        'ads' => array(
            'title' => esc_html__( 'Single Ads', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/single-ads.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'image_url' => array(
                    'title' => esc_html__('Image Url','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url' => array(
                    'title' => esc_html__('Url','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                )
            ),
        ),
        'two_col_ads' => array(
            'title' => esc_html__( 'Two Cols Ads', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/ads-2-cols.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'image_url1' => array(
                    'title' => esc_html__('Image Url - (First Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url1' => array(
                    'title' => esc_html__('Url - (First Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'image_url2' => array(
                    'title' => esc_html__('Image Url - (Last Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url2' => array(
                    'title' => esc_html__('Url - (Last Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                )
            ),
        ),
        'three_col_ads' => array(
            'title' => esc_html__( 'Three Cols Ads', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/ads-3-cols.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'image_url1' => array(
                    'title' => esc_html__('Image Url - (First Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url1' => array(
                    'title' => esc_html__('Url - (First Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'image_url2' => array(
                    'title' => esc_html__('Image Url - (Middle Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url2' => array(
                    'title' => esc_html__('Url - (Middle Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'image_url3' => array(
                    'title' => esc_html__('Image Url - (Last Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url3' => array(
                    'title' => esc_html__('Url - (Last Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                )
            ),
        ),
        'adsense' => array(
            'title' => esc_html__( 'Adsense', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/fullwidth/ads-code.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'adsense_code' => array(
                    'title' => esc_html__('Adsense Code','rubik' ),
                    'description' => esc_html__( 'Put your adsense code here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
            ),
        ),
    );
    wp_localize_script( 'rubik-page-builder-script', 'bk_fullwidth_modules', $modules );
    $modules = array(
        'boxed_slider' => array(
            'title' => esc_html__( 'Boxed Slider', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/boxed-slider.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'meta_items' => array(
                    'title' => esc_html__('Meta Items', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'hide-cat' => esc_html__( 'Hide Category', 'rubik' ),
                        'hide-meta' => esc_html__( 'Hide Meta', 'rubik' ),
                        'hide-cat-meta' => esc_html__( 'Hide Category and Meta', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'feature' => array(
                    'title' => esc_html__('Display featured posts as highest priority in slider', 'rubik'),
                    'description' => esc_html__( 'Yes: Display featured posts as highest priority', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'no',
                    'options' => array(
                        'yes' => esc_html__( 'Yes', 'rubik' ),
                        'no' => esc_html__( 'No', 'rubik' ),
                    ),
                ),
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 30
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'carousel' => array(
            'title' => esc_html__( 'Carousel', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/carousel.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts ( Recommend at least 4 posts ', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'carousel_type2' => array(
            'title' => esc_html__( 'Carousel (Layout 2)', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/carousel-2.png',
            'tabdisable' => 'tab-option-5',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-center',
                    'options' => array(
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-left' => esc_html__( 'Left', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts ( Recommend at least 4 posts ', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),

                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
            ),
        ),
        'block_1' => array(
            'title' => esc_html__( 'Post Block 1', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-1.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_2' => array(
            'title' => esc_html__( 'Post Block 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-2.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_3' => array(
            'title' => esc_html__( 'Post Block 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-3.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_4' => array(
            'title' => esc_html__( 'Post Block 4', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-4.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 8
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_5' => array(
            'title' => esc_html__( 'Post Block 5', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-5.png',
            'options' => array(
                //Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 17
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_6' => array(
            'title' => esc_html__( 'Post Block 6', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-6.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_7' => array(
            'title' => esc_html__( 'Post Block 7', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-7.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 30,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 4
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'date_query' => array(
                    'title' => esc_html__('Days ago', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of days ago', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 7
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_8' => array(
            'title' => esc_html__( 'Post Block 8', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-8.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 30,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_9' => array(
            'title' => esc_html__( 'Post Block 9', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-9.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 30,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 4
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_10' => array(
            'title' => esc_html__( 'Post Block 10', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-10.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('[Large Post] Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-tall' => esc_html__( 'Tall Layout', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 5
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Large Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Large Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Large Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'font_size_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Small Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight_small_post' => array(
                    'title' => esc_html__('Small Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_11' => array(
            'title' => esc_html__( 'Post Block 11', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-11.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'block_12' => array(
            'title' => esc_html__( 'Post Block 12', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/block-12.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Paginate Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 15
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Main Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'square_grid' => array(
            'title' => esc_html__( 'Square Grid', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/square-grid.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'module_align' => array(
                    'title' => esc_html__('Module Align', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-center' => esc_html__( 'Center', 'rubik' ),
                        'bkmodule-middle-center' => esc_html__( 'Middle Center', 'rubik' ),
                        'bkmodule-middle-left' => esc_html__( 'Middle Left', 'rubik' )
                    ),
                ),
                'module_style' => array(
                    'title' => esc_html__('Module Style', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'bkmodule-default',
                    'options' => array(
                        'bkmodule-default' => esc_html__( 'Default', 'rubik' ),
                        'bkmodule-dark' => esc_html__( 'Dark', 'rubik' ),
                    ),
                ),
                'module_layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'default',
                    'options' => array(
                        'default' => esc_html__( 'Default', 'rubik' ),
                        'tall-layout' => esc_html__( 'Tall', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts ( Recommend at least 4 posts ', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row' => array(
            'title' => esc_html__( 'Row', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_2' => array(
            'title' => esc_html__( 'Row 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row-2.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_3' => array(
            'title' => esc_html__( 'Row 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row-3.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_4' => array(
            'title' => esc_html__( 'Row 4', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row-4.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 16
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '600',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_tall' => array(
            'title' => esc_html__( 'Row Tall', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row-tall.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_tall_2' => array(
            'title' => esc_html__( 'Row Tall 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row-tall-2.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'row_tall_3' => array(
            'title' => esc_html__( 'Row Tall 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/row-tall-3.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                //Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Rows', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of post rows', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 1
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'masonry' => array(
            'title' => esc_html__( 'Masonry', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/masonry.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 3
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'masonry_2' => array(
            'title' => esc_html__( 'Masonry 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/masonry-2.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'masonry_3' => array(
            'title' => esc_html__( 'Masonry 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/masonry-3.png',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 6
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'classic_blog' => array(
            'title' => esc_html__( 'Classic Blog', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/classic-blog.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'layout' => array(
                    'title' => esc_html__('Module Layout', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'layout-1',
                    'options' => array(
                        'layout-1' => esc_html__( 'Layout 1', 'rubik' ),
                        'layout-2' => esc_html__( 'Layout 2', 'rubik' ),
                    ),
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 3
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'large_blog' => array(
            'title' => esc_html__( 'Large Blog', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/large-blog.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Number of Words for the excerpt', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 20,
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post load', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 6
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 3
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),
                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                // Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                // Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 20
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                // Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'large_blog_2' => array(
            'title' => esc_html__( 'Large Blog 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/large-blog-2.png',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The Module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'excerpt_length' => array(
                    'title' => esc_html__('Excerpt Length', 'rubik' ),
                    'description' => esc_html__( 'Enter the excerpt length number', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 36
                ),
                'ajax_button' => array(
                    'title' => esc_html__('Ajax Button', 'rubik' ),
                    'description' => esc_html__( 'Enable/Disable Ajax Button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'enable',
                    'options' => array(
                        'enable' => esc_html__( 'Enable', 'rubik' ),
                        'disable' => esc_html__( 'Disable', 'rubik' ),
                    ),
                ),
                'ajax_load_number' => array(
                    'title' => esc_html__('Ajax post', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed when click ajax load button', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'number',
                    'default' => 4
                ),
                'post_icon' => array(
                    'title' => esc_html__('Post Format Icon', 'rubik' ),
                    'description' => esc_html__( 'Show/hide Post Format Icon (Just for Video, Audio and Gallery Post Format)', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'select',
                    'default' => 'hide',
                    'options' => array(
                        'show' => esc_html__( 'Show All Post Format Icon', 'rubik' ),
                        'video-only' => esc_html__( 'Show Video Icon Only', 'rubik' ),
                        'hide' => esc_html__( 'Hide', 'rubik' ),
                    ),
                ),
                // Tab 2
                'limit' => array(
                    'title' => esc_html__('Number of Posts', 'rubik' ),
                    'description' => esc_html__( 'Enter the number of posts will be displayed', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 4
                ),
                'offset' => array(
                    'title' => esc_html__('Offset', 'rubik' ),
                    'description' => esc_html__( 'Enter the offset number', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'number',
                    'default' => 0
                ),

                'orderby' => array(
                    'title' => esc_html__('Order By', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'select',
                    'default' => 'date',
                    'options' => array(
                        'date'              => esc_html__( 'Latest Posts', 'rubik' ),
                        'comment_count'     => esc_html__( 'Popular Post by Comments', 'rubik' ),
                        'view_count'        => esc_html__( 'Popular Post by Views', 'rubik' ),
                        'top_review'        => esc_html__( 'Best Review', 'rubik' ),
                        'modified'          => esc_html__( 'Modified', 'rubik' ),
                        'alphabetical_asc'  => esc_html__( 'Alphabetical A->Z', 'rubik' ),
                        'alphabetical_decs' => esc_html__( 'Alphabetical Z->A', 'rubik' ),
                    ),
                ),
                'tags' => array(
                    'title' => esc_html__('Tags', 'rubik' ),
                    'description' => esc_html__( '[Optional] Separate tags by the comma. e.g. tag1,tag2', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'category' => array(
                    'title' => esc_html__('Category', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories.', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'category',
                    'default' => '0',
                ),
                'editor_exclude' => array(
                    'title' => esc_html__('Manually Exclude Posts (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                'editor_pick' => array(
                    'title' => esc_html__('Manually Pick Post (By Post IDs)', 'rubik' ),
                    'description' => esc_html__( 'Insert the post IDs here, separated by a comma', 'rubik' ),
                    'optionclass' => 'option-tab-2',
                    'field' => 'text',
                    'default' => '',
                ),
                //Tab 3
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                ),
                //Tab 4
                'font_size' => array(
                    'title' => esc_html__('Post Title Font Size', 'rubik' ),
                    'description' => esc_html__( 'Enter the Font Size (Px) for the Posts in this module. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => 28
                ),
                'font_weight' => array(
                    'title' => esc_html__('Post Title Font Weight', 'rubik'),
                    'optionclass' => 'option-tab-4',
                    'field' => 'select',
                    'default' => '400',
                    'options' => array(
                        '100' => esc_html__( '100', 'rubik' ),
                        '200' => esc_html__( '200', 'rubik' ),
                        '300' => esc_html__( '300', 'rubik' ),
                        '400' => esc_html__( '400', 'rubik' ),
                        '500' => esc_html__( '500', 'rubik' ),
                        '600' => esc_html__( '600', 'rubik' ),
                        '700' => esc_html__( '700', 'rubik' ),
                    ),
                ),
                'letter_spacing' => array(
                    'title' => esc_html__('Post Title Letter Spacing (px)', 'rubik' ),
                    'description' => esc_html__( 'Enter the letter spacing for the Post title. Leave blank to use the default number', 'rubik' ),
                    'optionclass' => 'option-tab-4',
                    'field' => 'number',
                    'default' => ''
                ),
                //Tab 5
                'categorytabs' => array(
                    'title' => esc_html__('Category tabs', 'rubik' ),
                    'description' => esc_html__( 'Please use the CTRL key (PC) or COMMAND key (Mac) to select multiple categories (each Category will be known as a tab)', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'categorytabs',
                    'default' => '0',
                ),
                'tab_color' => array(
                    'title' => esc_html__('Color: Tab Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-5',
                    'field' => 'colorpicker',
                ),
            ),
        ),
        'youtube_playlist_2' => array(
            'title' => esc_html__( 'Youtube Playlist 2', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/youtube-playlist-2.png',
            'tabdisable' => 'tab-option-2 tab-option-4 tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'youtube_playlist_url' => array(
                    'title' => esc_html__(' Youtube Playlist','rubik' ),
                    'description' => esc_html__( 'Put the Youtube Video Playlist here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
                // Tab 3
                'playing_title_bg' => array(
                    'title' => esc_html__('Playing Title Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_color' => array(
                    'title' => esc_html__('Playing Title Color','rubik' ),
                    'description' => esc_html__( 'Put a color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#fff',
                ),
            ),
        ),
        'youtube_playlist_3' => array(
            'title' => esc_html__( 'Youtube Playlist 3', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/youtube-playlist-3.png',
            'tabdisable' => 'tab-option-2 tab-option-4 tab-option-5',
            'options' => array(
                // Tab 1
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'youtube_playlist_url' => array(
                    'title' => esc_html__(' Youtube Playlist','rubik' ),
                    'description' => esc_html__( 'Put the Youtube Video Playlist here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
                // Tab 3
                'playing_title_bg' => array(
                    'title' => esc_html__('Playing Title Background','rubik' ),
                    'description' => esc_html__( 'Put a background color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#000',
                ),
                'playing_title_color' => array(
                    'title' => esc_html__('Playing Title Color','rubik' ),
                    'description' => esc_html__( 'Put a color code here', 'rubik' ),
                    'optionclass' => 'option-tab-3',
                    'field' => 'colorpicker',
                    'default' => '#fff',
                ),
            ),
        ),
        'custom_html' => array(
            'title' => esc_html__( 'Custom HTML', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/custom-html.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'custom_html' => array(
                    'title' => esc_html__('HTML Code', 'rubik' ),
                    'description' => esc_html__( 'Put your custom HTML code here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
            ),
        ),
        'shortcode' => array(
            'title' => esc_html__( 'Short Code', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/shortcode.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'title' => array(
                    'title' => esc_html__('Title', 'rubik' ),
                    'description' => esc_html__( 'The module title', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'title_color' => array(
                    'title' => esc_html__('Color: Module Title Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'module_title_text_color' => array(
                    'title' => esc_html__('Color: Module Title Text Color Option', 'rubik' ),
                    'description' => esc_html__( 'Leave empty to use the default settings that can be setup in Theme Option', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'colorpicker',
                ),
                'shortcode' => array(
                    'title' => esc_html__('Shortcode', 'rubik' ),
                    'description' => esc_html__( 'Put Shortcode here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
            ),
        ),
        'ads' => array(
            'title' => esc_html__( 'Single Ads', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/single-ads.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'image_url' => array(
                    'title' => esc_html__('Image Url','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url' => array(
                    'title' => esc_html__('Url','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                )
            ),
        ),
        'two_col_ads' => array(
            'title' => esc_html__( 'Two Cols Ads', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/ads-2-cols.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'image_url1' => array(
                    'title' => esc_html__('Image Url - (First Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url1' => array(
                    'title' => esc_html__('Url - (First Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'image_url2' => array(
                    'title' => esc_html__('Image Url - (Last Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                ),
                'url2' => array(
                    'title' => esc_html__('Url - (Last Column)','rubik' ),
                    'description' => '',
                    'optionclass' => 'option-tab-1',
                    'field' => 'text',
                    'default' => '',
                )
            ),
        ),
        'adsense' => array(
            'title' => esc_html__( 'BK Adsense', 'rubik' ),
            'img'   => get_template_directory_uri().'/images/admin_panel/pagebuilder-modules/content/ads-code.png',
            'tabdisable' => 'tab-option-1 tab-option-2 tab-option-3 tab-option-4 tab-option-5',
            'options' => array(
                'adsense_code' => array(
                    'title' => esc_html__('Adsense Code','rubik' ),
                    'description' => esc_html__( 'Put your adsense code here', 'rubik' ),
                    'optionclass' => 'option-tab-1',
                    'field' => 'textarea',
                    'default' => '',
                ),
            ),
        ),
    );
    wp_localize_script( 'rubik-page-builder-script', 'bk_has_rsb_modules', $modules );
    $modules = array(

    );
    wp_localize_script( 'rubik-page-builder-script', 'bk_has_innersb_left_modules', $modules );
    $modules = array(

    );
    wp_localize_script( 'rubik-page-builder-script', 'bk_has_innersb_right_modules', $modules );
}
