<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/newspost.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Newspost Help";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<b>vispārējs</b><br />
Ķermenis tiks parādīts galvenajā lapā; pagarināts būs lasāms, noklikšķinot uz 'Lasīt vairāk' saites.
<br />
<br />
<b>Rādīt tikai nosaukumu</b>
<br />
Iespējojiet šo, lai parādītu ziņu nosaukumu tikai pirmajā lapā, ar noklikšķināmu saiti uz pilnu stāstu.
<br /><br />
<b>Aktivizēšana</b>
<br />
Ja iestatāt sākuma un / vai beigu datumu, jūsu ziņu vienums tiks rādīts tikai starp šiem datumiem.
";
	break;
  case 'cat' :
	$text = "Jūs varat nodalīt savus ziņu priekšmetus dažādās kategorijās un ļaut apmeklētājiem rādīt tikai ziņu vienumus šajās kategorijās.<br /><br /> Augšupielādējiet ziņu ikonu attēlus abās ".e_THEME."-yourtheme-/images/ or themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Iestatiet dažādas ar ziņām saistītas iespējas<br /><br />
	<b>Jaunumu kategorijas kolonnas</b><br />
	Nepieciešams izvēlēties tēmu atbalstu<br /><br />
	<b>Ziņu ziņas, lai parādītu vienā lapā</b><br />
	Par galveno ziņu lapu; parāda vienumus neeksistējošā formātā.<br /><br />
	<b>Ziņu ziņas, kas jāatspoguļo arhīvā</b><br />
	Nosaka ziņu amatu skaitu, kas tiek rādīti kā virsraksts tikai katrā ziņu lapā (iekļauta iepriekšējā kopējā vērtībā).<br /><br />
	<b>Iespējot WYSIWYG redaktoru</b><br />
	Nepieciešams, lai lietotāji, kas var iesniegt ziņas, varētu arī publicēt HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'Visu ziņu saraksts. Lai rediģētu vai dzēstu, noklikšķiniet uz vienas no ikonām \'opcijas\' sleja. Lai skatītu vienumu, noklikšķiniet uz
par virsrakstu.';
}
$ns -> tablerender($caption, $text);
