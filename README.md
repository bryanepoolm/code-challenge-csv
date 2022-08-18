# Code Challenge CSV
Pequeño sistema para la importación de archivos excel los cuales se almacenan en una base de datos.

Requisitos para instalar el sistema:
  - Tener instalado un servidor local apache.
  - Mysql montado en el mismo servidor.
#### Para ambos casos puedes utilizar XAMPP, Laragon, etc.
 
Importar la base de datos la cual se encuentra en el directorio raiz.

Dirigirse a application/config/database.php y modificar el usuario, contraseña, nombre de base de datos y nombre de tu servidor de base de datos

    $db['default'] = array(
      'dsn'	=> '',
      'hostname' => 'localhost',
      'username' => 'root',
      'password' => '',
      'database' => 'importit_db',
      'dbdriver' => 'mysqli',
      'dbprefix' => '',
      'pconnect' => FALSE,
      'db_debug' => (ENVIRONMENT !== 'production'),
      'cache_on' => FALSE,
      'cachedir' => '',
      'char_set' => 'utf8',
      'dbcollat' => 'utf8_general_ci',
      'swap_pre' => '',
      'encrypt' => FALSE,
      'compress' => FALSE,
      'stricton' => FALSE,
      'failover' => array(),
      'save_queries' => TRUE
    );

Por defecto los accesos para ingresar al sistema son los siguientes:
  - Usuario: grupoorve
  - Contraseña: desarrollador
    
