<div id="sidebar">
	
	<?php if (is_active_sidebar('widgets_sidebar')) : 
		
		dynamic_sidebar('widgets_sidebar'); 
		
	else : ?>
		
		<div class="widget widget-search">
			<h3><?php _e('Search', 'blank-theme'); ?></h3>
			<?php get_search_form(); ?>
		</div>
		
		<div class="widget widget-pages">
			<h3><?php _e('Pages', 'blank-theme'); ?></h3>
			<ul>
				<?php wp_list_pages(
					array(
						'title_li' => '', 
					)
				); ?>
			</ul>
		</div>
		
		<div class="widget widget-categories">
			<h3><?php _e('Categories', 'blank-theme'); ?></h3>
			<ul>
				<?php wp_list_categories(
					array(
						'orderby'    => 'name', 
						'order'      => 'ASC', 
						'show_count' => 1, 
						'title_li'   => '', 
						'depth'      => 0
					)
				); ?>
			</ul>
		</div>
		
		<div class="widget widget-tags">
			<h3><?php _e('Tags', 'blank-theme'); ?></h3>
			<?php wp_tag_cloud(
				array(
					'smallest' => 14, 
					'largest'  => 14, 
					'unit'     => 'px', 
					'orderby'  => 'name', 
					'order'    => 'ASC'
				)
			); ?>
		</div>
		
		<div class="widget widget-archives">
			<h3><?php _e('Archives', 'blank-theme'); ?></h3>
			<?php wp_get_archives(
				array(
					'type' => 'monthly', 
				)
			); ?>
		</div>
		
		<div class="widget widget-authors">
			<h3><?php _e('Authors', 'blank-theme'); ?></h3>
			<ul>
				<?php wp_list_authors(
					array(
						'show_fullname' => 1, 
						'optioncount'   => 0, 
						'orderby'       => 'post_count', 
						'order'         => 'DESC', 
						'number'        => 10, 
						'hide_empty'    => 0, 
						'echo'          => 1, 
						'exclude_admin' => 0
					)
				); ?>
			</ul>
		</div>
		
		<div class="widget widget-meta">
			<h3><?php _e('Meta', 'blank-theme'); ?></h3>
	    	<ul>
	    		<?php wp_register(); ?>
	    		<li><?php wp_loginout(); ?></li>
	    		<li><a href="http://wordpress.org/"><?php _e('WordPress', 'blank-theme'); ?></a></li>
	    		<?php wp_meta(); ?>
	    	</ul>
		</div>
		
		<div class="widget widget-feeds">
			<h3><?php _e('Subscribe', 'blank-theme'); ?></h3>
	    	<ul>
	    		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)', 'blank-theme'); ?></a></li>
	    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)', 'blank-theme'); ?></a></li>
	    	</ul>
    	</div>
    	
	<?php endif; ?>
	
</div>