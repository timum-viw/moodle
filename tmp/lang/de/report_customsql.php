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
 * Strings for component 'report_customsql', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Neue Kategorie hinzufügen';
$string['addcategorydesc'] = 'Um die Kategorie eines Berichts zu ändern, müssen Sie diesen Bericht bearbeiten. Hier können Sie Kategorientexte bearbeiten, eine Kategorie löschen oder eine neue Kategorie hinzufügen.';
$string['addreport'] = 'Neue Abfrage hinzufügen';
$string['addreportcategory'] = 'Neue Kategorie für Berichte hinzufügen';
$string['anyonewhocanveiwthisreport'] = 'Alle, die diesen Bericht sehen dürfen (report/customsql:view)';
$string['archivedversions'] = 'Archivierte Versionen dieser Abfrage';
$string['at'] = 'um';
$string['automaticallydaily'] = 'Anstehend, täglich';
$string['automaticallymonthly'] = 'Anstehend, am ersten Tag jeden Monats';
$string['automaticallyweekly'] = 'Anstehend, am ersten Tag jeder Woche';
$string['availablereports'] = 'Ad-hoc Datenbankabfragen';
$string['availableto'] = 'Verfügbar für {$a}.';
$string['backtoreportlist'] = 'Zurück zur Liste der Abfragen';
$string['categorycontent'] = '({$a->manual} nach Bedarf, {$a->daily} täglich, {$a->weekly} wöchentlich, {$a->monthly} monatlich)';
$string['categoryexists'] = 'Kategorienamen müssen eindeutig sein, dieser Name existiert bereits';
$string['categorynamex'] = 'Kategoriename: {$a}';
$string['changetheparameters'] = 'Die Parameter ändern';
$string['crontask'] = 'Ad-hoc Datenbankabfragen: Anstehende Abfragen ausführen';
$string['customdir'] = 'CSV in Pfad / Verzeichnis exportieren';
$string['customdir_help'] = 'Dateien werden im CSV-Format in den angegebenen Dateipfad exportiert. Wenn ein Verzeichnis angegeben ist, wird das Dateinamenformat reportid-timecreated.csv sein.';
$string['customdirmustexist'] = 'Das Verzeichnis "{$a}" existiert nicht.';
$string['customdirnotadirectory'] = 'Der Pfad "{$a}" ist kein Verzeichnis.';
$string['customdirnotwritable'] = 'Das Verzeichnis "{$a}" ist nicht schreibbar.';
$string['customsql:definequeries'] = 'Eigene Abfragen definieren';
$string['customsql:managecategories'] = 'Eigene Kategorien definieren';
$string['customsql:view'] = 'Ad-hoc Abfragen-Berichte ansehen';
$string['dailyheader'] = 'Täglich';
$string['dailyheader_help'] = 'Diese Abfragen werden jeden Tag zum angegebenen Zeitpunkt automatisch ausgeführt. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['defaultcategory'] = 'Verschiedenes';
$string['delete'] = 'Löschen';
$string['deleteareyousure'] = 'Möchten Sie diese Abfrage wirklich löschen?';
$string['deletecategoryareyousure'] = '<p>Möchten Sie diese Kategorie wirklich löschen?</p><p>Sie darf keine Abfragen beinhalten.</p>';
$string['deletecategoryyesno'] = '<p>Möchten Sie diese Kategorie wirklich löschen?</p>';
$string['deletethiscategory'] = 'Diese Kategorie löschen';
$string['deletethisreport'] = 'Diese Abfrage löschen';
$string['description'] = 'Beschreibung';
$string['displayname'] = 'Abfragename';
$string['displaynamerequired'] = 'Sie müssen einen Abfragenamen eingeben';
$string['displaynamex'] = 'Abfragename: {$a}';
$string['downloadthisreportascsv'] = 'Diese Resultate als CSV herunterladen';
$string['edit'] = 'hinzufügen/bearbeiten';
$string['editcategory'] = 'Kategorie aktualisieren';
$string['editingareport'] = 'Eine Ad-hoc Datenbankabfrage bearbeiten';
$string['editthiscategory'] = 'Diese Kategorie bearbeiten';
$string['editthisreport'] = 'Diese Abfrage bearbeiten';
$string['emailbody'] = 'Sehr geehrte/r {$a}';
$string['emailink'] = 'Um auf den Bericht zuzugreifen, klicken Sie auf diesen Link: {$a}';
$string['emailnumberofrows'] = 'Nur die Anzahl der Zeilen und der Link';
$string['emailresults'] = 'Ergebnisse in den E-Mail-Body übernehmen';
$string['emailrow'] = 'Der Bericht hat {$a} Zeile zurückgegeben.';
$string['emailrows'] = 'Der Bericht hat {$a} Zeilen zurückgegeben.';
$string['emailsent'] = 'Eine E-Mail-Benachrichtigung wurde an {$a} gesendet.';
$string['emailsentfailed'] = 'E-Mail kann nicht an {$a} gesendet werden';
$string['emailsubject'] = 'Abfrage {$a}';
$string['emailto'] = 'Automatisch E-Mail senden an';
$string['emailwhat'] = 'Was senden';
$string['enterparameters'] = 'Geben Sie Parameter für die Ad-hoc-Datenbankabfrage ein.';
$string['errordeletingcategory'] = '<p>Fehler beim Löschen einer Abfragekategorie.</p><p>Sie muss leer sein, um sie zu löschen.</p>';
$string['errordeletingreport'] = 'Fehler beim Löschen einer Abfrage.';
$string['errorinsertingreport'] = 'Fehler beim Einfügen einer Abfrage.';
$string['errorupdatingreport'] = 'Fehler beim Aktualisieren einer Abfrage.';
$string['invalidreportid'] = 'Ungültige Abfrage-ID {$a}.';
$string['lastexecuted'] = 'Diese Abfrage wurde zuletzt am {$a->lastrun} ausgeführt. Sie benötigte {$a->lastexecutiontime} s.';
$string['managecategories'] = 'Berichtkategorien bearbeiten';
$string['manual'] = 'Nach Bedarf';
$string['manualheader'] = 'Nach Bedarf';
$string['manualheader_help'] = 'Diese Abfragen werden nach Bedarf ausgeführt, wenn Sie den Link anklicken, um die Resultate zu sehen.';
$string['messageprovider:notification'] = 'Ad-hoc Datenbankabfragen Benachrichtigungen und Warnungen';
$string['monthlyheader'] = 'Monatlich';
$string['monthlyheader_help'] = 'Diese Abfragen werden automatisch am ersten Tag jedes Monats ausgeführt, um über den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['monthlynote_help'] = 'Diese Abfragen werden automatisch am ersten Tag jedes Monats ausgeführt, um über den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['morethanonerowreturned'] = 'Mehr als eine Zeile wurde zurückgegeben. Diese Abfrage sollte eine Zeile zurückgeben.';
$string['nodatareturned'] = 'Diese Abfrage hat keine Daten zurückgegeben.';
$string['noexplicitprefix'] = 'Bitte fügen Sie den Tabellennamen-Präfix <tt>{$a}</ tt> nicht in das SQL ein. Stattdessen setzen Sie den Tabellennamen ohne Präfix in <tt>{}</ tt>-Zeichen.';
$string['noreportsavailable'] = 'Keine Abfragen verfügbar';
$string['norowsreturned'] = 'Keine Zeile wurde zurückgegeben. Diese Abfrage sollte eine Zeile zurückgeben.';
$string['noscheduleifplaceholders'] = 'Abfragen, die Platzhalter verwenden können nur nach Bedarf ausgeführt werden.';
$string['nosemicolon'] = 'Es ist kein ; Zeichen in der SQL-Abfrage erlaubt.';
$string['notallowedwords'] = 'Die Wörter <tt>{$a}</tt> sind in der SQL-Abfrage nicht erlaubt.';
$string['note'] = 'Notizen';
$string['notrunyet'] = 'Diese Abfrage wurde noch nie ausgeführt.';
$string['onerow'] = 'Die Abfrage gibt eine Zeile zurück, und sammelt die Ergebnisse jeweils in einer Zeile';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Ad-hoc Datenbankabfragen';
$string['query_deleted'] = 'Abfrage gelöscht';
$string['query_edited'] = 'Abfrage bearbeitet';
$string['queryfailed'] = 'Fehler beim Ausführen der Abfrage: {$a}';
$string['querylimit'] = 'Obergrenze Ausgabezeilen';
$string['querylimitrange'] = 'Die Nummer muss zwischen 1 und {$a} sein';
$string['querynote'] = '<ul>
<li>Das Token <tt>%%WWWROOT%%</tt> in den Ergebnissen wird durch <tt>{$ a}</tt></li> ersetzt.
<li>Jeder Wert in der Ausgabe, der wie eine URL aussieht, wird automatisch zu einem Link gemacht.</li>
<li>Wenn ein Spaltenname in den Ergebnissen mit den Zeichen <tt>date</tt> endet und die Spalte ganzzahlige Werte enthält, werden sie als Unix-Zeitstempel behandelt und automatisch in für Menschen lesbare Daten konvertiert.</li>
<li>Das Token <tt>%%USERID%%</tt> in der Abfrage wird durch die Benutzer-ID des Benutzers ersetzt, der den Bericht anzeigt, bevor der Bericht ausgeführt wird.</li>
<li>Bei geplanten Reports werden die Token <tt>%%STARTTIME%%</tt> und <tt>%%ENDTIME%%</tt> in der Abfrage durch den Unix-Timestamp zu Anfang und Ende der/s Berichtswoche/-monats ersetzt, bevor der Bericht ausgeführt wird. </li>
<li>Sie können Parameter mithilfe von benannten Platzhaltern in SQL einfügen, zum Beispiel <tt>:parameter_name</tt>. Wenn der Bericht ausgeführt wird, kann der Benutzer dann Werte für die Parameter eingeben, die beim Ausführen der Abfrage verwendet werden sollen.</li>
<li>Wenn <tt>:parameter_name</tt> mit den Zeichen <tt>date</tt> beginnt oder endet, wird ein Datum-Zeit-Selektor verwendet, um diesen Wert einzugeben, andernfalls wird eine einfache Textbox verwendet verwendet.</li>
<li> Sie können die Zeichen <tt>:</tt>, <tt>;</tt> oder <tt>?</tt> in Strings in Ihrer Abfrage nicht verwenden. Wenn Sie sie benötigen, können Sie die Token <tt>%%C%%</tt>, <tt>%%S%%</tt> und <tt>%%Q%%</tt> verwenden. </li>
</ul>';
$string['queryparameters'] = 'Abfrageparameter';
$string['queryparams'] = 'Geben Sie die Standardwerte für die Abfrageparameter ein.';
$string['queryparamschanged'] = 'Die Platzhalter in der Abfrage haben sich geändert';
$string['queryrundate'] = 'Abfrage Ausführdatum';
$string['querysql'] = 'Abfrage-SQL';
$string['querysqlrequried'] = 'Sie müssen etwas SQL eingeben';
$string['query_viewed'] = 'Abfrage angesehen.';
$string['recordlimitreached'] = 'Diese Abfrage erreichte die Grenze von {$a} Zeilen. Einige Zeilen können am Ende weggelassen worden sein.';
$string['reportfor'] = 'Abfrage am {$a} ausgeführt';
$string['requireint'] = 'Integer erforderlich';
$string['runable'] = 'Ausführen';
$string['runablex'] = 'Ausführen: {$a}';
$string['schedulednote'] = 'Diese Abfragen werden automatisch am ersten Tag jeder Woche oder jedes Monats ausgeführt, um über die vorherige Woche oder den vorherigen Monat zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['scheduledqueries'] = 'Anstehende Abfragen';
$string['selectcategory'] = 'Kategorie für diesen Bericht wählen';
$string['typeofresult'] = 'Art des Resultats';
$string['unknowndownloadfile'] = 'Unbekannte Download-Datei.';
$string['userhasnothiscapability'] = 'Nutzer/in \'{$a->username}\' hat keine \'{$a->capability}\' Fähigkeit. Bitte löschen Sie diesen Benutzer aus der Liste oder ändern Sie die Auswahl in \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Ungültige Eingabe, eine kommagetrennte Liste von Anmeldenamen ist erforderlich';
$string['usernotfound'] = 'Es existiert kein/e Nutzer/in mit dem Anmeldename \'{$a}\'.';
$string['userswhocanconfig'] = 'Nur Administratoren (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Benutzer, die Berichte sehen dürfen (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'Überprüfen Sie die SQL-Anfrage und aktualisieren Sie das Formular';
$string['weeklyheader'] = 'Wöchentlich';
$string['weeklyheader_help'] = 'Diese Abfragen werden automatisch am ersten Tag jeder Woche ausgeführt, um über die vorherige Woche zu berichten. Mit diesen Links können Sie die bereits gesammelten Ergebnisse anzeigen.';
$string['whocanaccess'] = 'Wer auf diese Abfrage zugreifen darf';
