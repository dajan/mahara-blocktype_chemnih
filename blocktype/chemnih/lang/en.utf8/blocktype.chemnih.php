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
$string['description'] = 'Embed 2D chemical structures from NIH NCI/CADD Chemical Identifier Resolver';
$string['chemnihsearch'] = 'Search term';
$string['view'] = 'View image file';
$string['chemnihsearchdescription2'] = 'Enter the search term.';
$string['chemnihsearchpatterns'] = 'This may be a <a target="blank" href="http://cactus.nci.nih.gov/chemical/structure/documentation">Chemical name</a> (trivial name, systematic name, synonym), <a target="blank" title="SMILES reference" href="http://www.daylight.com/dayhtml/doc/theory/theory.smiles.html">SMILES</a>, <a target="blank" href="http://www.iupac.org/inchi/release102final.html">InChI</a> or <a target="blank" href="http://www.iupac.org/inchi/release102final.html">Standard InChIKey</a> format.
<br />NB Some search terms may not return correct stereochemistry or tautomerism';
$string['showdescription'] = 'Show Description?';
$string['width'] = 'Width';
$string['height'] = 'Height';
$string['invalidurl'] = 'Invalid URL';
$string['displayedformula'] = 'Displayed formula';
$string['full'] = 'Full (all atoms and atom labels)';
$string['skeletal'] = 'Skeletal (No backbone carbon atom labels, no attached hydrogen atoms)';
?>