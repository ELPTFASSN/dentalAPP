<?php 
/** 
    * Smarty plugin 
    * 
    * @package Smarty 
    * @subpackage PluginsModifier 
    */ 

   /** 
    * Smarty date_format modifier plugin 
    * 
    * Type:     modifier<br> 
    * Name:     calculate_age<br> 
    * Purpose:  Calculate age based on a given date<br> 
    * Input:<br> 
    *          - string: date in the YYYY-MM-DD format 
    * 
    * @author Ivan Melgrati  
    * @param string date input date string 
    * @return int 
    */ 
   function smarty_modifier_calculate_age($date) 
   { 
      $year_diff = 0; 

      $date = str_replace('/', '-', substr(trim($date), 0, 10)); 
        
      if ($date != '' && $date != '0000-00-00') 
      { 
         list($year, $month, $day) = explode("-", $date); 
         $year_diff = intval(date("Y")) - intval($year); 
         $month_diff = intval(date("m")) - intval($month); 
         $day_diff = intval(date("d")) - intval(substr($day, 0, 2)); 
         if ($month_diff < 0) 
         { 
            $year_diff--; 
         } 
         else 
         { 
            if (($month_diff == 0) && ($day_diff < 0)) 
            { 
               $year_diff--; 
            } 
         } 
      } 

      return $year_diff; 
   }