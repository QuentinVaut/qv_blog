<?php
define ("HOST","10.10.28.106");
define ("PORT","5433");
define ("NOM_db","qv_blog");
define ("PASSWORD","");
define ("USER","vauthier.quentin");



try
{
			$bdd = new PDO('mysql:host='.HOST.';dbname='.NOM_db, USER, PASSWORD);
			$bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        echo "Erreur dans la connexion $e";
        
}
?>