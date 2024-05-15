
<?php

class Pilha{
    public $lista = array();

    public function __construct(){
        $this->lista = array();
    }

    public function vazia(){
        return empty($this->lista);
    }
    
    public function push($item){
        array_push($this->lista, $item);
    }
    
    public function pop(){
        if (!$this->vazia()){
            array_pop($this->lista);
        }else{
            throw new Exception("A lista está vazia");
        }
    }
        
    public function topo(){
        if (!$this->vazia()){
            return end($this->lista);
        }else{
            return null;
        }
    }
};

$pilha = new Pilha();

for ($i = 0; $i < 10+1; $i++) {
    $pilha->push($i);
    echo "\nLista: ";
    echo "[";
    foreach ($pilha->lista as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}


while (!$pilha->vazia()){
    $ultimo_item_lista = $pilha->topo();
    $pilha->pop();
    echo "\n\nItem removido da lista com sucesso: [$ultimo_item_lista]\n";
    echo "\n[ ";
    foreach($pilha->lista as $item){
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}
?>

