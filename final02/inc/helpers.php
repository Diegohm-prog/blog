<?php

/**
 * Redirige a una URL
 *
 * @param $path
 */
function redirect_to($path)
{
	header('Location: ' . SITE_URL . '/' . $path);
	die();
}


// 