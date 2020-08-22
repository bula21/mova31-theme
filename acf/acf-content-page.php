<?php
/*
acf_add_local_field_group( array(
	'key'                   => 'group_5e062dfc79f45',
	'title'                 => 'Content',
	'fields'                => array(
		array(
			'key'               => 'field_5e062e034abc2',
			'label'             => 'Aufklapbare Elemente',
			'name'              => 'elements',
			'type'              => 'repeater',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'collapsed'         => '',
			'min'               => 0,
			'max'               => 0,
			'layout'            => 'block',
			'button_label'      => 'Element hinzufügen',
			'sub_fields'        => array(
				array(
					'key'               => 'field_5e062e144abc3',
					'label'             => 'Clone',
					'name'              => 'clone',
					'type'              => 'clone',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'clone'             => array(
						0 => 'group_5e16225f53617',
					),
					'display'           => 'seamless',
					'layout'            => 'block',
					'prefix_label'      => 0,
					'prefix_name'       => 0,
				),
			),
		),
		array(
			'key'               => 'field_5ccae01e0b11a',
			'label'             => 'More Content',
			'name'              => 'more-content',
			'type'              => 'wysiwyg',
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
		),
	),
	'location'              => array(
		array(
			array(
				'param'    => 'page_template',
				'operator' => '==',
				'value'    => 'content.php',
			),
		),
	),
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => true,
	'description'           => '',
) );*/


