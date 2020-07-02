<?php
date_default_timezone_set("Asia/Jakarta");
setlocale(LC_TIME, 0);
$nowDate = date("Y-m-d h:i:sa");
$date = date('Y-m-d');
$time = new DateTime($date . ' ' . date('h:i:s'));
$time2 = new DateTime($date . ' 21:50:00');
$beda = $time->diff($time2);
echo $nowDate;
$day = date("n");
echo '<br>' . $day;
$o = $beda->i + 9;
echo '<br>' . $o;

// $start = new DateTime();
// $end   = new DateTime("2020-06-08 09:39:37");
// $time = date("H:i:s", strtotime($nowDate));
// //isWithInTime($start, $end, $time);
// echo '<br>';
// echo $start->diff($end)->format("%a hari, %h jam, %i menit, %s detik");

function isWithInTime($start, $end, $time)
{

	if (($time >= $start) && ($time <= $end)) {
		echo 'OK ' . $time . ' ' . $start . ' ' . $end;
		return TRUE;
	} else {
		echo 'Not OK ' . $time . ' ' . $start . ' ' . $end;
		return FALSE;
	}
}
