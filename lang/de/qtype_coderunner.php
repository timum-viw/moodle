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
 * Strings for component 'qtype_coderunner', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   qtype_coderunner
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aborted'] = 'Der Test wurde aufgrund von Fehlern abgebrochen.';
$string['ace-language'] = 'Ace-Sprache';
$string['addingcoderunner'] = 'Eine CodeRunner-Frage hinzufügen';
$string['advanced_customisation'] = 'Weitergehende Anpassung';
$string['ajax_error'] = '*** AJAX ERROR. DIES NICHT SPEICHERN! ***';
$string['allok'] = 'Alle Tests bestanden!';
$string['allornone'] = 'Testcode muss entweder für alle Testfälle oder für keinen bereitgestellt werden.';
$string['allornothing'] = 'Alles-oder-nichts-Bewertung';
$string['allornothing_help'] = 'Wenn die "Alles oder nichts-Bewertung" aktiviert ist, müssen alle Testfälle
für die Einreichung bestanden sein, um irgendeine Bewertung zu erreichen. Andernfalls wird die Bewertung durch Summieren der Bewertung für alle Testfälle, die bestehen, und dies als einen Bruchteil der maximal möglichen Punkte ausgedrückt.

Die pro-Testfall-Bewertung kann nur angegeben werden, wenn die Alles-oder-nichts-Bewertung-Checkbox deaktiviert ist.

