<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'brian-blocks/copyright-date',
		'version' => '0.1.0',
		'title' => 'Copyright Date',
		'category' => 'widgets',
		'icon' => 'calendar',
		'description' => 'Displays a copyright notice with a configurable starting year.',
		'attributes' => array(
			'startingYear' => array(
				'type' => 'string',
				'default' => '2000'
			)
		),
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'align' => true
		),
		'textdomain' => 'brian-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
