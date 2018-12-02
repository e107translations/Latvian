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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/download.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Lūdzu, augšupielādējiet savus failus mapē ".e_FILE."lejupielàdes mapi, savus attēlus uz ".e_FILE."lejupielādējiet attēlu mapi un sīktēlu attēlus mapē ".e_FILE."sīkattēlu mapē.
<br /><br />
Lai iesniegtu lejupielādi, vispirms izveidojiet vecāku, pēc tam izveidojiet kategoriju zem šī vecāka, pēc tam jūs varēsiet padarīt lejupielādi pieejamu.";
$ns -> tablerender("Download Help", $text);
