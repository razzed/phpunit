--TEST--
TestDox: Default output; Test name in camel-case notation; No TestDox metadata
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-progress';
$_SERVER['argv'][] = '--testdox';
$_SERVER['argv'][] = '--colors=never';
$_SERVER['argv'][] = __DIR__ . '/_files/CamelCaseTest.php';

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Runtime:       %s

Time: %s, Memory: %s

Camel Case (PHPUnit\TestFixture\TestDox\CamelCase)
 ✔ Something that works
 ✘ Something that does not work
   │
   │ Failed asserting that false is true.
   │
   │ %sCamelCaseTest.php:%d
   │

FAILURES!
Tests: 2, Assertions: 2, Failures: 1.
