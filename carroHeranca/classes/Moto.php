<?php
require_once 'Veiculo.php';
class Moto extends Veiculo
{
    public function situacaoInicial()
    {
        return "A moto {$this->marca} {$this->modelo}, do ano {$this->ano} está a {$this->velocidadeAtual} km/h! <br>";
    }

    public function empinar(): string
    {
        if($this->velocidadeAtual < 20){
        return "A moto não pode empinar abaixo de 20km/h <br>";
        } else{
            return "A moto {$this->marca} {$this->modelo} está empinando <br>";
        }
    }

        public function acelerar($qntd)
    {
        if($qntd > 0){
        $this->velocidadeAtual = $qntd;
        return "A moto {$this->marca} {$this->modelo}, do ano {$this->ano} está a {$qntd} km/h após acelerar! <br>";
        }
    }

    public function frear($qntd)
    {
       if($qntd > 0){
        $this->velocidadeAtual = $qntd;
        return "A moto {$this->marca} {$this->modelo}, do ano {$this->ano} está a {$qntd} km/h após frear! <hr>";
       } else{
            return "Veículo parado <hr>";
       }
    }

}
?>