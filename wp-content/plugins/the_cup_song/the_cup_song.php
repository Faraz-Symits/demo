<?php
/**
 * @package The Cup Song
 * @version 1.7.2
 */
/*
Plugin Name: The Cup Song
Plugin URI: http://about.me/farazhashmi/
Description: Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.
Author: Faraz Hashmi
Version: 1.0
Author URI: http://about.me/farazhashmi/
*/

function the_cup_song_get_lyric() {
	/** These are the lyrics to The Cup Song */
	$lyrics = "I got my ticket for the long way round
	Two bottles of whiskey for the way
	And I sure would like some sweet company
	And I'm leaving tomorrow, what do you say

	When I'm gone
	When I'm gone
	You're gonna miss me when I'm gone
	You're gonna miss me by my hair
	You're gonna miss me everywhere, oh
	You're gonna miss me when I'm gone

	When I'm gone
	When I'm gone
	You're gonna miss me when I'm gone
	You're gonna miss me by my walk
	You're gonna miss me talk, oh
	You're gonna miss me when I'm gone

	I got my ticket for the long way round
	The one with the prettiest of views
	It's got mountains
	It's got rivers
	It's got sights to give you shivers
	But it sure would be prettier with you

	When I'm gone
	When I'm gone
	You're gonna miss me when I'm gone
	You're gonna miss me by my walk
	You're gonna miss me by my talk, oh
	You're gonna miss me when I'm gone

	When I'm gone
	When I'm gone
	You're gonna miss me when I'm gone
	You're gonna miss me by my hair
	You're gonna miss me by my everywhere, oh
	Oh you're sure gonna miss me when I'm gone

	When I'm gone
	When I'm gone
	You're gonna miss me when I'm gone
	You're gonna miss me by my walk
	You're gonna miss me by my talk, oh
	You're gonna miss me when I'm gone";

	// Here we split it into lines.
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line.
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later.
function the_cup_song() {
	$chosen = the_cup_song_get_lyric();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="cup_"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quote from The Cup Song song, by Jerry Herman:' ),
		$lang,
		$chosen
	);
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'the_cup_song' );

// We need some CSS to position the paragraph.
function cup__css() {
	echo "
	<style type='text/css'>
	#cup_ {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #cup_ {
		float: left;
	}
	.block-editor-page #cup_ {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#cup_,
		.rtl #cup_ {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'cup__css' );
