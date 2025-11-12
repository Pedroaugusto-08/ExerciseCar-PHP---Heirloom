<?php
class Veiculo
{
    protected string $marca;
    protected string $modelo;
    protected int $ano;
    protected float $velocidadeAtual;

    public function __construct(string $marca, string $modelo, int $ano, float $velocidadeAtual = 0)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeAtual = $velocidadeAtual ;
    }

    public function acelerar($qntd)
    {
        if($qntd > 0){
        $this->velocidadeAtual = $qntd;
        }
    }

    public function frear($qntd)
    {
       if($qntd > 0){
        $this->velocidadeAtual = $qntd;
       } else{
            return "Veículo parado";
       }
       
    }

}
?>