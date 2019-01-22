<?php

	/**
	 * Custom nav menu widget
	 */

	class WP_Nav_Menu_Widget_Custom extends WP_Widget
	{
		public function __construct()
		{
			$widget_ops = array
			(
				'description'                 => __('Add a custom nav menu to your sidebar.'),
				'customize_selective_refresh' => true
			);

			parent::__construct('nav_menu_custom', __('Custom Nav Menu'), $widget_ops);
		}

		public function widget($args, $instance)
		{
			$walker   = !empty($instance['walker']) ? (class_exists($instance['walker']) ? new $instance['walker']() : new Walker_Nav_Menu()) : NULL;
			$nav_menu = !empty($instance['nav_menu']) ? wp_get_nav_menu_object($instance['nav_menu']) : false;

			if(!$nav_menu)
			{
				return;
			}

			$instance['title'] = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
			
			echo $args['before_widget'];

			if(!empty($instance['title']))
			{
				echo $args['before_title'] . $instance['title'] . $args['after_title'];
			}

			$nav_menu_args = array
			(
				'fallback_cb' => '',
				'menu'        => $nav_menu,
				'walker'      => $walker
			);

			wp_nav_menu(apply_filters('widget_nav_menu_args', $nav_menu_args, $nav_menu, $args, $instance));

			echo $args['after_widget'];
		}

		public function update($new_instance, $old_instance)
		{
			$instance = array();

			if(!empty($new_instance['title']))
			{
				$instance['title'] = sanitize_text_field($new_instance['title']);
			}

			if(!empty($new_instance['walker']))
			{
				$instance['walker'] = $new_instance['walker'];
			}

			if(!empty($new_instance['nav_menu']))
			{
				$instance['nav_menu'] = (int) $new_instance['nav_menu'];
			}

			return $instance;
		}

		public function form($instance)
		{
			global $wp_customize;

			$title    = isset($instance['title']) ? $instance['title'] : '';
			$walker   = isset($instance['walker']) ? $instance['walker'] : '';
			$nav_menu = isset($instance['nav_menu']) ? $instance['nav_menu'] : '';

			$menus = wp_get_nav_menus(); ?>

			<p class="nav-menu-widget-no-menus-message" <?
			if(!empty($menus))
			{
				echo ' style="display:none" ';
			} ?>><?
			if($wp_customize instanceof WP_Customize_Manager)
			{
				$url = 'javascript: wp.customize.panel("nav_menus").focus();';
			}
			else
			{
				$url = admin_url('nav-menus.php');
			}

			echo sprintf(__('No menus have been created yet. <a href="%s">Create some</a>.'), esc_attr($url)); ?>

			</p>
			<div class="nav-menu-widget-form-controls"<?
			if(empty($menus))
			{
				echo ' style="display:none" ';
			} ?>>
				<p>
					<label for="<?=$this->get_field_id('title')?>"><? _e('Title:') ?></label>
					<input type="text" class="widefat" id="<?=$this->get_field_id('title')?>" name="<?=$this->get_field_name('title')?>" value="<?=esc_attr($title)?>"/>
				</p>
				<p>
					<label for="<?=$this->get_field_id('nav_menu')?>"><? _e('Select Menu:'); ?></label>
					<select id="<?=$this->get_field_id('nav_menu')?>" name="<?=$this->get_field_name('nav_menu')?>">
						<option value="0"><? _e('&mdash; Select &mdash;'); ?></option><?
						foreach($menus as $menu)
						{ ?>

						<option value="<?=esc_attr($menu->term_id)?>" <? selected($nav_menu, $menu->term_id); ?>><?=esc_html($menu->name)?></option><?
						} ?>

					</select>
				</p><?
				$all_classes = get_declared_classes();
				$walkers     = array();

				foreach($all_classes as $class)
				{
					if($class == 'Walker_Nav_Menu' or is_subclass_of($class, 'Walker_Nav_Menu'))
					{
						$walkers[$class] = ($class == 'Walker_Nav_Menu') ? 'Default Walker' : ucwords(strtolower(str_replace(array("_", "-"), " ", $class)));
					}
				}

				if(!empty($walkers))
				{ ?>

				<p>
					<label for="<?=$this->get_field_id('walker')?>"><? _e('Walker Class:'); ?></label>
					<select id="<?=$this->get_field_id('walker')?>" name="<?=$this->get_field_name('walker')?>"><?
						foreach($walkers as $class => $name)
						{ ?>

						<option value="<?=esc_attr($class)?>" <? selected($class, $walker); ?>><?=esc_html($name)?></option><?
						} ?>

					</select>
				</p><?
				}

				if($wp_customize instanceof WP_Customize_Manager)
				{ ?>

				<p class="edit-selected-nav-menu"<?
				if(!$nav_menu)
				{
					echo ' style="display: none;"';
				} ?>>
					<button type="button" class="button"><? _e('Edit Menu'); ?></button>
				</p><?
				} ?>

			</div><?
		}
	}


	add_action('widgets_init', function()
	{
		register_widget('WP_Nav_Menu_Widget_Custom');
	});
