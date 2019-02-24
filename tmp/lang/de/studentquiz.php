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
 * Strings for component 'studentquiz', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_comment'] = 'Neuen Kommentar speichern';
$string['approve'] = 'Bestätigen';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Bestätigt';
$string['approveselectedscheck'] = 'Sind Sie sicher, dass Sie die folgenden Fragen un-/bestätigen wollen?<br /><br />{$a}';
$string['approve_toggle'] = 'Un-/Bestätigen';
$string['average_column_name'] = 'Durchschnitt';
$string['comment_column_name'] = 'Kommentare';
$string['comment_help'] = 'Einen Kommentar schreiben';
$string['comment_help_help'] = 'Einen Kommentar zu dieser Frage schreiben';
$string['createnewquestion'] = 'Neue Frage erstellen';
$string['createnewquestionfirst'] = 'Erste Frage erstellen';
$string['creator_anonym_fullname'] = 'Anonyme/r Teilnehmer/in';
$string['defaultquestiontypessettingsheader'] = 'Standard-Fragetypen';
$string['difficulty_all_column_name'] = 'Community Schwierigkeit';
$string['difficulty_level_column_name'] = 'Schwierigkeit';
$string['difficulty_title'] = 'Schwierigkeitsgrad';
$string['emailapprovedbody'] = 'Hallo {$a->recepientname},
diese E-Mail informiert Sie, dass Ihre Frage \'{$a->questionname}\' im Kurs \'{$a->coursename}\' von \'{$a->actorname}\' um \'{$a->timestamp}\' bestätigt wurde.

Sie können die Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailapprovedsmall'] = 'Ihre Frage \'{$a->questionname}\' wurde von \'{$a->actorname}\' bestätigt.';
$string['emailapprovedsubject'] = 'Frage wurde bestätigt: {$a->questionname}';
$string['emailchangedbody'] = 'Hallo {$a->recepientname},

Ihre Frage \'{$a->questionsname}\' im Kurs \'{$a->coursename}\' in der StudentQuiz Aktivität \'{$a->modulename}\' wurde von \'{$a->actorname}\' um \'{$a->timestamp}\' angepasst.

Sie können die Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailchangedsmall'] = 'Ihre Frage \'{$a->questionname}\' wurde von {$a->actorname} angepasst.';
$string['emailchangedsubject'] = 'Frage angepasst: {$a->questionname}';
$string['emailcommentaddedbody'] = 'Hallo {$a->recepientname},

Ihre Frage \'{$a->questionname}\' in der StudentQuiz Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' wurde von \'{$a->actorname}\' um \'{$a->timestamp}\' kommentiert.

Der Kommentar war: \'{$a->commenttext}\'

Sie können die Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Ihre Frage \'{$a->questionname}\' wurde von {$a->username} kommentiert.';
$string['emailcommentaddedsubject'] = 'Frage kommentiert: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Hallo {$a->recepientname},

Der Kommentar um \'{$a->commentname}\' zu Ihrer Frage \'{$a->questionname}\' in der StudentQuiz Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' wurde um
\'{$a->timestamp}\' von \'{$a->actorname}\' gelöscht.

Der Kommentar war: \'{$a->commenttext}\'

Sie können die Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'Der Kommentar zu Ihrer Frage \'{$a->questionname}\' wurde von \'{$a->actorname}\' gelöscht.';
$string['emailcommentdeletedsubject'] = 'Kommentar zu einer Frage gelöscht: {$a->questionname}';
$string['emaildeletedbody'] = 'Hallo {$a->recepientname},

Ihre Frage \'{$a->questionname}\' in der StudentQuiz Aktivität \'{$a->modulename}\' im Kurs
\'{$a->coursename}\' wurde um \'{$a->timestamp}\' von \'{$a->actorname}\' gelöscht.';
$string['emaildeletedsmall'] = 'Ihre Frage \'{$a->questionname}\' wurde von {$a->actorname} gelöscht.';
$string['emaildeletedsubject'] = 'Frage gelöscht: {$a->questionname}';
$string['emailminecommentdeletedbody'] = 'Hallo {$a->recepientname},

Ihr Kommentar um \'{$a->commenttime}\' zur Frage \'{$a->questionname}\' in der StudentQuiz Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' wurde
um \'{$a->timestamp}\' von \'{$a->actorname}\' gelöscht.

