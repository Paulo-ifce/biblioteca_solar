<?php
class Conexao{
    #constantes de conexão
    const HOST ='localhost';
    const USER = 'root';
    const PASSWD = '2dde809b';
    const DATABASSE = 'biblioteca';
    #conectar com o banco de dados
    public function getConnection(){
      $conexao = mysqli_connect(self::HOST,self::USER,self::PASSWD,self::DATABASSE);
      if(!mysqli_connect_errno()):
        return $conexao;
      else:
        return NULL;
      endif;
    }
}
?>