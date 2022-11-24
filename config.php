<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => '',
    'description' => 'Australasian Society for Phycology and Aquatic Botany',
    'collections' => [],
    'siteName' => 'aspab.org',
    'getTitle' => function ($page) {
        if ($page->getPath() == '') {
            return $page->siteName . " | " . $page->description;
        }
        return $page->title == '' ? $page->siteName : $page->title . " | " . $page->siteName;
    }
];
