<?php 

/*
Plugin Name: Automatic link
Description: It's a shortcode for nice url in the the text editor
Author: Eduplessis

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

function automatic_link( $atts ) {
  $atts = extract( shortcode_atts( array( 'id'=>'', 'mu'=> get_current_blog_id() ),$atts ) );
  return get_blog_permalink( $mu, $id );
}
add_shortcode( 'link','automatic_link' );