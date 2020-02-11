<div class="post-comments" id="comments">
	
	<?php 
		if ( comments_open() ) :
		echo '<div class="ct_post_area subarea"><h4 class="quicker ct_post_area-title"><span>';
		comments_number(__('Leave a Comment ','vinethemes'), __('1 Comment','vinethemes'), '% ' . __('Comments','vinethemes') );
		echo '</span></h4></div>';
		endif;

		echo "<div class='comments'>";
		
			wp_list_comments(array(
				'avatar_size'	=> 60,
				'max_depth'		=> 5,
				'style'			=> 'ul',
				'callback'		=> 'ct_comments',
				'type'			=> 'all'
			));

		echo "</div>";

		echo "<div id='my_pagination_style'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";

		$custom_comment_field = '<p class="form_comment_area"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout

		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> __('Leave a Reply', 'vinethemes'),
			'cancel_reply_link'		=> __('Cancel Reply', 'vinethemes'),
			'label_submit'			=> __('Post Comment', 'vinethemes')
		));
	 ?>


</div> <!-- end comments div -->
