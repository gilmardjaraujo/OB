    <?php

try {
    
        require_once 'Pessoa.php';
        
        $pessoa = new Pessoa('Gilmar', 32, 'Castanho', 'Masculino', 1.67, 62);
    
        echo "<p><strong>Nome:</strong> " . $pessoa->getNome() . "</p>";
        echo "<p><strong>Idade:</strong> " . $pessoa->getIdade() . "</p>";
        echo "<p><strong>Cor dos Olhos:</strong> " . $pessoa->getCorDosOlhos() . "</p>";
        echo "<p><strong>Gênero:</strong> " . $pessoa->getGenero() . "</p>";
        echo "<p><strong>Altura:</strong> " . $pessoa->getAltura() . " m</p>";
        echo "<p><strong>Peso:</strong> " . $pessoa->getPeso() . " kg</p>";

    } catch (Exception $e) {
      echo "Erro: " . $e->getMessage();
    }