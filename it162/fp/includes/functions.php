<?php
/*
   functions.php - use to store PHP function for entire site
*/


/*
   makeLinks function will create our dynamic nav when called.
   Call like this:
   echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
   $myReturn = '';


   foreach($linkArray as $url => $text)
   {
       if($url == THIS_PAGE)
       {//selected page - add class reference. This below create additional pages in addition to the ones all ready created
           $myReturn .= '<a class="" href="active' . $url . '">' . $text . '</li>' . PHP_EOL;
       }else{
           $myReturn .= '<a href="' . $url . '">' . $text . '</li>'  . PHP_EOL;
       }   
   }
    
   return $myReturn;   
}


?>
