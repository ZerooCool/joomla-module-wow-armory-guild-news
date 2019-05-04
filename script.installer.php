<?php

/*
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2011 - 2015 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @update by  Zer00CooL - https://www.visionduweb.fr
 * @up_site    For the guild https://ethernium.fr
 * @up_year    2019
 */

/* Empêcher un accès direct au fichier en dehors de joomla. */
defined('_JEXEC') or die('L\'accès direct à cet emplacement n\'est pas autorisé.');

/* Déclaration de la classe mod_wow_armory_guild_newsInstallerScript */
class mod_wow_armory_guild_newsInstallerScript
{
    /* Déclaration de la fonction preflight */
    public function preflight()
    {
        /* Test conditionnel si la classe WoW n'existe pas, alors : */
        // Indiquer un message pour demander l'installation du plugin système WoW pour Joomla.
        if (!class_exists('WoW')) {
            $link = JHtml::_('link', 'https://github.com/ZerooCool/joomla-plugin-system-wow', 'Le plugin système WoW pour Joomla.', array('target' => '_blank'));
            JFactory::getApplication()->enqueueMessage(sprintf('Il est nécessaire d\'installer et de configurer la dernière version du plugin système WoW pour Joomla depuis ', $link), 'error');
            return false;
        }
        return true;
    }
}
