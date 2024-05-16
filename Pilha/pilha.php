
<?php

// Class for stacks operations
class Pilha{
    // list
    public $lista = array();

    // Initial function
    public function __construct(){
        $this->lista = array();
    }
    // Function that checks if it is empty
    public function vazia(){
        return empty($this->lista);
    }
    // Puts item in the final list
    public function push($item){
        array_push($this->lista, $item);
    }
    // Removes the last item from the list
    public function pop(){
        // Only delete the item from the list if it is not empty
        if (!$this->vazia()){
            array_pop($this->lista);
        }else{
            throw new Exception("A lista está vazia");
        }
    }
    // Stores the last item in the list in a variable
    public function topo(){
        // Return a value only if the list is different from empty
        if (!$this->vazia()){
            return end($this->lista);
        }else{
            return null;
        }
    }
};

// Declare of the class
$pilha = new Pilha();

// Fills the list with 100 numbers
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

// Emptying the entire list
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

