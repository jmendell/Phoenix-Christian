<section class="international-alumni">
	<div class="alumni__inner-container flex-col">
		<?php if( have_rows('international_student_information')): ?>
			<?php while( have_rows('international_student_information') ): the_row(); 
		
				$image = get_sub_field('student_image');
				$testimony = get_sub_field('student_testimony');
				$name = get_sub_field('student_name');
				$country = get_sub_field('home_country');
				$college = get_sub_field('college_attended');
		
				?>
		
				<div class="alumni__single-container flex">
					<img src="<?=$image?>" alt="alumni image" class="alimni__image">
					<div class="alumni__copy-container flex-col">
						<p class="alumni__copy bran-reg">"<?=$testimony?>"</p>
						<h4 class="alumni__name text-green bran-bold"><?=$name?></h4>
						<p class="alumni__description bran-reg"><?=$country?>, <i><?=$college?></i></p>
					</div>
				</div>
		
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>