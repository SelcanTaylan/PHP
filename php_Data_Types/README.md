<h1>💥PHP Data Types💥</h1>

<img src="https://user-images.githubusercontent.com/74038190/212284115-f47cd8ff-2ffb-4b04-b5bf-4d1c14c0247f.gif" width="1010">

<h2>🔴 Supported Data Types</h2>
<ul>
  <li>String</li>
  <li>Integer</li>
  <li>Float (Double)</li>
  <li>Boolean</li>
  <li>Array</li>
  <li>Object</li>
  <li>NULL</li>
  <li>Resource</li>
</ul>

<h2>🟠 Get the Data Type</h2>
<ul>
  <li>Use <code>var_dump()</code> to display the type and value of any variable.</li>
</ul>
<pre><code> 
  &lt;?php $x = "Hello"; 
  var_dump($x); // string(5) "Hello" ?&gt;
</code></pre>

<h2>🟡 PHP String</h2>
<ul>
  <li>A sequence of characters like <code>"Hello world!"</code>.</li>
  <li>Can be enclosed in single or double quotes.</li>
</ul>

<pre><code>
  &lt;?php $x = "Hello world!";
  $y = 'Selcan'; ?&gt; 
</code></pre>

<h2>🟢 PHP Integer</h2>
<ul>
  <li>Non-decimal number between -2,147,483,648 and 2,147,483,647.</li>
  <li>Must have at least one digit.</li>
  <li>Cannot contain a decimal point.</li>
  <li>Can be positive or negative.</li>
  <li>Can be written in decimal, hexadecimal, octal, or binary format.</li>
</ul>

<pre><code> 
  &lt;?php $x = 42;
  var_dump($x); // int(42) ?&gt; 
</code></pre>

<h2>🔵 PHP Float</h2>
<ul>
  <li>Number with a decimal point or exponential notation.</li>
</ul>

<pre><code> &lt;
  ?php $x = 10.365; 
  var_dump($x); // float(10.365) ?&gt; 
</code></pre>

<h2>🟣 PHP Boolean</h2>
<ul>
  <li>Represents two states: <code>true</code> or <code>false</code>.</li>
</ul>

<pre><code>
  &lt;?php $x = true;
  $y = false; ?&gt; 
</code></pre>

<h2>🟤 PHP Array</h2>
<ul>
  <li>Stores multiple values in a single variable.</li>
</ul>

<pre><code>
  &lt;?php $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars); ?&gt; 
</code></pre>

<h2>⚫ PHP Object</h2>
<ul>
  <li>Objects are instances of classes.</li>
  <li>They inherit properties and behaviors from the class.</li>
  <li><code>__construct()</code> is automatically called when an object is created.</li>
</ul>

<pre><code> 
  &lt;?php class Car { public $color; public $model; public function __construct($color, $model){ $this-&gt;color = $color; $this-&gt;model = $model; } }
  $myCar = new Car("red", "Volvo"); 
  var_dump($myCar); ?&gt;
</code></pre>

<h2>⚪ PHP NULL</h2>
<ul>
  <li>Special type with only one value: <code>NULL</code>.</li>
  <li>Variables without a value are automatically <code>NULL</code>.</li>
  <li>You can manually empty a variable by setting it to <code>NULL</code>.</li>
</ul>

<pre><code> &lt;?php $x = null; 
  var_dump($x); // NULL ?&gt; 
</code></pre>

<h2>🌈 Change Data Type</h2>
<ul>
  <li>PHP automatically changes the data type based on the assigned value.</li>
</ul>

<pre><code> &lt;?php $x = 5;// integer 
  $x = "Selcan"; // now string
  var_dump($x); ?&gt;
</code></pre>

<img src="https://user-images.githubusercontent.com/74038190/212284115-f47cd8ff-2ffb-4b04-b5bf-4d1c14c0247f.gif" width="1010">
