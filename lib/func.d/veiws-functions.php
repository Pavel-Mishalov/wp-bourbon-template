<?php

///////////////////////////
// The init views blocks //
///////////////////////////

/*====================================================
function miracle_get_menu_item( $bem_block ){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$items = get_field( 'miracle-main-menu' );
		foreach ( $items as $item ):
			$name = $item['name'];
			$select = $item['anchor'];
			$class = '';
			switch ( $select ) {
				case 'simple':
					$link = $item['simple'];
					break;
					
				case 'anchor':
					$link = $item['section'];
					$class = ( $bem_block == 'menu' ) ? 'menu__link_anchor' : '';
					break;
					
				case 'page':
					$link = $item['page'];
					break;
					
				case 'post':
					$link = $item['post'];
					break;
				
				default:
					$link = '';
					break;
			}
			$block = file_get_contents( get_template_directory() . '/views_support/block/menu/menu-item.php' );
			$block = str_replace( '<% link %>', $link, $block );
			$block = str_replace( '<% class %>', $class, $block );
			$block = str_replace( '<% name %>', $name, $block );
			$block = str_replace( '<% bem_block %>', $bem_block, $block );
			$html .= $block;

		endforeach;
	else:
		$items =  get_field( 'miracle-global-menu-items', 'option' );
		foreach ( $items as $item ):
			$name = $item['name'];
			$select = $item['type'];
			$class = '';
			switch ( $select ) {
				case 'page':
					$link = $item['page'];
					break;
					
				case 'post':
					$link = $item['post'];
					break;
					
				case 'out':
					$link = $item['link'];
					break;
				
				default:
					$link = '';
					break;
			}
			$block = file_get_contents( get_template_directory() . '/views_support/block/menu/menu-item.php' );
			$block = str_replace( '<% link %>', $link, $block );
			$block = str_replace( '<% class %>', $class, $block );
			$block = str_replace( '<% name %>', $name, $block );
			$block = str_replace( '<% bem_block %>', $bem_block, $block );
			$html .= $block;

		endforeach;
	endif;

	return $html;
}

==================================================================================*/