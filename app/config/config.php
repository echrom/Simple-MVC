<?php
//Debug Settings
$debug_enable = true;

//Database Settings
$db_enable 			= 	false;
$db_host			=	"localhost";
$db_user			=	"database_username";
$db_password		=	"changeMe";
$db_table			=	"database_table";


//Active Directory Settings
$ad_enable 			= 	false;
$ad_host			=	"0.0.0.0";
$ad_domain			=	"";
$ad_base			= 	"";

$ad_options_enable 	= 	false;
$ad_options			=	array('
						LDAP_OPT_PROTOCOL_VERSION => 3,
						LDAP_OPT_REFERRALS => 0
						');

//Time Settings
$default_time_zone	=	"Europe/London";
$encrypt_key		=	"changeMe";
?>