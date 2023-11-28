<?php

function path($source) {
    return $_SERVER['SERVER_NAME'] !== 'localhost' ? '/' . $source : '/public/' . $source;
}

function cssPath($source) {
    return $_SERVER['SERVER_NAME'] !== 'localhost' ? '/api/'  . $source : $source;
}