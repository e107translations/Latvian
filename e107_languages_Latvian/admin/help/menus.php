<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if(!defined('e107_INIT')){ exit; }

if (!getperms("2")) 
{
	header("location:".e_BASE."index.php");
	exit;
}


$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
			{
				$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Izvēlnes atiestatītas datu bāzē</b><br /><br />";
		}
}
else
{
	unset($text);
}

$text = "Menu-Manager ļauj izvietot un sakārtot savas izvēlnes savā motīvu veidnē. 

[u]Novietot kursoru[/u] pār apakšapgabaliem, lai mainītu esošās izvēlnes vienumus. 

Ja atrodat, ka izvēlnes netiek pareizi atjauninātas, var palīdzēt noklikšķinot uz tālāk redzamās atsvaidzināšanas pogas. 

[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('search')." norāda, ka izvēlnes redzamība ir mainīta.
[/html]
";

$text = $tp->toHtml($text, true);
$ns->tablerender("Izvēlnes pārvaldnieka palīdzība", $text);
