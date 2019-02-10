<?php
/*connection à la base de donnée via la class Database*/
class Database
{
    /*les parametre static permete de ne pas instentier(new) une class
    mais ces parametre appartiennent à la class et donc on utilise les membre de la
    class, la connection de la class directement sur la class

on creer une class, qui a besoin d'etre utilisé toujours de la meme façon, donc au lieu de crer une instance(new->) et de creer toujours la meme, j'uitlise la class (self::)

    les parametre static appartiennent à la class et non à l'instance d'une class  */

    /*connection au server localhost*/
    private static $dbhost = "localhost";
    /*non de la base de donée*/
    private static $dbName = "restaut_code";
    /*le login pour pour accerder à mysql*/
    private static $dbUser = "root";
    /*le password pour acceder à mysql*/
    private static $dbUserPassword = "";

    /*variable (a l'exterieur) qui permet de rendre accessible ses données */
    private static $connection = null;

    /*Methode de la class Datbase qui permet de se connecter à la db
    =>
    ici private indique qu'il n y a que la class database qui peut accéder à cette fonction(connect)

    static fait appartenir la fonction à la class et non aux instances (database)*/
    public  static function connect()
    {
        /*si une erreur se produit lors de l'exécution du code présent dans le bloc try, PHP va exécuter le code qui se trouve dans le catch*/
        try
        {
//           permet d'avoir les accents
            $options = [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
            /*appel la variable privée static, grace à self::$connection et au nom de la bd; login de la bd; et le password de la bd */
            self::$connection = new PDO("mysql:host=localhost;dbname=restaut_code","root",null,$options);

        }
        /*On attrape les exceptions PDOException*/
        catch(PDOException $e)
        {
            /*stop le code et affiche un message d'erreur */
            die($e->getMessage());
        }
        return self::$connection;
    }
    /*Methode de déconnection*/
    public static function disconnect()
    {
        self::$connection = null;
    }
}

/*connection à la base de donnée
on utilise le nom de la class, et specifie qu'il s'agit d'une class static avec self:: (je peux y acceder de l'exterieur car la methode est public(connect)) */

/*Database::connect();*/



?>