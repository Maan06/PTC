<?php

namespace App\Library;

trait GlobalFunction
{
    public function timeago($date)
    {
        $timestamp = strtotime($date);

        $strTime = array("s", "m", "h", "day", "month", "year");
        $length = array("60", "60", "24", "30", "12", "10");

        $currentTime = time();
        if ($currentTime >= $timestamp) {
            $diff     = time() - $timestamp;
            for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
                $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return $diff . $strTime[$i] . " ago ";
        }

        return false;
    }
}

