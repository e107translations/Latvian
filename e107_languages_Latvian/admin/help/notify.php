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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/notify.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Paziņojums tiek nosūtīts pa e-pastu, kad notiek e107 notikumi.<br /><br />
Piemēram, iestatīt 'IP, kas ir aizliegta plūdu vietā', uz lietotāja kategoriju 'Admin' un visiem administratoriem tiks nosūtīts e-pasts, kad jūsu
vietne tiek appludināta.<br /><br />
Kā citu piemēru, varat arī iestatīt 'Jaunumu ziņu vienumu, ko publicējis admin' lietotāja klases 'Biedri', un visi jūsu lietotāji būs
nosūtīja ziņu rakstus, kurus jūs ievietojat vietnē e-pastā.<br /><br />
Ja vēlaties, lai e-pasta paziņojumi tiktu nosūtīti uz alternatīvu e-pasta adresi, atlasiet opciju 'E-pasts' un
ievadiet e-pasta adresi norādītajā laukā.";

$ns -> tablerender("Paziņojumu palīdzību", $text);
