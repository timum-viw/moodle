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
 * Strings for component 'local_amos', language 'de', branch 'MOODLE_34_STABLE'
 *
 * @package   local_amos
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amos'] = 'AMOS - Werkzeug zur Moodle-Übersetzung';
$string['amos:changecontriblang'] = 'Sprache von bereitgestellten Texten ändern';
$string['amos:commit'] = 'Texte aus dem Arbeitsspeicher ins AMOS Repository übernehmen';
$string['amos:execute'] = 'Angegebenes AMOScript ausführen';
$string['amos:importfile'] = 'Übersetzung hochladen und im Arbeitsspeicher zeigen';
$string['amos:importstrings'] = 'Texte (zusammen mit den englischen Texten) in das AMOS Repository importieren';
$string['amos:manage'] = 'AMOS-Portal verwalten';
$string['amos:stage'] = 'Texte im Arbeitsspeicher übersetzen';
$string['amos:stash'] = 'Arbeitsspeicher als Ablage sichern';
$string['amos:usegoogle'] = 'Mit Google übersetzen';
$string['commitbutton'] = 'Übernehmen';
$string['commitkeepstaged'] = 'Im Arbeitsspeicher behalten';
$string['commitmessage'] = 'Mitteilung';
$string['commitmessageempty'] = 'Bitte tragen Sie eine Mitteilung ein';
$string['commitstage'] = 'Texte aus dem Arbeitsspeicher übernehmen';
$string['commitstage_help'] = 'Alle übersetzten Texte werden aus dem Arbeitsspeicher in das AMOS Repository übernommen. Nur die übertragbaren Übersetzungen (grün) werden gespeichert. Der Arbeitsspeicher wird anschließend geleert.';
$string['committableall'] = 'Alle Sprachen';
$string['committablenone'] = 'Keine Sprache zugewiesen - wenden Sie sich an den AMOS-Verwalter';
$string['componentsall'] = 'Alle';
$string['componentsenlarge'] = 'Vergrößern';
$string['componentsnone'] = 'Keine';
$string['componentsstandard'] = 'Standard';
$string['confirmaction'] = 'Möchten Sie diesen Vorgang wirklich ausführen?';
$string['contribaccept'] = 'Annehmen';
$string['contribactions'] = 'Bereitgestellte Übersetzungen';
$string['contribactions_help'] = 'Abhängig von Ihren Rechten und dem Arbeitsablauf haben Sie folgende Möglichkeiten:

* Verwenden - Kopieren Sie die eingesandte Übersetzung in Ihren Arbeitsspeicher, ohne etwas zu verändern
* Mir zuweisen - sich selbst als Prüfer/in eintragen, die eingesandte Übersetzung prüfen und ins Sprachpaket einbinden
* Abgeben - niemanden zur Prüfung zuweisen
* Prüfung beginnen - Weisen Sie den Beitrag sich selbst zu, setzen Sie den Status auf "In Bearbeitung" und kopieren Sie die eingereichten Übersetzung in den Arbeitsspeicher
* Annehmen - markieren Sie die Beitrag als angenommen
* Ablehnen - markieren den Beitrag als abgelehnt. Bitte schreiben Sie die Gründe in einem Kommentar.

