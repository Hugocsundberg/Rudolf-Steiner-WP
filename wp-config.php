<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'WP_database' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', '' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e cy7Qu9<rsU:&:j@4,`}7GC(O81ZXax5d,*@`+/n@G6WiWzN*zTZZ*#L3@CTT64' );
define( 'SECURE_AUTH_KEY',  '_G3|8$K{CZTYS]3Q B[3K^`S>(D*w0pk_U#HuPV:a1P=a[9JsYqZz<C@AV^ZUj{J' );
define( 'LOGGED_IN_KEY',    'm5AAD*|boRM<)P_[B!|s1O}DSt:uN-%,MTGHm #vI7tn`> fiUy}NUVAMTQ1^8k(' );
define( 'NONCE_KEY',        '{uUpm%)rdM9o7~5y@qH7B[(5-Z oC$pUKZ{:.1w~:pI|wN9S`~#$FfG;Tb7:}a+(' );
define( 'AUTH_SALT',        '9{<{bu3bWF]e{;Y2HcKw.7c^?,]GV5ew?3U<-#Tx;!N+/>=K.D#5Xhl/%&QPquqq' );
define( 'SECURE_AUTH_SALT', '&w}mpeuEPtAnI< qe-:,[[?VwY hKK7>Fgl| At||s#>p9+4;*&aas~nM B-x4{y' );
define( 'LOGGED_IN_SALT',   '.3MB<)-Ka)no[I8KE97d-wx*i<$^<jh;#i|tJ13{ELh1Ar7,*In]Dld, JHe?d2x' );
define( 'NONCE_SALT',       '{iy:@(m^%o uS&0S^|}rK>jPS!=-<Dy8%BzY(uPZQngbW0kw;Xd;69z74cW._ks~' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'ordpress_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');