Wenn Sie einen Template-Grader verwenden, der Teilmarkierungen für Testfälle vergibt, sollte "Alles oder nichts-Bewertung" generell deaktiviert sein.';
$string['allowmultiplestdins'] = 'Mehrere stdins erlauben';
$string['answer'] = 'Antwort';
$string['answerbox_group'] = 'Antwortfeld';
$string['answerbox_group_help'] = 'Legen Sie die Anzahl der Zeilen für das Antwortfeld fest. Die Breite wird dem Fenster angepasst. Wenn die Antwort das Feld vertikal oder horizontal überläuft, werden Bildlaufleisten angezeigt.';
$string['answerboxlines'] = 'Zeilen';
$string['answer_help'] = 'Eine Beispielantwort kann hier eingegeben und zur Überprüfung durch den Fragesteller verwendet und optional den Studierenden während der Überprüfung gezeigt werden. Sie wird auch vom Bulk-Tester-Skript verwendet. Die Korrektheit einer nicht leeren Antwort wird beim Speichern überprüft, es sei denn, \'Beim Speichern prüfen\' ist deaktiviert.';
$string['answerpreload'] = 'Vorbelegung des Antwortfelds';
$string['answerpreload_help'] = 'Der hier eingegebene Text wird im Antwortfeld vorgeladen.';
$string['answerprompt'] = 'Antwort:';
$string['answerrequired'] = 'Bitte geben Sie eine nicht leere Antwort ein';
$string['asolutionis'] = 'Lösung des Autors der Frage:';
$string['atleastonetest'] = 'Sie müssen mindestens einen Testfall für diese Frage bereitstellen.';
$string['badacelangstring'] = 'Falsche Ace-Sprachzeichenfolge';
$string['badcputime'] = 'Die CPU-Zeitbegrenzung muss leer bleiben oder eine ganze Zahl größer als Null sein';
$string['bad_dotdotdot'] = 'Falsche Verwendung von "...". Muss sich am Ende befinden, nach zwei ansteigenden numerischen Abzügen';
$string['bademptyprecheck'] = 'Die Vorabprüfung ist mit der folgenden unerwarteten Ausgabe fehlgeschlagen.';
$string['badmemlimit'] = 'Die Speicherbegrenzung muss leer bleiben oder eine ganze Zahl größer als Null sein';
$string['bad_new_prototype_name'] = 'Ungültiger Name für neuen Prototyp: bereits in Verwendung';
$string['badpenalties'] = 'Das Abzugssystem muss eine durch Komma getrennte Liste von Zahlen im Bereich [0, 100] sein';
$string['badquestion'] = 'Fehler in der Frage';
$string['badsandboxparams'] = 'Das Feld \'Andere\' (Sandbox-Parameter) muss entweder leer oder ein gültiger JSON-Datensatz sein';
$string['badtemplateparams'] = 'Vorlagenparameter müssen entweder leer oder ein gültiger JSON-Datensatz sein';
$string['brokencombinator'] = 'Erwartete {$a->numtests} Testergebnisse, erhielt {$a->numresults}. Vielleicht zu große Ausgabe oder Fehler in der Frage?';
$string['bulkquestiontester'] = 'Das <a href="{$a->link}">Bulk-Tester-Skript</a> testet, dass die Beispielantworten für alle Fragen im aktuellen Kontext richtig bewertet werden.';
$string['bulktestcontinuefromhere'] = 'Erneut ausführen, oder von hier an fortsetzen';
$string['bulktestindextitle'] = 'CodeRunner Bulk-Testing';
$string['bulktestrun'] = 'Alle Fragetests für alle Fragen im System ausführen (langsam, nur für Administratoren)';
$string['bulktesttitle'] = 'Alle Fragetests in {$a} ausführen';
$string['coderunner'] = 'Programmcode';
$string['coderunnercategories'] = 'Kategorien mit CodeRunner-Fragen';
$string['coderunnercontexts'] = 'Kontexte mit CodeRunner-Fragen';
$string['coderunner_help'] = 'Als Antwort auf eine Frage, die eine Spezifikation für ein Programmfragment, eine Funktion oder ein ganzes Programm ist, geben die Studierenden Quellcode in einer bestimmten Computersprache ein, die die Spezifikation erfüllt.';
$string['coderunner_install_testsuite_failures'] = 'Fehlgeschlagene Tests';
$string['coderunner_install_testsuite_intro'] = 'Auf dieser Seite können Sie testen, ob die CodeRunner-Fragen mit Beispielantworten richtig funktionieren.';
$string['coderunner_install_testsuite_noanswer'] = 'Fragen ohne Beispielantworten';
$string['coderunner_install_testsuite_title'] = 'Eine Testsuite für CodeRunner-Beispielantworten';
$string['coderunner_install_testsuite_title_desc'] = 'Das <a href="{$a->link}">Beispiel-Antwort-Testskript</a> überprüft, ob die Fragen mit Beispielantworten korrekt ausgeführt werden.';
$string['coderunner_question_type'] = 'CodeRunner Fragetyp:';
$string['coderunnersettings'] = 'CodeRunner Einstellungen';
$string['coderunnersummary'] = 'Antwort ist ein Programmcode, der im Kontext einer Anzahl Testfälle ausgeführt wird, um seine Korrektheit zu bestimmen.';
$string['coderunnertype'] = 'Fragetyp:';
$string['coderunnertype_help'] = 'Wählen Sie die Programmiersprache und den Fragetyp. Nachdem ein Typ ausgewählt wurde, werden Details im Detailfenster "Fragetyp" unten angezeigt.';
$string['columncontrols'] = 'Resultatetabelle';
$string['columncontrols_help'] = 'Die Checkboxen markieren, welche Spalten der Ergebnistabelle den Studierenden nach der Einreichung angezeigt werden sollen';
$string['confirm_proceed'] = 'Wenn Sie diese Frage mit nicht gewähltem "Anpassen" speichern, gehen alle vorgenommenen Anpassungen verloren. Möchten Sie fortfahren?';
$string['cputime'] = 'Zeitbegrenzung (s)';
$string['customisation'] = 'Anpassung';
$string['customisationcontrols'] = 'Anpassung';
$string['customise'] = 'Anpassen';
$string['datafiles'] = 'Laufzeit-Daten';
$string['datafiles_help'] = 'Alle hier hochgeladenen Dateien werden dem Arbeitsverzeichnis hinzugefügt, wenn das erweiterte Vorlagenprogramm ausgeführt wird. Dadurch können große Daten- oder Supportdateien bequem hinzugefügt werden.';
$string['default_penalty_regime'] = 'Standardmäßiges Abzugssystem';
$string['default_penalty_regime_desc'] = 'Das standardmäßige Abzugssystem für neue Fragen, bestehend aus einer kommagetrennten Liste von Prozentabzügen, die optional in ", ..." endet, um eine fortlaufende arithmetische Progression zu kennzeichnen.';
$string['display'] = 'Anzeige';
$string['downloadquizattempts'] = 'Testversuche herunterladen';
$string['downloadquizattemptshelp'] = 'Klicken Sie auf den entsprechenden Kurs und/oder Download-Button für den Kurs und den Test, den Sie herunterladen möchten. Zahlen in Klammern nach den Kursen sind die Anzahl der Tests im Kurs mit mindestens einet Einreichung. Die Zahlen in Klammern hinter dem Testnamen ist die Anzahl der Einreichungen.';
$string['editingcoderunner'] = 'Eine CodeRunner-Frage bearbeiten';
$string['empty_new_prototype_name'] = 'Der Name des neuen Fragetyps darf nicht leer sein';
$string['emptypenaltyregime'] = 'Abzugssystem muss definiert sein (seit Version 3.1)';
$string['enable'] = 'Aktivieren';
$string['enablecombinator'] = 'Kombinator aktivieren';
$string['enable_diff_check'] = 'Button "Unterschiede anzeigen" aktivieren';
$string['enable_diff_check_desc'] = 'Geben Sie Schülern eine Schaltfläche "Unterschiede anzeigen", wenn ihre Antwort falsch ist und ein Validierer für genaue Übereinstimmung verwendet wird (experimentell)';
$string['enable_sandbox_desc'] = 'Die Verwendung der angegebenen Sandbox für die Ausführung von Studierenden-Einreichungen erlauben';
$string['equalitygrader'] = 'Genaue Übereinstimmung';
$string['error_loading_prototype'] = 'Fehler beim Laden des Prototyps. Netzwerkprobleme oder Server down, vielleicht?';
$string['errorstring-accessdenied'] = 'Zugriff auf die Sandbox verweigert';
$string['errorstring-autherror'] = 'Nicht autorisiert, die Sandbox zu verwenden';
$string['errorstring-jobe400'] = 'Fehler vom Jobe Sandbox Server:';
$string['errorstring-ok'] = 'Ok';
$string['errorstring-overload'] = 'Job konnte wegen Serverüberlastung nicht ausgeführt werden. Vielleicht bald noch einmal versuchen?';
$string['errorstring-pastenotfound'] = 'Anforderung des Status eines nicht vorhandenen Jobs';
$string['errorstring-submissionfailed'] = 'Die Übermittlung an die Sandbox ist fehlgeschlagen';
$string['errorstring-submissionlimitexceeded'] = 'Begrenzung der Anzahl Sandbox-Einreichungen erreicht';
$string['errorstring-unknown'] = 'Unerwarteter Fehler beim Ausführen Ihres Codes. Der Sandbox-Server ist möglicherweise inaktiv oder überlastet. Vielleicht bald noch einmal versuchen?';
$string['errorstring-wronglangid'] = 'Nicht vorhandene Sprache angefordert';
$string['expected'] = 'Erwartete Ausgabe';
$string['expectedcolhdr'] = 'Erwartet';
$string['expected_help'] = 'Der erwartete Output des Tests. Von der Vorlage als {{TEST.expected}} erkannt.';
$string['exportthisquestion'] = 'Dieser Frage exportieren';
$string['exportthisquestion_help'] = 'Dies wird eine Moodle-XML-Exportdatei erstellen, die nur diese eine Frage enthält. Dies ist zum Beispiel nützlich, wenn Sie glauben, dass diese Frage einen Fehler in CodeRunner vor Augen führt, den Sie den Entwicklern melden möchten.';
$string['extra'] = 'Zusätzliche Vorlagedaten';
$string['extra_help'] = 'Ein manchmal nützliches zusätzliches Textfeld für die Vorlage, als {{TEST.extra}} erkannt.';
$string['fail'] = 'Fehlgeschlagen';
$string['failedhidden'] = 'Ihr Code hat einen oder mehrere verborgene Tests nicht bestanden.';
$string['failedntests'] = '{$a->numerrors} Test(s) fehlgeschlagen';
$string['failedtesting'] = 'Testen fehlgeschlagen';
$string['fails'] = 'Fehler';
$string['fileheader'] = 'Unterstützungsdateien';
$string['filloutoneanswer'] = 'Sie müssen Quellcode eingeben, der die Spezifikation erfüllt. Der von Ihnen eingegebene Code wird ausgeführt, um seine Korrektheit zu prüfen und entsprechend eine Bewertung zu vergeben.';
$string['firstfailure'] = 'Erster fehlgeschlagener Testfall: {$a}';
$string['forexample'] = 'Zum Beispiel';
$string['goodemptyprecheck'] = 'Bestanden';
$string['gotcolhdr'] = 'Erhalten';
$string['grading'] = 'Benotung';
$string['graphhelp'] = '- Doppelklicken Sie auf eine leere Stelle, um einen neuen Knoten/Status zu erstellen.
- Doppelklicken Sie auf einen vorhandenen Knoten, um ihn zu "markieren", beipielsweise als Akzeptorzustand für Zustandsautomaten (FSMs). Doppelklicken Sie erneut, um die Markierung aufzuheben.
- Klicken und ziehen Sie, um einen Knoten zu verschieben.
- Halten Sie die Umschalttaste gedrückt, während Sie innerhalb eines Knotens klicken und ziehen Sie sie zu einem anderen, um eine Verknüpfung zu erstellen.
- Klicken Sie bei gedrückter Umschalttaste auf eine leere Stelle und ziehen Sie den Mauszeiger auf einen Knoten, um einen Startlink zu erstellen (nur FSMs).
- Klicken und ziehen Sie einen Link, um seine Kurve zu ändern.
- Klicken Sie auf einen Link/Knoten, um seinen Text zu bearbeiten.
- Eingabe von _ gefolgt von einer Ziffer macht diese Ziffer zu einer tiefergestellten Ziffer.
- Durch die Eingabe von \\epsilon wird ein Epsilon-Zeichen (und ähnlich für \\alpha, \\beta usw.) erstellt.
- Klicken Sie auf einen Link/
Knoten und drücken Sie die Entf-Taste, um ihn zu entfernen.';
$string['hidden'] = 'Versteckt';
$string['HIDE'] = 'Verstecken';
$string['hidedifferences'] = 'Unterschiede ausblenden';
$string['HIDE_IF_FAIL'] = 'Verstecken falls fehlgeschlagen';
$string['HIDE_IF_SUCCEED'] = 'Verstecken falls bestanden';
$string['hiderestiffail'] = 'Rest ausblenden bei Fehler';
$string['howtogetmore'] = 'Für detailliertere Informationen speichern Sie die Frage ohne aktiviertes  "Beim Speichern prüfen" und testen Sie sie manuell';
$string['ideone_pass'] = 'Ideone Server Passwort';
$string['ideone_pass_desc'] = 'Das Passwort, dass beim Herstellen einer Verbindung zum veralteten Ideone-Server verwendet werden soll (wenn die Ideone-Sandbox aktiviert ist)';
$string['ideone_user'] = 'Ideone Server Benutzername';
$string['ideone_user_desc'] = 'Der Benutzername, der beim Herstellen einer Verbindung zum veralteten Ideone-Server verwendet werden soll (wenn die Ideone-Sandbox aktiviert ist)';
$string['illegalformat'] = 'Ungültiges Format ({$a->format}) in den Spaltenformaten';
$string['info_unavailable'] = 'Informationen zum Fragentyp sind für angepasste Fragen nicht verfügbar.';
$string['inputcolhdr'] = 'Eingabe';
$string['is_prototype'] = 'Als Prototyp verwenden';
$string['jobe_apikey'] = 'Jobe API-Schlüssel';
$string['jobe_apikey_desc'] = 'Der API-Schlüssel, der in allen REST-Anforderungen an den Jobe-Server enthalten sein muss (falls erforderlich). Max 40 Zeichen. Lassen Sie das Feld leer, um den API-Schlüssel aus Anfragen auszulassen';
$string['jobe_host'] = 'Jobe Server';
$string['jobe_host_desc'] = 'Der Host-Name des Jobe-Servers und die Port-Nummer, falls nicht Port 80, z.b jobe.somewhere.edu:4010. Die URL für die Jobe-Anfrage erhält man durch Voranstellen dieser Zeichenfolge mit http: // und Anhängen von /jobe/index.php/restapi/<REST_METHOD>.';
$string['language'] = 'Sandbox-Sprache';
$string['languages'] = 'Sprachen';
$string['languageselectlabel'] = 'Sprache';
$string['languages_help'] = 'Die Sandbox-Sprache ist die verwendete Computersprache
um die Einreichung auszuführen.
Es muss der gewählten Sandbox bekannt sein (sofern eine bestimmte Sandbox gewählt wurde) oder zumindestens einer der aktivierten Sandboxen (ansonsten).
Dies sollte normalerweise keine Änderung von dem Wert in
Elternvorlage erfordern; Modifikation auf eigene Gefahr.

