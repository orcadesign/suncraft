<?php

	/**
	 * Output a responsive <img> tag based on the contents of an ACF field group
	 * @version  0.0.3
	 * @param    Image  1x     required  The image in its actual resolution
	 * @param    Image  2x     optional  Double resolution version of the image
	 * @param    File   svg    optional  SVG version of the image
	 * @param    URL    href   optional  URL for the image link
	 * @param    Text   title  optional  Context title for the image link
	 */
	function responsive_image($image_field, $alt = NULL, $class = '', $units = 'em')
	{
		$tag = '';

		if(isset($image_field['href']) and trim($image_field['href']))
		{
			$tag .= '<a href="' . esc_attr($image_field['href']) . '"' . (preg_match("/^http/i", $image_field['href']) ? ' target="_blank"' : '') . ((isset($image_field['title']) or $alt) ? ' title="' . esc_attr(isset($image_field['title']) ? $image_field['title'] : $alt) . '"' : '') . '>';
		}

		$tag .= '<img';

		$single = NULL;
		$double = NULL;
		$svg    = NULL;

		foreach($image_field as $field_name => $field)
		{
			if(is_numeric($field))
			{
				$field = acf_get_attachment($field);
			}

			switch(true)
			{
				case (!!preg_match("/(_|-)?svg$/i", $field_name) and isset($field['url'])):
				{
					$svg = $field['url'];

					continue 2;
				}

				break;

				case (!!preg_match("/(_|-)?2x$/i", $field_name) and isset($field['url'])):
				{
					$double = $field['url'];

					continue 2;
				}

				break;

				default:
				{
					if(isset($field['url']))
					{
						$single = $field;
					}
				}

				break;
			}
		}

		if(!$single)
		{
			return '';
		}

		$tag .= ' alt="' . esc_attr($alt ? $alt : $single['title']) . '"';

		if($class)
		{
			$tag .= ' class="' . esc_attr($class) . '"';
		}

		$units = strtolower($units);

		if($units == 'em' or $units == 'rem')
		{
			$tag .= ' style="width: ' . esc_attr($single['width'] / 10) . $units . '; height: ' . esc_attr($single['height'] / 10) . $units . ';"';
		}
		else
		{
			$tag .= ' width="' . esc_attr($single['width']) . '" height="' . esc_attr($single['height']) . '"';
		}

		if($svg)
		{
			$tag .= ' src="' . esc_attr($svg) . '" onerror="this.src=\'' . esc_attr($single['url']) . '\';';

			if($double)
			{
				$tag .= 'this.srcset=\'' . esc_attr($single['url']) . ' 1x, ' . esc_attr($double) . ' 2x\';';
			}

			$tag .= '"';
		}
		else
		{
			$tag .= ' src="' . esc_attr($single['url']) . '"';

			if($double)
			{
				$tag .= ' srcset="' . esc_attr($single['url']) . ' 1x, ' . esc_attr($double) . ' 2x"';
			}
		}

		$tag .= ' />';

		if(isset($image_field['href']))
		{
			$tag .= '</a>';
		}

		return $tag;
	}
