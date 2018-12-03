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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Aizliedzot lietotājus no jūsu vietnes";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = 'Šī lapa ļauj pārsūtīt banlist datus uz un no šīs vietnes kā CSV (Comma Separated Variable) failus.<br /><br />';
  $text .= "<b>Datu eksportēšana</b><br />
  Izvēlieties eksporta aizlieguma veidus. Lauki tiks nošķirti ar izvēlēto atdalītāju un pēc izvēles iekļauti izvēlētajās pēdiņās.<br /><br />";
  $text .= "<b>Datu importēšana</b><br />
  Jūs varat izvēlēties, vai importētie aizliegumi aizstāj spēkā esošos importētos aizliegumus vai arī tie pievieno sarakstam. Ja importētajos datos ir norādīts derīguma termiņš / laiks, jums
   var izvēlēties, vai tas tiek lietots, vai arī tiek izmantota šīs vietnes vērtība.<br /><br />";
  $text .= "<b>CSV Formāts</b><br />
  Katras faila rindas formāts ir: IP / e-pasts, datums, derīguma termiņš, veids, iemesls, piezīmes.<br />
  Datums un derīguma termiņš ir formātā YYYYMMDD_HHMMDD, izņemot to, ka norāda nulles vērtību 'nezināms' vai 'nenoteikts'<br />
  Būtiska ir tikai IP vai e-pasta adrese; pārējie lauki tiek importēti, ja tie ir klātienē.<br /><br />
  <b>Piezīme:</b> Jums būs jāmaina filetypes.xml, lai ļautu administratoriem augšupielādēt 'CSV' faila tips.";
  break;
case 'times' :
  $text = 'Šajā lapā tiek iestatīta noklusējuma darbība dažādiem aizlieguma veidiem.<br />
  Ja tiek norādīts ziņojums, tas tiks parādīts lietotājam (ja nepieciešams). Ja ziņojums sākas ar \'http://\' or \'https://\' kontrole ir 
  pārsūtīts uz norādīto URL. Pretējā gadījumā lietotājs, visticamāk, iegūs tukšu ekrānu.<br />
  Aizliegums būs spēkā noteiktā laikā; pēc tam tas tiks notīrīts nākamreiz, kad tās piekļūst vietnei.';
  break;
case 'options' :
  $text = '<b>Reverse DNS</b><br />
    Ja tas ir iespējots, tiek meklēta lietotāja IP adrese, lai iegūtu saistīto domēna nosaukumu. Tas piekļūst ārējam serverim, tāpēc tas var notikt
ir aizkave, pirms informācija ir pieejama - un, ja serveris ir izslēgts, var būt ļoti ilga kavēšanās.<br /><br />
	Jūs varat izvēlēties meklēt serveru nosaukumus visos vietnes piekļūt vai tikai pievienojot jaunu aizliegumu.<br /><br />
	<b>Maksimālais piekļuves līmenis</b><br />
	Tas nosaka maksimālo vietnes piekļuves vietu skaitu, kas pieļaujams no viena lietotāja vai IP adreses jebkurā piecu minūšu periodā, un ir paredzēts
lai atklātu pakalpojumu atteikšanas uzbrukumus. 90% no atlasītā limita lietotājs saņem brīdinājumu; sasniedzot ierobežojumu, kas viņiem ir aizliegts.
Viesi un pieslēgtie lietotāji var iestatīt dažādas robežvērtības.<br /><br />
	<b>Retrigger aizlieguma periods</b><br />
	Šī opcija ir piemērota tikai tad, ja ir izmantota iespēja ierobežot lietotājus uz noteiktu laiku, nevis uz nenoteiktu laiku. Ja ir iespējota, un
lietotājs mēģina piekļūt vietnei, aizlieguma periods ir pagarināts (it kā aizliegums tikko sākts).
	';
  break;
