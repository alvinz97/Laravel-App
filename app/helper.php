<?php

use Illuminate\Support\Carbon;

function timeDuration($loggedin, $loggedout) {
    $start = Carbon::parse($loggedin);
    $end = Carbon::parse($loggedout);
    $duration = $end->diffInHours($start);
    return gmdate('H:i', $duration);
}