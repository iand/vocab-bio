<?php
include_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'common.inc.php');

$space = new LocalSchemaUriSpace(dirname(__FILE__) . '/schema.rdf', 'rdfxml');
$space->add_redirect('/bio/', '/bio/0.1/');
$space->add_redirect('/bio/0.1', '/bio/0.1/');
$space->dispatch();
?>
