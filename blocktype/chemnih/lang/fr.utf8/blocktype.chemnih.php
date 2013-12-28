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

$string['title'] = 'Chem 2D NIH';
$string['description'] = 'Inclure des structures chimiques en 2D dans une page du portfolio, depuis le service NIH NCI/CADD Chemical Identifier Resolver';
$string['chemnihsearch'] = 'Rechercher le terme';
$string['view'] = 'Afficher le fichier image';
$string['chemnihsearchdescription2'] = 'Entrez un terme à rechercher.';
$string['chemnihsearchpatterns'] = 'Vous pouvez utiliser un <a target="blank" href="http://cactus.nci.nih.gov/chemical/structure/documentation">nom chimique</a> (nom courant, systématique, synonyme), ou un nom au format <a target="blank" title="référence SMILES" href="http://www.daylight.com/dayhtml/doc/theory/theory.smiles.html">SMILES</a>, <a target="blank" href="http://www.iupac.org/inchi/release102final.html">InChI</a>, ou <a target="blank" href="http://www.iupac.org/inchi/release102final.html">InChIKey standard</a>.
<br /><b>Note</b> : Certaines recherches peuvent ne pas donner retourner de résultat de stéréochimie ou tautomerisme correcte';
$string['showdescription'] = 'Afficher la description?';
$string['width'] = 'Largeur';
$string['height'] = 'Hauteur';
$string['invalidurl'] = 'URL invalide';
$string['displayedformula'] = 'Afficher la formule de manière';
$string['full'] = 'Globale (tous les atomes et leurs libéllés)';
$string['skeletal'] = 'Squeletique (sans les atomes de carbone ou d\'hydrogène attachés';
?>