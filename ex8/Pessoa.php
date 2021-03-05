<?php 

class Pessoa
{
    private $_nome;
    private $_sexo;
    private $_idade;

    public function __construct($nome, $sexo, $idade)
    {
        $this->_nome = $nome;
        $this->_sexo = $sexo;
        $this->_idade = $idade;
    }

    public function getNome()
    {
        return $this->_nome;
    }

    public function getSexo()
    {
        return $this->_sexo;
    }

    public function getIdade()
    {
        return $this->_idade;
    }

    public function fazerAniversario()
    {
        $this->_idade++;
    }
}

?>