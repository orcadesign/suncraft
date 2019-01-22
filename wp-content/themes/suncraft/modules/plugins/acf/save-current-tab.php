<?php

	/**
	 * ACF: Keep the last edited tab selection when post refreshes.
	 *
	 * When a post containing ACF tabs is opened for edits, the currently selected tab
	 * will be saved in a transient. Upon save or refresh of the page, the last selected
	 * tab will be selected again, making it more convenient to work with ACF tabs.
	 *
	 * @link https://gist.github.com/gchtr/2d371918f3778683c61f629dbc545972 
	 */

	if(is_admin())
	{
		class Acf_Current_Tab {
			/**
			 * Name under which the transient for the current tab will be saved.
			 * @var string
			 */
			private $_transient_name = 'acf_current_tab';

			/**
			 * Number of minutes the transient will be saved.
			 * @var int
			 */
			private $_transient_minutes = 5;

			public function __construct() {
				add_action( 'acf/input/admin_footer', array( $this, 'handle_tab' ) );
				add_action( 'wp_ajax_acf_save_current_tab', array( $this, 'ajax_acf_save_current_tab' ) );
			}

			/**
			 * Select tab that was selected in last edit session of the post.
			 *
			 * - If the time the same post that was last edited lies within the time the
			 *   transient exists, the last selected tab will be selected via JavaScript.
			 * - If a new post is opened for editing, the current tab will be overwritten.
			 */
			public function handle_tab() {
				// Run only when post_id is present
				if ( ! isset( $_GET['post'] ) || ! is_numeric( $_GET['post'] ) ) {
					return;
				}

				$post_id = sanitize_key( $_GET['post'] );

				// Check for existing transient
				$current_tab = get_transient( $this->_transient_name );

				// Use value only once, delete transient right away
				delete_transient( $this->_transient_name );

				// The first tab is selected by default
				$tab_index = 0;

				// Get tab index for current post
				if ( $current_tab['post_id'] === $post_id ) {
					$tab_index = $current_tab['tab_index'];
				}

				?>
				<script type="text/javascript">
					(function($) {
						/**
						 * Global to save the current index of selected tab
						 * @type int
						 */
						window.acf_current_tab_index = null;

						acf.add_action('ready', function( $el ){
							var tabIndex = <?php echo $tab_index; ?>

							// Get tab element by index
							var $li = $('.acf-tab-group').find('li:eq(<?php echo $tab_index; ?>)');

							// Select tab only when it’s not the first tab, which is selected by default
							if (0 !== tabIndex) {
								$li.find('a').click();
							}

							window.acf_current_tab_index = tabIndex;
						});

						acf.add_action('refresh', function($tabGroup) {
							var $currentTab;
							var currentTabIndex = window.acf_current_tab_index;
							var newTabIndex;

							// Bail out if we have no jQuery object
							if (false === $tabGroup instanceof jQuery) {
								return;
							}

							$currentTab = $tabGroup.find('li.active');

							// Bail out if no active tab was found
							if ($currentTab.length === 0) {
								return;
							}

							// Get index of active tab
							newTabIndex = $currentTab.index();

							// Bail out if index is initial or previously selected tab is the same
							if (null === currentTabIndex || newTabIndex === currentTabIndex) {
								return;
							}

							window.acf_current_tab_index = newTabIndex;

							// Send tabIndex to backend to save transient
							$.ajax(ajaxurl, {
						        method: 'post',
						        data: {
									action: 'acf_save_current_tab',
									tab_index: newTabIndex,
									post_id: <?php echo $post_id; ?>
						        }
					        });
						});
					})(jQuery);
				</script>
				<?php
			}

			public function ajax_acf_save_current_tab() {
				if ( ! isset( $_POST['tab_index'] ) || ! is_numeric( $_POST['tab_index'] ) ) {
					return;
				}

				$tab_index = $_POST['tab_index'];
				$post_id = $_POST['post_id'];

				$transient_value = array(
					'tab_index' => $tab_index,
					'post_id' => $post_id,
				);

				$result = set_transient( $this->_transient_name, $transient_value, $this->_transient_minutes * 60 );

				if ( $result ) {
					wp_send_json_success();
				}

				wp_die();
			}
		}

		new Acf_Current_Tab();
	}