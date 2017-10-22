<?php

function load_alerts_table() {
	global $wpdb;
    global $charset_collate;

    $sql = "CREATE TABLE {$wpdb->prefix}alerts (
			  id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			  name varchar(255) NOT NULL,
			  description varchar(255) NOT NULL,
			  address_id bigint(20) NOT NULL,
			  event_id bigint(20) NOT NULL,
			  priority int(11) NOT NULL,
			  created_at datetime NOT NULL,
			  updated_at datetime DEFAULT NULL,
			  deleted_at datetime DEFAULT NULL,
			  PRIMARY KEY  (id)
			) $charset_collate;";

	return $sql;
}

function load_emails_table() {
	global $wpdb;
    global $charset_collate;

    $sql = "CREATE TABLE {$wpdb->prefix}emails (
			  id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			  object_type varchar(255) NOT NULL,
			  object_id bigint(20) NOT NULL,
			  type varchar(255) NOT NULL,
			  value varchar(255) NOT NULL,
			  _default tinyint(4) NOT NULL DEFAULT 0,
			  do_not_email tinyint(4) NOT NULL DEFAULT 0,
			  created_at datetime NOT NULL,
			  updated_at datetime DEFAULT NULL,
			  deleted_at datetime DEFAULT NULL,
			  PRIMARY KEY  (id)
			) $charset_collate;";

	return $sql;
}

function load_faq_table() {
	global $wpdb;
    global $charset_collate;

    $sql = "CREATE TABLE {$wpdb->prefix}faq (
			  id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			  title varchar(255) NOT NULL,
			  description text DEFAULT NULL,
			  sort_order int(11) NOT NULL,
			  created_at datetime NOT NULL,
			  updated_at datetime DEFAULT NULL,
			  deleted_at datetime DEFAULT NULL,
			  PRIMARY KEY  (id)
			) $charset_collate;";

	return $sql;
}

function load_help_table() {
	global $wpdb;
    global $charset_collate;

    $sql = "CREATE TABLE {$wpdb->prefix}help (
			  id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
			  title varchar(255) NOT NULL,
			  path varchar(255) NOT NULL,
			  sort_order int(11) NOT NULL,
			  language varchar(255) NOT NULL,
			  description text DEFAULT NULL,
			  created_at datetime NOT NULL,
			  updated_at datetime DEFAULT NULL,
			  deleted_at datetime DEFAULT NULL,
			  PRIMARY KEY  (id)
			) $charset_collate;";

	return $sql;
}