if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_5e67aed59ce92',
		'title'                 => 'CE: Farb-Blöcke',
		'fields'                => array(
			array(
				'key'               => 'field_5e67af16f9aa1',
				'label'             => 'Überschrift',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_5e67af0135d26',
				'label'             => 'Blöcke',
				'name'              => 'blocke',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 0,
				'layout'            => 'table',
				'button_label'      => 'Farb-Block hinzufügen',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5e67af0ef9ad1',
						'label'             => 'Icon',
						'name'              => 'icon',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5e67af16f9ad2',
						'label'             => 'Title',
						'name'              => 'title',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5e67af1bf9ad3',
						'label'             => 'Text',
						'name'              => 'text',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					),
					array(
						'key'               => 'field_5e67af40b91f8',
						'label'             => 'Hintergrundfarbe',
						'name'              => 'hintergrundfarbe',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'red'    => 'Rot',
							'blue'   => 'Blau',
							'yellow' => 'Gelb',
						),
						'default_value'     => array(
							0 => 'red',
						),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5e67afaf25ac2',
		'title'                 => 'CE: Text (Spalten)',
		'fields'                => array(
			array(
				'key'               => 'field_5e67afba61be5a',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'               => 'field_5e67afb61be5b',
				'label'             => 'Text',
				'name'              => 'text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 0,
				'delay'             => 0,
			),
			array(
				'key'               => 'field_5e67b01678372',
				'label'             => 'Anzahl Spalten',
				'name'              => 'anzahl_spalten',
				'type'              => 'number',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '30',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 2,
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'min'               => '',
				'max'               => '',
				'step'              => '',
			),
			array(
				'key'               => 'field_5e67afd285e09',
				'label'             => 'Button',
				'name'              => 'button',
				'type'              => 'link',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '30',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
			),
			array(
				'key'               => 'field_5e67afc71be5c',
				'label'             => 'Hintergrundfarbe',
				'name'              => 'hintergrundfarbe',
				'type'              => 'select',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '30',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'white'  => 'Weiss',
					'red'    => 'Rot',
					'blue'   => 'Blau',
					'yellow' => 'Gelb',
				),
				'default_value'     => array(),
				'allow_null'        => 0,
				'multiple'          => 0,
				'ui'                => 0,
				'return_format'     => 'value',
				'ajax'              => 0,
				'placeholder'       => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5e67ae511ba70',
		'title'                 => 'CE: Text-Bild',
		'fields'                => array(
            array(
						'key'               => 'field_5e67af16fadg9ad2',
						'label'             => 'Title',
						'name'              => 'title',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
			array(
				'key'               => 'field_5e67ae57c4f',
				'label'             => 'Text',
				'name'              => 'text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '50',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
				'delay'             => 0,
			),
			array(
				'key'               => 'field_5e67ae97c4fe8',
				'label'             => 'Bild',
				'name'              => 'bild',
				'type'              => 'image',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '50',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
				'preview_size'      => 'medium',
				'library'           => 'all',
				'min_width'         => '',
				'min_height'        => '',
				'min_size'          => '',
				'max_width'         => '',
				'max_height'        => '',
				'max_size'          => '',
				'mime_types'        => '',
			),
			array(
						'key'               => 'field_5e67af40b9111',
						'label'             => 'BgColor',
						'name'              => 'hintergrundfarbe',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'red'    => 'Rot',
							'blue'   => 'Blau',
							'yellow' => 'Gelb',
						),
						'default_value'     => array(
							0 => 'red',
						),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
			array(
				'key'               => 'field_5e67af82bbaab',
				'label'             => 'Reihenfolge',
				'name'              => 'reihenfolge',
				'type'              => 'select',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '50',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					't2b' => 'Text - Bild',
					'b2t' => 'Bild - Text',
				),
				'default_value'     => array(),
				'allow_null'        => 0,
				'multiple'          => 0,
				'ui'                => 0,
				'return_format'     => 'value',
				'ajax'              => 0,
				'placeholder'       => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
			'key'                   => 'group_5e67ae511bc88',
			'title'                 => 'CE: Blöcke mit Sidebar',
			'fields'                => array(
				array(
					'key'               => 'field_5e062e034ac99',
					'label'             => 'Elemente (links)',
					'name'              => 'elements',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '50',
						'class' => '',
						'id'    => '',
					),
					'collapsed'         => '',
					'min'               => 0,
					'max'               => 0,
					'layout'            => 'block',
					'button_label'      => 'Element hinzufügen',
					'sub_fields'        => array(
						array(
							'key'               => 'field_5e67ae97c4c90',
							'label'             => 'Bild',
							'name'              => 'bild',
							'type'              => 'image',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '40',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
							'preview_size'      => 'medium',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
						),
                        array(
							'key'               => 'field_5e67ae57adsfasc4c89',
							'label'             => 'Name',
							'name'              => 'name',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '60',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'full',
							'media_upload'      => 1,
							'delay'             => 0,
						),
                        array(
							'key'               => 'field_5e67ae57adsfadfasc4fc89',
							'label'             => 'Function',
							'name'              => 'function',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '60',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'full',
							'media_upload'      => 1,
							'delay'             => 0,
						),
						array(
							'key'               => 'field_5e67ae57c4c89',
							'label'             => 'Contact-info',
							'name'              => 'contact-info',
							'type'              => 'wysiwyg',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '60',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'full',
							'media_upload'      => 1,
							'delay'             => 0,
						),
					)
				),
				array(
					'key'               => 'field_5e062e034ad99',
					'label'             => 'Timeline (rechts)',
					'name'              => 'timeline-items',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array(
						'width' => '50',
						'class' => '',
						'id'    => '',
					),
					'collapsed'         => '',
					'min'               => 0,
					'max'               => 0,
					'layout'            => 'block',
					'button_label'      => 'Element hinzufügen',
					'sub_fields'        => array(
						array(
							'key'               => 'field_5e67ae97c4d00',
							'label'             => 'Datum',
							'name'              => 'date',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '40',
							),
						),
						array(
							'key'               => 'field_5e67ae57c4d01',
							'label'             => 'Text',
							'name'              => 'text',
							'type'              => 'wysiwyg',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '60',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'full',
							'media_upload'      => 1,
							'delay'             => 0,
						),
					)
				)
			),
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'post',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'active'                => true,
			'description'           => '',
		)
	);

	acf_add_local_field_group( array(
		'key'                   => 'group_5e67afaf25af3c2',
		'title'                 => 'CE: Full page text',
		'fields'                => array(
			array(
				'key'               => 'field_5e67afs2b61be5a',
				'label'             => 'Fp-Text',
				'name'              => 'fp-text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

    acf_add_local_field_group( array(
		'key'                   => 'group_5ec3a25ad3336d98',
		'title'                 => 'CE: Header mit text und bild/illustration',
		'fields'                => array(
			array(
				'key'               => 'field_5ec3a256afd4e5f64',
				'label'             => 'Header-1col',
				'name'              => 'header-1col',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 0,
				'layout'            => 'table',
				'button_label'      => '',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5ec3a295e5adff66',
						'label'             => 'Text-header',
						'name'              => 'text-header',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					),
					array(
						'key'               => 'field_5e67fadaf40b9111',
						'label'             => 'Header Background Color',
						'name'              => 'hintergrundfarbe',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'red'    => 'Rot',
							'blue'   => 'Blau',
							'yellow' => 'Gelb',
						),
						'default_value'     => array(
							0 => 'red',
						),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
				),
			)
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5ec3a25336d98',
		'title'                 => 'CE: Header mit text und bild/illustration',
		'fields'                => array(
			array(
				'key'               => 'field_5ec3a256e5f64',
				'label'             => 'Header-2col',
				'name'              => 'header-2col',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 0,
				'layout'            => 'table',
				'button_label'      => '',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5ec3a295e5f66',
						'label'             => 'Text-header',
						'name'              => 'text-header',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					),
					array(
						'key'               => 'field_5ec3a2abe5f67',
						'label'             => 'Img-header',
						'name'              => 'img-header',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5e67af40b9111',
						'label'             => 'Header Background Color',
						'name'              => 'hintergrundfarbe',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'red'    => 'Rot',
							'blue'   => 'Blau',
							'yellow' => 'Gelb',
						),
						'default_value'     => array(
							0 => 'red',
						),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
                    array(
						'key'               => 'field_5e67af40dab9111',
						'label'             => 'page title visibility',
						'name'              => 'page-title-visibility',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'on'    => 'visible',
							'off'   => 'invisible',
						),
						'default_value'     => array(
							0 => 'red',
						),
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 0,
						'return_format'     => 'value',
						'ajax'              => 0,
						'placeholder'       => '',
					),
				),
			)
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
	) );

	acf_add_local_field_group( array(
		'key'                   => 'group_5e67ab14d5219',
		'title'                 => 'Content-Elemente',
		'fields'                => array(
			array(
				'key'               => 'field_5e67ab1a0be85',
				'label'             => 'Elemente',
				'name'              => 'content_elemente',
				'type'              => 'flexible_content',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'layouts'           => array(
//					'layout_5e67adcb98d3dc0'     => array(
//						'key'        => 'layout_5e67adcb98d3dc0',
//						'name'       => 'fp-text',
//						'label'      => 'Fp-text',
//						'display'    => 'block',
//						'sub_fields' => array(
//							array(
//								'key'               => 'field_5e67add21d406a',
//								'label'             => 'Fp-text',
//								'name'              => 'fp-text',
//								'type'              => 'clone',
//								'instructions'      => '',
//								'required'          => 0,
//								'conditional_logic' => 0,
//								'wrapper'           => array(
//									'width' => '',
//									'class' => '',
//									'id'    => '',
//								),
//								'clone'             => array(
//									0 => 'group_5e67afaf25af3c2',
//								),
//								'display'           => 'seamless',
//								'layout'            => 'block',
//								'prefix_label'      => 0,
//								'prefix_name'       => 0,
//							),
//						),
//						'min'        => '',
//						'max'        => '',
//					),
                    'layout_5e67adcb98ad36d3dc0ddd' => array(
						'key'        => 'layout_5e67adcb98ad36d3dc0ddd',
						'name'       => 'header-1col',
						'label'      => 'Header-1col',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'               => 'field_5e67add21dfsd406c',
								'label'             => 'Header-1col',
								'name'              => 'header-1col',
								'type'              => 'clone',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'clone'             => array(
									0 => 'group_5ec3a25ad3336d98',
								),
								'display'           => 'seamless',
								'layout'            => 'block',
								'prefix_label'      => 0,
								'prefix_name'       => 0,
							),
						),
						'min'        => '',
						'max'        => '',
					),
                    'layout_5e67adcb98ad36d3dc0' => array(
						'key'        => 'layout_5e67adcb98ad36d3dc0',
						'name'       => 'header-2col',
						'label'      => 'Header-2col',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'               => 'field_5e67add21d406c',
								'label'             => 'Header-2col',
								'name'              => 'header-2col',
								'type'              => 'clone',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'clone'             => array(
									0 => 'group_5ec3a25336d98',
								),
								'display'           => 'seamless',
								'layout'            => 'block',
								'prefix_label'      => 0,
								'prefix_name'       => 0,
							),
						),
						'min'        => '',
						'max'        => '',
					),
					'layout_5e67adcb98dc0'       => array(
						'key'        => 'layout_5e67adcb98dc0',
						'name'       => 'text-bild',
						'label'      => 'Text-Bild',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'               => 'field_5e67add21406c',
								'label'             => 'Text-Bild',
								'name'              => 'text-bild',
								'type'              => 'clone',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'clone'             => array(
									0 => 'group_5e67ae511ba70',
								),
								'display'           => 'seamless',
								'layout'            => 'block',
								'prefix_label'      => 0,
								'prefix_name'       => 0,
							),
						),
						'min'        => '',
						'max'        => '',
					),
					'layout_5e67ade71406d'       => array(
						'key'        => 'layout_5e67ade71406d',
						'name'       => 'farb-blocke',
						'label'      => 'Farb-Blöcke',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'               => 'field_5e67adea1406e',
								'label'             => 'Farb-Blöcke',
								'name'              => 'farb-blocke',
								'type'              => 'clone',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'clone'             => array(
									0 => 'group_5e67aed59ce92',
								),
								'display'           => 'seamless',
								'layout'            => 'block',
								'prefix_label'      => 0,
								'prefix_name'       => 0,
							),
						),
						'min'        => '',
						'max'        => '',
					),
					'layout_5e67b0aa8454f'       => array(
						'key'        => 'layout_5e67b0aa8454f',
						'name'       => 'text-spalten',
						'label'      => 'Text-Spalten',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'               => 'field_5e67b0ac84550',
								'label'             => 'Text-Spalten',
								'name'              => 'text-spalten',
								'type'              => 'clone',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'clone'             => array(
									0 => 'group_5e67afaf25ac2',
								),
								'display'           => 'seamless',
								'layout'            => 'block',
								'prefix_label'      => 0,
								'prefix_name'       => 0,
							),
						),
						'min'        => '',
						'max'        => '',
					),
					'layout_5e67b0aa84d01'       => array(
						'key'        => 'layout_5e67b0aa84d01',
						'name'       => 'sidebar-blocks',
						'label'      => 'Sidebar Blöcke',
						'display'    => 'block',
						'sub_fields' => array(
							array(
								'key'               => 'field_5e67b0ac84d02',
								'label'             => 'Text-Spalten',
								'name'              => 'text-spalten',
								'type'              => 'clone',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'clone'             => array(
									0 => 'group_5e67ae511bc88',
								),
								'display'           => 'seamless',
								'layout'            => 'block',
								'prefix_label'      => 0,
								'prefix_name'       => 0,
							),
						),
						'min'        => '',
						'max'        => '',
					),
				),
				'button_label'      => 'Content Element hinzufügen',
				'min'               => '',
				'max'               => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'content.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => array(
			0 => 'the_content',
		),
		'active'                => true,
		'description'           => '',
	) );

endif;