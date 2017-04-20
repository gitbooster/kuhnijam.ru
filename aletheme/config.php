<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '#cacaca',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 30x30px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Site Footer Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
                        "id" => "ale_sitelogofooter",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Site 404 Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 133-52px)",
                        "id" => "ale_logo404",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Show Site Preloader",
                        "desc" => "Description kakoito.",
                        "id" => "ale_backcover",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_blogslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the body Font from Google Library",
                        "desc" => "The default Font is - Raleway",
                        "id" => "ale_headerfont",
                        "std" => "Roboto",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the body Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 600",
                        "id" => "ale_headerfontex",
                        "std" => "600",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Libre Baskerville",
                        "id" => "ale_mainfont",
                        "std" => "Roboto",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Headers Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 400,400italic",
                        "id" => "ale_mainfontex",
                        "std" => "400,400italic",
                        "type" => "text",
                        );

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '22px','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '20px','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '18px','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '16px','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '14px','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '12px','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px/1.52','face' => 'Roboto','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "VK",
                        "desc" => "Your vk profile URL.",
                        "id" => "ale_vk",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_ins",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Facebook",
                        "desc" => "Your facebook profile URL.",
                        "id" => "ale_fb",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Youtube",
                        "desc" => "Your youtube profile URL.",
                        "id" => "ale_yt",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Single post page footer info",
                        "desc" => "Your portfolio footer info",
                        "id" => "ale_finfo",
                        "std" => "Чтобы заказать сайт, шаблон для сайта, а также узнать условия сотрудничества, отправьте заявку из раздела контакты, по электронной почте: webtheory@mail.ru, или по телефону: +373 060 31 66 98",
                        "type" => "editor");

    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer about",
                        "desc" => "Insert the About text ",
                        "id" => "ale_f_about",
                        "std" => 'В нашей студии вы можете заказать: <a href="">сайт</a>, <a href="">дизайн приложения (интерфейса)</a>, <a href="">иллюстрацию</a>, <a href="">логотип, фирменный стиль</a>, <a href="">дизайн для сайта</a> (<a href="">шаблон для DLE</a>, <a href="">HTML шаблон</a>). За время существования студии было реализовано множество проектов разного уровня сложности. В каждом нашем проекте мы стремимся создать привлекательный образ, который обеспечит удобство использования.',
                        "type" => "editor");


    $options[] = array( "name" => "E-mail Contact",
                        "desc" => "Insert the public E-mail",
                        "id" => "ale_femail",
                        "std" => "webtheory@mail.ru",
                        "type" => "text");

    $options[] = array( "name" => "Sitename",
                        "desc" => "Insert the sitename",
                        "id" => "ale_sitename",
                        "std" => "Codbox",
                        "type" => "text");

     $options[] = array( "name" => "Footer Copyright",
                        "desc" => "Insert the footer Copyright text",
                        "id" => "ale_footercopyr",
                        "std" => "© 2007–2017 Дизайн студияy",
                        "type" => "text");

    $options[] = array( "name" => "Footer Colum",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle_1",
                        "std" => "",
                        "type" => "images",
                        "options" => array(
                            'image_1' => $imagepath.'/1col.png',
                            'image_2' => $imagepath.'/2cl.png',
                            'image_3' => $imagepath.'/2cr.png', ),
        );
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
  jQuery(document).ready(function(){
                jQuery('.multi-switch').multiSwitch({
                    functionOnChange: function ($element) {}
                    });
            });
</script>


<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'home_page_metabox',
        'title'      => 'Oпции каталога',
        'pages'      => array( 'catalog', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'single-template', 'value' => array('single-catalog.php'), ), // Specific post templates to display this metabox

        'fields' => array(
            
             array(
                'name' => 'Описание',
                'desc' => 'Полное описание проекта',
                'id'   => $prefix . 'description_kuhnea',
                'type' => 'textarea',
            ),
             array(
                'name' => 'Материал',
                'desc' => 'Oписание Материалa',
                'id'   => $prefix . 'material',
                'type' => 'textarea',
            ),
             array(
                'name' => 'Фурнитура',
                'desc' => 'Oписание Фурнитуры',
                'id'   => $prefix . 'furnitura',
                'type' => 'textarea',
            ),

             array(
                'name' => 'Загрузите файл',
                'desc' => 'Загрузите большое изображение для просмотра  портфолио при открытии 1200x1000+',
                'id'   => $prefix . 'fileupload',
                'type' => 'file',
            ),
            
        )
    );




   

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'catalog' => array(
            array(
                'name'      => 'catalog-thumba',
                'width'     => 407,
                'height'    => 259,
                'crop'      => true,
            ),
            array(
                'name'      => 'catalog-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'catalog-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-minibox',
                'width'     => 500,
                'height'    => 200,
                'crop'      => true,
            ),
        ),


    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'catalog' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-cart',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Каталог',
            'multiple' => 'Каталог',
            'columns'    => array(
                'first_image',
            )
        ),
       
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'catalog-category'    => array(
            'for'        => array('catalog'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Категория',
            'multiple'    => 'Категории',
        ),

    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_works() {
	return array('works');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}

/**
 *Hide Jquery migrate console log
**/
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}


/*-----------------------------------------------------------------------------------*/
/* Убираем мусор: feed, shortlink
/*-----------------------------------------------------------------------------------*/

add_filter( 'aioseop_prev_link', 'mayak_remove_prev_link' );
add_filter( 'aioseop_next_link', 'mayak_remove_prev_link' );
remove_filter('comment_text', 'make_clickable', 9);
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
add_filter( 'show_admin_bar', '__return_false' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );


//PREV and NEXT
add_filter('next_post_link', 'post_link_attributes_1');
add_filter('previous_post_link', 'post_link_attributes_2');
 
function post_link_attributes_1($output) {
    $code = 'class="ico prev"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
    function post_link_attributes_2($output) {
    $code = 'class="ico next"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