case 'edit' :
case 'add' :
$text = "Šajā ekrānā varat aizliegt lietotājus no jūsu vietnes.<br />
Vai nu ievadiet savu pilnu IP adresi, vai arī izmantojiet aizstājējzīmi, lai aizliegtu virkni IP adrešu. Varat arī ievadīt e-pasta adresi, lai pārtrauktu lietotājam reģistrēties kā dalībniekam jūsu vietnē.<br /><br />
<b>Aizliegums pēc IP adreses:</b><br />
IP adreses 123.123.123.123 ievadīšana apstāsies lietotāju ar šo adresi, kas apmeklē jūsu vietni.<br />
IP adreses ievadīšana ar vienu vai vairākiem aizstājējzīmes gala blokos, piemēram, 123.123.123. * Vai 214.098. *. *, Apstāsies nevienu personu šajā IP diapazonā no jūsu apmeklējuma
vietne (Ņemiet vērā, ka jābūt precīzi četrām ciparu vai zvaigznītes grupām)<br /><br />
Atbalsta arī IPV6 formāta adreses, tostarp '::' lai attēlotu nulles vērtību bloku. Katrs pāris ciparu beigās laukos var būt atsevišķs wildcard<br /><br />
<b>Aizliegums pa e-pastu</b><br />
Ievadot e-pasta adresi foo@bar.com, neviens nevarēs izmantot šo e-pasta adresi, reģistrējoties kā dalībnieks savā vietnē.<br />
Ievadot e-pasta adresi *@bar.com, neviens netiks izmantots, izmantojot šo e-pasta domēnu, reģistrējoties kā dalībnieks jūsu vietnē.<br /><br />
<b>Aizliegums pēc lietotāja vārda</b><br />
Tas tiek darīts no lietotāja administrēšanas lapas.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Varat norādīt IP adreses, par kurām jūs zināt 'draudzīgs' šeit - parasti tie, kas paredzēti galvenajiem portāla administratoriem, lai nodrošinātu, ka viņi to var
   vienmēr piekļūstiet vietnei.<br />
  Jums ir ieteicams saglabāt šajā sarakstā norādīto adrešu skaitu līdz minimālajam līmenim; gan drošības, gan arī, lai samazinātu ietekmi uz vietnes veiktspēju.";
  break;
case 'banlog' :
  $text = 'Tajā parādīts visu vietņu piekļuves saraksts, kurā ietverta adrese, kas ir aizliegumu sarakstā vai baltā sarakstā. \'iemesls\' ailē ir redzams rezultāts.';
  break;
case 'white' :
  $text = "Šajā lapā tiek parādīts visu to IP adrešu un e-pasta adrešu saraksts, kuras ir skaidri atļautas.<br />
    Šis saraksts ir prioritārs pār aizliegumu sarakstu - nedrīkst būt iespējams, lai šī saraksta adrese tiktu aizliegta.<br />
	Visas adreses ir jāievada manuāli.";
  break;
case 'list' :
default :
$text = 'Šajā lapā tiek rādīts saraksts ar visām aizliegtajām IP adresēm, saimniekdatoru nosaukumiem un e-pasta adresēm. 
(Aizliegtie lietotāji tiek parādīti lietotāja administrēšanas lapā)<br /><br />
<b>Automātiskie aizliegumi</b><br />
e107 automātiski aizliedz atsevišķas IP adreses, ja tās mēģina pārpludināt vietni, kā arī adreses ar neizdevušiem logins.<br />
Šie aizliegumi arī parādās šajā sarakstā. Jūs varat izvēlēties (opciju lapā), kā rīkoties katram aizlieguma veidam.<br /><br />
<b>Aizlieguma noņemšana</b><br />
Varat iestatīt derīguma termiņu katram aizlieguma veidam, tādā gadījumā ieraksts tiek noņemts, kad beidzies aizlieguma periods. Pretējā gadījumā
  aizliegums paliek, kamēr to noņemat.<br />
Jūs varat mainīt aizlieguma periodu no šīs lapas - laiki tiek aprēķināti no šī brīža.';
}
$ns -> tablerender($caption, $text);
