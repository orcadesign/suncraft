<?php

	/**
	 * Custom walker for socicon icons in nav menus
	 * 
	 * wp_nav_menu(array
	 * (
	 *     "walker" => new Socicon_Menu_Walker
	 * ));
	 */
	
	class Socicon_Menu_Walker extends Walker_Nav_Menu
	{
		public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
		{
			if(isset($args->item_spacing) and 'discard' === $args->item_spacing)
			{
				$t = '';
				$n = '';
			}
			else
			{
				$t = "\t";
				$n = "\n";
			}

			$indent = ($depth) ? str_repeat($t, $depth) : '';

			$classes = empty($item->classes) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$args = apply_filters('nav_menu_item_args', $args, $item, $depth);

			$link_classes = array();
			$class_names  = apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth);

			foreach($class_names as $i => $class)
			{
				if(substr($class, 0, 7) == 'socicon' or substr($class, 0, 3) == 'fa-' or $class == 'fa')
				{
					unset($class_names[$i]);

					$link_classes[] = $class;
				}
			}

			$link_classes = empty($link_classes) ? '' : ' class="' . esc_attr(implode(' ', $link_classes)) . '"';
			$class_names  = empty($class_names) ? '' : ' class="' . esc_attr(implode(' ', $class_names)) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth);
			$id = $id ? ' id="' . esc_attr($id) . '"' : '';

			$output .= $indent . '<li' . $id . $class_names .'>';

			$atts = array();
			$atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
			$atts['target'] = !empty($item->target)     ? $item->target     : '';
			$atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
			$atts['href']   = !empty($item->url)        ? $item->url        : '';

			$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

			$attributes = '';

			foreach($atts as $attr => $value)
			{
				if(!empty($value))
				{
					$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$title = apply_filters('the_title', $item->title, $item->ID);

			$title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

			$item_output = $args->before;
			$item_output .= '<a'. $attributes . $link_classes .'>';
			$item_output .= ($args->link_before ? $args->link_before : '<font>') . $title . ($args->link_after ? $args->link_after : '</font>');
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}
	}
