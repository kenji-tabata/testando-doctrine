<?php

/**
 * Ativa a linha de comando do Doctrine ORM com as configurações do arquivo bootstrap.php
 */

require_once "bootstrap.php";

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#generating-the-database-schema

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
