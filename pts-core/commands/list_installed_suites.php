<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2009 - 2010, Phoronix Media
	Copyright (C) 2009 - 2010, Michael Larabel

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

class list_installed_suites implements pts_option_interface
{
	public static function run($r)
	{
		$installed_suites = pts_suites::installed_suites();
		pts_client::$display->generic_heading(count($installed_suites) . " Suites Installed");

		if(count($installed_suites) > 0)
		{
			foreach($installed_suites as $identifier)
			{
				$test_suite = new pts_test_suite($identifier);
			 	echo "- " . $test_suite->get_title() . "\n";
			}
			echo "\n";
		}
	}
}

?>