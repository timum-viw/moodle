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
 * Strings for component 'repository_onedrive', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   repository_onedrive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Zugang';
$string['both'] = 'Intern und extern';
$string['cachedef_folder'] = 'OneDrive-Datei-IDs für Verzeichnisse im Systemkonto';
$string['configplugin'] = 'OneDrive Plugin konfigurieren';
$string['confirmimportskydrive'] = 'Sind Sie sicher, dass Sie alle Dateien vom Microsoft SkyDrive Repository in das Microsoft OneDrive Repository importieren wollen? Das Microsoft OneDrive Repository muss konfiguriert sein und funktionieren, damit importierte Dateien so funktionieren wie zuvor. Warnung: Diese Aktion kann nicht rückgängig gemacht werden!';
$string['defaultreturntype'] = 'Standardmäßiger Rückgabetyp';
$string['external'] = 'Intern (nur Links in Moodle gespeichert)';
$string['fileoptions'] = 'Die Gestaltung und Vorgaben für zurück gesendete Dateien kann hier konfiguriert werden. Beachten Sie, dass extern verlinkte Dateien aktualisiert werden, sodass der Moodle System Account der Besitzer ist.';
$string['importskydrivefiles'] = 'Dateien aus Microsoft SkyDrive importieren';
$string['internal'] = 'Intern (Dateien in Moodle gespeichert)';
$string['issuer'] = 'OAuth 2 Service';
$string['issuer_help'] = 'Wählen Sie den OAuth 2 Service, der dazu konfiguriert ist mit dem One Drive API zu kommunizieren. Wenn der Service noch nicht existiert, müssen Sie ihn erstellen.';
$string['mysitenotfound'] = 'Sie haben sich bisher noch nie in OneDrive eingeloggt. Sie müssen sich mindestens einmal einloggen um es mit Moodle zu verwenden.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link zur OAuth Services Konfiguration">OAuth 2 Services Konfiguration</a>';
$string['onedrive:view'] = 'OneDrive Repository anzeigen';
$string['owner'] = 'Eigentümer/in {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Das Microsoft OneDrive Repository speichert temporäre Zugriffsberechtigungen und überträgt Nutzerdaten an das externe System';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Temporäre Zugriffsberechtigungs-ID-Wert für Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'Temporäre Zugriffsberechtigungs-ID für Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Temporäre Zugriffsberechtigungs-ID für Microsoft OneDrive Datum/Zeit der Erstellung';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Temporäre Zugriffsberechtigungs-ID für Microsoft OneDrive Datum/Zeit der Änderung';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'ID des Nutzers, der das temporäre Microsoft OneDrive Zugriffsrecht geändert hat';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Microsoft OneDrive Repository Suchanfrage des Nutzers';
$string['removetempaccesstask'] = 'Temporären Schreibzugriff von kontrollierten Verlinkungen entfernen';
$string['searchfor'] = 'Suche nach {$a}';
$string['servicenotenabled'] = 'Zugriff nicht konfiguriert';
$string['skydrivefilesexist'] = 'Dateien im Microsoft SkyDrive Repository gefunden. Dieses Repository ist veraltet. Die Dateien können aber ins Microsoft OneDrive Repository importiert werden.';
$string['skydrivefilesimported'] = 'Alle Dateien aus dem Microsoft SkyDrive Repository wurden importiert.';
$string['skydrivefilesnotimported'] = 'Einige Dateien aus dem Microsoft SkyDrive Repository konnten nicht importiert werden.';
$string['supportedreturntypes'] = 'Unterstützte Dateien';
