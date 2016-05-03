# AdHoc-Web

> Microsite s registračním formulářem.

Webová prezentace o třech stránkách (loading přes AJAX). „Registrační“ formulář odešle potvrzující e-mail, vygeneruje heslo a uloží záznam do MySQL databáze.

### Požadavky
 - HTTP Server (Apache httpd),
 - PHP 7+,
 - MySQL 5.7+.

### Komtatibilita
- Google Chrome 50+,
- Mozilla Firefox 46+,
- Microsoft Edge.

### Instalace
1. Importujte soubor __/k projektu/databaze.sql__ (obsahuje připravené tabulky) do své databáze,
2. editujte __db.php__ dle nastavení konkrétního serveru,
3. v souboru __config.php__ upravte konstanty s názvem stránek, domény, e-mail a copyright (zápatí),
4. jakmile stránky zpřístupníte na localhostu, můžete zkusit experimentovat – editovat text, vyměnit pozadí (defaultně HTML5 Video v MP4) atd.
