<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Prints an instance of mod_test.
 *
 * @package     local_nsplus
 * @copyright   Instituto ORT Argentina
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

$PAGE->set_url(new moodle_url('/local/nsplus/view.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_nsplus'));

$PAGE->requires->js(new moodle_url('/local/nsplus/editor/js/html2canvas.js'));
$PAGE->requires->js(new moodle_url('/local/nsplus/editor/js/Enumeration.js'));
$PAGE->requires->js(new moodle_url('/local/nsplus/editor/js/ClassConstructor.js'));
$PAGE->requires->js(new moodle_url('/local/nsplus/editor/js/BaseDiagram.js'));
$PAGE->requires->js(new moodle_url('/local/nsplus/editor/js/DiagramObject.js'));
$PAGE->requires->js(new moodle_url('/local/nsplus/editor/js/XNSDiagram.js'));
$PAGE->requires->js(new moodle_url('/local/nsplus/NSPlus.js'));

$PAGE->requires->css(new moodle_url('/local/nsplus/editor/css/XNSDEditor.css'));
$PAGE->requires->css(new moodle_url('/local/nsplus/editor/css/XNSDiagram.css'));

echo $OUTPUT->header();
include('index.html');
echo $OUTPUT->footer();