Der Einsender wird per E-Mail informiert, wenn sich der Status seines Beitrags ändert.';
$string['contribapply'] = 'Verwenden';
$string['contribassignee'] = 'Prüfer/in';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Mir zuweisen';
$string['contribauthor'] = 'Autor/in';
$string['contribclosedno'] = 'Erledigte Vorschläge verbergen';
$string['contribclosedyes'] = 'Erledigte Vorschläge anzeigen';
$string['contribcomponents'] = 'Komponenten';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Keine eingereichten Vorschläge';
$string['contribincomingsome'] = 'Eingereichte Vorschläge ({$a})';
$string['contriblanguage'] = 'Sprache';
$string['contriblanguagebutton'] = 'Konvertieren';
$string['contriblanguagechange'] = 'Falsche Sprache der bereitgestellten Übersetzung korrigieren';
$string['contriblanguagechange_help'] = 'Wenn die bereitgestellte Übersetzung für das falsche Sprachpaket abgegeben wurde, wählen Sie die richtige Sprache im Menü aus und klicken Sie auf die Taste \'Konvertieren\'.';
$string['contriblanguagereport'] = 'Falsche Sprache der bereitgestellten Übersetzung mitteilen';
$string['contriblanguagereport_help'] = 'Wenn die bereitgestellte Übersetzung für das falsche Sprachpaket abgegeben wurde, kopieren Sie die URL in eine E-Mail an translation@moodle.org. Die bereitgestellte Übersetzung wird dann in das richtige Sprachpaket übertragen.';
$string['contriblanguagewrong'] = 'Falsche Sprache?';
$string['contribreject'] = 'Ablehnen';
$string['contribresign'] = 'Abgeben';
$string['contribstaged'] = 'Vorschlag im Arbeitsspeicher <a href="contrib.php?id={$a->id}">#{$a->id}</a> von {$a->author}';
$string['contribstagedinfo'] = 'Vorschlag im Arbeitsspeicher';
$string['contribstagedinfo_help'] = 'Die Texte im Arbeitsspeicher wurden von einem Mitglied aus der Community vorgeschlagen. Die Betreuer des Sprachpakets werden gebeten, die Übersetzung zu prüfen. Die Texte erhalten den Status \'angenommen\' (und werden ins Sprachpaket übernommen) oder \'abgelehnt\' (wenn sie aus bestimmten Gründen nicht annehmbar sind).';
$string['contribstartreview'] = 'Prüfung beginnen';
$string['contribstatus'] = 'Status';
$string['contribstatus0'] = 'Neu';
$string['contribstatus10'] = 'In Bearbeitung';
$string['contribstatus20'] = 'Abgelehnt';
$string['contribstatus30'] = 'Angenommen';
$string['contribstatus_help'] = 'Arbeitsphasen für eingereichte Übersetzungen:

