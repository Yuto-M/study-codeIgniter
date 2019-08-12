<?php
/**
 * lib_helper
 */
function csrf_hidden()
{
    list($name, $hash) = csrf_token();
    return "<input type='hidden' name='{$name}' value='{$hash}'>";
}

function csrf_token()
{
    $CI = get_instance();
    $name = $CI->security->get_csrf_token_name();
    $hash = $CI->security->get_csrf_hash();
    return [$name, $hash];
}