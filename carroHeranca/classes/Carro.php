<?php
require_once 'Veiculo.php';
class Carro extends Veiculo
{
    private int $portas;

    public function situacaoInicial()
    {
        return "O carro {$this->marca} {$this->modelo}, do ano {$this->ano} está a {$this->velocidadeAtual} km/h! <br>";

    }

    public function exibirPortas(int $portas):string
    {
        $this->portas = $portas;
        return "O carro {$this->marca} {$this->modelo} tem {$this->portas} portas <br>";
    }

    public function abrirPorta($numeroPorta): string
    {
        return "A porta de numero {$numeroPorta}, do carro {$this->marca} {$this->modelo} foi aberta <br>"; 
    }

        public function acelerar($qntd)
    {
        if($qntd > 0){
        $this->velocidadeAtual = $qntd;
         return "O carro {$this->marca} {$this->modelo}, do ano {$this->ano} está a {$qntd} km/h após acelerar! <br>";
        }
    }

    public function frear($qntd)
    {
       if($qntd > 0){
        $this->velocidadeAtual = $qntd;
         return "O carro {$this->marca} {$this->modelo}, do ano {$this->ano} está a {$qntd} km/h após frear! <hr>";
       } else{
            return "Veículo parado";
       }
    }

}
?>