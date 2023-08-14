    <?php

    class Pessoa {
    private $nome;
    private $idade;
    private $corDosOlhos;
    private $genero;
    private $altura;
    private $peso;

    public function __construct($nome, $idade, $corDosOlhos, $genero, $altura, $peso) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCorDosOlhos($corDosOlhos);
        $this->setGenero($genero);
        $this->setAltura($altura);
        $this->setPeso($peso);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getCorDosOlhos() {
        return $this->corDosOlhos;
    }

    public function setCorDosOlhos($corDosOlhos) {
        $opcoesCores = ["Azul", "Castanho", "Verde", "Preto"];
        if (in_array($corDosOlhos, $opcoesCores)) {
            $this->corDosOlhos = $corDosOlhos;
        } else {
            throw new Exception("Cor dos olhos inválida");
        }
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $opcoesGenero = ["Masculino", "Feminino"];
        if (in_array($genero, $opcoesGenero)) {
            $this->genero = $genero;
        } else {
            throw new Exception("Gênero inválido");
        }
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
}

