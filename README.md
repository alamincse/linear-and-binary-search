# What is Searching ?
* Searching is the process of finding a given value position in a list of values.
* It decides whether a search key is present in the data or not.
* It is the algorithmic process of finding a particular item in a collection of items.
* It can be done on internal data structure or on external data structure.

# Searching Techniques

### 1. Sequential Search or Linear Search:
* Sequential search is also called as Linear Search.
* Sequential search starts at the beginning of the list and checks every element of the list.
* It is a basic and simple search algorithm.
* Sequential search compares the element with all the other elements given in the list. If the element is matched, it returns the value index, else it returns -1.


### 2. Interval Search or Binary Search:
* Binary Search is used for searching an element in a sorted array.
* It is a fast search algorithm with run-time complexity of O(log n).
* Binary search works on the principle of divide and conquer.
* This searching technique looks for a particular element by comparing the middle most element of the collection.
* It is useful when there are large number of elements in an array.

#### Binary Search:
<b>log<sub>2</sub><sup>n</sup></b> = How many time to search in array. Where <b>n</b> = array values.

``
$arr = array(2, 10, 30, 25, 20, 40, 60, 50, 70, 80, 90, 100, 150, 170, 200, 180);
``

Here, n = 16. Then <b>log<sub>2</sub><sup>16</sup> = 4</b> times search in this array!

[Read More](https://www.tutorialride.com/data-structures/searching-in-data-structure.htm)
