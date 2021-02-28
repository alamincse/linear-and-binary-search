<?php

class LinearAndBinarySearch 
{
	protected $arr;

	public function __construct($arr) {
		$this->arr = $arr;
	}

	private function error() {
		// check array or not and it's not empty.
		if (! is_array($this->arr) || empty($this->arr)) {
			echo 'Please use array and it should not be empty!';
			exit;
		} 

		return;
	}

	public function linearSearch($number) {
		$this->error();

		for ($i = 0; $i < count($this->arr); $i++) {
			if ($this->arr[$i] == $number) {
				return 'Linear search = '. $i;
			}
		}

		// If value does not exits in array!
		return -1;
	}


	public function binarySearch($number) {
		$this->error();

		// array must be sorted for binary search.
        sort($this->arr);

		$left = 0;
		$right = count($this->arr) - 1;

		while($left <= $right) {
			// compute middle index in array!
			$mid = floor(($left + $right) / 2);

			if ($this->arr[$mid] == $number) {
				return ' Binary Search = '. $mid;
			}

			if ($this->arr[$mid] < $number) {
				// search the right side of the array
				$left = $mid + 1;
			} else {
				// search the left side of the array
				$right = $mid - 1;
			}
		}

        // If the value does not match in array!
		return -1;
	}
}

$arr = array(2, 10, 30, 25, 40, 60, 50, 70, 80, 90, 100);
$linearNumber = 60;
$binaryNumber = 60;

$search = new LinearAndBinarySearch($arr);

echo $search->linearSearch($linearNumber);
echo $search->binarySearch($binaryNumber);