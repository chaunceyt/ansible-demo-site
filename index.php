<?php
/**
 * @file
 * Index file for ansible demo site.
 */

$current_build = '1.0.3';
$site_name = 'Ansible Rolling deployment Demo';


print '<h1>' . $site_name . '</h1>';
print '<p>Current Version: ' . $current_build . '</p>';
print '<p>' . $_SERVER['SERVER_ADDR'] . '</p>';
