<?php

namespace App\Enums;

enum ResponseStatus: string
{
    case SUCCESS = 'Success';
    case ERROR = 'Error';
    case NOT_FOUND = 'Not found';
}
