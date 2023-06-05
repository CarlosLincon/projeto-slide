<?php
date_default_timezone_set('America/Sao_Paulo'); // Defina o fuso horário adequado
class Atualizador {
    private $variavel;

    public function __construct() {
        $this->variavel = 1;
    }

    public function atualizarVariavel() {
        $agora = time(); // Obtém o timestamp atual
        $proximaAtualizacao = strtotime('12:01:00'); // Define o horário da próxima atualização

        if ($agora >= $proximaAtualizacao) {
            $this->variavel += 1; // Incrementa a variável
            $proximaAtualizacao = strtotime('+1 minute', $proximaAtualizacao); // Define o horário da próxima atualização para o próximo minuto
        }

        // Coloque aqui qualquer código adicional que você precise executar
    }

    public function getVariavel() {
        $this->atualizarVariavel();
        return $this->variavel;
    }
}


?>

