<?php
/*
 * Copyright 2008-2010 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Validator Handler - Language File
*/

/*
 * Default error messages by Error code number
 */ 
define("LAN_VALIDATE_0",   "Nezināma kļūda");
define("LAN_VALIDATE_101", "Trūkst vērtības");
define("LAN_VALIDATE_102", "Negaidīts vērtības veids");
define("LAN_VALIDATE_103", "Ir atrastas nederīgas rakstzīmes");
define("LAN_VALIDATE_104", "Nav derīga e-pasta adrese");
define("LAN_VALIDATE_105", "Lauki neatbilst" );
define("LAN_VALIDATE_131", "String ir pārāk īsa");
define("LAN_VALIDATE_132", "String ir pārāk gara");
define("LAN_VALIDATE_133", "Pārāk mazs numurs");
define("LAN_VALIDATE_134", "Numurs ir pārāk augsts");
define("LAN_VALIDATE_135", "Array count pārāk zems");
define("LAN_VALIDATE_136", "Array count pārāk augsts");
define("LAN_VALIDATE_151", "Paredzētais skaitļa tipa vesels skaitlis");
define("LAN_VALIDATE_152", "Paredzētais tipa pludiņš");
define("LAN_VALIDATE_153", "Paredzētais instances veids");
define("LAN_VALIDATE_154", "Paredzētais masīva veids");
define("LAN_VALIDATE_191", "Tukša vērtība");
define("LAN_VALIDATE_201", "Fails nav pieejams");
define("LAN_VALIDATE_202", "Fails nav rakstāms");
define("LAN_VALIDATE_203", "Fails pārsniedz atļauto faila lielumu");
define("LAN_VALIDATE_204", "Faila izmērs ir mazāks par atļauto faila minimālo lielumu");
//define("LAN_VALIDATE_", "");

/*
 * TRANSLATION INSTRUCTIONS:
 * Don"t translate %1$s, %2$s, %3$s, etc.
 * 
 * These are substituted by validator handler:
 * %1$s - field name
 * %2$d - validation error code (number)
 * %3$s - validation error message (string)
 */

// define("LAN_VALIDATE_FAILMSG", "<strong>&quot;%1$s&quot;</strong> validation error: [#%2$d] %3$s.");

 //FIXME - use this instead: 
define("LAN_VALIDATE_FAILMSG", "[x] validācijas kļūda: [y] [z].");