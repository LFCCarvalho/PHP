<?php 

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao
{
  private $_titulo;
  private $_autor;
  private $_totPaginas;
  private $_pagAtual;
  private $_aberto;
  private $_leitor;

  public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor)
  {
    $this->_titulo = $titulo;
    $this->_autor = $autor;
    $this->_totPaginas = $totPaginas;
    $this->_pagAtual = $pagAtual;
    $this->_aberto = $aberto;
    $this->_leitor = $leitor;
  }

  public function abrir()
  {
    $this->_aberto = true;
  }
    
  public function fechar()
  {
    $this->_aberto = false;
  }

  public function folhear()
  {
    $this->abrir();
    $this->_pagAtual = rand(0, $this->_totPaginas);
    $this->fechar();    
  }

  public function avancarPag()
  {
    if ($this->_pagAtual < $this->_totPaginas - 1) {
      $this->_pagAtual++;
    } else {
      echo "O livro acabou.";
    }
  }

  public function voltarPag()
  {
    if ($this->_pagAtual > 0) {
      $this->_pagAtual--;
    } else {
      echo "O livro começa aqui.";
    }
  }

  /*
  public function detalhes()
  {
    echo "Titulo: ".$this->_titulo.PHP_EOL;
    echo "Autor: ".$this->_autor->getNome().PHP_EOL;
    echo "Paginas: ".$this->_totPaginas.' '.PHP_EOL;
    echo "Pagina Atual: ".$this->_pagAtual.' '.PHP_EOL;
    echo "Aberto: ".($this->_aberto? 'Sim ' : 'Nao ').PHP_EOL;
    echo "Leitor: ".$this->_leitor->getNome();
  }

  */
  public function detalhes()
  {
    return array(
      'titulo' => $this->_titulo,
      'autor' => $this->_autor->getNome(),
      'totPaginas' => $this->_totPaginas,
      'pagAtual' => $this->_pagAtual,
      'aberto' => ($this->_aberto? 'Sim ' : 'Nao '),
      'leitor' => $this->_leitor->getNome()
    );
  }
}

?>