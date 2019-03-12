<?php


namespace PHPInitiation\Controller;


class Controller
{

    protected function render (string $filename, array $data = [])
    {
        extract($data);

        include __DIR__ . "/../../template/" . $filename;

    }

    protected function session ($key = null, $value = null)
    {
        if (PHP_SESSION_ACTIVE !== session_status()) {

            session_start();
        }
        if (null !== $key && null !== $value) {

            $_SESSION [$key] = $value;
        } elseif (null !== $key && false !== $key) {
            return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : null;
        } elseif (false === $key) {
            session_destroy();
            $_SESSION = [];
        }

    }


}