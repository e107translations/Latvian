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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/userclass2.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Lietotāja klases palīdzība";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Iestatiet klases, kurām sākotnēji tika piešķirts jauns vietnes dalībnieks. 
	Ja jums ir iespējota verifikācija, šis uzdevums var notikt vai nu tad, kad lietotājs pierakstās, vai kad lietotājs ir apstiprināts.<br /><br />
	  Un atcerieties, ka, ja jūs izmantojat hierarhijas lietotāju klases, lietotājs automātiski ir visu kategoriju 'augšā' dalībnieks katrā izvēlētajā klasē";
	break;
  case 'options' :
	$text = "Iestatīšanas opcijas ļauj izveidot un noņemt noklusējuma klases hierarhiju. Jūs varat redzēt efektu, apskatot lietotāja koku.<br />
	Tas neiznīcinās jūsu cita klases informāciju, un vēlāk jūs varat mainīt vai noņemt hierarhiju.<br /><br />
	Ja datu bāzes korupcija rodas, jums ir nepieciešams tikai atjaunot klases hierarhiju";
	break;
  case 'membs' :
    $text = "Tagad lietotāja admin lapā";
	break;
  case 'debug' :
	$text = "Tikai pieredzējušiem lietotājiem - tiek parādīta klases hierarhija, kā arī piešķirtās klases un klases, kurām ir pieejami pirmie 20 vietņu dalībnieki.<br />
	Numura klasei priekšā ir tās unikālais ID (atsauces numurs). Katra klases ID ir 0 (nulle). e107 izmanto šos ID, lai apzīmētu klases.<br />
	Pēc klases nosaukuma ir klases redzamība un rediģējamība - piemēram, [vis: 253, rediģēt: 27]. Tas nozīmē, ka vairumā selektoru klase būs redzama tikai tad, ja pašreizējais lietotājs ir 253. Grupas dalībnieks,
un lietotājs var rediģēt savu klases dalību tikai tad, ja viņi ir 27. klases dalībnieki.<br />
	Visbeidzot, pēc '=' ir saraksts ar visām klasēm vai nu virs vai zem katras klases kokā, kā arī šīs klases ID. Tādējādi lietotājs, kurš ir konkrētas klases dalībnieks, būs
būt visu klases loceklim šajā sarakstā.<br /><br />
	Lai palīdzētu saprast, tiek parādīta pirmā 20 dalībnieku klase. Pirmais ieraksts katrā rindā parāda klases, kuras lietotājs ir dalībnieks. The
Otrajā ierakstā ir uzskaitītas visas klases, kurās lietotājs ir dalībnieks, kad mantojums stājas spēkā. Trešais ieraksts parāda, kuras klases biedri viņi var edit";
	break;
  case 'test' :
  case 'special' :
    $text = "Nelietojiet to !!! Tikai izdevējiem !!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Jūs varat izveidot klases vai rediģēt esošās klases no šīs lapas.<br />
         Tas ir noderīgi, lai ierobežotu lietotājus dažām vietnes daļām. Piemēram, jūs varētu izveidot klasi TEST,
tad izveidojiet forumu, kas TEST klases lietotājiem ļautu piekļūt tikai tam.<br /><br />
		 Klases nosaukums tiek parādīts nolaižamajos sarakstos un tamlīdzīgi; dažviet tiek parādīts arī detalizēts apraksts. <br /> <br />
Klases ikona var tikt parādīta dažādās vietnes vietnēs, ja tā ir iestatīta.<br /><br />
		 Lai ļautu lietotājiem noteikt, vai viņi var būt klasei piederīgi, ļauj viņiem to pārvaldīt. Ja šeit šeit iestatāt 'neviens', tikai administratori
var vadīt kluba piederību<br /><br />
		 Laukā 'Atpazīstamība' varat paslēpt klasi no lielākās daļas dalībnieku - attiecas uz dažiem nolaižamajiem sarakstiem un izvēles rūtiņām.<br /><br />
		 'Klases vecāks' ļauj iestatīt klases hierarhiju. Ja hierarhijas 'augšā' ir 'visi / publiska' vai 'dalībnieka' klases, tad
klases nolaižot hierarhiju, ir arī viņu vecāku klases tiesības, un šīs klases ir vecāks un tā tālāk. Ja ir hierarhijas 'augšā'
klases 'Neviens / neviens', tad tiesības tiek uzkrātas pretējā virzienā - klasē tiek uzkrātas visas <b> zemāk </ b> kategorijas tiesības <
koks. Iegūtais koks ir redzams lapas apakšdaļā; jūs varat paplašināt un noslēgt līgumus, noklikšķinot uz laukiem '+' un '-'.";
	break;
  case 'display' :
  default :
	$text = "No šīs lapas varat atlasīt rediģēšanas klases un arī dzēst esošās klases.";
}
e107::getRender() -> tablerender($caption, $text);
