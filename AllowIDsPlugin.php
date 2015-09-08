<?php 
/**
*Allow IDs
*@copyright Copyright 2015 Ken Albers
*@license   [description]http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
*/

/**
 * The Allow IDs plugin
 *
 * @package  AllowIDs
 */

class AllowIDsPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array (
        'initialize',
        );

    public function hookInitialize()
    {
        $purifier = Omeka_Filter_HtmlPurifier::getHtmlPurifier();

        $purifier->config->set('Attr.EnableID', true);

    }
}

 ?>