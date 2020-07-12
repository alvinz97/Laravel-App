<?php

namespace App\Traits;

trait LockableTrait
{
    public function getLockoutTime()
    {
        return $this->lockout_at;
    }

    public function hasLockoutTime()
    {
        return $this->getLockoutTime() > 0;
    }
}