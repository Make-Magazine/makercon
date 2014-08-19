<?php
/**
 * Tab Menu template functions
 *
 * @package makercon
 * @since WP 3.0.0
 */

/**
 * Create HTML list of nav menu items.
 *
 * @since WP 3.0.0
 * @uses Walker
 */
    class Tabs_Walker_Nav_Menu extends Walker_Nav_Menu {
 
      
	function start_lvl( &$output, $depth = 0, $args = array() ) {
 
        $indent = str_repeat( "\t", $depth );
        $output    .= "\n$indent<div class=\"start_lvl tab-menu\">\n";
        
      }

      /**
      * Ends the list of after the elements are added.
      *
      * @see Walker::end_lvl()
      *
      * @since WP 3.0.0
      *
      * @param string $output Passed by reference. Used to append additional content.
      * @param int    $depth  Depth of menu item. Used for padding.
      * @param array  $args   An array of arguments. @see wp_nav_menu()
      */
      function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</div>\n";
        }

 
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
        $item_attributes = '';
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'col-md-3';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;

        if(in_array('current_page_item', $classes)) $classes[] = 'active';
        //$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );


        $class_names = ' class="' . esc_attr( join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) ) ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
        $output .= $indent . '<div' . $id . $value . $class_names . $item_attributes . '>';
 
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
  
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>'; //no caret;
        $item_output .= $args->after;
 
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
      }

      /**
       * Ends the element output, if needed.
       *
       * @see Walker::end_el()
       *
       * @since WP 3.0.0
       *
       * @param string $output Passed by reference. Used to append additional content.
       * @param object $item   Page data object. Not used.
       * @param int    $depth  Depth of page. Not Used.
       * @param array  $args   An array of arguments. @see wp_nav_menu()
       */
      function end_el( &$output, $item, $depth = 0, $args = array() ) {
	      $output .= "</div>\n";
      }


 
      function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        
        if ( !$element )
          return;
        
        $id_field = $this->db_fields['id'];
 
        //display this element
        if ( is_array( $args[0] ) ) 
          $args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
        else if ( is_object( $args[0] ) ) 
          $args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
        $cb_args = array_merge( array(&$output, $element, $depth), $args);
        call_user_func_array(array(&$this, 'start_el'), $cb_args);
 
        $id = $element->$id_field;
 
        // descend only when the depth is right and there are childrens for this element
        if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
 
          foreach( $children_elements[ $id ] as $child ){
 
            if ( !isset($newlevel) ) {
              $newlevel = true;
              //start the child delimiter
              $cb_args = array_merge( array(&$output, $depth), $args);
              call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
            }
            $this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
          }
            unset( $children_elements[ $id ] );
        }
 
        if ( isset($newlevel) && $newlevel ){
          //end the child delimiter
          $cb_args = array_merge( array(&$output, $depth), $args);
          call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
        }
 
        //end this element
        $cb_args = array_merge( array(&$output, $element, $depth), $args);
        call_user_func_array(array(&$this, 'end_el'), $cb_args);
        
      }
      
    }
 

 
