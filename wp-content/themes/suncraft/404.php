<?php

	/**
	 * Serve a customized 404 error page
	 */

	get_header(); ?>

			<section class="page-content page-404">
				<center class="wrapper">
					<article class="formatting">
						<div class="half-col">
							<h2><font>Page Not Found</font></h2>
						</div>
						<!-- ./half-col -->
						
						<div class="half-col">
							<p>The page you are looking for could not be found.</p>
							<p><a href="<?=site_url('/')?>" class="button"><i class="fas fa-home"></i> Return to the homepage</a></p>
						</div>
						<!-- ./half-col -->
					</article>
				</center>
			</section></main><?php

	get_footer();