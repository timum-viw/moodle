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
 * Strings for component 'forumngfeature_delete', language 'de', branch 'MOODLE_33_STABLE'
 *
 * @package   forumngfeature_delete
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmdeletediscussion'] = 'Sind Sie sicher, dass Sie diese Diskussion löschen möchten?';
$string['confirmundeletediscussion'] = 'Sind Sie sicher, dass Sie diese Diskussion wiederherstellen möchten?';
$string['deleteandemail'] = 'löschen und senden';
$string['deletediscussion'] = 'Diskussion löschen';
$string['emailcontenthtml'] = 'Diese Benachrichtigung weist Sie darauf hin, dass eine von Ihnen begonnene Diskussion mit folgenden Details gelöscht wurde, u.z. von \'{$a->firstname} {$a->lastname}\':<br />
<br />
Betreff: {$a->subject}<br />
Forum: {$a->forum}<br />
Modul: {$a->course}<br/>
<br/>';
$string['emailcontentplain'] = 'Diese Benachrichtigung weist Sie darauf hin, dass eine von Ihnen begonnene Diskussion mit folgenden Details gelöscht wurde, u.z. von \'{$a->firstname} {$a->lastname}\':

Betreff: {$a->subject}
Forum: {$a->forum}
Modul: {$a->course}';
$string['notifycontributors'] = 'andere Mitwirkende benachrichtigen';
$string['notifycontributorsemailcontenthtml'] = 'Diese Benachrichtigung weist Sie darauf hin, dass eine Diskussion mit Ihrer Beteiligung und den folgenden Details gelöscht wurde, u.z. von \'{$a->firstname} {$a->lastname}\':<br />
<br />
Betreff: {$a->subject}<br />
Forum: {$a->forum}<br />
Modul: {$a->course}<br />
<br/>';
$string['notifycontributorsemailcontentplain'] = 'Diese Benachrichtigung weist Sie darauf hin, dass eine Diskussion mit Ihrer Beteiligung und den folgenden Details gelöscht wurde, u.z. von \'{$a->firstname} {$a->lastname}\':

Betreff: {$a->subject}
Forum: {$a->forum}
Modul: {$a->course}';
$string['notifycontributors_help'] = 'Mitwirkende benachrichtigen, die Beiträge gepostet oder beantwortet haben';
$string['pluginname'] = 'Diskussion löschen/ wiederherstellen';
$string['undeletediscussion'] = 'Diskussion wiederherstellen';
