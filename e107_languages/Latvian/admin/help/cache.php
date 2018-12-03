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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cache.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Kešatmiņa";
$text = "Ja jums ir ieslēgts caching, tas ievērojami uzlabos jūsu vietnes ātrumu un samazinās zvanu skaitu uz sql datu bāzi.<br /><br /><b>SVARĪGS! Ja jūs izveidojat savu tēmu, pārvēršiet kašingu, pretējā gadījumā jebkādas jūsu veiktās izmaiņas netiks atspoguļotas nekavējoties.</b>";
$ns -> tablerender($caption, $text);
