<?php
defined('_JEXEC') or die;

use Joomla\CMS\Http\HttpFactory;

class ModNewsflashHelper
{
    public static function getItems($url, $count)
    {
        $http = HttpFactory::getHttp();
        try {
            $response = $http->get($url);
            $xml = simplexml_load_string($response->body);
            $items = [];
            $i = 0;
            foreach ($xml->channel->item as $item) {
                if ($i++ >= $count) break;
                $items[] = [
                    'title'       => (string) $item->title,
                    'link'        => (string) $item->link,
                    'description' => strip_tags((string) $item->description),
                    'pubDate'     => (string) $item->pubDate,
                ];
            }
            return $items;
        } catch (Exception $e) {
            return [];
        }
    }
}
