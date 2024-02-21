<?php 

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule('ão', 'funciono');
echo $slug->slugify("Teste com acentuação para geração de slug", ' ');