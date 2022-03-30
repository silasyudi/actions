<?php

namespace App;

class Coverage
{

    public function isPar(int $i): bool
    {
        if ($i % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }
}
