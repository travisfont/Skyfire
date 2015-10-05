<?php

/**
 * PHPMailer - PHP Email layer using PHPMailer for Skyfire
 */
 
require_once 'PHPMailer/PHPMailerAutoload.php';

final class Mail extends PHPMailer
{
    public function __construct()
    {
        return clone new PHPMailer();
    }
}