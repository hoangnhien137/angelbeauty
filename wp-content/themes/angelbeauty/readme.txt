
I created a theme html5blp (using HTML5 Boilerplace) for WP standard (remove more feature which not using in theme twentyeleven).

Source in SVN: http://vida01:81/svn/Projects/trunk/VIDA-Standard/themes/html5blp 

When you use in the WP, please custom all page: index.php, page.php, single.php, …

It have more functions:

Get one attachment image by attachment_id as array attributes ( return $aImage = array('src' => $src, 'width' => $width, 'height' => $height, 'html' => $html, 'alt' => '', 'title' => '', 'class' => ''); )
html5blp_get_attachment_image($attachment_id, $size = 'thumbnail');
	
Get one or more images of post_id (return string (1 image ) or array string of more images)
		html5blp_attachments($post_id, $size = 'thumbnail', $all = true)
	
Get one image of post_id which have order number in list images (return string - the same wp_get_attachment_image)
		html5blp_attachment_image( $post_id, $size = 'thumbnail', $order = 1); # get image attachment which have order = 1

	Get first image from post_content
	html5blp_catch_that_image($post, $sDefault = '/wp-content/uploads/default.jpg', $size = 'thumbnail')

have more functions using for WP 3.3.x
	wp_trim_words_length($sText, $iNumberWords, $sMore, $iLength = -1);
		$iLength > 0: trim words if > $iLength then remove 1 word at end until strlen < $iLength
	
	html5blp_trim_post_words( $post, $iNumberWords = 80, $sMore = ' ...', $iLength = -1 )
		the same wp_trim_words_length but it trim words of current $post (trim get_the_excerpt() if get_the_excerpt()== ‘’ then get_the_content(''))
	
	html5blp_trim_content_words( $iNumberWords = 80, $sMore = ' ...', $iLength = -1 )
		the same wp_trim_words_length but it trim words of current $post (get_the_content(''))
	
	html5blp_trim_excerpt_words( $iNumberWords = 80, $sMore = ' ...', $iLength = -1 )
		the same wp_trim_words_length but it trim words of current $post (get_the_excerpt())
	
html5blp_trim_title_words( $iNumberWords = 80, $sMore = ' ...', $iLength = -1 )
		the same wp_trim_words_length but it trim words of current $post (get_the_title())
