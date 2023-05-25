<?php

add_action('init', 'create_post_type');
function create_post_type()
{
	register_post_type(
		'events',
		array(
			'labels'=>array(
				'name'=>__('Event'),
				'singular_name'=>__('Event'),
			),
			'public'=>true,
			'has_archive'=>true,
		),
	);
}


add_action('init', 'assistant_init');
function assistant_init()
{
	register_taxonomy(
		'assistants',
		'events',
		array(
			'label' => __('Assistants'),
			'rewrite' => array(
				'slug' => 'assistants',
			),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides',
			),
		),
	);
}