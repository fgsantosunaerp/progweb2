<?php 

    class Nome {
        var $nome;              //Fabiano Gonçalves dos Santos
        var $sobreNome;

        function Nome($n, $sn){
            $this->nome = $n;
            $this->sobreNome = $sn;
        }

        public function toString()
        {
            return ($this->nome." ".$this->sobreNome."\n");
        }
    }


    class NomeSub1 extends Nome {
        var $_nomeDoMeio;

        public function NomeSub1($_n, $_nm, $_sn)
        {
            Nome::Nome($_n, $_sn);
            $this->_nomeDoMeio = $_nm;
        }

        public function toString()
        {
            return ($this->nome." ".$this->_nomeDoMeio." ".$this->sobreNome."\n");
        }
    }

    $nome1 = new Nome("Fabiano", "Santos");
    echo $nome1->toString();

    $nomeSub1 = new NomeSub1("Fabiano", "Gonçalves", "dos Santos");
    echo $nomeSub1->toString();