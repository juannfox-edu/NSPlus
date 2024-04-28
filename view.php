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

$PAGE->set_url('/local/nsplus/view.php');
$PAGE->set_title('NSPlus');
$PAGE->set_context(context_system::instance());

$PAGE->requires->js(new moodle_url('js/XNS-core/html2canvas.js'));
$PAGE->requires->js(new moodle_url('js/XNS-core/Enumeration.js'));
$PAGE->requires->js(new moodle_url('js/XNS-core/ClassConstructor.js'));
$PAGE->requires->js(new moodle_url('js/XNS-core/BaseDiagram.js'));
$PAGE->requires->js(new moodle_url('js/XNS-core/DiagramObject.js'));
$PAGE->requires->js(new moodle_url('js/XNS-core/XNSDiagramMaker.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/templates.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/NSPUtils.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/utils.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/NSPPDF.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/NSPFile.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/DiagramContainer.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/DiagramsMenu.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/buttonsHandlers.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/buttons.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/StatementsMenu.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/NSPDiagram.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/NSPProject.js'));
$PAGE->requires->js(new moodle_url('js/XNS-editor/NSPEditor.js'));

$PAGE->requires->css(new moodle_url('css/w3.css'));
$PAGE->requires->css(new moodle_url('css/NSPDiagram.css'));
$PAGE->requires->css(new moodle_url('css/NSPEditor.css'));
$PAGE->requires->css(new moodle_url('css/NSPMenu.css'));
$PAGE->requires->css(new moodle_url('css/NSPPDF.css'));
$PAGE->requires->css(new moodle_url('css/animations.css'));
$PAGE->requires->css(new moodle_url('css/switch-button.css'));
$PAGE->requires->css(new moodle_url('css/NSPColors.css'));

echo $OUTPUT->header();
include('index.html');
echo $OUTPUT->footer();
