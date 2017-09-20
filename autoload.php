<?php

function __autoload($name) {
    require strtolower($name).'.php';
}