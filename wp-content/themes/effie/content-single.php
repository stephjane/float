	<div class="col-12 col-md-10 offset-md-1 pb-5 text-center">
		<em><?php the_content(); ?></em>
	</div>

		<?php if( have_rows('content_blocks') ): while ( have_rows('content_blocks') ) : the_row(); ?>

			<?php if( get_row_layout() == 'inset_paragraph' ): ?>
				<div class="col-10 offset-1 col-md-8 offset-md-2 pt-3 pt-md-5 pb-3 pb-md-5">
					<p><?php echo get_sub_field('inset_content') ?></p>
				</div>
			
			<?php elseif( get_row_layout() == 'general_content_block' ): ?> 
				<div class="col-md-10 offset-md-1 pt-3 pb-3 pt-md-5 pb-3 pb-md-5">
					<?php echo get_sub_field('general_content') ?>
				</div>

			<?php elseif( get_row_layout() == 'image_gallery' ): $gallery = get_sub_field('images'); ?>
				<div class="col-12 single-project__gallery mt-3 mb-3 mt-md-5 mb-md-5">
					<?php if( $gallery ): ?>
						<?php foreach($gallery as $img ): ?>
							<div class="single-project__gallery--image">
								<img src="<?php echo $img["url"] ?>">
								<?php if($img["caption"]): ?>
									<div class="caption"><p><?php echo $img["caption"] ?></p></div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>

    <?php endwhile; endif; ?>
