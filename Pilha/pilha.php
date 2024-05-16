
<?php

// Class for stacks operations
class Stack{
    // list
    public $list = array();

    // Initial function
    public function __construct(){
        $this->list = array();
    }
    // Function that checks if it is empty
    public function empty(){
        return empty($this->list);
    }
    // Puts item in the final list
    public function push($item){
        array_push($this->list, $item);
    }
    // Removes the last item from the list
    public function pop(){
        // Only delete the item from the list if it is not empty
        if (!$this->empty()){
            array_pop($this->list);
        }else{
            throw new Exception("A lista está vazia");
        }
    }
    // Stores the last item in the list in a variable
    public function top(){
        // Return a value only if the list is different from empty
        if (!$this->empty()){
            return end($this->list);
        }else{
            return null;
        }
    }
};

// Declare of the class
$stack = new Stack();

// Fills the list with 100 numbers
for ($i = 0; $i < 10+1; $i++) {
    $stack->push($i);
    echo "\nLista: ";
    echo "[";
    foreach ($stack->list as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}

// Emptying the entire list
while (!$stack->empty()){
    $last_item_list = $stack->top();
    $stack->pop();
    echo "\n\nItem removido da lista com sucesso: [$last_item_list]\n";
    echo "\n[ ";
    foreach($stack->list as $item){
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}
?>
