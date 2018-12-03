<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Frontpage Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Priekšējā lapa Palīdzība";
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		Noteikumu saraksts tiek skenēts pēc kārtas, līdz sasniedz pašreizējā lietotāja klasi.
Pēc tam tas nosaka lietotāja priekšējo (mājas) lapu, kā arī lapu, kuru viņš redz tūlīt pēc pieteikšanās.
	</p>
 */
$text = "
<p>
	Šajā ekrānā varat izvēlēties, ko parādīt kā vietnes sākumlapu, pēc noklusējuma ir ziņas. Jūs varat arī noteikt, vai
Lietotāji tiek sūtīti uz konkrētu lapu pēc pieteikšanās.
</p>
<p>
	Noteikumi tiek meklēti pēc kārtas, lai atrastu pirmo, kur pašreizējais lietotājs pieder noteikumam, kas norādīts klasē.
Pēc tam šis noteikums nosaka priekšējo (mājas lapu) un jebkuru konkrētu pēc pieteikšanās lapu. Ja nav noteikumu, news.php tiek iestatīts kā sākumlapa.</p>
<p>
	Lietotājs tiek nosūtīts uz norādīto &quot;Post-login page&quot; (ja norādīts) tūlīt pēc pieteikšanās.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
?>
