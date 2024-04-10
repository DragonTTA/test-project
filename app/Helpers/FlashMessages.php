<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Session;

trait FlashMessages
{
    protected static function message($level = 'info', $message = null)
    {
        if (session()->has('message')) {
            $messages = session()->pull('message');
        }
        session()->flash('message', $message);
        session()->flash('alert-type', $level);

        return $message;
    }

    protected static function messages()
    {
        return self::hasMessages() ? session()->pull('message') : [];
    }

    protected static function hasMessages()
    {
        return session()->has('message');
    }

    public static function success($message)
    {
        return self::message('success', $message);
    }

    public static function info($message)
    {
        return self::message('info', $message);
    }

    public static function warning($message)
    {
        return self::message('warning', $message);
    }

    public static function error($message)
    {
        return self::message('error', $message);
    }
}
