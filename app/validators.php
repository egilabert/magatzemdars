<?php

Validator::extend('alpha_spaces', function($attribute, $value)
{
    return preg_match('/^[\pL\s]+$/u', $value);
});

Validator::extend('phone', function($attribute, $value)
{
	
});

Validator::extend('facebook', function($attribute, $value)
{
	preg_match('/^(http\:\/\/|https\:\/\/)?((w{3}\.)?)facebook\.com\/(?:#!\/)?(?:pages\/)?(?:[\w\-\.]*\/)*([\w\-\.]*)+$/', $value);
});

Validator::extend('twitter', function($attribute, $value)
{
	preg_match('/^(https?:\/\/)?((w{3}\.)?)twitter\.com\/(#!\/)?[a-z0-9_]+$/', $value);
});
