<?php
/**
 * Page attachments
 *
 * Display attachments for a forum post
 *
 * @package ElggPages
 *
 * @uses $vars['entity']
 */

$entity = elgg_extract('entity', $vars, false);

$attachments = elgg_get_entities_from_relationship(array(
	"relationship" => "attachment",
	"relationship_guid" => $entity->guid,
	"inverse_relationship" => true
	));

if($attachments){
	$content = "<article class='attachments'>";
	$content .= "<p><b>Attachments</b></p>";
	foreach($attachments as $attachment){
		$content .= elgg_view_entity($attachment, array('full_view' => false));
	}
	$content .= "</article>";
}

echo $content;