<div class="mm-casino-box">

	<div class="mm-casino-box_logo">	
		<a target="_blank" href="<?php echo $affiliate_link; ?>">
			<img src="<?php echo $logo; ?>" alt="">
		</a>
	</div>

	<div class="mm-casino-box__text">

		<div class="bonus-percent">
			<?php printf( __( '%s up to', 'mediamirror' ), "{$bonus_percent}%" ); ?>
		</div>
		
		<div class="bonus-amount">
			<?php printf( __( '<strong>%s</strong> bonus', 'mediamirror' ), "{$bonus_amount} {$currency}" ); ?>
		</div>

		<div class="bonus-freespins">
			<?php printf( __( '<strong>%s</strong> freespins', 'mediamirror' ), $bonus_num_freespins ); ?>
		</div>

	</div>

	<div class="mm-casino-box__rating">
		<?php echo mm_rating_stars( $rating ); ?>
	</div>

	<a class="mm-casino-box__button" href="<?php echo $affiliate_link; ?>" target="_blank"><?php _e( 'Play now!', 'mediamirror' ); ?></a>
</div>