* Neu - Vorschlag wurde eingereicht, wartet aber noch auf seine Überprüfung
* In Bearbeitung - Vorschlag wird von einem Betreuer des Sprachpakets bearbeitet
* Abgelehnt - Vorschlag wurde von einem Betreuer des Sprachpakets abgelehnt
* Angenommen - Vorschlag wurde ins Sprachpaket übernommen';
$string['contribstrings'] = 'Texte';
$string['contribstringseq'] = '{$a->orig} neu';
$string['contribstringsnone'] = '{$a->orig} (alle Texte sind übersetzt)';
$string['contribstringssome'] = '{$a->orig} (für {$a->same} Texte existiert eine neuere Übersetzung)';
$string['contribsubject'] = 'Betreff';
$string['contribsubmittednone'] = 'Keine eingereichten Vorschläge';
$string['contribsubmittedsome'] = 'Ihre Vorschläge ({$a})';
$string['contribtimemodified'] = 'Geändert';
$string['contribute'] = 'Mitmachen';
$string['contributenow'] = 'Jetzt mitmachen!';
$string['contributestats'] = 'Insgesamt wurden bisher <strong>{$a->count}</strong> Texte von Mitgliedern der Community übersetzt und in AMOS eingegeben.';
$string['contributethanks'] = 'Vielen Dank für die aktuellen Beiträge von: an {$a->listcontributors}';
$string['contributions'] = 'Vorschläge';
$string['creditsaddcontributor'] = 'Beteiligte Person hinzufügen';
$string['creditsaddmaintainer'] = 'Betreuer/in hinzufügen';
$string['creditscontact'] = 'Mitteilung senden';
$string['creditscontributors'] = 'Weitere beteiligte Personen';
$string['creditsdelcontributor'] = 'Beteiligte Person entfernen';
$string['creditsdelmaintainer'] = 'Betreuer/in entfernen';
$string['creditsmaintainedby'] = 'Betreut von';
$string['creditsnomaintainer'] = 'Aktuell ohne Betreuer/in. <a href="{$a->url}">Haben Sie Interesse?</a>';
$string['creditsthanks'] = 'Auf dieser Seite möchten wir uns bei allen bedanken, die an den Moodle-Übersetzungen mitgewirkt haben. Deren Arbeit hat die weltweite Verbreitung möglich gemacht.';
$string['creditstitlelong'] = 'Betreuer und weitere beteiligte Personen beim Sprachpaket';
$string['creditstitleshort'] = 'Mitwirkende';
$string['diff'] = 'Vergleichen';
$string['diffaction'] = 'Wenn ein Unterschied besteht';
$string['diffaction1'] = 'Beide Übersetzungen in ihren Zweigen anwenden';
$string['diffaction2'] = 'Neuere Übersetzung auf beide Zweige anwenden';
$string['diffmode'] = 'Suche';
$string['diffmode1'] = 'Englische Texte wurden geändert, aber nicht die Übersetzung';
$string['diffmode2'] = 'Englische Texte wurden nicht geändert, aber die Übersetzung';
$string['diffmode3'] = 'Entweder wurden englische Texte oder die Übersetzung geändert (aber nicht beides)';
$string['diffmode4'] = 'Sowohl englische Texte wie auch die Übersetzung wurden geändert';
$string['diffprogress'] = 'Ausgewählte Versionen werden verglichen';
$string['diffprogressdone'] = 'Gefundene Unterschiede: {$a}';
$string['diffstringmode'] = 'diff umschalten';
$string['diffstrings'] = 'Texte aus zwei Zweigen vergleichen';
$string['diffstrings_help'] = 'Alle Texte der beiden ausgewählten Zweige werden verglichen. Sollten Unterschiede vorhanden sein, werden beide Texte in den Arbeitsspeicher übernommen. Über die Option "Arbeitsspeicher bearbeiten" können Sie eventuell nötige Änderungen vornehmen.';
$string['diffversions'] = 'Versionen';
$string['err_exception'] = 'Fehler: {$a}';
$string['err_invalidlangcode'] = 'Ungültiger Sprachcode';
$string['err_parser'] = 'Parsingfehler: {$a}';
$string['filtercmp'] = 'Komponenten';
$string['filtercmp_desc'] = 'Texte für diese Komponenten zeigen';
$string['filtercmpnothingselected'] = 'Bitte wählen Sie eine Komponente';
$string['filterlng'] = 'Sprachen';
$string['filterlng_desc'] = 'Texte für diese Sprachen zeigen';
$string['filterlngnothingselected'] = 'Bitte wählen Sie eine Sprache';
$string['filtermis'] = 'Einschränkungen';
$string['filtermis_desc'] = 'Suche mit weiteren Angaben einschränken';
$string['filtermisfglo'] = 'Nur zurückgestellte Texte';
$string['filtermisfhas'] = 'Nur übersetzte Texte';
$string['filtermisfhlp'] = 'Nur Hilfetexte';
$string['filtermisfmis'] = 'Nur fehlende und geänderte Texte';
$string['filtermisfout'] = 'Nur geänderte Texte';
$string['filtermisfstg'] = 'Nur Texte im Arbeitsspeicher';
$string['filtermisfwog'] = 'Ohne zurückgestellte Texte';
$string['filtersid'] = 'Text-ID';
$string['filtersid_desc'] = 'Eindeutiges Schlüsselmerkmal';
$string['filtersidpartial'] = 'teilweise übereinstimmend';
$string['filtertxt'] = 'Textsuche';
$string['filtertxtcasesensitive'] = 'Groß-/Kleinschreibung';
$string['filtertxt_desc'] = 'Angegebener Textteil muss enthalten sein';
$string['filtertxtregex'] = 'regex';
$string['filterver'] = 'Versionen';
$string['filterver_desc'] = 'Texte für diese Versionen zeigen';
$string['filtervernothingselected'] = 'Bitte wählen Sie eine Version';
$string['found'] = 'Gefunden: {$a->found}     Fehlend: {$a->missing} ({$a->missingonpage})';
$string['foundinfo'] = 'Zahl der gefundenen Texte';
$string['foundinfo_help'] = 'Folgende Werte werden angezeigt: Gesamtzahl der Texte in der Übersetzungsdatei, Zahl der fehlenden Übersetzungen und Zahl der fehlenden Übersetzungen auf der aktuellen Seite';
$string['googletranslate'] = 'Google';
$string['gotofirst'] = 'Zur ersten Seite';
$string['gotoprevious'] = 'Zur vorigen Seite';
$string['greylisted'] = 'Zurückgestellte Texte';
$string['greylistedwarning'] = 'Zurückgestellter Text';
$string['importfile'] = 'Texte aus einer Datei importieren';
$string['importfile_help'] = 'Wenn Sie Ihre Texte offline übersetzen, laden Sie die Übersetzungen bitte über dieses Formular in den Arbeitsspeicher.

