<?php

namespace Ray247k\LaraPeko;

class LaraPeko
{
    public function sayPeko()
    {
        echo "好油喔 peko\n";
    }

    public function getBestGirl()
    {
        echo config('lara_peko.best_girl');
    }

    public function getAhoy()
    {
        return "ahoy";
    }
}
