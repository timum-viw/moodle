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
 * Strings for component 'media_videojs', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   media_videojs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'CSS Class für Audio';
$string['audioextensions'] = 'Audio-Dateiendungen';
$string['configaudiocssclass'] = 'CSS Class, die zum &lt;audio&gt;-Element hinzugefügt wird.';
$string['configaudioextensions'] = 'Kommagetrennte Liste der unterstützten Audio-Dateiendungen. VideoJS versucht, den nativen AudioPlayer des Browsers (wenn verfügbar) zu nutzen.

Falls dies nicht gelingt, wird der FlashPlayer verwendet, aber nur wenn der Browser Flash unterstützt und das Flash-Fallback aktiviert ist.';
$string['configlimitsize'] = 'Wenn aktiviert, und Breite und Höhe nicht defininiert sind, wird das Video mit Standardbreite und -höhe angezeigt. Andernfalls wird es bis zur maximal möglichen Breite gestreckt.';
$string['configrtmp'] = 'Nach der Aktivierung werden Links, die mit rtmp:// beginnen, vom Plugin verarbeitet, egal ob die jeweilige Erweiterung aktiviert ist. Flash-Fallback muss für die Nutzung von rmtp aktiv sein';
$string['configuseflash'] = 'Der FlashPlayer wird verwendet, wenn das Audio- oder Videoformat nicht native vom Browser unterstützt wird.

Wenn diese Option aktiviert ist, wird VideoJS für jede Dateiendung aus der obigen Liste ohne Browser-Überprüfung aktiviert. Beachten Sie, dass Flash in mobilen Browsern nicht verfügbar ist und auch in Desktop-Plattformen nicht mehr empfohlen wird.';
$string['configvideocssclass'] = 'CSS Class, die zum &lt;video&gt;-Element hinzugefügt wird.

Nutzen Sie z.B. die CSS Class \'vjs-big-play-centered\', um eine Abspieltaste in der Mitte zu platzieren. Alle Details zu den Einstellungen, inclusive aller Anpassungen für ein eigenes Erscheinungsbild, finden Sie unter <a href="docs.videojs.com">docs.videojs.com</a>.';
$string['configvideoextensions'] = 'Kommagetrennte Liste der unterstützten Video-Dateiendungen. VideoJS versucht, den nativen VideoPlayer des Browsers (wenn verfügbar) zu nutzen.

Falls dies nicht gelingt, wird der FlashPlayer verwendet, aber nur wenn der Browser Flash unterstützt und das Flash-Fallback aktiviert ist.';
$string['configyoutube'] = 'VideoJS wird verwendet, um YouTube-Videos abzuspielen. Beachten Sie, dass YouTube-Playlists bisher noch nicht von VideoJS unterstützt werden.';
$string['limitsize'] = 'Max. Größe';
$string['pluginname'] = 'VideoJS Player';
$string['pluginname_help'] = 'VideoJS ist eine JavaScript-Umgebung für Audio- und Videodateien, die vom nativen Audio- bzw. VideoPlayer des Browsers wiedergegeben werden. Die Formatunterstützung hängt vom jeweiligen Browser ab. Ein Fallback für den FlashPlayer ist optional.';
$string['privacy:metadata'] = 'Das VideoJS-Player-Mediaplugin speichert keine personenbezogenen Daten';
$string['rtmp'] = 'RTMP-Streams';
$string['useflash'] = 'Flash-Fallback aktivieren';
$string['videocssclass'] = 'CSS Class für Video';
$string['videoextensions'] = 'Video-Dateiendungen';
$string['youtube'] = 'YouTube Videos';
