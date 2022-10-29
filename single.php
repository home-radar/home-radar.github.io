<?php
/**
 * The template for displaying CPT single template
 *
 * @var View $this
 */

use JustCoded\WP\Framework\Web\View;
use JustCoded\WP\Framework\Objects\Postmeta;

$this->extends( 'layouts/main' );

// Post meta object.
$fields = new Postmeta();
?>
<?php
while ( have_posts() ) :
	the_post();

	$this->include( 'directory/_content', [
		'fields' => $fields,
	] );

endwhile;