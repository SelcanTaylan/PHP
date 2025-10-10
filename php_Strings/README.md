<h1>💥PHP Strings💥</h1>

<img src="https://user-images.githubusercontent.com/74038190/212284115-f47cd8ff-2ffb-4b04-b5bf-4d1c14c0247f.gif" width="1010">

<h2>🔴 Basic Usage</h2> <ul> <li>Strings in PHP are enclosed in <strong>single</strong> or <strong>double</strong> quotes.</li> </ul>
  <pre><code> &lt;?php echo "Hello"; echo 'Hello'; ?&gt; </code></pre>
<h2>🟠 Double vs Single Quotes</h2> <ul> <li>Double quotes <u>parse variables</u> and <u>special characters</u>.</li> <li>Single quotes <u>do not</u> parse anything—just raw text.</li> </ul>
  <pre><code> &lt;?php $x = "John"; echo "Hello $x"; // Output: Hello John echo 'Hello $x'; // Output: Hello $x ?&gt; </code></pre>
<h2>🟡 String Length</h2> <ul> <li><code>strlen()</code> returns the length of a string.</li> </ul>
  <pre><code> &lt;?php echo strlen("Hello world!"); ?&gt; </code></pre>
<h2>🟢 Word Count</h2> <ul> <li><code>str_word_count()</code> counts the number of words.</li> </ul>
  <pre><code> &lt;?php echo str_word_count("Hello world!"); ?&gt; </code></pre>
<h2>🔵 Search Within String</h2> <ul> <li><code>strpos()</code> finds the position of a substring.</li> </ul>
  <pre><code> &lt;?php echo strpos("Hello world!", "world"); ?&gt; </code></pre>
<h2>🟣 Modify Strings</h2> <ul> <li><code>strtoupper()</code> → Converts to uppercase</li> <li><code>strtolower()</code> → Converts to lowercase</li> <li><code>str_replace()</code> → Replaces text</li> <li><code>strrev()</code> → Reverses string</li> <li><code>trim()</code> → Removes whitespace</li> </ul>
  <pre><code> &lt;?php $x = "Hello World!"; echo strtoupper($x); echo strtolower($x); echo str_replace("World", "Dolly", $x); echo strrev($x); echo trim(" Hello World! "); ?&gt; </code></pre>
<h2>🟤 Convert to Array</h2> <ul> <li><code>explode()</code> splits a string into an array.</li> </ul>
  <pre><code> &lt;?php $x = "Hello World!"; $y = explode(" ", $x); print_r($y); ?&gt; </code></pre>
<h2>⚫ String Concatenation</h2> <ul> <li>Use <code>.</code> to join strings.</li> <li>Double quotes can interpolate variables.</li> </ul>
  <pre><code> &lt;?php $x = "Hello"; $y = "World"; $z = $x . $y; echo $z;
        $z = $x . " " . $y;
        echo $z;
        $z = "$x $y"; 
        echo $z; ?&gt; 
  </code></pre>
<h2>⚪ Slicing Strings</h2> <ul> <li><code>substr()</code> extracts part of a string.</li> </ul>
<pre><code> &lt;?php $x = "Hello World!";
  echo substr($x, 6, 5); // "World" echo substr($x, 6); // "World!" echo substr($x, -5, 3); // "orl" echo substr("Hi, how are you?", 5, -3); // "ow are y" ?&gt; </code></pre>
<h2>🌈 Escape Characters</h2> <ul> <li>Use <code>\</code> to escape illegal characters.</li> </ul>
<pre><code> &lt;?php $x = "We are the so-called \"Vikings\" from the north."; echo $x; ?&gt; </code></pre>
<h3>Common Escape Sequences</h3> <ul> <li><code>\'</code> → Single Quote</li> <li><code>\"</code> → Double Quote</li> <li><code>$</code> → PHP Variable</li> <li><code>\n</code> → New Line</li> <li><code>\r</code> → Carriage Return</li> <li><code>\t</code> → Tab</li> <li><code>\f</code> → Form Feed</li> <li><code>\ooo</code> → Octal Value</li> <li><code>\xhh</code> → Hex Value</li> </ul>
<img src="https://user-images.githubusercontent.com/74038190/212284115-f47cd8ff-2ffb-4b04-b5bf-4d1c14c0247f.gif" width="1010">
