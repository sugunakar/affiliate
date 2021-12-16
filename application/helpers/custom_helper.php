<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('finddistance'))
{
	function finddistance($lat1, $lon1, $lat2, $lon2, $unit) {
		  $theta = $lon1 - $lon2;
		  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		  $dist = acos($dist);
		  $dist = rad2deg($dist);
		  $miles = $dist * 60 * 1.1515;
		  $unit = strtoupper($unit);
		
		  if ($unit == "K") {
			return round($miles * 1.609344,2);
		  } else if ($unit == "N") {
			  return round($miles * 0.8684,2);
		  } else {
				return round($miles,2);
		  }
	}
}