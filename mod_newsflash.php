<?php
defined('_JEXEC') or die;
require_once __DIR__ . '/helper.php';

$feedUrl = $params->get('feed_url');
$count   = (int) $params->get('count', 5);

// helper lấy và parse
$items = ModNewsflashHelper::getItems($feedUrl, $count);

require JModuleHelper::getLayoutPath('mod_newsflash');
