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
 * Strings for component 'cachestore_redis', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   cachestore_redis
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['password'] = 'Kennwort';
$string['password_help'] = 'Tragen Sie das Passwort des Redis-Servers ein';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Key-Prefix';
$string['prefix_help'] = 'Der Prefix wird für alle Schlüsselnamen des Redis-Servers genutzt.
* Wenn Sie nur eine Moodle-Instanz auf diesem Server verwenden, kann der Default Wert verwendet werden
* Aufgrund von Längenbeschränkungen sind max. 5 Zeichen zulässig.';
$string['prefixinvalid'] = 'Ungültiges Vorzeichen. Sie können nur a-z A-Z 0-9-_ nutzen.';
$string['privacy:metadata:redis'] = 'Das Redis Cachestore-Plugin speichert kurzfristig Daten. Sie werden regelmäßig gelöscht.';
$string['privacy:metadata:redis:data'] = 'Verschiedene im Cache gespeicherte Daten';
$string['serializer_igbinary'] = 'igbinary Serializer';
$string['serializer_php'] = 'Standard PHP Serializer';
$string['server'] = 'Server';
$string['server_help'] = 'Legt den Hostnamen oder IP-Adresse des zu nutzenden Redis-Server fest.';
$string['test_password'] = 'Testserver-Passwort';
$string['test_password_desc'] = 'Redis Testserver-Passwort';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Serializer zur Verwendung beim Testen';
$string['test_server'] = 'Testserver';
$string['test_server_desc'] = 'Redis-Server, der für Tests genutzt wird.';
$string['useserializer'] = 'Serializer verwenden';
$string['useserializer_help'] = 'Diese Option legt den Serializer fest, der für die Serialisierung verwendet werden soll.
Die gültigen Serializer sind Redis::SERIALIZER_PHP oder Redis::SERIALIZER_IGBINARY.
Letzterer wird nur unterstützt, wenn phpredis mit der Option --enable-redis-igbinary konfiguriert ist und die PHP-Extension igbinary geladen ist.';
