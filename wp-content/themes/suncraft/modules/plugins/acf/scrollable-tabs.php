<?php

	/**
	 * Adds a stylesheet that extends ACF tabs and makes them scrollable rather than dropping down onto new lines
	 */

	if(is_admin())
	{
		function acf_extend_tabs_script()
		{
			global $post_type; ?>

			<style type="text/css">
				.acf-tab-wrap
				{
					position: relative;
				}

				.acf-tab-wrap:after
				{
					z-index: 99;
					content: "";
					position: absolute;
					top: 0;
					right: 0;
					bottom: 0;
					width: 15px;
					background: linear-gradient(to right, rgba(241, 241, 241, 0), rgba(241, 241, 241, 1));
					pointer-events: none;
				}

				.acf-hl.acf-tab-group
				{
					height: 37px;
					overflow: auto;
					white-space: nowrap;
				}

				.acf-hl.acf-tab-group > li
				{
					float: none;
					display: inline-block;
				}

				.acf-hl.acf-tab-group > li:last-child
				{
					margin-right: 25px;
				}
			</style>
			<script type="text/javascript">
				// Scan for and remove separator tabs every now and then because ACF loads stuff dynamically
				var remove_seps_timeout = 100,
					remove_seps = function()
					{
						remove_seps_timeout = (remove_seps_timeout < 5000) ? (remove_seps_timeout + 100) : 5000;

						jQuery('.acf-tab-group > li').filter(function()
						{
							return !jQuery(this).text().trim().toLowerCase();
						}).each(function()
						{
							remove_seps_timeout = 100;

							jQuery(this).closest('.acf-tab-wrap').remove();
						});

						setTimeout(remove_seps, remove_seps_timeout);
					};

				setTimeout(remove_seps, remove_seps_timeout);
			</script><?
		}

		add_action('admin_print_scripts-post-new.php', 'acf_extend_tabs_script', 11);
		add_action('admin_print_scripts-post.php', 'acf_extend_tabs_script', 11);
	}