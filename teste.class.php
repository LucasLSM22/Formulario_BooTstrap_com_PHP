<?php
    //importacao
    require_once("cadastro.class.php");
    //nome da classe
    class Execucao {
        //objeto pessoa com visibilidade privada
        private $cadastro;

        public function __construct (){
            //objeto chamado pessoa que recebe a classe pessoa
            $cadastro = new Cadastro();
            //passar um valor para o metodo setnome 
            $cadastro -> setNome($_POST['nome'] );
            //imprimir o valor do metodo getnome
            echo "<b>Nome: </b>" . $cadastro -> getNome() . "<br>";
            //passar um valor para o metodo 
            $cadastro -> setTelefone( $_POST['telefone']);
            //imprimir o valor do metodo 
            echo "<b>Telefone: </b>" . $cadastro ->getTelefone() . "<br>";
            //passar um valor para o metodo 
            $cadastro -> setOrigem($_POST['origem']);
            //imprimir o valor do metodo 
            echo "<b>Origem: </b>" . $cadastro ->getOrigem() . "<br>";
            //passar um valor para o metodo 
            $cadastro -> setDatadocontato($_POST['datadocontato']);
            //imprimir o valor do metodo 
            echo "<b>Data do contato: </b>" . $cadastro ->getDatadocontato() . "<br>";
            //passar um valor para o metodo 
            $cadastro -> setObservacao($_POST['observacao']);
            //imprimir o valor do metodo 
            echo "<b>Observação: </b>" . $cadastro ->getObservacao() . "<br>";
        }
        //Instancia
    }new Execucao()
?>