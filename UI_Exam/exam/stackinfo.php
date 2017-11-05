
<html 
<head>
<title>Study Stack</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div id="registration-form">
	<div class='fieldset'>
	<legend>Stack Information</legend>
	<form  method="post" action="">
<b>Stack</b>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A stack is an abstract data type (ADT), commonly used in most programming languages. It is named stack as it behaves like a real-world stack, for example − deck of cards or pile of plates etc. </p>

<i><b>Stack Example </b></i><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A real-world stack allows operations at one end only. For example, we can place or remove a card or plate from top of the stack only. Likewise, Stack ADT allows all data operations at one end only. At any given time, We can only access the top element of a stack.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This feature makes it LIFO data structure. LIFO stands for Last-in-first-out. Here, the element which is placed (inserted or added) last, is accessed first. In stack terminology, insertion operation is called PUSH operation and removal operation is called POP operation.</p>

<i><b>Stack Representation </b></i><br><br>
Below given diagram tries to depict a stack and its operations −
<p>
A stack can be implemented by means of Array, Structure, Pointer and Linked-List. Stack can either be a fixed size one or it may have a sense of dynamic resizing. Here, we are going to implement stack using arrays which makes it a fixed size stack implementation.</p>

<i><b>Basic Operations</b></i><br><br>
<ul>
<li>push() − pushing (storing) an element on the stack.</li>

<li>pop() − removing (accessing) an element from the stack.</li>

<p><b>PUSH Operation</b><br>
<br>The process of putting a new data element onto stack is known as PUSH Operation. Push operation involves series of steps − </br></p>

Step 1 − Check if stack is full.<br>

Step 2 − If stack is full, produce error and exit.<br>

Step 3 − If stack is not full, increment top to point next empty space.<br>

Step 4 − Add data element to the stack location, where top is pointing.<br>

Step 5 − return success.<br>

<b>Pop Operation </b><br>
<p>Accessing the content while removing it from stack, is known as pop operation. In array implementation of pop() operation, data element is not actually removed, instead top is decremented to a lower position in stack to point to next value. But in linked-list implementation, pop() actually removes data element and deallocates memory space. </p>

<br>A POP operation may involve the following steps −

<br>Step 1 − Check if stack is empty.</br>

<br>Step 2 − If stack is empty, produce error and exit.<br>

<br>Step 3 − If stack is not empty, access the data element at which top is pointing.</br>

<br>Step 4 − Decrease the value of top by 1.</br>

<br>Step 5 − return success.</br><br><br><br><br><br>


<a href="paper.php">Back</a><br><br><br><br>  
</form>
<legend></legend>
</div>
</div>
</body>
</html>