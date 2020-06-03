<?php

require_once '../vendor/autoload.php'; // 加载自动加载文件

use ioola\SphinxSearch\SphinxSearch;


$sphinx = new SphinxSearch();
$results = $sphinx->search('my query', 'index_name')->query();
