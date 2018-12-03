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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/upload.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "Failu tipus un maksimālo faila izmēru, ko var augšupielādēt, nosaka lietotāja klases. Šī opcija ģenerē fails ar nosaukumu ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
		kas ir jāpārkopē vai jāpārvieto uz direktoriju ".e_ADMIN_ABS." un pārdēvēta par ".e_READ_FILETYPES." pirms tā stājas spēkā.<br />
		Viena definīcija katrai klasei ir atļauta.<br />
		Ņemiet vērā, ka šīs definīcijas tiek piemērotas visā vietnē, pat ja publiskās augšupielādes funkcija ir atspējota.";
    break;
  case 'options' :
    $text = "Šeit var tikt atspējota pilnīga publiskā augšupielādes sistēma.<br />
		Flatfile uzglabāšana parasti ir piemērota (citādi maksimālais faila lielums ir grūti ierobežots līdz 500 kb).<br />
		Maksimālais faila lielums ignorē visas definīcijas, kas noteiktas filetypes.xml.<br />
		Publiski augšupielādētos failus var ierobežot tikai konkrētā lietotāja klasē, taču šie iestatījumi attiecas arī uz citām vietnes vietnēm, kurās var būt atļautas augšupielādes, piemēram,
ziņas un veidlapas.";
	break;
  case 'view' :
  default :
	$text = "Šajā lapā ir norādīti visi iesniegtie augšupielādes faili. Varat izdzēst tos, pārsūtīt tos uz lejupielādēm vai publicēt ziņas";
}
$ns -> tablerender("Publiska augšupielādes palīdzība", $text);
