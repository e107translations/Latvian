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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/lan_installer.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */
define("LANINS_001", "e107 uzstādīšana");
define("LANINS_002", "Solis");
define("LANINS_003", "I");
define("LANINS_004", "Valodas izvēle");
define("LANINS_005", "Lūdzu, izvēlieties valodu, kuru lietot uzstādīšanas laikā");
define("LANINS_007", "IV");
define("LANINS_008", "PHP un MySQL versijas pārbaude / failu atļaujas pārbaude");
define("LANINS_009", "Atjaunot failu atļaujas");
define("LANINS_010", "Failu nevar rakstīt:");
define("LANINS_010a", "Mape nav rakstāma:");
define("LANINS_012", "MySQL funkcijas, šķiet, nepastāv. Tas, iespējams, nozīmē, ka MySQL PHP Extension nav instalēts vai jūsu PHP instalēšana nav apkopota ar MySQL atbalstu.");
define("LANINS_013", "Nevarēja noteikt jūsu MySQL versijas numuru. Šī nav nopietna kļūda, tāpēc, lūdzu, turpiniet instalēšanu, taču ņemiet vērā, ka e107 pareizi jādarbojas, lai MySQL > vai = 3.23.");
define("LANINS_014", "Faila atļaujas");
define("LANINS_015", "PHP versija");
define("LANINS_017", "Izturēts");
define("LANINS_018", "Pārliecinieties, ka visi sarakstā iekļautie faili pastāv un ir rakstāmi serverī. Tas parasti ietver CHMODing viņiem 777, bet vide ir atšķirīga - sazinieties ar saimniekdatoru, ja jums rodas kādas problēmas.");
define("LANINS_019", "Jūsu serverī instalētā PHP versija nevar darboties e107. e107 nepieciešama vismaz vismaz PHP versija ".MIN_PHP_VERSION." pareizi darboties. Vai nu atjauniniet savu PHP versiju, vai arī sazinieties ar savu uzņēmēju, lai veiktu jaunināšanu.");
define("LANINS_021", "II");
define("LANINS_022", "MySQL servera detaļas");
define("LANINS_023", "Lūdzu, ievadiet savus MySQL iestatījumus šeit.

Ja jums ir root tiesības, jūs varat izveidot jaunu datubāzi, atzīmējot lodziņu, ja ne, jums ir jāizveido datu bāze vai jāizmanto iepriekš izveidotā datu bāze.

Ja jums ir tikai viena datubāze, izmantojiet prefiksu, lai citi skripti varētu koplietot to pašu datu bāzi.
Ja jūs nezināt savu MySQL informāciju, sazinieties ar savu interneta uzņēmēju.");
define("LANINS_024", "MySQL serveris:");
define("LANINS_025", "MySQL lietotājvārds:");
define("LANINS_026", "MySQL parole:");
define("LANINS_027", "MySQL datu bāze:");
define("LANINS_028", "Izveidot datu bāzi?");
define("LANINS_029", "Tabulas prefikss:");
define("LANINS_030", "MySQL serveris, kuru vēlaties izmantot e107. Tas var ietvert arī porta numuru. piem., 'hostanosaukums:ports' vai ceļš uz lokālo ligzdu e.g.. \":/ceļš/uz/ligzdu\" vietējam serverim");
define("LANINS_031", "Lietotājvārds, kuru vēlaties e107 izmantot, lai izveidotu savienojumu ar jūsu MySQL serveri");
define("LANINS_032", "Lietotāja ievadītā parole. Nedrīkst saturēt vienu vai dubultas pēdiņas");
define("LANINS_033", "MySQL datubāze, kuru vēlaties e107 uzturēties, dažkārt tiek dēvēta par shēmu. Ir jāsākas ar vēstuli. Ja lietotājam ir datubāzes veidošanas atļaujas, jūs varat izvēlēties automātiski izveidot datubāzi, ja tā vēl nav pieejama.");
define("LANINS_034", "Prefiksu, kuru vēlaties e107 izmantot, veidojot e107 tabulas. Noderīga vairāku instalāciju gadījumā e107 vienā datubāzes shēmā.");
define("LANINS_036", "III");
define("LANINS_037", "MySQL savienojuma verifikācija");
define("LANINS_038", "un datu bāzes izveide");
define("LANINS_039", "Lūdzu, pārliecinieties, vai esat aizpildījis visus laukus, pats galvenais, MySQL serveris, MySQL lietotājvārds un MySQL datu bāze (tos vienmēr prasa MySQL serveris)");
define("LANINS_040", "Kļūdas");
define("LANINS_041", "e107 nevarēja izveidot savienojumu ar MySQL serveri, izmantojot ievadīto informāciju. Lūdzu, atgriezieties pēdējā lapā un pārliecinieties, ka informācija ir pareiza.");
define("LANINS_042", "Savienojums ar MySQL serveri ir izveidots un apstiprināts.");
define("LANINS_043", "Nevar izveidot datubāzi, lūdzu, pārliecinieties, ka jums ir pareizas atļaujas, lai izveidotu datubāzes jūsu serverī.");
define("LANINS_044", "Veiksmīgi izveidota datu bāze.");
define("LANINS_045", "Lūdzu, noklikšķiniet uz pogas, lai pārietu uz nākamo posmu.");
define("LANINS_046", "V");
define("LANINS_047", "Informācija par administratoru");
define("LANINS_048", "EXIF paplašinājums");
define("LANINS_049", "Abas ievadītās paroles nav vienādas. Lūdzu, atgriezieties un mēģiniet vēlreiz.");
define("LANINS_050", "XML paplašinājums");
define("LANINS_051", "Instalēta");
define("LANINS_052", "Nav ieinstalets");
define("LANINS_055", "Instalēt apstiprinājumu");
define("LANINS_056", "VI");
define("LANINS_057", "e107 tagad ir visa informācija, kas nepieciešama instalācijas pabeigšanai.

Lūdzu, noklikšķiniet uz pogas, lai izveidotu datu bāzes tabulas un saglabātu visus savus iestatījumus.");
define("LANINS_058", "VII");
define("LANINS_060", "Nevar nolasīt sql datu failu

Lūdzu, pārliecinieties, ka [b]/e107_core/sql[/b] direktorijā ir fails [b] core_sql.php [/b].");
define("LANINS_061", "e107 nevarēja izveidot visas nepieciešamās datu bāzes tabulas.
Lūdzu, izdzēsiet datubāzi un novēršiet visas problēmas, pirms atkal mēģināt.");
define("LANINS_069", "e107 ir veiksmīgi instalēts!

Drošības apsvērumu dēļ failu [b] e107_config.php [/b] faila atļaujas jānosaka atpakaļ uz 644.

Arī lūdzu, izdzēsiet install.php no sava servera, kad esat noklikšķinājis uz zemāk redzamās pogas.");
define("LANINS_070", "e107 nevarēja saglabāt galveno konfigurācijas failu savam serverim.

Lūdzu, pārliecinieties, ka failam [b] e107_config.php [/b] ir pareizas atļaujas");
define("LANINS_071", "Uzstādīšana ir pabeigta");
define("LANINS_072", "Administratora lietotājvārds");
define("LANINS_073", "Šis ir vārds, kuru izmantosit, lai pieteiktos šajā vietnē. Ja vēlaties to izmantot arī kā redzamo vārdu");
define("LANINS_074", "Administratora redzamais vārds");
define("LANINS_076", "Administratora parole");
define("LANINS_077", "Lūdzu, ierakstiet administratora paroli, kuru vēlaties šeit izmantot");
define("LANINS_078", "Administratora paroles apstiprināšana");
define("LANINS_079", "Lūdzu, vēlreiz ierakstiet administratora paroli, lai apstiprinātu");
define("LANINS_080", "Admin e-pasts");
define("LANINS_081", "ievadiet savu e-pasta adresi");
define("LANINS_083", "MySQL ziņoja par kļūdu:");
define("LANINS_084", "Instalētājs nevarēja izveidot savienojumu ar datu bāzi");
define("LANINS_085", "Instalētājs nevarēja izvēlēties datubāzi:");
define("LANINS_086", "Obligāti aizpildāmie lauki ir administratora lietotājvārds, administratora parole un Admin e-pasts. Lūdzu, atgriezieties pēdējā lapā un pārliecinieties, ka informācija ir pareizi ievadīta.");
define("LANINS_105", "Datubāzes nosaukums vai prefikss, kas sākas ar dažiem cipariem, kam seko 'e' vai 'E', nav pieņemams");
define("LANINS_106", "BRĪDINĀJUMS - e107 nevar ierakstīt uzskaitītajos katalogos un / vai failos. Lai gan tas neietekmēs e107 instalēšanu, tas nozīmēs, ka dažas funkcijas nav pieejamas.
Lai izmantotu šīs funkcijas, jums būs jāmaina failu atļaujas");
define("LANINS_107", "Vietnes nosaukums");
define("LANINS_108", "Mana vietne");
define("LANINS_109", "Tīmekļa vietnes motīvs");
define("LANINS_111", "Iekļaut saturu / konfigurāciju");
define("LANINS_112", "Ātri atveidojiet motīva priekšskatījumu vai demonstrāciju. (Ja ir pieejama)");
define("LANINS_113", "Lūdzu, ievadiet vietnes nosaukumu");
define("LANINS_114", "Lūdzu, izvēlieties motīvu");
define("LANINS_115", "Motīva nosaukums");
define("LANINS_116", "Motīva tips");
define("LANINS_117", "Tīmekļa vietnes preferences");
define("LANINS_118", "Instalējiet spraudņus");
define("LANINS_119", "Instalējiet visus spraudņus, kuriem var būt nepieciešama šī tēma.");
define("LANINS_120", "VIII");
define("LANINS_121", "e107_config.php nav tukšs fails");
define("LANINS_122", "Jums var būt esoša instalācija");
define("LANINS_123", "Neobligāti: jūsu publiskais vārds vai pseidonīms. Atstājiet tukšu, lai izmantotu lietotājvārdu");
define("LANINS_124", "Lūdzu, izvēlieties vismaz 8 rakstzīmju garu paroli");
define("LANINS_125", "e107 ir uzstādīts veiksmīgi!");
define("LANINS_126", "Drošības apsvērumu dēļ tagad e107_config.php faila faila atļaujas jānosaka atpakaļ uz 644.");
define("LANINS_127", "Datubāze [x] jau pastāv. Pārrakstīt? (visi esošie dati tiks pazaudēti)");
define("LANINS_128", "Pārrakstīt");
define("LANINS_129", "Datu bāze nav atrasta.");
define("LANINS_134", "Uzstādīšana");
define("LANINS_135", "no");
define("LANINS_136", "Dzēstas esošā datu bāze");
define("LANINS_137", "Atrasta esošā datu bāze");
define("LANINS_141", "Lūdzu, aizpildiet zemāk redzamo veidlapu ar jūsu MySQL detaļām. Ja jūs nezināt šo informāciju, lūdzu, sazinieties ar savu hostinga pakalpojumu sniedzēju. Lai iegūtu papildu informāciju, varat virzīt kursoru virs katra lauka.");
define("LANINS_142", "SVARĪGI: lūdzu, pārdēvējiet e107.htaccess uz .htaccess");
define("LANINS_144", "SVARĪGI: lūdzu, kopējiet un ielīmējiet [b] e107.htaccess [/b] saturu savā [b] .htaccess [/b] failā. Lūdzu, neaizmirsti NEPĀRSKATIET visus esošos datus, kas tajā var būt.");
define("LANINS_145", "e107 v2.x prasa instalēt PHP [x]. Pirms turpināt sazinieties ar savu saimnieku vai izlasiet informāciju vietnē [y].");
define("LANINS_146", "Administrācijas apgabala motīvs");
define("LANINS_147", "Administrācija");
