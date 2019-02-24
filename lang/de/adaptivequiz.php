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
 * Strings for component 'adaptivequiz', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   adaptivequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Bericht der Versuche';
$string['adaptivequiz:addinstance'] = 'Einen neuen adaptiven Test hinzufügen';
$string['adaptivequiz:attempt'] = 'Adaptiven Test starten';
$string['adaptivequizname'] = 'Name';
$string['adaptivequizname_help'] = 'Namen des adaptiven Tests eingeben';
$string['adaptivequiz:reviewattempts'] = 'Abgaben des adaptiven Tests ansehen';
$string['adaptivequiz:viewreport'] = 'Berichte des adaptiven Tests ansehen';
$string['all_attempts_deleted'] = 'Alle Versuche des adaptiven Tests wurden gelöscht';
$string['all_grades_removed'] = 'Alle Bewertungen des adaptiven Tests wurden entfernt';
$string['answer'] = 'Antwort';
$string['answerdistgraph_numrightwrong'] = 'Anz. falsch (-) / Anz. richtig (+)';
$string['answerdistgraph_questiondifficulty'] = 'Fragenschwierigkeit';
$string['answerdistgraph_title'] = 'Verteilung der Antworten für {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Antworten';
$string['attemptclosed'] = 'Der Versuch wurde manuell beendet.';
$string['attemptclosedstatus'] = 'Manuell geschlossen von {$a->current_user_name} (user-id: {$a->current_user_id}) am {$a->now}.';
$string['attemptdeleted'] = 'Am {$a->timecompleted} eingereichter Versuch von {$a->name} gelöscht';
$string['attemptfeedback'] = 'Feedback für den Versuch';
$string['attemptfeedback_help'] = 'Das Feedback für den Versuch wird dem Teilnehmer angezeigt, sobald er abgeschlossen wurde';
$string['attemptfinishedtimestamp'] = 'Versuch beendet';
$string['attemptfirst'] = 'Erster Versuch';
$string['attemptlast'] = 'Letzter Versuch';
$string['attemptquestion_abilitylogits'] = 'Gemessene Fähigkeit';
$string['attempt_questiondetails'] = 'Fragendetails';
$string['attemptquestion_difficulty'] = 'Fragenschwierigkeit (logits)';
$string['attemptquestion_diffsum'] = 'Summe der Schwierigkeiten';
$string['attemptquestion_error'] = 'Standardfehler (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Fragenschwierigkeit';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Richtig/Falsch';
$string['attemptquestion_stderr'] = 'Standardfehler (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'zulässige Versuche';
$string['attemptsallowed_help'] = 'Die Anzahl, wie oft ein Teilnehmer diese Aktivität versuchen kann';
$string['attemptstarttime'] = 'Startzeit des Versuchs';
$string['attemptstate'] = 'Bearbeitungsstand des Versuchs';
$string['attempt_state'] = 'Bearbeitungsstand des Versuchs';
$string['attemptstopcriteria'] = 'Grund für die Unterbrechung des Versuchs';
$string['attempt_summary'] = 'Zusammenfassung des Versuchs';
$string['attempttotaltime'] = 'Gesamtdauer (hh:mm:ss)';
$string['attempt_user'] = 'Teilnehmer';
$string['back_to_all_questions'] = '&laquo; Zurück zu allen Fragen';
$string['backtomainreport'] = 'Zurück zum Hauptbericht';
$string['backtoviewattemptreport'] = 'Zurück zum Versuchsbericht';
$string['backtoviewreport'] = 'Zurück zu den Hauptberichten';
$string['bestscore'] = 'Höchste Punktzahl';
$string['bestscorestderror'] = 'Standardfehler';
$string['browsersecurity'] = 'Browsersicherheit';
$string['calcerrorwithinlimits'] = 'Berechneter Standardfehler von {$a->calerror} befindet sich innerhalb der Grenzen, welche durch die Aktivität {$a->definederror} festgelegt wurden';
$string['closeattempt'] = 'Versuch beenden';
$string['confirmcloseattempt'] = 'Den Versuch von {$a->name} sicher beenden?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} Fragen wurden beantwortet und die bisherige Punktzahl beträgt {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Dieser Versuch wurde am {$a->started} begonnen und am {$a->modified} zuletzt aktualisiert.';
$string['confirmdeleteattempt'] = 'Bestätigung den am {$a->timecompleted} eingereichten Versuch von {$a->name} zu löschen';
$string['deleteattemp'] = 'Versuch löschen';
$string['downloadcsv'] = 'CSV herunterladen';
$string['enterrequiredpassword'] = 'Benötigtes Password eingeben';
$string['errorclosingattempt'] = 'Versuchsaufzeichnung wurde nicht gefunden';
$string['errorclosingattempt_alreadycomplete'] = 'Der Versuch ist bereits beendet und kann nicht mehr manuell geschlossen werden.';
$string['errordeletingattempt'] = 'Versuchsaufzeichnung wurde nicht gefunden';
$string['errorfetchingquest'] = 'Es konnte keine Frage mit Schwierigkeit {$a->level} abgerufen werden';
$string['formelementempty'] = 'Eine Zahl zwischen 1 und 999 eingeben';
$string['formelementnegative'] = 'Eine Zahl zwischen 1 und 999 eingeben';
$string['formelementnumeric'] = 'Einen numerischen Wert zwischen 1 und 999 eingeben';
$string['formlowlevelgreaterthan'] = 'Niedrigster Schwierigkeitsgrad muss unter dem höchsten liegen';
$string['formminquestgreaterthan'] = 'Die minimale Fragenanzahl muss unter der maximalen liegen';
$string['formquestionpool'] = 'Mindestens eine Fragenkategorie wählen';
$string['formstartleveloutofbounds'] = 'Das Startlevel muss eine Zahl sein, die zwischen niedrigstem und höchstem Schwierigkeitsgrad liegt';
$string['formstderror'] = 'Ein Prozentsatz von weniger 50 und größer gleich 0 muss eingegeben werden';
$string['functiondisabledbysecuremode'] = 'Diese Funktion is momentan nicht verfügbar.';
$string['gradehighest'] = 'Höchste Bewertung';
$string['grademethod'] = 'Bewertungsmethode';
$string['grademethod_help'] = 'Wenn mehrere Versuche erlaubt sind, sind die folgenden Methoden zur Berechnung der endgültigen Testbewertung verfügbar:

* Bester Versuch
* Erster Versuch (alle anderen Versuche werden ignoriert)
* Letzer Versuch (alle anderen Versuche werden ignoriert)';
$string['graphlegend_error'] = 'Standardfehler';
$string['highestlevel'] = 'Höchste Schwierigkeitsstufe';
$string['lowestlevel'] = 'Niedrigste Schwierigkeitsstufe';
$string['maximumquestions'] = 'Maximale Anzahl von Fragen';
$string['maximumquestions_help'] = 'Die minimale Anzahl von Fragen, die der Teilnehmer beantworten kann';
$string['minimumquestions'] = 'Minimale Anzahl von Fragen';
$string['minimumquestions_help'] = 'Die minimale Anzahl von Fragen, die der Teilnehmer beantworten muss';
$string['modulename'] = 'Adaptiver Test';
