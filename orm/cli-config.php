<?php

require_once "conexao.php";

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#generating-the-database-schema

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
