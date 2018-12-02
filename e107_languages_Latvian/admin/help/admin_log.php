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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/admin_log.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "System Logs Help";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Data filters</b><br />
  Jūs varat norādīt dažādus filtrus, kas ierobežo datu apjomu, kas jāpārskata. Tie tiek saglabāti sīkdatnē, līdz jūs pametat.<br />
  Tviņam jāiespējo to sākuma un beigu datuma / laika filtri, izmantojot to attiecīgās izvēles rūtiņas.<br />
  Citi filtri ir aktīvi, ja lodziņā ir vērtība.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Šī lapa parāda lietotāja aktivitāti, kuru esat izvēlējies reģistrēt.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Šajā lapā konfigurē dažādas sistēmas žurnālu opcijas.<br /><br />
  <b>Kopējie iestatījumi</b><br />
  Iestata rindu skaitu žurnāla kurā attēlot.<br /><br />
  <b>Admina Žurnāls</b><br />
  Šis logs saglabā notikumus, kamēr tie nav īpaši izdzēsti; izmantojiet šo opciju, lai izdzēstu vecos notikumus.<br /><br />
  <b>Lietotāju revīzijas žurnāls</b><br />
  Šis žurnāls izseko lietotāju aktivitāti. Reģistrētiem lietotājiem tiek izsekoti tikai tie, kas atrodas norādītajā klasē - varat to izdarīt 'Lietotāji' izsekot
   ikvienam vai izveidojiet īpašu lietotāju grupu mežizstrādei. Tad jūs varat noteikt darbības veidu, kuru vēlaties pieteikties.<br />
  Registration events may be tracked separately.<br /><br />
  <b>Ritošā žurnāla</b><br />
  Šo žurnālu izmanto, lai izsekotu neparedzētus notikumus, palīdzētu ar atkļūdošanu utt. To var deaktivizēt. Notikumi automātiski tiek noņemti pēc noteiktā dienu skaita.
  ";
  break;
case 'rolllog' :
  $text = "The rolling log displays various abnormal events which are not otherwise logged. It may also be used for code debugging and monitoring.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Šajā lapā ir redzamas lietotāju lejupielādes.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Šajā lapā tiek parādīti lietotāju komentāri, kuru opcijas var atlasīt pēc lietotāja ID, tipa un datuma. Nevēlamus komentārus var dzēst.";
  break;
case 'detailed' :
  $text = "Galvenie sistēmas žurnāli ieraksta laiku ar augstu precizitāti (ja to atbalsta serveris to atbalsta), un šī lapa ļauj jums pārbaudīt ierakstus
	kas notiek relatīvi nelielā laika periodā. Ieraksti no administrēšanas žurnāla, revīzijas žurnāla un ritošā žurnāla ir apvienoti, lai jūs varētu redzēt precīzu 
	attiecības starp notikumiem.";
  break;
case 'adminlog' :
default :
  $text = "Šajā lapā ir redzama administratora aktivitāte.<br /><br />
  (Šobrīd kodam joprojām tiek pievienots žurnāls, tāpēc saraksts nav pilnīgs.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
?>
