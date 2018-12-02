<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
	  $text = 'Sūtīt pastu ar ierobežojumiem, kurus norādījis papildu spraudnis';
	  break;
	case 'debug' :
	  $text = 'Tikai izstrādātājiem. Pašlaik netiek izmantots';
	  break;
	case 'saved' :
	  $text = 'Izvēlieties un izmantojiet saglabāto e-pasta veidni, lai nosūtītu mailshot. Dzēst jebkuru veidni, kas vairs nav nepieciešama';
	  break;
	case 'pending' :
		$text = 'Sūtīšanai izlaisto sūtījumu saraksts kopā ar pašreizējo statusu. Pasta plānotāja uzdevums apstrādās šos e-pasta ziņojumus, ņemot vērā to
agrākos un jaunākos nosūtīšanas datumus';
		break;
	case 'held' :
		$text = 'To e-pasta ziņojumu saraksts, kas sagatavoti nosūtīšanai, bet vēl nav izlaisti';
		break;
	case 'sent' :
	  $text = 'Aizpildīto mašīntulkojumu saraksts. Ļauj redzēt sūtīšanas rezultātus.<br />';
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
	  $text = 'Izveidojiet e-pastu, piešķiriet tam nozīmīgu nosaukumu un atlasiet adresātu sarakstu. Visu varat saglabāt kā veidni vēlāk vai nosūtīt uzreiz.<br />';
	  $text .= 'E-pasta adreses var pievienot plugins (piemēram, biļetenu), un dublikāti tiek noņemti, kad pasts tiek nosūtīts<br />';
	  $text .= 'Jebkurš pielikums ir atlasīts no derīgu lejupielāžu saraksta.<br />';
	  $text .= 'E-pastu var nosūtīt kā vienkāršu tekstu (visizplatītākais un viszemākais drauds tikt klasificētam kā surogātpasts) vai kā HTML (tādā gadījumā tiek izveidota vienkārša teksta alternatīva). Tēmas stils
var pēc izvēles pievienot e-pastu. Alternatīvi var izvēlēties iepriekš izveidotu veidni.';
	  break;
	case 'recipients' :
		$text = 'Parāda visus e-pasta adresātus vai potenciālos adresātus kopā ar pašreizējo statusu';
		break;
	case 'prefs' :
	  $text = '<b>Konfigurēt mailshot opcijas.</b><br />
	  Testa e-pasts tiek nosūtīts, izmantojot pašreizējo metodi un iestatījumus. Ja jums rodas problēmas ar e-pasta ziņojumu strauju attīstību, mēģiniet nosūtīt testa e-pastu uz: <i> check-auth@verifier.port25.com </ i>, lai nodrošinātu, ka jūsu servera MX ieraksti ir pareizi. Protams, pārliecinieties, ka jūsu vietnes e-pasta adrese ir pareiza, pirms to izdarīt.<br /><br />';
	  $text .= '<b>E-pasta nosūtīšanas metode</b><br />
	  Izmantojiet SMTP, lai, ja iespējams, nosūtītu pastu. Iestatījumi būs atkarīgi no jūsu saimniekdatora pasta servera.<br /><br />';
	  $text .= '<b>E-pasta noklusējuma formāts</b><br />
	  E-pasta ziņojumus var nosūtīt tikai vienkāršā tekstā vai HTML formātā. Pēdējais parasti dod labāku izskatu, bet ir vairāk tendētas uz dažādu filtru
drošības pasākumi. Ja izvēlaties HTML, tiek pievienota atsevišķa vienkārša teksta daļa.<br /><br />';
	  $text .= '<b>Lielapjoma pasta kontrole</b><br />
	  Šeit iestatītās vērtības būs atkarīgas no jūsu saimniekdatora un nosūtīto e-pasta ziņojumu skaita; var būt iespējams iestatīt visas vērtības uz nulli tā, lai
pasta rinda tiek iztukšota gandrīz uzreiz. Parasti vislabāk ir nosūtīt mazāk nekā 500 e-pastu stundā.<br /><br />';
	  $text .= '<b>Atkārtoti pa e-pastu</b><br />
	  Jūs varat norādīt e-pasta adresi, lai saņemtu atgriešanas atbildi, ja e-pasts nav piegādājams. Ja jums ir kontrole pār savu serveri, varat norādīt
atsevišķs plānotāja vadāms automātiskās apstrādes skripts; tā saņem atlēciņas ziņojumus, kad tie ierodas, un atjaunina statusu uzreiz. Pretējā gadījumā jūs varat norādīt atsevišķu e-pasta kontu,
kuru var pārbaudīt periodiski (izmantojot plānotāju) vai manuāli, izmantojot lietotāja opciju izvēlni. Parasti tas būs standarts
POP3 konts; izmantojiet ar TLS saistītās opcijas tikai tad, ja to īpaši prasījis jūsu resursdators<br /><br />';
	  $text .= '<b>E-pasta adreses avoti</b><br />
	  Ja jums ir papildu ar pastu saistīti spraudņi, varat izvēlēties, kuri no tiem var iekļaut sarakstā e-pasta adreses.<br /><br />';
	  $text .= '<b>Logging</b><br />
	  The logging opcija izveido teksta failu sistēmas žurnāla direktorijā. Tas periodiski jāizdzēš. The \'logging
	  only\' Iespējas ļauj precīzi redzēt, kas saņems e-pasta ziņojumus, ja tos faktiski nosūtīs. The \'with errors\' option fails every
	  7th email, primarily for testing';
	  break;
	 case 'maint' :
		$text = 'Pasta datu bāzes uzturēšanas funkcijas';
		break;
	default :
	  $text = 'Bezformēta iespēja';
  }

$ns->tablerender('Mail Help', $text);
