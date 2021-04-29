<?php


/*
Do not use document root for include since you're running this on a local server
include_once $_SERVER['DOCUMENT_ROOT'] . '/app/class/' . $className . '.php';
-----------------------------------------------------------------------------
Document root means the very beginning of your
 HTML docs for xampp or
www for wamp server
So don't use document root
-----------------------------------------------------

Simply use include like this
require_once 'PATH-TO-FILE';
*/
spl_autoload_register(function ($className) {
    require_once $_SERVER['PATH-TO-FILE'] . '/app/class/' . $className . '.php';
});
