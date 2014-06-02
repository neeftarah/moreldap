<?php
/*
 * @version $Id: setup.php 44 2014-03-27 21:05:00Z Thierry Bugier $
LICENSE

This file is part of the moreldap plugin.

Order plugin is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

Order plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GLPI; along with moreldap. If not, see <http://www.gnu.org/licenses/>.
--------------------------------------------------------------------------
@package   moreldap
@author    Dethegeek
@since     2014
---------------------------------------------------------------------- */

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

class PluginMoreldapConfigAuthLDAP extends CommonDBTM {

   function getTabNameForItem(CommonGLPI $item, $withtemplate=0) {
      global $LANG;
      
      $tabNames = array();
      
      if (in_array(get_class($item), array("AuthLDAP"))) {
         $tabNames = array(1 => __("MoreLDAP configuration", "moreldap"));
      } else {
         $tabNames = '';
      }
      return $tabNames;
   }

   static function displayTabContentForItem(CommonGLPI $item, $tabnum=1, $withtemplate=0) {
   
      if (in_array(get_class($item), array("AuthLDAP"))) {
         echo "Configuration for the directory shows here";
      } 
      return true;
   }
    
}