# Stack - PHP Implementation

This project is a simple implementation of a stack in PHP. A stack is a data structure that follows the "last in, first out" (LIFO) principle, where the last element added is the first to be removed.

## Features

- **Push:** Adds an item to the top of the stack.
- **Pop:** Removes the item from the top of the stack, if any.
- **Top:** Returns the item at the top of the stack without removing it.
- **Empty:** Checks if the stack is empty.

## How to Use

1. Instantiate an object of the `Stack` class.
2. Add elements to the stack using the `push(item)` method.
3. Remove elements from the stack using the `pop()` method.
4. Check the top element of the stack without removing it using the `top()` method.
5. Check if the stack is empty using the `empty()` method.

## Usage Example

```php
// Declare the class
$stack = new Stack();

// Fill the list with 100 numbers
for ($i = 0; $i < 10 + 1; $i++) {
    $stack->push($i);
    echo "\nList: ";
    echo "[";
    foreach ($stack->list as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}

// Emptying the entire list
while (!$stack->empty()) {
    $last_item_list = $stack->top();
    $stack->pop();
    echo "\n\nItem successfully removed from the list: [$last_item_list]\n";
    echo "\n[ ";
    foreach ($stack->list as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}
```

This example demonstrates how to fill a stack with numbers from 0 to 10, print the stack, wait for a few seconds, and then remove each element from the stack and print the resulting stack.

## Installation Requirements

- PHP

## Author

This code was developed by Ageu Felipe Nunes Moraes as part of a personal project dedicated to strengthening and maturing coding skills. For any questions or suggestions, please contact me at [ageumoraes67@gmail.com](mailto:ageumoraes67@gmail.com).

## Disclaimer

This is a software project developed by an individual and is not affiliated with any other entity.
