<?php
/**
 * @brief     Contains HTML formatting functions.
 * @file      htmlUtils.php
 * @date      March 31, 2014
 * @ingroup   HTML
 */


/**
 * @brief  Builds the bootstrap navigation menu from passed array
 * @author Fred R. McClurg
 * @date   April 3, 2014
 */
function buildNavigationMenu( $menu, $indent = 0 )
{
   if ( ! array_key_exists('label', $menu) )
   {
      $class = "nav nav-pills nav-stacked";  // base value
      $id = "";  // base value

   	if ( $indent == 0 )
   	{
   		$class .= " panel panel-default";
   		$id = "id=\"side-menu\"";
   	}
   	elseif ( $indent == 1 )
   	{
   		$class .= " nav-second-level";
   	}
   	elseif ( $indent == 2 )
   	{
   		$class .= " nav-third-level";
   	}

      printf( "%s<ul class=\"%s\" %s>\n",  
                 str_repeat( " ", $indent * 3 ),
                 $class, $id );
   }

   foreach ( $menu as $key => $value )
   {
      if ( is_array( $value ) )
      {
         buildNavigationMenu( $value, $indent + 1 );
      }
      else
      {
         $label = $menu['label'];
         $icon = $menu['icon'];
         $href = $menu['href'];
         $parent = $menu['parent'];
         $arrowClass = "";
         
         if ( $parent )
         {
			   $arrowClass = "<span class=\"fa arrow\"></span>";
         }
         
         // printf( "%s<li> %s: %s </li>\n",
         printf( "%s<li> <a href=\"%s\" class=\"menu\"> <i class=\"fa %s fa-fw\"></i>
%s%s %s </a>\n",
                 str_repeat( " ", $indent * 3 ),
                 $href,
                 $icon,
                 str_repeat( " ", ( $indent + 1 ) * 3 ),
                 $label,
                 $arrowClass );
                 
         break;
      }

   }

   if ( ! array_key_exists('label', $menu) )
   {
      printf( "%s</li>\n", str_repeat( " ", ( $indent + 1 ) * 3 ) );
      printf( "%s</ul>\n", str_repeat( " ", $indent * 3 ) );
   }
}
?>
