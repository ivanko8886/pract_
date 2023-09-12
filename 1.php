<?php
class PriorityQueue {
    private $heap;

    public function __construct() {
        $this->heap = array();
    }

    public function isEmpty() {
        return empty($this->heap);
    }

    public function enqueue($value, $priority) {
        $element = array('value' => $value, 'priority' => $priority);
        $this->heap[] = $element;
        $this->heapifyUp();
    }

    public function dequeue() {
        if ($this->isEmpty()) {
            return null;
        }

        $this->swap(0, count($this->heap) - 1);
        $element = array_pop($this->heap);
        $this->heapifyDown();
        return $element['value'];
    }

    private function heapifyUp() {
        $index = count($this->heap) - 1;

        while ($index > 0) {
            $parentIndex = ($index - 1) >> 1;

            if ($this->heap[$index]['priority'] > $this->heap[$parentIndex]['priority']) {
                $this->swap($index, $parentIndex);
                $index = $parentIndex;
            } else {
                break;
            }
        }
    }

    private function heapifyDown() {
        $index = 0;
        $heapSize = count($this->heap);

        while (true) {
            $leftChildIndex = 2 * $index + 1;
            $rightChildIndex = 2 * $index + 2;
            $largestIndex = $index;

            if ($leftChildIndex < $heapSize && $this->heap[$leftChildIndex]['priority'] > $this->heap[$largestIndex]['priority']) {
                $largestIndex = $leftChildIndex;
            }

            if ($rightChildIndex < $heapSize && $this->heap[$rightChildIndex]['priority'] > $this->heap[$largestIndex]['priority']) {
                $largestIndex = $rightChildIndex;
            }

            if ($largestIndex !== $index) {
                $this->swap($index, $largestIndex);
                $index = $largestIndex;
            } else {
                break;
            }
        }
    }

    private function swap($i, $j) {
        $temp = $this->heap[$i];
        $this->heap[$i] = $this->heap[$j];
        $this->heap[$j] = $temp;
    }
}
$priorityQueue = new PriorityQueue();
$priorityQueue->enqueue('Task 12', 0);
$priorityQueue->enqueue('Task 13', 3);
$priorityQueue->enqueue('Task 14', 33);
$priorityQueue->enqueue('Task 1', 13);
$priorityQueue->enqueue('Task 2', 1);
$priorityQueue->enqueue('Task 3', 2);

while (!$priorityQueue->isEmpty()) {
    echo $priorityQueue->dequeue() . "\n";
}
?>