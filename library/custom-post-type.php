<?php
/* Bones Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function si_register_cpt_cookies() {
	// creating (registering) the custom type
	register_post_type( 'si_cookies', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Menu Items', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Menu Item', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Menu Items', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Menu Item', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Menu Items', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Menu Item', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Menu Item', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Menu Item', 'bonestheme'), /* Search Menu Item Title */
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Delicious madness', 'bonestheme' ), /* Menu Item Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the Menu Item type menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register Menu Item */

	/* this adds your post categories to your Menu Item type */
	register_taxonomy_for_object_type('category', 'custom_type');
	/* this adds your post tags to your Menu Item type */
	register_taxonomy_for_object_type('post_tag', 'custom_type');

}

// adding the function to the Wordpress init
add_action( 'init', 'si_register_cpt_cookies');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add custom categories (these act like categories)
register_taxonomy( 'si_campuses',
	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Campuses', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Campus', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Campuses', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'All Campusess', 'bonestheme' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Campus', 'bonestheme' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Campus:', 'bonestheme' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Campus', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Campus', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Campus', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Campus Name', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'campus' ),
	)
);

// now let's add custom tags (these act like tags)
register_taxonomy( 'si_ingredients',
	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Ingredients', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Ingredient', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Ingredients', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'All Ingredients', 'bonestheme' ), /* all title for taxonomies */
			'edit_item' => __( 'Edit Ingredients', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Ingredients', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Ingredient', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Ingredient Name', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_ui' => true,
		'query_var' => true,
	)
);

/*
	looking for custom meta boxes?
	check out this fantastic tool:
	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
*/


?>