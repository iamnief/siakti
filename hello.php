<?php
date_default_timezone_set("Asia/Jakarta");
$nowDate = date("Y-m-d h:i:sa");
//echo '<br>' . $nowDate;
$start = new DateTime();
$end   = new DateTime("2020-06-08 09:39:37");
$time = date("H:i:s", strtotime($nowDate));
//isWithInTime($start, $end, $time);
echo '<br>';
echo $start->diff($end)->format("%a hari, %h jam, %i menit, %s detik");

function isWithInTime($start, $end, $time)
{

	if (($time >= $start) && ($time <= $end)) {
		echo 'OK '.$time.' '.$start.' '.$end;
		return TRUE;
	} else {
		echo 'Not OK '.$time.' '.$start.' '.$end;
		return FALSE;
	}
}
