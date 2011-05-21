<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2009 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage blocktype-chemnih
 * @author     Geoffrey Rowland
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2011 Geoffrey Rowland, geoff.rowland@yeovil.ac.uk
 *
 * This plugin depends on the NIH NCI/CADD Chemical Identifier Resolver
 * http://cactus.nci.nih.gov/chemical/structure
  */

defined('INTERNAL') || die();

class PluginBlocktypeChemNih extends SystemBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.chemnih');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.chemnih');
    }

    public static function get_categories() {
    	  //Check Mahara release and change menu for Mahara 1.4
    	  require_once(get_config('libroot') . 'version.php');
		  $release = $config->release;
		  if ($release < 1.4) {
            return array('feeds');
        }
        return array('external');
    }

    public static function render_instance(BlockInstance $instance, $editing=false) {
        $configdata = $instance->get('configdata');
        $chemnihid = clean_html(trim($configdata['chemnihid']));
        $chemnihid = preg_replace('/\s+/', ' ', $chemnihid);
        $chemnihid2 = str_replace(' ', '%20', $chemnihid);
        $chemnihid2 = str_replace('#', '%23', $chemnihid2);
        $width   = (!empty($configdata['width'])) ? hsc($configdata['width']) : '300';
        $height  = (!empty($configdata['height'])) ? hsc($configdata['height']) : '300';
        $display = (!empty($configdata['display'])) ? hsc($configdata['display']) : '1';
        $nih = 'http://cactus.nci.nih.gov/chemical/structure/';
        if (isset($configdata['chemnihid'])) {
            $result = '';
            $result .= '<div style="text-align: center; width:'.$width.'px">';
            if ($display == '1') {
            	 $result .= '<a title="'.get_string('view','blocktype.chemnih').'" target="blank" href="'.$nih.$chemnihid2.'/image?width=500&height=500&linewidth=2&symbolfontsize=16">'.$chemnihid.'</a>';
                $result .= '<img style="width:'.$width.'px; height:'.$height.'px; border:1px solid lightgray" src="'.$nih.$chemnihid2.'/image?width='.$width.'&height='.$height.'" />';
    	      }else {
    	      	 $result .= '<a title="'.get_string('view','blocktype.chemnih').'" target="blank" href="'.$nih.$chemnihid2.'/image?hsymbol=all&csymbol=all&width=500&height=500&linewidth=2&symbolfontsize=16">'.$chemnihid.'</a>';
    	      	 $result .= '<img style="width:'.$width.'px; height:'.$height.'px; border:1px solid lightgray" src="'.$nih.$chemnihid2.'/image?hsymbol=all&csymbol=all&width='.$width.'&height='.$height.'" />';
    	      }
    	      $result .= '</div>';
        }
        return $result;
    }

    public static function has_instance_config() {
        return true;
    }

    public static function instance_config_form($instance) {
        $configdata = $instance->get('configdata');
        return array(
            'chemnihid' => array(
                'type'  => 'text',
                'size'  => 50,
                'title' => get_string('chemnihsearch','blocktype.chemnih'),
                'description' => get_string('chemnihsearchdescription2','blocktype.chemnih')
		  . '<br>' . get_string('chemnihsearchpatterns','blocktype.chemnih'),
                'defaultvalue' => isset($configdata['chemnihid']) ? $configdata['chemnihid'] : null,
                'rules' => array(
                    'required' => true,
                ),
                'help' => false,
            ),
            'display' => array(
                'type' => 'radio',
                'title' => get_string('displayedformula','blocktype.chemnih'),
                'separator' => '<br>',
                'help' => false,
                'rules' => array('required' => true),
                'options' => array(
                    1 => get_string('skeletal','blocktype.chemnih'),
                    2 => get_string('full','blocktype.chemnih'),
                ),
                'defaultvalue' =>  (!empty($configdata['display'])) ? $configdata['display'] : '1',
            ),
            'width' => array(
                'type' => 'text',
                'title' => get_string('width','blocktype.chemnih'),
                'size' => 3,
                'rules' => array(
                    'minvalue' => 100,
                    'maxvalue' => 1000,
                ),
                'defaultvalue' => (!empty($configdata['width'])) ? $configdata['width'] : '300',
            ),
            'height' => array(
                'type' => 'text',
                'title' => get_string('height','blocktype.chemnih'),
                'size' => 3,
                'rules' => array(
                    'minvalue' => 100,
                    'maxvalue' => 1000,
                ),
                'defaultvalue' => (!empty($configdata['height'])) ? $configdata['height'] : '300',
            ),
         );
    }

    public static function instance_config_save($values) {
        if ($values['chemnihid']) {
			$values['chemnihid'] = $values['chemnihid'];
		}
        return $values;
    }

    public static function default_copy_type() {
        return 'full';
    }
}

?> 