<?php
/*
Plugin Name: StopSOPA
Plugin URI: http://viralpatel.net/stopsopa
Description: Adds a dynamic bar with message STOPSOPA at the top of blog.  More info and demo at: <a href="http://viralpatel.net/stopsopa/">StopSOPA Plugin Home</a>
Version: 1.0
Author: Viral Patel
Author URI: http://viralpatel.net/
License: GPL2
*/
/*  Copyright 2012  Viral Patel  (email : viralpatel.net@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function callback($buffer) {

	if( !is_admin() ) { 
		$buffer =  $buffer . '
		<script type="text/javascript" src="http://viralpatel.net/stopsopa/jquery.stopsopa.js"></script>
		<script>
			$(document).ready(function() { $(this).stopsopa() });
		</script>';
	}


  return $buffer;
}

ob_start("callback");

?>