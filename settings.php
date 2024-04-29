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
 * Add page to admin menu.
 *
 * @package     local_nsplus
 * @copyright   Instituto ORT Argentina
 * @license     MIT License
 */

defined('MOODLE_INTERNAL') || die; // Only allow local runs

if ($hassiteconfig) { // Needs this condition or there is error on login page.
    $ADMIN->add('courses', new admin_externalpage('local_nsplus',
            get_string('pluginname', 'local_nsplus'),
            new moodle_url('/local/nsplus/view.php')));
}

if ($hassiteconfig) {
    $ADMIN->add('localplugins', new admin_category('local_nsplus_settings', new lang_string('pluginname', 'local_nsplus')));
    $settingspage = new admin_settingpage('managelocalnsplus', new lang_string('manage', 'local_nsplus'));

    if ($ADMIN->fulltree) {
        $settingspage->add(new admin_setting_configcheckbox(
            'local_nsplus/showinnavigation',
            new lang_string('showinnavigation', 'local_nsplus'),
            new lang_string('showinnavigation_desc', 'local_nsplus'),
            1
        ));
    }

    $ADMIN->add('localplugins', $settingspage);
}
