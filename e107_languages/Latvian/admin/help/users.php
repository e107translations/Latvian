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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Lietotāju pārvaldība";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Šī lapa ļauj jums izveidot lietotāju, kurš nekavējoties ir parastais vietnes dalībnieks, neatkarīgi no tā, kāda veida klase jums ir piešķirts.<br /><br />
	Ja jūs atzīmējat lodziņu 'Nosūtīt apstiprinājuma e-pastu ar paroli jaunam lietotājam', lietotājvārds un parole tiek sūtīti <b> skaidrā </ b>, tādēļ lietotājam ir jāmaina
viņu parole saņemšanas brīdī.
	";
    break;

  case 'prune' :
	$text = "Bulk izdzēš nevēlamus lietotājus no datubāzes. Tie var būt tie, kas neveica reģistrācijas procesu, vai
tiem, kuru e-pasta adreses atgriezās. Jebkurš foruma ziņas, komentāri utt paliek, un tiek atzīmēti kā 'Svītrots lietotājs'.
	";
	break;

  case 'unverified' :
	$text = "Suzaicina tos dalībniekus, kuri nav pabeidzuši reģistrāciju. Parasti tāpat kā pilnam dalībnieku sarakstam.";
    break;

  case 'options' :
	$text = "Iestata dažādas iespējas, kas ietekmē visus lietotājus.<br /><br />
	<b>Atļaut ielādēt attēlu</b><br />
	Ja tas ir iespējots, lietotāji var augšupielādēt savu izvēli, kas tiek saglabāta jūsu serverī. Tam var būt drošības sekas.<br /><br />
	<b>Atļaut fotoattēlu augšupielādi</b><br />
	Ja tas ir iespējots, lietotāji var augšupielādēt fotoattēlu pēc savas izvēles, kas tiek saglabāts jūsu serverī. Tam var būt drošības sekas.<br /><br />
	<b>Tiešsaistes lietotāju izsekošana</b><br />
	Tam jābūt iespējotam, lai sekotu līdzi lielākajai lietotāju aktivitātei, tostarp tiešsaistes dalībnieku skaitam. Tas ievērojami palielina datu bāzes darbību.<br /><br />
	<b>Dalībvalsts informācija</b><br />
	Nosaka, kura dalībnieku klase var apskatīt dalībnieku sarakstu.
	";
    break;

  default :
	$text = "Šajā lapā ir redzams jūsu reģistrēto dalībnieku saraksts. Jūs varat atjaunināt savus iestatījumus, piešķirt viņiem administratora statusu un iestatīt lietotāju klasi
cita starpā.<br /><br />
	Kārtojuma secību var mainīt, noklikšķinot uz slejas virsraksta.<br />
	Parādītās slejas var mainīt, noklikšķinot uz 'Rediģēt displeja opcijas', atlasot vajadzīgās slejas, pēc tam noklikšķinot uz 'Meklēt / Atsvaidzināt'<br /><br />
	<b>Info</b><br />
	Rādīt šī lietotāja profilu (var arī noklikšķināt uz redzamā vārda)<br /><br />
	<b>Labot</b><br />
	Rediģējiet šī lietotāja iestatījumus. <br /><br />
	<b>Bloķēt/Atbloķēt</b><br />
	Nosakiet, vai lietotājs var piekļūt vietnei. <br /><br />
	<b>Aktivizēt</b><br />
	Tas aktivizē lietotāju, kurš parasti atbildētu uz aktivizācijas e-pastu.<br /><br />
	<b>Pārsūtīt e-pastu</b><br />
	Atkārtoti nosūta lietotājam aktivizācijas e-pastu.<br /><br />
	<b>Pārbaudīt e-pastu</b><br />
	Pārbaudiet lietotāja derīguma e-pasta adresi (nesūta e-pastu)<br /><br />
	<b>Iestatīt klasi</b><br />
	Iestatīt lietotāja klasei piederīgu dalību<br /><br />
	<b>Dzēst</b><br />
	Pilnībā lietotājs tiek noņemts no dalības vietnē (visas foruma ziņas, komentāri uc paliek, un tiek atzīmēti kā 'Svītrots lietotājs')
	";
}


$ns -> tablerender($caption, $text);
unset($text);
