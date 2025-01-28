<?php

namespace App\Exceptions\Admin;

use Exception;

class UnauthorizedAccessException extends Exception
{
    protected $message = 'You do not have permission to access this resource.';
}