Der Kommentar war: \'{$a->commenttext}\'

Sie können die Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Der Kommentar zu Ihrer Frage \'{$a->questionname}\' wurde gelöscht durch {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Ein Kommentar zu einer Frage wurde gelöscht: {$a->questionname}';
$string['emailunapprovedbody'] = 'Hallo {$a->studentname},

Diese E-Mail informiert Sie, dass die Bestätigung Ihre Frage \'{$a->questionname}\' in der StudentQuiz Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' von \'{$a->actorname}\' um \'{$a->timestamp}\' rückgängig gemacht wurde.

Sie können die Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailunapprovedsmall'] = 'Die Bestätigung Ihrer Frage \'{$a->questionname}\' wurde von einer Lehrperson rückgängig gemacht.';
$string['emailunapprovedsubject'] = 'Bestätigung der Frage wurde rückgängig gemacht: {$a->questionname}';
$string['filter'] = 'Filter';
$string['filter_ishigher'] = 'Ist höher';
$string['filter_islower'] = 'Ist tiefer';
$string['filter_label_approved'] = 'Bestätigte Fragen';
$string['filter_label_comment'] = 'Kommentare';
$string['filter_label_createdate'] = 'Erstellt';
$string['filter_label_difficulty_level'] = 'Schwierigkeiten';
$string['filter_label_fast_filters'] = 'Schnellfilter für Fragen';
$string['filter_label_firstname'] = 'Vorname';
$string['filter_label_myattempts'] = 'Meine Versuche';
$string['filter_label_mydifficulty'] = 'Meine Schwierigkeit';
$string['filter_label_mylastattempt'] = 'Mein letzter Versuch';
$string['filter_label_myrate'] = 'Meine Bewertung';
$string['filter_label_onlyapproved'] = 'Bestätigt';
$string['filter_label_onlyapproved_help'] = 'Von Ihrer Lehrperson bestätigte Fragen';
$string['filter_label_onlydifficult'] = 'Schwer für alle';
$string['filter_label_onlydifficultforme'] = 'Für mich schwer';
$string['filter_label_onlydifficultforme_help'] = 'Fragen mit meiner Schwierigkeit von mehr als {$a}%';
$string['filter_label_onlydifficult_help'] = 'Fragen mit einer durchschnittlichen Schwierigkeit von mehr als {$a}%';
$string['filter_label_onlygood'] = 'Gute';
$string['filter_label_onlygood_help'] = 'Fragen mit einer durchschnittlichen Bewertung von mindestens {$a} Sternen';
$string['filter_label_onlymine'] = 'Meine';
$string['filter_label_onlymine_help'] = 'Erstellte Fragen.';
$string['filter_label_onlynew'] = 'Unbeantwortete';
$string['filter_label_onlynew_help'] = 'Fragen, die sie noch nie beantwortet haben';
$string['filter_label_practice'] = 'Durchführungen';
$string['filter_label_question'] = 'Fragetitel';
$string['filter_label_questiontext'] = 'Frageinhalt';
$string['filter_label_rates'] = 'Bewertung';
$string['filter_label_show_mine'] = 'Meine Fragen';
$string['filter_label_surname'] = 'Nachname';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Fertig';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['latest_column_name'] = 'Letzter';
$string['messageprovider:approved'] = 'Mitteilung zur Fragenbestätigung';
$string['messageprovider:changed'] = 'Mitteilung Frage bearbeitet';
$string['messageprovider:commentadded'] = 'Mitteilung Kommentar hinzugefügt';
$string['messageprovider:commentdeleted'] = 'Mitteilung Kommentar gelöscht';
$string['messageprovider:deleted'] = 'Mitteilung Frage gelöscht';
$string['messageprovider:minecommentdeleted'] = 'Mein Kommentar wurde gelöscht';
$string['messageprovider:unapproved'] = 'Mitteilung zum rückgängig machen der Fragenbestätitgung';
$string['mine_column_name'] = 'Meine';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'Die StudentQuiz-Aktivität ermöglicht es Studenten Fragen zum Pool hinzuzufügen. In der StudentQuiz-Übersicht können die Teilnehmer Fragen filtern. Sie können die gefilterten Fragen anschliessend zum üben benutzen. Der Lehrer hat die Option die Spalte "erstellt von" zu anonymisieren.<br><br>Die StudentQuiz-Aktivität vergibt den Schülern Punkte um sie zu motivieren, Fragen hinzuzufügen und damit zu üben. Die Punkte werden in einer Rangliste aufgelistet.<br><br>Weitere Informationen finden Sie hier <a href="https://github.com/frankkoch/moodle-mod_studentquiz/blob/master/manuals/User-Manual.pdf">Benutzerhandbuch</a>.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['more'] = 'Mehr';
$string['myattempts_column_name'] = 'Meine Versuche';
$string['mydifficulty_column_name'] = 'Meine Schwierigkeit';
$string['mylastattempt_column_name'] = 'Mein letzter Versuch';
$string['myrate_column_name'] = 'Meine Bewertung';
$string['nav_export'] = 'Export';
$string['nav_import'] = 'Import';
$string['needtoallowatleastoneqtype'] = 'Sie müssen mindestens einen Fragetypen zulassen.';
$string['next_button'] = 'Weiter';
$string['no_comment'] = 'n.a.';
$string['no_comments'] = 'Keine Kommentare';
$string['no_difficulty_level'] = 'n.a.';
$string['no_myattempts'] = 'n.a.';
$string['no_mydifficulty'] = 'n.a.';
$string['no_mylastattempt'] = 'n.a.';
$string['no_myrate'] = 'n.a.';
$string['no_practice'] = 'keine Durchführungen';
$string['no_questions_add'] = 'Es gibt noch keine Fragen in diesem StudentQuiz. Fügen Sie die ersten Fragen hinzu.';
$string['no_questions_filter'] = 'Keine Frage erfüllte die Filterkriterien. Setzen Sie den Filter zurück um alle Fragen zu sehen.';
$string['no_questions_selected_message'] = 'Bitte mindestens eine Frage auswählen um einen Quiz zu starten.';
$string['no_rates'] = 'n.a.';
$string['no_tags'] = 'n.a.';
$string['not_approved'] = '✗';
$string['number_column_name'] = 'Zahl';
$string['pagesize'] = 'Seitengrösse:';
$string['please_enrole_message'] = 'Bitte schreiben Sie sich in diesen Kurs ein um Ihren persönlichen Fortschritt zu sehen.';
$string['pluginadministration'] = 'StudentQuiz Administration';
$string['pluginname'] = 'StudentQuiz';
$string['practice_column_name'] = 'Durchführungen';
$string['previous_button'] = 'Vorige';
$string['privacy:metadata:studentquiz_attempt'] = 'Umfasst einen Versuch eines Benutzers eine Auswahl von Fragen zu beantworten';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID der Kategorie';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID des Versuchs';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID des StudentQuiz';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID des Benutzers';
$string['privacy:metadata:studentquiz_comment'] = 'Kommentare zu Fragen speichern';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Kommentar zur Frage';
$string['privacy:metadata:studentquiz_comment:created'] = 'Erstellzeitpunkt';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID der Frage';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID des Benutzers';
$string['privacy:metadata:studentquiz_practice'] = 'Quiz-Durchführungen speichern';
$string['privacy:metadata:studentquiz_practice:quizcoursemodule'] = 'Quiz Kursmodul';
$string['privacy:metadata:studentquiz_practice:studentquizcoursemodule'] = 'StudentQuiz Kursmodul';
$string['privacy:metadata:studentquiz_practice:userid'] = 'ID des Benutzers';
$string['privacy:metadata:studentquiz_progress'] = 'Fortschrittsinformationen zu dieser Frage der Studierenden speichern';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Anzahl Versuche die Frage zu beantworten';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Anzahl korrekter Antworten';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: Die zuletzt gegebene Anwort war falsch oder nicht definiert. 1: Die zuletzt gegebene Antwort war korrekt';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID der Frage';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID des StudentQuiz';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID des Benutzers';
$string['privacy:metadata:studentquiz_rate'] = 'Bewertungen zu Fragen speichern';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID der Frage';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Bewertung der Frage';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID des Benutzers';
$string['progress_bar_caption'] = 'Ihr Fortschritt in dieser StudentQuiz Aktivität';
$string['questionsinuse'] = '(* Die Fragen mit einem Stern werden bereits in Quizzes verwendet.)';
$string['ranking_block_title'] = 'Rang';
$string['rankingsettingsdescription'] = 'Die hier gesetzten Werte bestimmen die Standardwerte, welche beim Erstellen eines neuen StudentQuiz vorgeschlagen werden.';
$string['rankingsettingsheader'] = 'Bewertungseinstellungen';
$string['rate_all_column_name'] = 'Community Bewertung';
$string['rate_column_name'] = 'Bewertung';
$string['rate_error'] = 'Bitte bewerten';
$string['rate_help'] = 'Bewerten Sie diese Frage';
$string['rate_help_help'] = 'Bewerten Sie diese Frage. \\n 1 Stern ist sehr schlecht und 5 Sterne sind sehr gut';
$string['rate_points'] = 'Punkte';
$string['rate_title'] = 'Bewertung';
$string['ratingbar_title'] = 'Bewertung';
$string['reportquiz_admin_title'] = 'Benutzer Statistik';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Community Durchschnitt des letzten richtigen Antworten';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Community Durchschnitt der letzten falschen Antworten';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Community Anteil korrekter Antworten';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Anzahl korrekter Antworten / Anzahl aller Antworten';
$string['reportquiz_stats_all_progress'] = 'Durchschnittlicher Community Fortschritt';
$string['reportquiz_stats_all_progress_help'] = 'Durchschnittlicher Community Fortschritt über alle Mitglieder';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Community Durchschnitt richtiger Antworten';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Community Durchschnitt falscher Antworten';
$string['reportquiz_stats_all_questions_answered'] = 'Community Durchschnitt aller Antworten';
$string['reportquiz_stats_all_questions_answered_help'] = 'Durchschnittliche Anzahl von allen Mitgliedern gegebenen Antworten';
$string['reportquiz_stats_all_questions_approved'] = 'Anzahl bestätigter Fragen';
$string['reportquiz_stats_all_questions_approved_help'] = 'Lehrpersonen können Fragen bestätigen um deren Korrektheit zu verifizieren. Dies ist die Zahl aller bestätigten Fragen in diesem StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Anzahl aller Fragen in diesem StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Anzahl aller von der Community erstellten Fragen';
$string['reportquiz_stats_all_rates_average'] = 'Durchschnittliche Bewertung aller Fragen';
$string['reportquiz_stats_all_rates_average_help'] = 'Die Bewertung jeder Frage ist der Durchschnitt aller Sterne, welche die Frage von der Community erhalten hat. Beispiel: Die Community erstellte 4 Fragen. Falls Frage A = 3 Sterne und Frage B = 4 Sterne, Frage C = 2 Sterne und Frage D = 5 Sterne  erhält, ist die durchschnittliche Bewertung über alle Fragen 3.5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Anzahl Ihrer zuletzt richtigen Antworten.';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Anzahl ihrer zuletzt falschen Antworten.';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Anteil richtiger Antworten.';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Anteil Ihrer richtigen Antworten an allen gegebenen Antworten.
Teilweise richtige Antworten werden als falsche Antworten gezählt.';
$string['reportquiz_stats_own_progress'] = 'Persönlicher Fortschritt';
$string['reportquiz_stats_own_progress_help'] = 'Anteil ihrer zuletzt richtigen Antworten an allen Fragen in diesem StudentQuiz. Teilweise richtige Antworten werden als falsche Antworten gezählt.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Anzahl Ihrer richtigen Antworten';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Anzahl Ihrer falschen Antworten';
$string['reportquiz_stats_own_questions_answered'] = 'Anzahl aller Ihrer Antworten';
$string['reportquiz_stats_own_questions_answered_help'] = 'Anzahl all der Antworten, die Sie in diesem StudentQuiz gegeben haben.';
$string['reportquiz_stats_own_questions_approved'] = 'Anzahl Ihrer bestätigten Fragen';
$string['reportquiz_stats_own_questions_approved_help'] = 'Lehrpersonen können Fragen bestätigen um deren Korrektheit zu verifizieren. Dies ist die Zahl Ihrer bestätigten Fragen innerhalb dieses StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Anzahl der Fragen, die Sie beigetragen haben.';
$string['reportquiz_stats_own_questions_created_help'] = 'Anzahl der Fragen, die Sie zu diesem StudentQuiz beigetragen haben.';
$string['reportquiz_stats_own_rates_average'] = 'Ihre durchschnittlich erhaltene Bewertung';
$string['reportquiz_stats_own_rates_average_help'] = 'Die Bewertung jeder Frage ist der Durchschnitt aller Sterne, welche diese von der Community erhalten hat. Beispiel: Sie haben die Fragen A und B erstellt. Wenn ihre Frage A nun 3 Sterne von der Community erhalten hat und B 4, ist Ihre erhaltene Durchschnittliche Bewertung 3.5.';
$string['reportquiz_stats_title'] = 'Statistiken';
$string['reportquiz_total_attempt'] = 'Anzahl der Quizdurchführungen';
$string['reportquiz_total_obtained_marks'] = 'Erhaltene Punkte';
$string['reportquiz_total_questions_answered'] = 'Total beantwortete Fragen';
$string['reportquiz_total_questions_right'] = 'Total richtig Beantwortet';
$string['reportquiz_total_questions_wrong'] = 'Falsch Beantwortet';
$string['reportquiz_total_users'] = 'Teilnehmerzahl';
$string['reportrank_table_column_approvedquestions'] = 'Punkte für bestätigte Fragen';
$string['reportrank_table_column_communitystatus'] = 'Community Statistik';
$string['reportrank_table_column_correctanswers'] = 'Richtige Antworten';
$string['reportrank_table_column_countquestions'] = 'Punkte für erstellte Fragen';
$string['reportrank_table_column_description'] = 'Beschreibung';
$string['reportrank_table_column_factor'] = 'Faktor';
$string['reportrank_table_column_fullname'] = 'Vollständiger Name';
$string['reportrank_table_column_incorrectanswers'] = 'Falsche Antworten';
$string['reportrank_table_column_lastcorrectanswers'] = 'Punkte für zuletzt richtige Antworten';
$string['reportrank_table_column_lastincorrectanswers'] = 'Punkte für zuletzt falsche Antworten';
$string['reportrank_table_column_points'] = 'Punkte';
$string['reportrank_table_column_progress'] = 'Persönlicher Fortschritt';
$string['reportrank_table_column_quantifier_name'] = 'Name';
$string['reportrank_table_column_rank'] = 'Rang';
$string['reportrank_table_column_summeanrates'] = 'Punkte für erhaltene Sterne';
$string['reportrank_table_column_total_points'] = 'Total Punkte';
$string['reportrank_table_column_value'] = 'Wert';
$string['reportrank_table_column_yourstatus'] = 'Persönliche Statistik';
$string['reportrank_table_quantifier_caption'] = 'Wie Ihre Punkte berechnet werden';
$string['reportrank_table_title'] = '- Rangliste';
$string['reportrank_table_title_for_manager'] = 'Rangliste';
$string['reportrank_title'] = 'Benutzerrangliste';
$string['review_button'] = 'Überarbeiten';
$string['settings_allowallqtypes'] = 'Alle Fragetypen erlauben';
$string['settings_allowedqtypes'] = 'Erlaubte Fragetypen';
$string['settings_allowedqtypes_help'] = 'Hier können Sie angeben, welche Fragetypen zugelassen sind.';
$string['settings_anonymous'] = 'Anonymisierung';
$string['settings_anonymous_help'] = 'Teilnehmer können die Namen anderer Teilnehmer nicht sehen.';
$string['settings_anonymous_label'] = 'Teilnehmer anonymisieren';
$string['settings_approvedquantifier'] = 'Faktor für bestätigte Fragen';
$string['settings_approvedquantifier_help'] = 'Punkte für bestätigte Fragen';
$string['settings_approvedquantifier_label'] = 'Punkte für jede bestätigte Frage';
$string['settings_lastcorrectanswerquantifier'] = 'Faktor für zuletzt richtige Antworten';
$string['settings_lastcorrectanswerquantifier_help'] = 'Punkte für jede zuletzt richtig beantwortete Frage';
$string['settings_lastcorrectanswerquantifier_label'] = 'Punkte für zuletzt richtige Antworten';
$string['settings_lastincorrectanswerquantifier'] = 'Faktor für zuletzt falsche Antworten';
$string['settings_lastincorrectanswerquantifier_help'] = 'Punkte für jede falsche oder teilweise falsche Antwort beim letzten Versuch';
$string['settings_lastincorrectanswerquantifier_label'] = 'Punkte für zuletzt falsche Antworten';
$string['settings_qtypes_default_new_activity'] = 'Folgendes ist Standart für eine neue Aktivität:';
$string['settings_questionquantifier'] = 'Faktor für erstellte Fragen';
$string['settings_questionquantifier_help'] = 'Punkte für jede erstellte Frage';
$string['settings_questionquantifier_label'] = 'Punkte für jede erstellte Frage';
$string['settings_quizpracticebehaviour'] = 'Bewerten und Kommentieren';
$string['settings_quizpracticebehaviour_help'] = 'Teilnehmern erlauben Fragen zu beantworten und zu kommentieren';
$string['settings_quizpracticebehaviour_label'] = 'Bewerten und Kommentieren';
$string['settings_ratequantifier'] = 'Bewertungsfaktor';
$string['settings_ratequantifier_help'] = 'Punkte für jeden erhaltenen Stern';
$string['settings_ratequantifier_label'] = 'Multiplikator für den Durchschnitt der per Frage erhaltenen Sterne';
$string['settings_removeqbehavior'] = 'Question Behaviour Plugin StudentQuiz entfernen';
$string['settings_removeqbehavior_help'] = 'Diese Information erscheint nur einmal während dem Update. Wir informieren Sie darüber, dass wir das Question Behaviour Plugin "StudentQuiz" auf diesem System detektiert haben. Dieses wird nicht mehr benötigt und so versuchen wir es automatisiert zu deinstallieren. Falls Sie diese Einstellung sehen, deinstallieren Sie das Question Behaviour StudentQuiz manuell <a href="{$a}">unter diesem Link.</a>.';
$string['settings_removeqbehavior_label'] = 'Question Behaviour Plugin StudentQuiz entfernen.';
$string['show_less'] = 'Weniger anzeigen';
$string['show_more'] = 'Mehr anzeigen';
$string['slot_of_slot'] = 'Frage {$a->slot} von {$a->slots} in diesem Set.';
$string['start_quiz_button'] = 'Quiz starten';
$string['statistic_block_approvals'] = 'Bestätigte Fragen';
$string['statistic_block_created'] = 'Erstellte Fragen';
$string['statistic_block_progress_available'] = 'Verfügbare Fragen';
$string['statistic_block_progress_last_attempt_correct'] = 'Letzter Versuch richtig';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Letzter Versuch falsch';
$string['statistic_block_progress_never'] = 'Unbeantwortete Fragen';
$string['statistic_block_title'] = 'Mein Fortschritt';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Neue Instanz hinzufügen';
$string['studentquiz:emailnotifyapproved'] = 'Mitteilung zur Fragenbestätigung';
$string['studentquiz:emailnotifychanged'] = 'Mitteilung: Frage angepasst.';
$string['studentquiz:emailnotifycommentadded'] = 'Mitteilung: Kommentar hinzugefügt.';
$string['studentquiz:emailnotifycommentdeleted'] = 'Mitteilung: Frage gelöscht';
$string['studentquiz:emailnotifydeleted'] = 'Mitteilung: Frage gelöscht';
$string['studentquiz:manage'] = 'Fragen im StudentQuiz moderieren';
$string['studentquizname'] = 'StudentQuiz Name';
$string['studentquizname_help'] = 'StudentQuiz Name';
$string['studentquiz:previewothers'] = 'Vorschau der Fragen von anderen im StudentQuiz ansehen.';
$string['studentquiz:submit'] = 'StudentQuiz absenden';
$string['studentquiz:unhideanonymous'] = 'Kann die Namen von anderen Teilnehmern sehen, auch wenn die Anonymisierung aktiviert ist.';
$string['studentquiz:view'] = 'StudentQuiz ansehen';
$string['tags'] = 'Tags';
$string['task_delete_quiz_after_migration'] = 'Lösche die Quiz instanzen nach der Daten Migration aus einem Import oder Plugin update.';
$string['unapprove'] = 'Unbestätigen';
