<?php

function path($source) {
    return getenv('VERCEL_ENV') ? '/' . $source : '/public/' . $source;
}