<?php

global $wpsf_settings;

$wpsf_settings = array();

$wpsf_settings[] = array(
	'section_id'          => 'options',
	'section_title'       => 'General Options',
	'section_description' => 'Configuration for the operation of the plugin and display of data.',
	'section_order'       => 10,
	'fields' => array(
		array(
			'id'    => 'display_widget',
			'title' => 'Dashboard Widget',
			'desc'  => 'Show a widget on the main Dashboard with social metrics.',
			'type'  => 'checkbox',
			'std'   => 1
		),
		array(
			'id'    => 'report_visibility',
			'title' => 'Report Visibility',
			'desc'  => 'The Social Metrics Tracker reports will be visible to users who have this capability.',
			'type'  => 'select',
			'std'   => 'publish_posts',
			'choices' => array(
				'manage_network'    => 'Super Admins (Users who can manage the network)',
				'manage_options'    => 'Admins (Users who can manage options)',
				'edit_others_posts' => 'Editors (Users who can edit others posts)',
				'publish_posts'     => 'Authors (Users who can publish posts)',
				'edit_posts'        => 'Contributors (Users who can edit their own posts)',
				'read'              => 'Subscribers (Users who can read)'
			)
		),
		array(
			'id'    => 'enable_social',
			'title' => 'Track Social',
			'desc'  => 'Track and display social data',
			'type'  => 'checkbox',
			'std'   => 1
		),
		array(
			'id'    => 'enable_comments',
			'title' => 'Track Comments',
			'desc'  => 'Display the number of comments on each item.',
			'type'  => 'checkbox',
			'std'   => 1
		),
		array(
			'id'    => 'ttl_hours',
			'title' => 'Data TTL',
			'desc'  => 'Length of time to store the statistics locally before downloading new data. A lower value will use more server resources. High values are recommended for blogs with over 500 posts.',
			'type'  => 'select',
			'std'   => '12',
			'choices' => array(
				'1'   => '1 Hour',
				'2'   => '2 Hours',
				'4'   => '4 Hours',
				'6'   => '6 Hours',
				'8'   => '8 Hours',
				'12'  => '12 Hours',
				'24'  => '24 Hours',
				'36'  => '36 Hours',
				'48'  => '2 Days',
				'72'  => '3 Days',
				'168' => '1 Week',
			)
		),
		array(
			'id'    => 'default_sort_column',
			'title' => 'Default Sort Order',
			'desc'  => 'Which column should be sorted by default?',
			'type'  => 'select',
			'std'   => 'social',
			'choices' => array(
				'aggregate' => 'Overall Aggregate Score',
				'comments'  => 'Most Comments',
				'social'    => 'Highest Social Score',
				'post_date' => 'Post Publish Date'
			)
		),
		array(
			'id'    => 'default_date_range_months',
			'title' => 'Default Date Range',
			'desc'  => 'Reports should display posts published within this date range.',
			'type'  => 'select',
			'std'   => '0',
			'choices' => array(
				'1'  => '1 Month',
				'3'  => '3 Months',
				'6'  => '6 Months',
				'12' => '12 Months',
				'0'  => 'All Time'
			)
		),
		array(
			'id'    => 'debug_mode',
			'title' => 'Enable Debug Mode',
			'desc'  => 'Display additional debug information.',
			'type'  => 'checkbox',
			'std'   => 0
		),
		array(
			'id'    => 'debug_report_visibility',
			'title' => 'Debug Report Visibility',
			'desc'  => 'The debug panel will be visible to users who have this capability.',
			'type'  => 'select',
			'std'   => 'manage_options',
			'choices' => array(
				'manage_network'    => 'Super Admins (Users who can manage the network)',
				'manage_options'    => 'Admins (Users who can manage options)',
				'edit_others_posts' => 'Editors (Users who can edit others posts)',
				'publish_posts'     => 'Authors (Users who can publish posts)',
				'edit_posts'        => 'Contributors (Users who can edit their own posts)',
				'read'              => 'Subscribers (Users who can read)'
			)
		)
	)
);
