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
 * Strings for component 'tutorialbooking', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   tutorialbooking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Teilnehmer/innen hinzufügen';
$string['adminblockinghelp'] = 'Auswählen, um Einschreibung ausgewählter Nutzer/innen zu verhindern';
$string['adminblockingprompt'] = 'Blockieren einschalten';
$string['adminiconhelp'] = 'Icons werden nicht angezeigt und Links erscheinen nur als Text, wenn abgeschaltet';
$string['adminiconprompt'] = 'Icons verwenden?';
$string['adminlockhelp'] = 'Erstellt alle Tutorien gesperrt als Standardauswahl';
$string['adminlockprompt'] = 'Sperrt alle Tutorien als Standardauswahl';
$string['adminnumbershelp'] = 'Standardanzahl der Teilnehmenden an Tutorien - kann bei der Konfigurierung von Tutorien bearbeitet werden';
$string['adminnumbersprompt'] = 'Anzahl der Teilnehmenden';
$string['adminservicehelp'] = 'Achtung: Wenn eingeschaltet werden E-Mails/Nachrichten an Einschreibende gesendet - wenn abgeschaltet, erhält nur der/die Hauptadministrator (id=2) Benachrichtigungen.';
$string['adminwaitinghelp'] = 'Einschalten, um Wartelisten für Zeitfenster zu erlauben.';
$string['adminwaitingprompt'] = 'Wartelistenfunktion einschalten';
$string['after'] = 'Nach {$a->session}';
$string['ajax_invalid_slots'] = 'Die Zeitfenster sind nicht in der richtigen Tutorienbuchungsaktivität';
$string['ajax_slots_not_exist'] = 'Die Zeitfenster existieren nicht';
$string['alreadysignedup'] = 'Sie haben sich schon für ein Tutorium angemeldet.';
$string['attendcoltitle'] = 'Anwesenheit';
$string['attendees'] = 'Derzeit eingeschrieben';
$string['availabletoadd'] = 'verfügbar';
$string['backtosession'] = 'Nachricht gesendet. Hier klicken, um zur Einschreibliste zurück zu gelangen.';
$string['blockedtotal'] = 'beinhaltet {$a} gesperrte Nutzer/innen';
$string['blockedusermessage'] = 'Sie sind von der Einschreibung für diese Veranstaltung ausgeschlossen worden - wenden Sie sich bitte an den Veranstalter, um Gründe zu erfahren.';
$string['blockuserprompt'] = 'Eingeschrieben - klicken, um Nutzer/in zu sperren';
$string['cancel'] = 'Abbrechen';
$string['completionsignedup'] = 'Teilnehmer/innen müssen sich für eine Tutoriengruppe einschreiben, damit die Aktivität als abgeschlossen markiert wird.';
$string['completionsignedupgroup'] = 'Einschreibung erfordern';
$string['confirm'] = 'Bestätigen';
$string['confirmmessage'] = 'Sind Sie sicher, dass Sie {$a->name} aus {$a->timeslot} entfernen wollen?';
$string['confirmremovefromslot'] = 'Möchten Sie wirklich Ihre Einschreibung aus der Tutorienbuchung entfernen?';
$string['confirmusersignupremoval'] = 'Entfernung der Einschreibung bestätigen';
$string['copysession'] = 'Zeitfenster kopieren';
$string['coursefullname'] = 'Vollständiger Kursname';
$string['cronfixduplicates'] = 'Doppelbuchungen korrigieren';
$string['defaultdescription'] = 'Zeitfenster {$a}';
$string['deletepageheader'] = 'Wirklich löschen?';
$string['deletesession'] = 'Löschen';
$string['deletetutorialprompt'] = 'Diese Einschreibliste löschen';
$string['deletewarningtext'] = 'Wollen Sie wirklich "{$a}" löschen?';
$string['editsession'] = 'Bearbeiten/Verschieben/Kopieren';
$string['editsessionheading'] = 'Vorhandenes Zeitfenster bearbeiten';
$string['editsessionhelp'] = 'Füllen Sie bitte das Formular unten aus, um dieses Zeitfenster zu bearbeiten.';
$string['editspaceserror'] = 'FEHLER: Sie können die Anzahl der Plätze ({$a->spaces}) nicht unter die Anzahl der Einschreibungen ({$a->signedup}) reduzieren.';
$string['edittutorialprompt'] = 'Diese Einschreibliste bearbeiten';
$string['emailgroupprompt'] = 'E-Mail an Gruppe';
$string['emailpagetitle'] = 'E-Mail an Gruppe';
$string['eventsessionadded'] = 'Termin hinzugefügt';
$string['eventsessiondeleted'] = 'Termin gelöscht';
$string['eventsessionmessage'] = 'Teilnehmer/innen des Termins benachrichtigt';
$string['eventsessionupdated'] = 'Termin aktualisiert';
$string['eventsignupadded'] = 'Einschreiben';
$string['eventsignupremoved'] = 'Einschreibung entfernt';
$string['eventsignupteacheradded'] = 'Einschreibung erzwungen';
$string['eventsignupteacherremoved'] = 'Einschreibung widerrufen';
$string['exportcsvlistallprompt'] = 'Alle Tutorieneinschreibungen im Kurs als CSV exportieren';
$string['exportcsvlistprompt'] = 'Export als CSV';
$string['exportlistprompt'] = 'Diese Einschreibliste exportieren';
$string['first'] = 'Erster';
$string['hidesession'] = 'Zeitfenster zeigen/verbergen';
$string['idnumber'] = 'ID-Nummer';
$string['indexnoid'] = 'Für alle Tutorien muss eine Kurs-ID festgelegt werden.';
$string['instancedesc'] = 'Anmerkungen Einschreibliste';
$string['instancedeschelp'] = 'Für Teilnehmer/innen bei der Einschreibung notwendige Informationen wie z.B. Dauer eines Termins';
$string['instanceheading'] = 'Allgemeine Einstellungen';
$string['instancenamehelp'] = 'z.B. Tutorium1 oder Computer Labor oder vierzehntägiges Tutorium';
$string['instancetitle'] = 'Titel der Einschreibliste';
$string['last'] = 'Letzter';
$string['linktomanagetext'] = 'Einschreiblisten verwalten';
$string['locked'] = 'Tutorium entsperren';
$string['lockederror'] = 'Tutorium ist gesperrt. Sie können sich nicht für diese Zeit eintragen.';
$string['lockedprompt'] = 'Gesperrt';
$string['lockhelp'] = 'Wenn gesperrt, sind Teilnehmer/innen nicht mehr in der Lage sich für Zeitfenster in diesem Tutorium ein- oder auszutragen.
Wenn Sie jetzt sperren, werden die Einschreiblisten im jetzigen Zustand eingefroren.';
$string['lockwarning'] = 'Dieses Tutorium ist von der/dem Veranstalter/in gesperrt. Sie können sich nicht eintragen oder abmelden.';
$string['messageprompt'] = 'Nachricht';
$string['messageprovider:notify'] = 'Tutorienbenachrichtigung';
$string['messagessent'] = 'Nachricht gesendet';
$string['messagewillbesent'] = 'Nachricht an Teilnehmer/in entfernt';
$string['moduleadminname'] = 'Tutorienbuchung';
$string['modulename'] = 'Tutorienbuchung';
$string['modulename_help'] = 'Die Aktivität Tutorienbuchung erlaubt Teilnehmer/innen sich für ein Zeitfenster einzutragen.

