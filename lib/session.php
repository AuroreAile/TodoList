<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/', // session racine
    'domain' => '.todo.local',
    'httponly' => true // disponible que sur http et pas javascript
    
]);

session_start();