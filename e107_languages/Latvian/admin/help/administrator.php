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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Vietnes administrācijas palīdzība";
$text = "Izmantojiet šo lapu, lai rediģētu vietņu administratorus vai dzēstu vietnes administratorus. Administratoram būs tikai atļauja piekļūt atzīmētajām funkcijām.<br /><br />
Lai izveidotu jaunu administratoru, dodieties uz lietotāja konfigurācijas lapu un atjauniniet esošo lietotāju uz admin statusu.";
$ns -> tablerender($caption, $text);
