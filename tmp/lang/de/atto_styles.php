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
 * Strings for component 'atto_styles', language 'de', branch 'MOODLE_35_STABLE'
 *
 * @package   atto_styles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config'] = 'Gestaltungsvorlagen Konfiguration';
$string['config_desc'] = 'Konfiguration für die Gestaltungsvorlagen in Atto im JSON Format.
<hr />
Beispiel:<br />
{<br />
    "title": "Blaue Box",<br />
    "type": "block",<br />
    "classes": "box blue"<br />
},{<br />
    "title": "Roter Text",<br />
    "type": "inline",<br />
    "classes": "red"<br />
}<br />
<hr />
Das Attribut <em>title</em> bestimmt den Namen der Gestaltungsvorlage.<br />
<br />
Der Titel unterstützt den Mehrsprachen-Filter (falls aktiviert), in diesem Fall müssen doppelte Anführungszeichen aber escaped werden.<br />
In der README-Datei des Plugins finden Sie ein Beispiel für eine solche Konfiguration.
<hr />
Das Attribut <em>type</em> kann einer der beiden folgenden Werte enthalten: "block" oder "inline".<br />
<br />
"block" wird ein div-Tag mit der/den angegebenen CSS Klasse/n anlegen und sich wie ein Standard Block-Level Element verhalten. Die Gestaltung wird auf das aktuell ausgewählte Block-Level Element angewendet und wirkt sich damit gegebenenfalls auf mehr als den aktuell markierten Text aus.<br />
<br />
"inline" wird ein span-Tag mit der/den angegebenen CSS Klasse/n anlegen und sich wie ein Standard Inline-Element verhalten. Die Gestaltung wird hierbei nur auf den ausgewählten Text angewendet.
<hr />
Im <em>classes</em> Attribut geben Sie dann den CSS Klassennamen, welcher dem Block- / Inline-Element zugewiesen werden soll, an.<br />
<br />
Für eine Gestaltungsvorlage können mehrere CSS Klassen angegeben werden, jeweils getrennt durch Leerzeichen. Dem Block- / Inline-Element werden in diesem Fall alle CSS Klassen zugewiesen.<br />
<br />
Die CSS Klassendefinitionen können leider nicht innerhalb dieses Plugins gesetzt werden. Sie müssen Ihre CSS Klassendefinitionen deswegen zum Design oder mit Hilfe der Funktion "Zusätzliches HTML" zu Moodle hinzufügen.
<hr />
In Websites, die ein Bootstrap-basiertes Design verwenden (insbesondere <em>Boost</em>, <em>More</em> und <em>Clean</em>), können Sie auch Gestaltungsvorlagen mit Hilfe der Bootstrap CSS Klassen erstellen.
<br /><br />
Beispiel:<br />
{<br />
    "title": "Hinweisbox bei Erfolg",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
},{<br />
    "title": "Info-Markierung",<br />
    "type": "inline",<br />
    "classes": "badge badge-info"<br />
},{<br />
    "title": "Warnungs-Markierung",<br />
    "type": "inline",<br />
    "classes": "badge badge-warning"<br />
}<br /><br />
Mehr Informationen zu den Bootstrap CSS Klassen finden Sie unter den folgenden Links in der Bootstrap 2.3 Dokumentation (für <em>Clean</em> und <em>More</em>):
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap Labels und Badges</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap Alerts</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap Hilfsklassen</a></li>
</ul>
oder in der Bootstrap 4 Dokumentation (für <em>Boost</em>):
<ul>
<li><a href="http://v4-alpha.getbootstrap.com/components/badge/">Bootstrap badges</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/components/alerts/">Bootstrap alerts</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/utilities/">Bootstrap utilities</a></li>
</ul>';
$string['nostyle'] = 'Ohne Gestaltungsvorlage';
$string['pluginname'] = 'Gestaltungsvorlagen';
$string['privacy:metadata'] = 'Das Plugin atto_styles speichert keine personenbezogenen Daten.';
$string['settings'] = 'Gestaltungsvorlagen';