* Die Datei muss gültige Definitionen für Moodle-PHP-Texte enthalten. Im Verzeichnis \'/lang/en/\' der Moodle-Installation finden Sie passende Beispiele.
* Der Name der Datei muss genauso wie der Name der englischen Datei für die jeweilige Komponente lauten  (z.B. \'moodle.php\', \'assignment.php\' oder \'enrol_manual.php\').

Alle Texte aus der Datei werden in den Arbeitsspeicher geladen, u.z. für die gewählte Version und die gewählte Sprache.

Sie können mehrere PHP-Dateien auf einmal hochladen, wenn Sie sie als ZIP-Datei packen.';
$string['language'] = 'Sprache';
$string['languages'] = 'Sprachen';
$string['languagesall'] = 'Alle';
$string['languagesnone'] = 'Keine';
$string['log'] = 'Logdaten';
$string['logfilterbranch'] = 'Versionen';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Übergabemitteilung enthält';
$string['logfiltercommits'] = 'Übergabefilter';
$string['logfiltercommittedafter'] = 'Übergabe nach';
$string['logfiltercommittedbefore'] = 'Übergabe vor';
$string['logfiltercomponent'] = 'Komponenten';
$string['logfilterlang'] = 'Sprachen';
$string['logfiltershow'] = 'Gefilterte Übergaben und Texte zeigen';
$string['logfiltersource'] = 'Quelle';
$string['logfiltersourceamos'] = 'amos (Webbasierter Übersetzer)';
$string['logfiltersourceautomerge'] = 'automerge (Übersetzung aus anderem Zweig kopiert)';
$string['logfiltersourcebot'] = 'bot (Bulk-Verarbeitung per Script)';
$string['logfiltersourcecommitscript'] = 'commitscript (Übergabemitteilung mit AMOScript)';
$string['logfiltersourcefixdrift'] = 'fixdrift (korrigierter Git-Vorgang)';
$string['logfiltersourcegit'] = 'git (git-Server für Quelltexte und Pakete)';
$string['logfiltersourceimport'] = 'import (importierte Texte für nicht standardmäßiges Plugin)';
$string['logfiltersourcerevclean'] = 'revclean (nachträglicher Aufräumprozess)';
$string['logfilterstringid'] = 'Text-ID';
$string['logfilterstrings'] = 'Textfilter';
$string['logfilterusergrp'] = 'Übergabe durch';
$string['logfilterusergrpor'] = 'oder';
$string['maintainers'] = 'Maintainer';
$string['markuptodate'] = 'Die Übersetzung ist aktuell';
$string['markuptodate_help'] = 'AMOS hat einen Text als \'Geändert\' markiert, weil die englische Version des Textes nach der Übersetzung verändert wurde. Entscheiden Sie bitte, ob die Übersetzung weiter gelten soll, oder bearbeiten Sie den Text.';
$string['markuptodatelabel'] = 'Als aktuell markierten';
$string['merge'] = 'Zuführen';
$string['mergestrings'] = 'Texte aus anderem Zweig zuführen';
$string['messageprovider:checker'] = 'Ergebnisse der Sprachpaketprüfung';
$string['messageprovider:contribution'] = 'Bereitgestellte Übersetzungen';
$string['morefilteringoptions'] = 'Weitere Optionen';
$string['newlanguage'] = 'Neue Sprache';
$string['nodiffs'] = 'Keine Unterschiede gefunden';
$string['nofiletoimport'] = 'Keine Unterschiede gefunden';
$string['nologsfound'] = 'Keine Texte gefunden - bitte prüfen Sie die Filtereinstellung';
$string['nostringsfound'] = 'Keine Texte gefunden';
$string['nostringsfoundonpage'] = 'Keine Texte auf Seite {$a} gefunden';
$string['nostringtoimport'] = 'In der Datei wurde keine gültige Textzeile gefunden. Sind Sie sicher, dass Sie die richtige Datei gewählt haben und dass die Datei richtig formatiert ist?';
$string['nothingtomerge'] = 'Der Quellzweig enthält keine neuen Textzeilen, die im Zielzweig fehlen. Es gibt nichts hinzuzufügen.';
$string['nothingtostage'] = 'Bei der Ausführung konnte kein Text gefunden und in den Arbeitsspeicher geholt werden.';
$string['novalidzip'] = 'ZIP-Datei kann nicht entpackt werden';
$string['numofcommitsabovelimit'] = '{$a->found} zum Filter passende Übergaben gefunden, {$a->limit} werden gezeigt';
$string['numofcommitsunderlimit'] = '{$a->found} zum Filter passende Übergaben gefunden';
$string['numofmatchingstrings'] = '{$a->found} zum Filter passende Übergaben gefunden';
$string['outdatednotcommitted'] = 'Geänderter Text';
$string['outdatednotcommitted_help'] = 'AMOS hat einen Text als \'Geändert\' markiert, weil die englische Version des Textes nach der Übersetzung verändert wurde. Bitte prüfen Sie die Übersetzung.';
$string['outdatednotcommittedwarning'] = 'Geändert';
$string['ownstashactions'] = 'Ablageaktionen';
$string['ownstashes'] = 'Ihre Ablagen';
$string['ownstashes_help'] = 'Liste aller Ablagen';
$string['ownstashesnone'] = 'Keine eigenen Ablagen';
$string['permalink'] = 'Dauerlink';
$string['placeholder'] = 'Platzhalter';
$string['placeholder_help'] = 'Platzhalter sind spezielle Anweisungen innerhalb des Textes, wie z.B. \'{$a}\' oder \'{$a->something}\'. Sie werden bei der Ausgabe des Textes durch einen Wert ersetzt.

Es ist wichtig, die Platzhalter genauso zu kopieren, wie sie im Original vorkommen. Sie dürfen nicht übersetzt oder aus ihrer Schreibrichtung links-nach-rechts geändert werden.';
$string['placeholderwarning'] = 'Platzhalter';
$string['pluginclasscore'] = 'Core (Kernsystem)';
$string['pluginclassnonstandard'] = 'Plugins (nicht standardmäßig)';
$string['pluginclassstandard'] = 'Plugins (standardmäßig)';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = 'Übersetzung #{$a->id} von {$a->author}';
$string['presetcommitmessage2'] = 'Fehlende Textzeilen von {$a->source} nach {$a->target} hinzugefügt';
$string['presetcommitmessage3'] = 'Unterschiede zwischen {$a->versiona} und {$a->versionb} werden behoben';
$string['privileges'] = 'Ihre Berechtigungen';
$string['privilegesnone'] = 'Sie haben einen Lesezugriff für offene Informationen.';
$string['processing'] = 'Prozess läuft ...';
$string['propagate'] = 'Übersetzungen übertragen';
$string['propagatednone'] = 'Keine Übersetzung in andere Versionen übertragbar';
$string['propagatedsome'] = 'Übertragene Übersetzungen: {$a}';
$string['propagaterun'] = 'Übertragen';
$string['quicklinks'] = 'Links';
$string['quicklinks_amos'] = 'AMOS Übersetzer';
$string['quicklinks_forum'] = 'Übersetzungsforum';
$string['quicklinks_manual'] = 'Anleitung';
$string['quicklinks_newcomers'] = 'Hilfe für Neueinsteiger';
$string['requestactions'] = 'Aktion';
$string['savefilter'] = 'Filtereinstellungen sichern';
$string['script'] = 'AMOScript';
$string['scriptexecute'] = 'Ausführen und Ergebnis in den Arbeitsspeicher';
$string['script_help'] = 'AMOScript sind Operationen, die mit den Texten im Repository ausgeführt werden.';
$string['sourceversion'] = 'Quelle';
$string['stage'] = 'Arbeitsspeicher';
$string['stageactions'] = 'Aktionen im Arbeitsspeicher';
$string['stageedit'] = 'Arbeitsspeicher bearbeiten';
$string['stageprune'] = 'Nicht nutzbare entfernen';
$string['stagerebase'] = 'Sortieren';
$string['stagestringsnocommit'] = 'Texte im Arbeitsspeicher: {$a->staged}';
$string['stagestringsnone'] = 'Kein Text im Arbeitsspeicher';
$string['stagestringssome'] = 'Texte im Arbeitsspeicher: {$a->staged}, davon {$a->committable} nutzbar';
$string['stagesubmit'] = 'An Betreuer senden';
$string['stagetoolopen'] = 'Zum Arbeitsspeicher';
$string['stagetranslation'] = 'Übersetzung';
$string['stageunstageall'] = 'Alle entfernen';
$string['stashactions'] = 'Aktionen in den Ablagen';
$string['stashactions_help'] = 'Eine Ablage ist eine Momentaufnahme des aktuellen Arbeitsspeichers. Eine solche Ablage kann als Vorschlag an die Betreuer des Sprachpakets gesendet werden.';
$string['stashapply'] = 'Verwenden';
$string['stashautosave'] = 'Automatische Sicherung';
$string['stashcomponents'] = '<span>Komponenten:</span> {$a}';
$string['stashdrop'] = 'Löschen';
$string['stashes'] = 'Ablagen';
$string['stashlanguages'] = '<span>Sprachen:</span> {$a}';
$string['stashpop'] = 'Aufnehmen';
$string['stashpush'] = 'Arbeitsspeicher in Ablage sichern';
$string['stashstrings'] = '<span>Anzahl der Texte:</span> {$a}';
$string['stashsubmit'] = 'An Betreuer senden';
$string['stashsubmitdetails'] = 'Kurze Mitteilung';
$string['stashsubmitmessage'] = 'Nachricht';
$string['stashsubmitsubject'] = 'Betreff';
$string['stashtitle'] = 'Name der Ablage';
$string['stashtitledefault'] = 'Bearbeitung - {$a->time}';
$string['stringhistory'] = 'Verlauf';
$string['strings'] = 'Texte';
$string['submitting'] = 'Vorschlag einreichen';
$string['targetversion'] = 'Ziel';
$string['timeline'] = 'Verlauf';
$string['translatortool'] = 'Übersetzer';
$string['translatortoolopen'] = 'AMOS Übersetzer öffnen';
$string['translatortranslation'] = 'Übersetzung';
$string['typecontrib'] = 'Plugins (nicht standardmäßig)';
$string['typecore'] = 'Core (Kernsystem)';
$string['typestandard'] = 'Plugins (standardmäßig)';
$string['unableenfixaddon'] = 'Änderungen an der englischen Texten sind nur für die Standardplugins möglich';
$string['unableenfixcountries'] = 'Die Ländernamen wurden aus der ISO 3166-1 übernommen.';
$string['unstage'] = 'Entfernen';
$string['unstageconfirm'] = 'Wirklich?';
$string['unstaging'] = 'Entfernen ...';
$string['untranslate'] = 'Übersetzung löschen';
$string['untranslateconfirm'] = 'Möchten Sie wirklich eine vorhandene Übersetzung des Textes <code>{$a->stringid}</code>, Modul <code>{$a->component}</code>, aus allen Versionen des Spachpakets <code>{$a->language}</code> löschen?';
$string['untranslatetitle'] = 'Die Übersetzung wird aus dem Sprachpaket gelöscht.';
$string['untranslating'] = 'Übersetzung löschen';
$string['version'] = 'Version';