Trainer/innen können:

* Die Namen von Eingeschriebenen sichtbar oder unsichtbar für Teilnehmer/innen schalten.
* Übersichten von für Zeitfenster Eingeschriebenen drucken.
* CSV-Dateien von Einschreibungen erzeugen.
* Teilnehmer/innen von Hand für Zeitfenster eintragen und entfernen.
* Die Möglichkeit zur Einschreibung freigeben und sperren.
* Eine Nachricht an alle für ein Zeitfenster Eingeschriebenen senden.';
$string['modulenameplural'] = 'Tutorienbuchungen';
$string['movedownsession'] = 'Nach unten';
$string['moveslot'] = 'Dieses Zeitfenster anfassen zum ziehen.';
$string['moveupsession'] = 'Nach oben';
$string['newsessionheading'] = 'Neues Zeitfenster';
$string['newsessionhelp'] = 'Füllen Sie das Formular unten aus, um ein neues Zeitfenster in der Einschreibliste oben zu erzeugen.';
$string['newtimslotprompt'] = 'Ein Zeitfenster zur Einschreibliste hinzufügen';
$string['nosignup'] = 'Sie sind nicht in der Tutorienbuchung eingeschrieben';
$string['noslots'] = 'In dieser Tutorienbuchung existieren keine Zeitfenster.';
$string['notimeslotediting'] = 'Speichern Sie diese Seite und rufen Sie si neu auf, um Einschreiblisten zu erzeugen. Vergessen Sie nicht die Sichtbarkeit auf "unsichtbar" zu setzen, um eine Nutzung zu vermeiden, bevor das Tutorium vollständig eingerichtet ist.';
$string['numbersline'] = '{$a->total} Plätze gesamt ({$a->taken} belegt, {$a->left} frei)';
$string['numbersline_oversubscribed'] = '{$a->total} Plätze gesamt ({$a->taken} belegt, überbelegt um {$a->left})';
$string['option_spaces_high'] = 'Die Anzahl der Plätze muss kleiner als 65536 sein.';
$string['option_spaces_low'] = 'Die Anzahl der Plätze muss größer als 0 sein.';
$string['oversubscribed'] = 'Es sind {$a->freeslots} Plätze frei für {$a->timeslotname}. Sie haben versucht {$a->numbertoadd} Teilnehmer/innen hinzuzufügen.';
$string['pagecrumb'] = 'Zeitfenster';
$string['pagetitle'] = 'Tutorienbuchung';
$string['pluginadministration'] = 'Tutorienbuchung';
$string['pluginname'] = 'Tutorienbuchung';
$string['positionfirst'] = 'Nach oben auf Seite';
$string['positionlast'] = 'Nach unten auf Seite';
$string['positionprompt'] = 'Position';
$string['privacy'] = 'Privatsphäre';
$string['privacy_showall'] = 'Teilnehmer/innen können alle Einschreibungen sehen';
$string['privacy_showown'] = 'Teilnehmer/innen können nur ihre Einschreibungen sehen';
$string['realname'] = 'Name';
$string['reasonrequired'] = 'Sie müssen einen Grund für die Ausbuchung der Person angeben.';
$string['registerdateline'] = 'Bitte geben Sie das Datum des Tutoriums an (tt/mm/jj):';
$string['registerfooter'] = 'Unterzeichnen Sie neben Ihrem Namen, um die Anwesenheit zu bestätigen. Wenn Ihr Name nicht auf der Liste steht, dann fügen Sie ihn nicht hinzu, ohne vorher zu fragen.';
$string['registerprintdate'] = 'Teilnehmerliste drucken (nach Einschreibung)';
$string['registerprintname'] = 'Teilnehmerliste drucken (nach Name)';
$string['removalmessagesubject'] = 'Sie wurden aus  {$a->timeslot} ausgebucht';
$string['removalreason'] = 'Grund der Ausbuchung';
$string['remove'] = 'Ausbuchung bestätigen';
$string['removefromslot'] = 'Mich aus diesem Zeitfenster ausbuchen';
$string['removeuserfromslot'] = 'Aus diesem Zeitfenster ausbuchen';
$string['reset'] = 'Rückgängig';
$string['save'] = 'Speichern';
$string['saveasnew'] = 'Als neues Zeitfenster speichern';
$string['search:activity'] = 'Tutorienbuchung - Information zur Aktivität';
$string['search:session'] = 'Tutorienbuchung - Information zum Zeitfenster';
$string['sendmessage'] = 'Nachricht senden';
$string['sentby'] = 'Absender';
$string['senttime'] = 'gesendet an';
$string['sentto'] = 'Empfänger';
$string['sessiondescriptionhelp'] = 'Datum, Zeit und Ort z.B. 10:00 Uhr am Donnerstag, 16. August in Raum B35, Seminargebäude oder 10:00 Uhr am Donnerstag, 16. & 23. August und 6. September in Raum B35, Seminargebäude';
$string['sessiondescriptionhelp2'] = 'Vergessen Sie den Namen des Gebäudes nicht!<br/>
Vergewissern Sie sich, dass Sie den Raum reserviert haben!';
$string['sessiondescriptionprompt'] = 'Titel';
$string['sessionerror'] = '{$a}';
$string['sessionfull'] = 'Keine Plätze mehr frei! Wählen Sie einen anderen Termin.';
$string['sessionpagetitle'] = 'Management Zeitfenster';
$string['sessionsummaryprompt'] = 'Details';
$string['showallmessages'] = 'Alle Nachrichten anzeigen';
$string['showalltutorialbookings'] = 'Index Tutorienbuchung';
$string['showmymessages'] = 'Nur meine Nachrichten anzeigen';
$string['showsession'] = 'Verborgen - sichtbar machen';
