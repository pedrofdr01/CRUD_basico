<?php

/** Nome do DB */
define('DB_NAME', 'crud_agenda');

/** Usuário do DB */
define('DB_USER', 'root');

/** Senha do DB */
define('DB_PASSWORD', '');

/** Host do DB */
define('DB_HOST', 'localhost');

/** caminho para a pasta do sistema */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho server para o sistema */
if (!defined('BASEURL'))
    define('BASEURL', '/expression');

/** caminho arquivo de banco de dados */
if (!defined('DBAPI'))
    define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos header e footer */
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');