<?php
/**
 * cso functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'Edifice_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage cso
 * @since Twenty Eleven 1.0
 */

// Enregistrement des menus dynamiquement : 


    add_theme_support( 'menu' );
	register_nav_menu ('menu principal', 'cso');
	register_nav_menu ('menu footer', 'cso');
    

// ajout du thumnails dans les articles : 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 226, 226 );

// ajout de la sidebar : 

/*
if ( function_exists('register_sidebar') )
    register_sidebar();
	
	*/
//paramètrage des résumé article. 

function improved_trim_excerpt($text) {
    global $post; 
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
        $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
        $text = strip_tags($text, '<a><strong><br /><font><h2><h3><span>');
        $excerpt_length = 10; //taille du résumé
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words)> $excerpt_length) {
            array_pop($words);
            array_push($words, '...');
            $text = implode(' ', $words);
        }
    }
    return $text;
}
 
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');



/*function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/js/myscript.js',
        array( 'jquery' )
    );
}



// désenreigstrement jquery et jquery ui natif wordpress : */

/*wp_deregister_script( 'jquery-ui-core' );
wp_deregister_script( 'jquery-ui-tab' );
wp_deregister_script( 'jquery-ui-autocomplete' );
wp_deregister_script( 'jquery-ui-accordion' );
wp_deregister_script( 'jquery-ui-autocomplete' );
wp_deregister_script( 'jquery-ui-button' );
wp_deregister_script( 'jquery-ui-datepicker');
wp_deregister_script( 'jquery-ui-dialog' );
wp_deregister_script( 'jquery-ui-draggable' );
wp_deregister_script( 'jquery-ui-droppable' );
wp_deregister_script( 'jquery-ui-mouse' );
wp_deregister_script( 'jquery-ui-position' );
wp_deregister_script( 'jquery-ui-progressbar');
wp_deregister_script( 'jquery-ui-resizable' );
wp_deregister_script( 'jquery-ui-selectable');
wp_deregister_script( 'jquery-ui-slider' );
wp_deregister_script( 'jquery-ui-sortable' );
wp_deregister_script( 'jquery-ui-tabs' );
wp_deregister_script( 'jquery-ui-widget' );

wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js', array( 'jquery' ), '1.8', true);

wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js', array(), '1.7' );*/



//supprime l'éditeur visuel du backoffice : 
 
 //add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);
 
 
/*function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');*/



function my_custom_init()
{




	  register_post_type(
                        'infospratiques', 
                        array(
                                'label' => __('infos pratiques'),
                                'singular_label' => __('infos pratiques'),
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'post',
                                'hierarchical' => false,
                                'name' =>_('infos pratiques') ,
                                'supports' => array('title','editor')
                            )
                        );
						
						


  register_post_type(
                        'sections_college', 
                        array(
                                'label' => __('sections college'),
                                'singular_label' => __('sections college'),
                                'name' =>_('Les sections du collège') ,
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'post',
                                'hierarchical' => false,                                
                                'supports' => array('title','editor')
                            )
                        );
						
						
						   register_post_type(
                        'introduction', 
                        array(
                                'label' => __('introduction'),
                                'singular_label' => __('introduction'),
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'post',
                                'hierarchical' => false,
                                'name' =>_('Introduction') ,
                                'supports' => array('title','editor')
                            )
                        );

						
				
				


						
}

add_action('init', 'my_custom_init');   


//ajout lien home dans menu : 

add_filter('wp_nav_menu_items', 'gkp_add_index_link', 10, 2);
function gkp_add_index_link($items, $args) {
 
    if( $args->theme_location == 'cso' )
        $homeLink = '<li id="home_link"><a style="height:100%;" href="' . home_url() . '"></a></li>';
 
    return $homeLink . $items;
}


// ajout Ressources : 


global $myposttype;
global $myCustomTypeOptions;
$myposttype='Ressources'; //id de mon custom post

