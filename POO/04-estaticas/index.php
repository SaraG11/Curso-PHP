<?php

require_once 'configuracion.php';

ConfiguracionStatic::setColor("orange");
ConfiguracionStatic::setEntorno("localhost");
ConfiguracionStatic::setNewsletter(true);

echo ConfiguracionStatic::$color;