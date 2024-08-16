<?php

declare(strict_types = 1);

namespace App\Support\Flash;

use App\Support\Flash\FlashMessage;
use Illuminate\Contracts\Session\Session;

final class Flash
{
    private const string MESSAGE = 'flash_message';
    public function __construct(protected Session $session) 
    {}
    public function getMessage(): void
    {
        
    }
    public function success(Session $session, string $message): void
    {
        //
    }
    public function info (string $message): void
    {
        //
    }
    public function danger (string $message): void
    {
        //
    }
    public function warning (string $message): void
    {
        //
    }
} 
