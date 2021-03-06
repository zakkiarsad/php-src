--TEST--
IntlTimeZone::createTimeZoneIDEnumeration(): basic test
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
if (version_compare(INTL_ICU_VERSION, '4.8') < 0)
	die('skip for ICU 4.8+');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);
$enum = IntlTimeZone::createTimeZoneIDEnumeration(
	IntlTimeZone::TYPE_ANY,
	'PT',
	-3600000);
print_r(iterator_to_array($enum));

$enum = intltz_create_time_zone_id_enumeration(
	IntlTimeZone::TYPE_ANY,
	'PT',
	-3600000);
print_r(iterator_to_array($enum));
?>
==DONE==
--EXPECT--
Array
(
    [0] => Atlantic/Azores
)
Array
(
    [0] => Atlantic/Azores
)
==DONE==