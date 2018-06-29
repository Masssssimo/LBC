<?php
    define('PERCH_LICENSE_KEY', 'P3-LOCAL-KHP180-QJL628-TFP015');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", '');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "lbc");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'LBC@example.com');
    define('PERCH_EMAIL_FROM_NAME', 'LBC LBC');

    define('PERCH_LOGINPATH', '/lbc/m-a-p');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
