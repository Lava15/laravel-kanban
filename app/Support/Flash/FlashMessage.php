<?php

declare(strict_types=1);

namespace App\Support\Flash;

final class FlashMessage
{
    public function __construct(private readonly string $message, private readonly string $class)
    {}
    
    public function message(): string
    {
        return $this->message;
    }
    
    public function class(): string
    {
        return $this->class;
    }   
} 
