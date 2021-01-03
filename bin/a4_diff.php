#!/usr/bin/env php
<?php
declare(strict_types=1);

namespace Adsr\Elektron;

require __DIR__ . '/autoload.php';

$kind = $argv[1] ?? 'kit';

$get_sysex_fn = function() use ($kind): array {
    if ($kind === 'kit') {
        return ShittyMidi::readKit();
        $obj = new Analog4Kit();
    }
    return ShittyMidi::readPattern();
};

$toggle = 1;
$obj = $kind === 'kit' ? new Analog4Kit() : new Analog4Pattern();
$bytes = $get_sysex_fn();
$obj->fromSysex($bytes);
file_put_contents("/tmp/$toggle", "$obj");
while (1) {
    $toggle = 1 - $toggle;

    echo "Change param and press enter (or Ctrl-C to stop)...\n";
    fgets(STDIN);

    $obj->fromSysex($get_sysex_fn());
    file_put_contents("/tmp/$toggle", "$obj");

    echo shell_exec(sprintf(
        'diff -y /tmp/%d /tmp/%d | grep "|"',
        1 - $toggle,
        $toggle
    )) . "\n";
}
