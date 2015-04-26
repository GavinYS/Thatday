<?php
	//error_reporting(0);
	$GLOBALS = array('year'=>2013 , 'month'=>6 , 'day'=>6);
	function get_days(){
		$oldtime = strtotime($GLOBALS['year']."-".$GLOBALS['month']."-".$GLOBALS['day']." 00:00:00");
		$newtime = time();
		$days = floor(($newtime-$oldtime)/86400);
		return $days;
	}

	function get_hours(){
		$oldtime = strtotime($GLOBALS['year']."-".$GLOBALS['month']."-".$GLOBALS['day']." 00:00:00");
		$newtime = time();
		$hours = floor(($newtime-$oldtime)%86400/3600);
		return $hours;
	}

	function get_minutes(){
		$oldtime = strtotime($GLOBALS['year']."-".$GLOBALS['month']."-".$GLOBALS['day']." 00:00:00");
		$newtime = time();
		$minutes = floor(($newtime-$oldtime)%86400%3600/60);
		return $minutes;
	}

	function get_seconds(){
		$oldtime = strtotime($GLOBALS['year']."-".$GLOBALS['month']."-".$GLOBALS['day']." 00:00:00");
		$newtime = time();
		$seconds = floor(($newtime-$oldtime)%86400%3600%60);
		return $seconds;
	}
