<?php

use Monolog\Level;

log_message(Level::Info, 'Begin Autoload');

// continue...

logExt(Level::Info, 'Complete Autoload', ['status' => 'Complete Bootstrap']);
