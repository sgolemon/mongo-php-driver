--TEST--
MongoDB\Driver\Manager::executeBulkWrite() with empty BulkWrite
--SKIPIF--
<?php require __DIR__ . "/../utils/basic-skipif.inc"; ?>
<?php NEEDS('STANDALONE'); CLEANUP(STANDALONE); ?>
--FILE--
<?php
require_once __DIR__ . "/../utils/basic.inc";

$manager = new MongoDB\Driver\Manager(STANDALONE);

echo throws(function() use ($manager) {
    $manager->executeBulkWrite(NS, new MongoDB\Driver\BulkWrite);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Cannot do an empty bulk write
===DONE===