add_action('init', 'Evenement_init');
function Evenement_init()
{
	global $myposttype;
	
	register_post_type($myposttype, array(
		'label' => 'Ressources',
		'singular_label' =>'Ressource',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'thumbnail','author')
	));

}	

 




						
	/*
}	
				
// PAGE reglement interieur college
    register_post_type(
                        'reglement_interieur_college', 
                        array(
                                'label' => __('reglement interieur college'),
                                'singular_label' => __('reglement interieur college'),
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'post',
                                'hierarchical' => false,
                                'name' =>_('reglement interieur du collège') ,
                                'supports' => array()
                            )
                        );
// LYCEE //
 
// PAGE Sections du lycee
    register_post_type(
                        'sections_lycee', 
                        array(
                                'label' => __('sections lycee'),
                                'singular_label' => __('sections lycee'),
                                'name' =>_('Les sections du lycée') ,
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'page',
                                'hierarchical' => false,                                
                                'supports' => array()
                            )
                        );
// PAGE reglement interieur lycee
    register_post_type(
                        'reglement_interieur_lycee', 
                        array(
                                'label' => __('reglement interieur lycee'),
                                'singular_label' => __('reglement interieur lycee'),
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'page',
                                'hierarchical' => false,
                                'name' =>_('reglement interieur du lycée') ,
                                'supports' => array('title','editor')
                            )
                        );


// INFOS PRATIQUES //
    // PAGE inscriptions
  
     // ACCEUIL: introduction
    register_post_type(
                        'introduction', 
                        array(
                                'label' => __('1.introduction'),
                                'singular_label' => __('1.introduction'),
                                'public' => true,
                                'show_ui' => true,
                                'capability_type' => 'post',
                                'hierarchical' => false,
                                'name' =>_('infos pratiques') ,
                                'supports' => array('title','editor')
                            )
                        );


}
//activation des custom type d'article
add_action('init', 'my_custom_init');   


function set_custom_post_types_admin_order($wp_query) {  
  
  
  // Get the post type from the query  
    $post_type = $wp_query->query['post_type'];  
  
    if ( $post_type == 'POST_TYPE') {  
  
      // 'orderby' value can be any column name  
      $wp_query->set('orderby', 'title');  
  
      // 'order' value can be ASC or DESC  
      $wp_query->set('order', 'ASC');  
    }  
}  
add_filter('pre_get_posts', 'set_custom_post_types_admin_order');  
 
add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/
 
	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Very Simple' ] = array();
	$toolbars['Very Simple' ][1] = array('bold' , 'italic' , 'underline' );
	
	
	
	/*
 
	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	    unset( $toolbars['Full' ][2][$key] );
	}
 
	// remove the 'Basic' toolbar completely
	unset( $toolbars['Baisc' ] );
 
	// return $toolbars - IMPORTANT!
	return $toolbars;
/*}*/

// add_filter( 'body_class', 'add_slug_body_class' );
// function add_slug_body_class( $classes ) 
// {
   
//    if ( is_page() ) 
//    {
//     global $post;
//         $classes[] = $post->post_type . '-' . $post->post_name;
//     }
    
//     return $classes;
    
// }

function pagination($query) {
    $baseURL="http://".$_SERVER['HTTP_HOST'];
        if($_SERVER['REQUEST_URI'] != "/")
        $baseURL = $baseURL.$_SERVER['REQUEST_URI'];
     
        // Suppression de '/page' de l'URL
        $sep = strrpos($baseURL, '/page/');
        if($sep != FALSE)
        $baseURL = substr($baseURL, 0, $sep);
     
    // Suppression des paramètres de l'URL
        $sep = strrpos($baseURL, '?');
        if($sep != FALSE){
            // On supprime le caractère avant qui est un '/'
            $baseURL = substr($baseURL, 0, ($sep-1));
        }
        $page = $query->query_vars["paged"];
        if ( !$page ) $page = 1;
            $qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";
        // Nécessaire uniquement si on a plus de posts que de posts par page admis
        if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {
            echo '<nav class="list-pagination">';
            echo '<ul class="pagination">';
            // lien précédent si besoin
            if ( $page > 1 ) {
                echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">« précédente</a></li>';
            }
            // la boucle pour les pages
            for ( $i=1; $i <= $query->max_num_pages; $i++ ) {
                // ajout de la classe active pour la page en cours de visualisation
                if ( $i == $page ) 
                        echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>';
                else
                        echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>';
            }
            // le lien next si besoin
            if ( $page < $query->max_num_pages ) 
                echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">suivante »</a></li>';
            echo '</ul>';
            echo '</nav>';
        }
}
