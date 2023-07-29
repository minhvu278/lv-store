<?php

namespace App\Services;

use App\Jobs\SendEmailJob;
use App\Mail\CommonMail;
use Illuminate\View\View;

class BaseService
{
    public function sendMail(string $mailTo, string $subject, string $view, array $data = [], int $minutes = 0): void
    {
        $delay = now();
        if ($minutes) {
            $delay = $delay->addMinutes($minutes);
        }
        dispatch(new SendEmailJob($mailTo, new CommonMail($subject, $view, $data)))->delay($delay);
    }
}
