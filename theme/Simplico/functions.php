<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

/*
@File: functions.php
@Package: GetSimple
@Action: simplico theme for GetSimple CMS
@Author: maciej kopala mdesigns.pl
*/

/*breadcrumb*/

function Innovation_Parent_Link($name) {
	$file = GSDATAPAGESPATH . $name .'.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		$title = $p->title;
		$parent = $p->parent;
		$slug = $p->slug;
		echo '<a href="'. find_url($name,'') .'">'. $title .'</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; ';
	}
}

/*social*/

function Innovation_Settings() {
	$file = GSDATAOTHERPATH . 'InnovationSettings.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		if ($p->facebook != '' ) define('FACEBOOK', $p->facebook);
		if ($p->twitter != '' ) define('TWITTER', $p->twitter);
		if ($p->linkedin != '' ) define('LINKEDIN', $p->linkedin);
		if ($p->webfont != '' ) define('WEBFONT', $p->webfont);
		return true;
	} else {
		return false;
	}
}
