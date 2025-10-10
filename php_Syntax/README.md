<h1>💥PHP Case Sensitivity💥</h1>

<img src="https://user-images.githubusercontent.com/74038190/212284115-f47cd8ff-2ffb-4b04-b5bf-4d1c14c0247f.gif" width="1010">

<ul>
  <li>In PHP, <strong>keywords</strong> (e.g. <code>if</code>, <code>else</code>, <code>while</code>, <code>echo</code>, etc.), <strong>classes</strong>, <strong>functions</strong>, and <strong>user-defined functions</strong> are <u>not case-sensitive</u>.</li>
  <li><strong>Note:</strong> However, all <u>variable names are case-sensitive</u>!</li>
</ul>

<h2>🟠Examples</h2>
<ul>
  <li>
  <pre><code>
&lt;?php
ECHO "Hello World!&lt;br&gt;";
echo "Hello World!&lt;br&gt;";
EcHo "Hello World!&lt;br&gt;";
?&gt;
</code></pre> 
  </li>
  These three lines will all output the same result because <code>echo</code> is not case-sensitive.
  <li>
    <pre><code>
&lt;?php
$color = "red";
echo "My car is " . $color . "&lt;br&gt;";
echo "My house is " . $COLOR . "&lt;br&gt;";
echo "My boat is " . $coLOR . "&lt;br&gt;";
?&gt;
</code></pre>
  </li>
  Only the first <code>echo</code> will work correctly, because variable names are case-sensitive.
</ul>

<img src="https://user-images.githubusercontent.com/74038190/212284115-f47cd8ff-2ffb-4b04-b5bf-4d1c14c0247f.gif" width="1010">
