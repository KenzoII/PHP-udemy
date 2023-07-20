<div class="titulo">Jogo do bicho</div>
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<?php
    // class bicho {
    //     // atributos
    //     public $sonho = $nome;
    //     public $bicho = $idade;

    //     public function apresentar() {
    //         return "Nome: {$this->sonho} Idade: {$this->bicho}";
    //     }
    // }
    $nome = $_POST['t1'];
    $idade = $_POST['t2'];

// $c1 = new Cliente();
// echo $c1->nome, '<br>';
// $c1->nome = 'Ana Silva';
// echo $c1->nome, '<br>';
// $c1->idade = 27.5;

// $c2 = new Cliente;
// $c2->nome = 'Gabriel';
// $c2->idade = 43;

// echo $c1->apresentar(), '<br>';
// echo $c2->apresentar();