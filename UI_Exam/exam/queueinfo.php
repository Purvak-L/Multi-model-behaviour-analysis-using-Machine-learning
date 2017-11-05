<html>
<head>

<title>Queue-Content</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div id="registration-form">
	<div class='fieldset'>
	<legend>Queue Information</legend>
	<form  method="post" action="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Queue is an abstract data structure, somewhat similar to Stack. In contrast to Queue, queue is opened at both end. One end is always used to insert data (enqueue) and the other is used to remove data (dequeue). Queue follows First-In-First-Out methodology, i.e., the data item stored first will be accessed first.

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A real world example of queue can be a single-lane one-way road, where the vehicle enters first, exits first. More real-world example can be seen as queues at ticket windows & bus-stops..</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Same as Queue, queue can also be implemented using Array, Linked-list, Pointer and Structures. For the sake of simplicity we shall implement queue using one-dimensional array. </p>

<i><b>Queues Basic Operations</b></i><br><br>

enqueue() − add (store) an item to the queue. <br>

dequeue() − remove (access) an item from the queue.<br><br>
<b>Enqueue Operation</b><br><br>
As queue maintains two data pointers, front and rear, its operations are comparatively more difficult to implement than Queue. </br></p>

Step 1 − Check if queue is full.</br>

<br>Step 2 − If queue is full, produce underflow error and exit.</br>

<br>Step 3 − If queue is not full, increment rear to point next empty space.</br>

<br>Step 4 − Add data element to the queue location, where rear is pointing.</br>

Step 5 − return success.<br><br>


<b>Dequeue Operation </b><br>
<p>Accessing data from queue is a process of two tasks − access the data where front is pointing and remove the data after access. The following steps are taken to perform dequeue operation − </p>

<br>A Dequeue operation may involve the following steps −

<br>Step 1 − Check if queue is empty.</br>

<br>Step 2 − If queue is empty, produce error and exit.<br>

<br>Step 3 − If queue is not empty, access the data element at which rear is pointing.</br>

<br>Step 4 − Decrease the value of rear by 1.</br>

Step 5 − return success.<br>
<br>
<a href="paper.php">Back </a> </br>

</form>
<legend></legend>
</div>
</div>
</body>
</html>