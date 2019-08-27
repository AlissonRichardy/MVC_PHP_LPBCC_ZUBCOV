<?php
class Banco 
{
    private static $servidor='localhost'; 
    private static $dbUsuario='root'; 
    private static $dbname='thecase';
    private static $dbSenha=''; 

    private static $conn =null; 
    
    public function __construct()
    {
        die('A função init não é permitida');
    }
    // Retorna a conexao  
    public static function conectar(){
        if (self::$conn == null){
            try{
                self::$conn = new PDO(
                    'mysql:host='. self::$servidor .
                    ';dbname=' . self::$dbname.';charset=utf8',
                     self::$dbUsuario, self::$dbSenha);
            }
            catch(PDOException $exception){
                die($exception->getMessage()); 
            }
        }
        return self::$conn; 
    }

    public static function desconectar(){
        self::$conn = null; 
    }
}
?>
