<?php

namespace My\Project\Runner;

use Tightenco\Support\Collection;

function run($message)
{
    $collection = collect(['taylor', 'abigail', 'dimon'])->map(function ($name) {
        return strtoupper($name);
    });
    
    foreach ($collection as $index => $value) {
        echo $index . " " . $value . "\n";
    }
    return $message;

    
}