<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Search Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Meklēt palīdzību";
$text = "
	Ja jūsu MySQL servera versija to atbalsta, jūs varat pārslēgties
uz MySQL veida noteikšanas metodi, kas ir ātrāka nekā PHP kodēšanas metode. Skatīt preferences.
<br /><br />
	Ja jūsu vietnē ir ietvertas ideogrāfiskās valodas, piemēram, ķīniešu un japāņu valodas
izmantojiet PHP kodēšanas metodi un izslēdziet visu vārdu saskaņošanu.

";
$ns->tablerender($caption, $text);
?>
