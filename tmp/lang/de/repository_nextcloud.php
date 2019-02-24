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
 * Strings for component 'repository_nextcloud', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   repository_nextcloud
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Intern und Extern';
$string['cannotconnect'] = 'Verbindung mit Nextcloud konnte nicht hergestellt werden. Bitte loggen Sie sich ein und laden Sie anschließend die Datei hoch.';
$string['chooseissuer'] = 'OAuth 2-Service';
$string['chooseissuer_help'] = 'Ein neuer Service kann im Administrationsbereich unter Server /  OAuth 2-Services hinzugefügt werden.';
$string['configplugin'] = 'Nextcloud-Konfiguration';
$string['configuration_exception'] = 'Bei der Konfiguration des OAuth 2-Clients ist ein Fehler aufgetreten: {$a}';
$string['contactadminwith'] = 'Die angeforderte Aktion konnte nicht ausgeführt werden. Falls dies häufiger vorkommt, kontaktieren Sie bitte Ihren Administrator mit folgenden zusätzlichen Hinweisen:<br>"<i>{$a}</i>"';
$string['couldnotmove'] = 'Die Datei konnte nicht in den Ordner {$a} verschoben werden.';
$string['defaultreturntype'] = 'Standardmäßiger Rückgabewert';
$string['endpointnotdefined'] = 'Endpunkt {$a} ist nicht definiert.';
$string['external'] = 'Extern (in Moodle werden nur Links gespeichert)';
$string['filenotaccessed'] = 'Auf die angeforderte Datei konnte nicht zugegriffen werden. Bitte stellen Sie sicher, dass Sie eine gültige Datei ausgewählt haben und mit dem korrekten Konto authentifiziert sind.';
$string['fileoptions'] = 'Die Typen und Standardeinstellungen für zurückgegebene Dateien werden hier konfiguriert. Beachten Sie, dass alle extern verlinkten Dateien angepasst werden, so dass das Moodle-Systemkonto als Eigentümer eingetragen ist.';
$string['foldername'] = 'Name eines Ordners, in welchem geteilte Dateien bereitgestellt werden';
$string['foldername_help'] = 'Der Zugriff auf sog. "Access Controlled Links" sorgt dafür, dass die entsprechende Datei privat mit der/dem Zugreifenden geteilt wird. Damit die geteilten Dateien nicht ungeordnet im Hauptordner der Nutzer*innen erscheinen, werden Sie in einem Ordner abgelegt.<br>
Hier wird festgelegt, wie der Ordner benannt wird. Es ist sinnvoll, einen Namen zu wählen, der einen Bezug zu Ihrer Moodle-Instanz herstellt.';
$string['internal'] = 'Intern (Dateien werden in Moodle gespeichert)';
$string['invalidresponse'] = 'Ungültige Serverantwort';
$string['issuervalidation_invalid'] = 'Der Service {$a} ist ausgewählt, implementiert aber nicht alle erforderlichen Endpunkte. Das Repository wird nicht funktionieren.';
$string['issuervalidation_valid'] = 'Der Service {$a} ist ausgewählt.';
$string['issuervalidation_without'] = 'Sie haben noch keinen Service ausgewählt.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'View Nextcloud';
$string['noclientconnection'] = 'Die OAuth-Clients konnten nicht verbunden werden.';
$string['no_right_issuers'] = 'Keiner der bestehenden Services implementiert alle erforderlichen Endpunkte. Bitte legen Sie einen Nextcloud-Service an.';
$string['notauthorized'] = 'Sie haben nicht die notwendige Berechtigung, um diese Aktion auszuführen. Bitte stellen Sie sicher, dass Sie mit dem korrekten Konto authentifiziert sind.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Verweis auf die OAuth 2-Services-Konfiguration">OAuth 2-Services-Konfiguration</a>';
$string['pathnotcreated'] = 'Der Pfad {$a} konnte nicht im Systemkonto angelegt werden.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloud repository';
$string['privacy:metadata'] = 'Es werden keine personenbezogenen Daten gespeichert oder an Dritte übertragen.';
$string['request_exception'] = 'Eine Anfrage an {$a->instance} ist fehlgeschlagen: {$a->errormessage}';
$string['requestnotexecuted'] = 'Die angeforderte Aktion konnte nicht ausgeführt werden. Falls dies häufiger vorkommt, kontaktieren Sie bitte Ihren Administrator.';
$string['right_issuers'] = 'Die folgenden Services implementieren die erforderlichen Endpunkte: <br> {$a}';
$string['supportedreturntypes'] = 'Unterstützte Dateien';