Ace-Sprache ist die Sprache, die der Ace-Code-Editor (falls aktiviert) für die Antwort des Studierenden verwendet.
Standardmäßig entspricht dies der Sandbox-Sprache; geben Sie hier nur einen anderen Wert ein, wenn die Vorlagensprache von der Sprache abweicht in der man erwartet, dass der Studierende schreibt (z. B. wenn es sich um einen Python-Präprozessor handelt, der verwendet wird, um das C-Programm eines Studierenden zu validieren, bevor es ausgeführt wird).

Mehrsprachige Fragen sind Fragen, auf die die Studierenden in mehr als einer Sprache antworten können, sie werden aktiviert, indem die Ace-Sprache auf eine Komma-getrennte Liste der Sprachen gesetzt wird. Den Studierenden wird dann ein Dropdown-Menü zur Auswahl angeboten, um die Sprache, in der ihre Antwort geschrieben werden soll, auzuwählen. Wenn genau eine der Sprachen ein Sternchen (\'*\') vorangestellt hat, wird diese Sprache wird als Standardsprache gewählt, die die Ausgangseinstellung des Dropdown-Menüs ist. Ein Ace-Sprachwert von beispielsweise "C,C++,Java*,Python3" würde dem Studierenden erlauben, eine Antwort in C, C++, Java oder Python3 einzureichen, aber das Dropdown-Menü würde anfänglich Java als Standard zeigen. Wenn kein Standardwert angegeben ist, ist der Anfangszustand des Dropdown-Menüs leer und der Studierende muss eine Sprache auswählen.
Mehrsprachige Fragen erfordern eine spezielle Vorlage, die {{LANGUAGE}} verwendet, um die Vorlagenvariablen zu steuern, wie der Studierendencode ausgeführt wird, siehe das eingebaute Beispiel für den mehrsprachigen Fragentyp. Die Variable {{LANGUAGE}} ist <i>nur</ i> für mehrsprachige Fragen definiert.

Wenn der Autor eine Beispielantwort zu einer mehrsprachigen Frage liefern möchte, muss er es entweder in der Standardsprache schreiben, falls angegeben, oder ansonsten in der ersten der erlaubten Sprachen.';
$string['mark'] = 'Punkte';
$string['marking'] = 'Punktevergabe';
$string['markinggroup'] = 'Bewertung';
$string['markinggroup_help'] = 'Wenn die "Alles oder nichts-Bewertung" aktiviert ist, müssen alle Testfälle
für die Einreichung bestanden sein, um irgendeine Bewertung zu erreichen. Andernfalls wird die Bewertung durch Summieren der Bewertung für alle Testfälle, die bestehen, und dies als einen Bruchteil der maximal möglichen Punkte ausgedrückt.
Die pro-Testfall-Bewertung kann nur angegeben werden, wenn die Alles-oder-nichts-Bewertung-Checkbox deaktiviert ist. Wenn Sie einen Template-Grader verwenden, der Teilmarkierungen für Testfälle vergibt, sollte "Alles oder nichts-Bewertung" generell deaktiviert sein.

Das obligatorische Abzugssystem ist eine durch Komma getrennte Liste von Strafen (jeweils in Prozent) die auf sich aufeinanderfolgende Einreichungen anzuwenden sind. Diese sind absolut, nicht kumulativ. Als ein Sonderfall kann die letzte Strafe "..." lauten, was bedeutet: "verlängere die vorherige zwei Strafen als eine arithmetische Progression bis zu 100". Zum Beispiel, `0,5,10,30,...` entspricht `0,5,10,30,50,70,90,100`.
Wenn es mehr Einreichungen als definierte Abzüge gibt, wird der letzte Wert verwendet.

Das Standard-Abzugssystem kann durch einen Systemadministrator über  Website-Administration> Plugins> Fragetypen> CodeRunner für die gesamte Site festgelegt werden.

Setzen Sie das Abzugssystem auf 0, um bei allen Einreichungen keine Abzüge anzuwenden.';
$string['memorylimit'] = 'Speicherbegrenzung (MB)';
$string['missinganswers'] = 'fehlende Antworten';
$string['missingoutput'] = 'Die erwartete Ausgabe dieses Testfalls muss angegeben werden.';
$string['missingprototypes'] = 'Fehlende Prototypen';
$string['morehidden'] = 'Einige verborgene Testfälle sind ebenfalls fehlgeschlagen.';
$string['multipledefaults'] = 'Höchstens eine Sprache kann als Standard ausgewählt werden';
$string['nearequalitygrader'] = 'Ungefähre Übereinstimmung';
$string['negativeorzeromark'] = 'Punkte müssen größer als Null sein';
$string['noerrorsallowed'] = 'Ihr Code muss alle Tests bestehen, um eine Bewertung zu erhalten. Versuchen Sie es noch einmal.';
$string['nonnumericmark'] = 'Nichtnumerische Bewertung';
$string['noqtype'] = 'Kein Fragetyp ausgewählt';
$string['options'] = 'Optionen';
$string['ordering'] = 'Sortierung';
$string['overallresult'] = 'Gesamtergebnis';
$string['pass'] = 'Bestanden';
$string['passes'] = 'bestanden';
$string['penaltyregime'] = '(Abzugssystem: {$a} %)';
$string['penaltyregimelabel'] = 'Abzugssystem:';
$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'Eine CodeRunner-Frage hinzufügen';
$string['pluginnameediting'] = 'Eine CodeRunner-Frage bearbeiten';
$string['pluginname_help'] = 'Verwenden Sie das Feld "Fragetyp", um die Programmiersprache auszuwählen, die verwendet werden soll, um die Einreichung des Studierenden auszuführen.
Geben Sie das Problem an, für das der Schüler Code schreiben muss, und definieren Sie dann eine Reihe von Tests, die bei der Einreichung des Studenten durchgeführt werden';
$string['pluginnamesummary'] = 'CodeRunner: führt von Studierenden eingegebenen Code in einer Sandbox aus';
$string['precheck'] = 'Vorabprüfung';
$string['precheck_all'] = 'Alle';
$string['precheck_disabled'] = 'Deaktiviert';
$string['precheck_empty'] = 'Leer';
$string['precheck_examples'] = 'Beispiele';
$string['precheck_help'] = 'Wenn die Vorabprüfung aktiviert ist, haben die Studierenden einen zusätzlichen Button links neben dem üblichen Prüfknopf, um ihnen einen abzugfreien Durchlauf ihres Codes gegenüber zu eine Teilmenge der Frage-Testfälle zu ermöglichen.

Wenn \'Leer\' ausgewählt ist, wird ein einzelner Lauf mit der Testvorlage durchgeführt, die einen Testfall verwendet, in dem alle Felder (Testcode, stdin, erwartet, usw.) leere Zeichenfolgen sind. Eine nicht leere Ausgabe
wird als Vorabprüfungsfehler angesehen. Verwenden Sie dies mit Vorsicht: Einige Fragetypen werden dies nicht korrekt behandeln, z. B. "schreiben Sie ein Programm"- Fragen, die eine Ausgabe erzeugen.

Wenn \'Beispiele\' ausgewählt ist, wird der Code gegen alle Tests getestet werden, für die \'Als Beispiel verwenden\' aktiviert wurde.

Wenn \'Ausgewählt\' ausgewählt ist, wird jedem Testfall ein zusätzliches Benutzeroberflächenelement hinzugefügt damit der Autor eine bestimmte Teilmenge der Tests auswählen kann.

Wenn "Alle" ausgewählt ist, werden alle Testfälle ausgeführt (obwohl ihr Verhalten möglicherweise von der normalen Prüfung abweichen kannn, wenn der Vorlagencode dies so vorschreibt).

Die Vorlage kann anhand des Twig-Parameter {{IS_PRECHECK}}, der während des Vorüberprüfungslaufs "1" ist, ansonsten "0", überprüfen, ob der Lauf ein Vorabprüfungslauf ist oder nicht.';
$string['precheckingemptyset'] = 'Beispiele am Vorabprüfen, aber keine vorhanden!';
$string['precheck_only'] = 'Nur Vorabprüfung';
$string['precheck_selected'] = 'Ausgewählt';
$string['proceed_at_own_risk'] = 'Bearbeiten eines vorausgelieferten Frageprototyps?! Fahren Sie auf eigene Verantwortung fort!';
$string['prototypecontrols'] = 'Prototyping';
$string['prototypecontrols_help'] = 'Wenn "Ist Prototyp" gewählt ist, wird diese Frage zum Prototyp für andere Fragen. Nach dem Speichern wird der angegebene Name des Fragetyps in der Dropdown-Liste der Fragetypen angezeigt. Neue Fragen basierend auf diesem Typ übernehmen dann standardmäßig alle Anpassungsattribute, die für diese Frage angegeben wurden. Nachfolgende Änderungen an dieser Frage wirken sich dann auf alle abgeleiteten Fragen aus, sofern sie nicht selbst angepasst werden, wodurch die Verbindung unterbrochen wird.

Die prototypische Vererbung ist nur einstufig. Wenn diese Frage als Prototyp gespeichert wird, verliert sie ihre Verbindung zum ursprünglichen Basistyp und wird zu einem neuen Basistyp. Seien Sie darauf hingewiesen, dass sie, wenn Sie abgeleitete Fragen exportieren,  sicherstellen müssen, dass diese Frage auch im Export enthalten ist, ansonsten wird die abgeleitete Frage verwaist, wenn sie in ein anderes System importiert wird. Sie sind auch dafür verantwortlich zu verfolgen, welche Fragen Sie als Prototypen verwenden. Es wird dringend empfohlen, die Frage in "PROTOTYPE_for_my_new_question_type" umzubenennen, um die spätere Wartung zu vereinfachen.';
$string['prototype_error'] = '*** FEHLER BEIM LADEN DES PROTOTYPS. DIES NICHT SPEICHERN! ***';
$string['prototype_load_failure'] = 'Fehler beim Laden des Prototyps:';
$string['prototypeQ'] = 'Ist Prototyp?';
$string['prototypeusage'] = 'CodeRunner Frageprototyp-Verwendung für Kurs {$a}';
$string['prototypeusageindex'] = 'Verfügbare Kurse';
$string['qtypehelp'] = 'Hilfe für den Fragetyp';
$string['questioncheckboxes'] = 'Anpassung';
$string['questioncheckboxes_help'] = 'Um den Fragetyp anzupassen, z.B. um die Fragevorlagen oder
Sandbox-Parameter zu bearbeiten, aktivieren Sie die "Anpassen"-Checkbox und lesen Sie die Hilfe zu den neu sichtbaren Formularelementen für
mehr Informationen.

Wenn die Checkbox "Vorlagen-Debugging" aktiviert ist, wird für jeden Testfall das generierte Programm in der Ausgabe angezeigt.';
$string['questionloaderror'] = 'Frage konnte nicht geladen werden';
$string['questionpreview'] = 'Fragevorschau';
$string['questiontype'] = 'Fragetyp';
$string['question_type_changed'] = 'Änderung des Fragetyps. Klicken Sie auf Ok, um die Anpassungsfelder neu zu laden oder Abbrechen, um Ihre angepassten Felder beizubehalten.';
$string['questiontypedetails'] = 'Fragetyp-Details';
$string['questiontype_help'] = 'Wählen Sie den spezifischen Fragetyp aus.

Die Auswahl wählt einen der eingebauten Typen aus, der eine bestimmte Sprache und manchmal eine Sandbox spezifiziert, in der das Programm ausgeführt wird.
Jeder Fragetyp hat eine Vorlage, die definiert, wie das ausführbare Programm aus den Testfalldaten und der Antwort des Studierenden erstellt wird.

Die Vorlage angezeigt und optional durch Auswählen der Checkbox "Anpassen" angepasst werden,

Wenn die Checkbox Template-Debugging ausgewählt ist, wird das generierte Programm für jeden Testfall in der Ausgabe angezeigt.';
$string['questiontype_required'] = 'Sie müssen einen Fragentyp auswählen';
$string['qWrongBehaviour'] = 'Verwenden Sie das adaptive Verhalten für alle CodeRunner-Fragen, oder es können massive Leistungseinbußen auftreten. Beispielsweise müssen alle Fragen auf einer Seite neu bewertet werden, wenn die Seite erneut angezeigt wird.';
$string['regexgrader'] = 'Regulärer Ausdruck';
$string['replacedollarscount'] = 'Diese Kategorie enthält {$a} CodeRunner-Fragen.';
$string['replaceexpectedwithgot'] = 'Klicken Sie auf den &lt;&lt;-Button, um die erwartete Ausgabe dieses Testfalls durch die tatsächliche Ausgabe zu ersetzen.';
$string['resultcolumns'] = 'Resultatespalten';
$string['resultcolumnsnotjson'] = 'Das Resultatespalten-Feld ist keine gültige JSON-Zeichenfolge';
$string['resultcolumnsnotlist'] = 'Das Feld Resultatespalten muss eine JSON-codierte Liste von Spaltenbezeichnern enthalten';
$string['resultcolumnspecbad'] = 'Ungültiger Spaltenbezeichner gefunden: Jeder muss eine Liste mit zwei oder mehr Zeichenfolgen sein';
$string['resultstring-abnormaltermination'] = 'Fehlerhafter Programmabbruch';
$string['resultstring-compilationerror'] = 'Kompilierungsfehler';
$string['resultstring-illegalsyscall'] = 'Illegaler Funktionsaufruf';
$string['resultstring-memorylimit'] = 'Speicherbegrenzung überschritten';
$string['resultstring-norun'] = 'Kein Programmdurchlauf';
$string['resultstring-outputlimit'] = 'Zu große Ausgabe';
$string['resultstring-runtimeerror'] = 'Laufzeitfehler';
$string['resultstring-sandboxoverload'] = 'Der Sandbox-Server ist überlastet. Vielleicht bald noch einmal versuchen?';
$string['resultstring-success'] = 'Ok';
$string['resultstring-timelimit'] = 'Zeitbegrenzung überschritten';
$string['run_failed'] = 'Tests konnten nicht ausgeführt werden';
$string['sandboxcontrols'] = 'Sandbox';
$string['sandboxcontrols_help'] = 'Wählen Sie aus, welche Sandbox zum Ausführen der Studierendeneinreichungen verwendet werden soll. DEFAULT verwendet die Sandbox mit der höchsten Priorität, die für die ausgewählte Sprache verfügbar ist. Da Jobe alle Sandbox-Typen mit Ausnahme der veralteten "ideonesandbox" ersetzt hat, wird der Wert "jobesandbox" für die normale Verwendung empfohlen und führt zu besseren Fehlermeldungen, als DEFAULT, wenn der Jobe-Server ausgefallen ist.

Sie können auch die maximale CPU-Zeit in Sekunden festlegen, die für jeden Testfalllauf zulässig ist, und den maximalen Speicher, den ein einzelner Testfalllauf verbrauchen kann (MB). Ein leerer Eintrag verwendet den Standardwert der Sandbox (normalerweise 5 Sekunden für das CPU-Zeitlimit und eine sprachabhängige Speichermenge), aber die Standardwerte sind möglicherweise nicht für ressourcenintensive Programme geeignet. Ein Wert von Null für den maximalen Speicher führt dazu, dass keine Begrenzung auferlegt wird. Die hier angegebene Speichermenge ist die Gesamtmenge, die für den Durchlauf benötigt wird, einschließlich aller Bibliotheken, Interpreter, VMs usw.

Der Parameter \'Parameters\' wird verwendet, um weitere Sandbox-spezifische Daten wie Compileroptionen und API-Schlüssel zu übergeben. Er sollte normalerweise leer gelassen werden, aber wenn er nicht leer ist, muss es ein gültiger JSON-Datensatz sein. Im Falle der Jobe-Sandbox umfassen die verfügbaren Attribute disklimit, streamsize, numprocs, compileargs, linkargs und interpreterargs. Zum Beispiel würde `{"compileargs":["-std=c89"]}` für eine C-Frage die C89-Konformität erzwingen und keine anderen C-Optionen würden verwendet werden. Details finden Sie in der Jobe-Dokumentation. Einige Sandboxen (z. B. die veraltete Ideone-Sandbox) ignorieren möglicherweise einige oder alle dieser Einstellungen stillschweigend.

Wenn die Sandbox auf "jobesandbox" eingestellt ist, wird der Jobe-Host, der zum Testen der Frage verwendet wird, normalerweise über die Administratoreinstellungen für das CodeRunner-Plugin festgelegt. Es ist jedoch möglich, einen anderen Jobserver auszuwählen, indem Sie einen Parameter \'jobeserver\' und optional \'jobeapikey\' definieren. Wenn beispielsweise das Feld \'Parameters\' auf `{"jobeserver": "myspecialjobe.com"} gesetzt ist, wird der Durchlauf stattdessen an den Server "myspecialjobe.com" gesendet. Warnung: Diese Funktion ist noch experimentell und kann sich in Zukunft ändern.';
$string['sandboxerror'] = 'Fehler der Sandbox [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Parameter';
$string['seethisquestioninthequestionbank'] = 'Diese Frage in der Fragesammlung anzeigen';
$string['SHOW'] = 'Anzeigen';
$string['showcolumns'] = 'Spalten anzeigen:';
$string['showcolumns_help'] = 'Wählen Sie, welche Spalten der Ergebnistabelle den Studierenden angezeigt werden sollen. Leere Spalten werden unabhängig davon ausgeblendet.
Die Standardeinstellungen sind für die meisten Anwendungen geeignet.';
$string['showdifferences'] = 'Unterschiede anzeigen';
$string['showsource'] = 'Vorlagen-Debugging';
$string['sourcecodeallruns'] = 'Debug: Quellcode aus allen Testdurchläufen';
$string['stdin'] = 'Standardeingabe';
$string['stdin_help'] = 'Die Standardeingabe für den Test, von der Vorlage als {{TEST.stdin}} erkannt.';
$string['student_answer'] = 'Antwort des Studierenden';
$string['supportscripts'] = 'Unterstützungsskripte';
$string['syntax_errors'] = 'Syntaxfehler';
$string['template'] = 'Vorlage';
$string['templatecontrols'] = 'Vorlagensteuerung';
$string['templateerror'] = 'VORLAGEFEHLER';
$string['templateparams'] = 'Vorlageparameter';
$string['templateparams_help'] = 'Im Vorlageparameter-Feld können Sie String-Parameter an die Vorlage einer Frage übergeben. Wenn es nicht leer ist, muss dies ein Datensatz im JSON-Format sein. Die Felder des Datensatzs können dann in der Vorlage verwendet werden, in der sie als QUESTION.parameters.<<param>> angezeigt werden. Zum Beispiel, wenn Vorlageparameter

        {"age": 23}

ist, würde der Wert 23 in die Vorlage eingefügt anstelle der Vorlagenvariable `{{QUESTION.parameters.age}}`.

Die Menge der Vorlagenparameter, die an die Vorlage übergeben werden, besteht aus beliebigen Vorlageparameter, die mit den Parametern, die in der Fragevorlage im Prototyp definiert sind, fusioniert werden. Frageparameter können somit Prototypparameter außer Kraft setzen, sie aber nicht löschen.';
$string['testcase'] = 'Testfall {$a}';
$string['testcasecontrols'] = 'Testeigenschaften';
$string['testcasecontrols_help'] = 'Wenn "Als Beispiel verwenden" aktiviert ist, wird dieser Test automatisch in den Resultatetabelle \'Zum Beispiel:\' der Frage aufgeführt.

Die Einstellung \'Anzeige\' bestimmt, wann dieser Testfall dem Studenten in der Resultatetabelle angezeigt wird.

Wenn "Rest ausblenden bei Fehler" aktiviert ist und dieser Test fehlschlägt, werden alle hinterher ausgeführten Tests
unabhängig von der Einstellung "Anzeige" vor den Studierenden verborgen.

\'Punkte\' setzt den Wert dieses Testfalls; nur sinnvoll, wenn dies nicht eine Alles-oder-nichts-Bewertung-Frage ist.

\'Sortierung\' kann verwendet werden, um die Reihenfolge der Testfälle zu ändern, wenn die Frage gespeichert wird: Testfälle werden nach diesem Feld sortiert.';
$string['testcases'] = 'Testfälle';
$string['testcode'] = 'Testcode';
$string['testcode_help'] = 'Der Code für den Test, von der Vorlage als {{TEST.testcode}} erkannt.';
$string['testcolhdr'] = 'Test';
$string['testingquestion'] = 'Testen der Frage {$a}';
$string['testtype'] = 'Vorabprüfung-Testtyp';
$string['testtype_both'] = 'Beide';
$string['testtype_help'] = 'Wenn die Vorabprüfung aktiviert und auf "ausgewählt" eingestellt ist, steuert diese Einstellung, ob der Test nur in einem normalen Prüfungsdurchlauf, nur in einem Vorabprüfungsdurchlauf oder in beiden Durchläufen verwendet wird.
Wenn die Vorabprüfung auf etwas anderes als "ausgewählt" eingestellt ist, wird diese Einstellung ignoriert.';
$string['testtype_normal'] = 'Nur Prüfung';
$string['testtype_precheck'] = 'Nur Vorabprüfung';
$string['tooshort'] = 'Die Antwort ist zu kurz um einen Sinn zu ergeben und wurde ohne Strafe ignoriert';
$string['type_header'] = 'CodeRunner-Fragetyp';
$string['typename'] = 'Fragetyp';
$string['typerequired'] = 'Bitte wählen Sie den Typ der Frage (Sprache, Format, etc.)';
$string['uicontrols'] = 'Input UIs';
$string['unauthorisedbulktest'] = 'Sie haben keinen verwendbaren Zugriff auf CodeRunner-Fragen';
$string['unauthoriseddbaccess'] = 'Sie sind nicht berechtigt, dieses Skript zu verwenden';
$string['unknownerror'] = 'Ein unerwarteter Fehler ist aufgetreten. Die Sandbox ist möglicherweise nicht verfügbar. Versuchen Sie es bald noch einmal.';
$string['useace'] = 'Vorlage verwendet Ace';
$string['useasexample'] = 'Als Beispiel verwenden';
$string['validateonsave'] = 'Beim Speichern prüfen';
$string['wrongnumberofformats'] = 'Falsche Anzahl der Testresultate-Spaltenformate. Erwartet {$a->expected}, erhalten {$a->got}';
$string['xmlcoderunnerformaterror'] = 'XML-Format-Fehler in der CodeRunner-Frage';
