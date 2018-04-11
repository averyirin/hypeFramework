<?php

$entity = elgg_extract('entity', $vars, false);

if (!$entity || empty($entity->description))
	return true;

echo elgg_view('output/longtext', array(
	'value' => elgg_get_excerpt($entity->description),
	'class' => 'elgg-entity-description',
));
