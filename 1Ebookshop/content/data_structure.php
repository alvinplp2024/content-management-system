<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structures Learning Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            position: relative;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 24px;
            margin: 0 auto;
            position: relative;
            width: 100%; /* Set width to make it centered */
        }
        .header a {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #333;
        }
        .header a:hover {
            background-color: #555;
        }
        .content {
            padding: 20px;
            background-color: white;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: green;
            color: white;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        h1, h2, h3 {
            color: #2C3E50;
        }
        strong {
            color: #2E8B57;
        }
        p, ul, pre, code {
            font-size: 16px;
            line-height: 1.6;
        }
        ul {
            margin: 10px 0;
        }
        ul li {
            margin-left: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            font-family: "Courier New", monospace;
            border: 1px solid #ddd;
            overflow-x: auto;
        }
        .col-md-10 {
            max-height: 500px;
            overflow-y: scroll;
            padding: 20px;
        }
        .row {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="javascript:history.back()">← Back</a>
        Data Structures Learning Course
    </div>
    <div class="content">
    <div class="col-md-10 px-3" style="overflow-y: scroll; max-height: 500px;">
    <div class="row">
        <p>
            <strong>Course Overview</strong><br>
            Data Structures are fundamental to computer science and software engineering. They provide a way of organizing and storing data so that it can be accessed and modified efficiently. In this course, learners will explore the essential data structures like arrays, linked lists, stacks, queues, trees, and graphs. The course also covers algorithms for manipulating these data structures and their real-world applications in solving complex computational problems.
        </p>
        <p>
            <strong>Arrays</strong><br>
            An array is a collection of elements identified by index or key. Arrays are the most basic data structure, used for storing data in contiguous memory locations. Key concepts include:
            <ul>
                <li><strong>Definition:</strong> An array is a fixed-size collection of elements, typically of the same data type (e.g., integers, strings).</li>
                <li><strong>Accessing Elements:</strong> Array elements are accessed using an index, with the first element at index 0.</li>
                <li><strong>Types:</strong> Arrays can be one-dimensional or multidimensional (e.g., 2D arrays for matrices).</li>
            </ul>
            Example in Python:
            <pre><code>
arr = [1, 2, 3, 4]
print(arr[2])  # Output: 3
            </code></pre>
        </p>
        <p>
            <strong>Linked Lists</strong><br>
            A linked list is a linear data structure where each element (node) points to the next one. Linked lists are more flexible than arrays as they can dynamically grow or shrink in size.
            <ul>
                <li><strong>Structure:</strong> Each node contains two parts: data and a reference (link) to the next node.</li>
                <li><strong>Types:</strong> Singly linked lists (one direction) and doubly linked lists (both directions).</li>
                <li><strong>Operations:</strong> Insertion, deletion, searching, and traversal.</li>
            </ul>
            Example in Python:
            <pre><code>
class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

head = Node(1)
head.next = Node(2)
print(head.next.data)  # Output: 2
            </code></pre>
        </p>
        <p>
            <strong>Stacks</strong><br>
            A stack is a linear data structure that follows the Last In First Out (LIFO) principle, meaning that the last element added is the first to be removed.
            <ul>
                <li><strong>Push:</strong> Add an element to the top of the stack.</li>
                <li><strong>Pop:</strong> Remove the top element of the stack.</li>
                <li><strong>Peek:</strong> View the top element without removing it.</li>
            </ul>
            Example in Python:
            <pre><code>
stack = []
stack.append(1)  # Push
stack.append(2)
print(stack.pop())  # Pop, Output: 2
            </code></pre>
        </p>
        <p>
            <strong>Queues</strong><br>
            A queue is a linear data structure that follows the First In First Out (FIFO) principle, where the first element added is the first to be removed.
            <ul>
                <li><strong>Enqueue:</strong> Add an element to the rear of the queue.</li>
                <li><strong>Dequeue:</strong> Remove an element from the front of the queue.</li>
                <li><strong>Peek:</strong> View the front element without removing it.</li>
            </ul>
            Example in Python:
            <pre><code>
from collections import deque
queue = deque([1, 2, 3])
queue.append(4)  # Enqueue
print(queue.popleft())  # Dequeue, Output: 1
            </code></pre>
        </p>
        <p>
            <strong>Trees</strong><br>
            A tree is a hierarchical data structure consisting of nodes connected by edges. It is used for representing hierarchical relationships, such as file systems or organizational structures.
            <ul>
                <li><strong>Binary Tree:</strong> Each node has at most two children (left and right).</li>
                <li><strong>Binary Search Tree (BST):</strong> A binary tree in which the left child is smaller than the parent node, and the right child is greater.</li>
                <li><strong>Traversal:</strong> Tree traversal can be done in several ways: pre-order, in-order, and post-order.</li>
            </ul>
            Example in Python:
            <pre><code>
class TreeNode:
    def __init__(self, value):
        self.left = None
        self.right = None
        self.value = value

root = TreeNode(10)
root.left = TreeNode(5)
root.right = TreeNode(15)
print(root.left.value)  # Output: 5
            </code></pre>
        </p>
        <p>
            <strong>Graphs</strong><br>
            A graph is a collection of nodes (vertices) and edges that connect pairs of nodes. Graphs are used to represent networks such as social media, transportation systems, and the internet.
            <ul>
                <li><strong>Directed Graph:</strong> The edges have a direction, pointing from one vertex to another.</li>
                <li><strong>Undirected Graph:</strong> The edges have no direction, and are bidirectional.</li>
                <li><strong>Traversal:</strong> Graphs can be traversed using algorithms like Depth-First Search (DFS) and Breadth-First Search (BFS).</li>
            </ul>
            Example in Python:
            <pre><code>
graph = {1: [2, 3], 2: [4], 3: [4], 4: []}
print(graph[1])  # Output: [2, 3]
            </code></pre>
        </p>
        <p>
            <strong>Hash Tables</strong><br>
            A hash table is a data structure that stores key-value pairs and provides fast access to elements using a hash function. It’s commonly used for implementing associative arrays or database indexing.
            <ul>
                <li><strong>Hashing:</strong> A hash function maps keys to indices in an array, where values are stored.</li>
                <li><strong>Collision Handling:</strong> When two keys hash to the same index, collision resolution strategies like chaining or open addressing are used.</li>
            </ul>
            Example in Python:
            <pre><code>
hash_table = {}
hash_table['key'] = 'value'
print(hash_table['key'])  # Output: value
            </code></pre>
        </p>
        <p>
            <strong>Algorithms and Operations</strong><br>
            Each data structure comes with a set of operations for manipulating data, including:
            <ul>
                <li><strong>Insertion:</strong> Adding elements to the data structure.</li>
                <li><strong>Deletion:</strong> Removing elements from the data structure.</li>
                <li><strong>Search:</strong> Finding elements within the data structure.</li>
                <li><strong>Traversal:</strong> Visiting each element in the data structure (e.g., traversing a tree or graph).</li>
            </ul>
        </p>
        <p>
            <strong>Final Project</strong><br>
            In the final project, learners will implement a complex data structure or algorithm and demonstrate its real-world application. Example projects include:
            <ul>
                <li>Designing a library management system using linked lists and queues.</li>
                <li>Building a recommendation system using graphs and hash tables.</li>
                <li>Implementing a pathfinding algorithm like A* using trees and graphs.</li>
            </ul>
            The project will be evaluated based on the efficiency of the implemented algorithms and the correctness of the data structure design.
        </p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p> All Rights Reserved ©- Designed by Alvin(+254700921906)- 2024</p>
    </div>
</body>
</html>
