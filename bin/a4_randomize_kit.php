#!/usr/bin/env php
<?php
declare(strict_types=1);

namespace Adsr\Elektron;

require __DIR__ . '/autoload.php';

$re_ignore = '/(polycfg|perf|cv|fx|unknown|extin|routing|settings|dst|drift|portamento|legato|vel_to_vol|f1_res_boost|name|sound2|sound3|sound4|mix)/';

$kit = new Analog4Kit();
$kit->fromSysex(Analog4Kit::DEFAULT);

foreach ($kit->getPaths() as $path) {
    if (preg_match($re_ignore, $path)) {
        continue;
    } else if (preg_match('/(vol|lev)/', $path)) {
        $kit->set($path, 100);
    } else {
        $kit->getVar($path)->randomize();
    }
}

ShittyMidi::send($kit->toSysex());
