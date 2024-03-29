<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    qtype_ddmatch
 * @copyright  2007 Adriane Boyd (adrianeboyd@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'qtype_ddmatch';
$plugin->version   = 2019040900;

$plugin->requires  = 2013050100;
$plugin->dependencies = array(
    'qtype_match' => 2013050100,
);
$plugin->release = '1.6 Drag and drop matching question for Moodle 2.6, 2.7, 2.8, 2.9, 3.0, 3.1, 3.2, 3.3, 3.4';
$plugin->maturity  = MATURITY_STABLE;
