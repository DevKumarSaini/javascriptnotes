<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Learn about JavaScript reserved keywords, their importance in the language, and how to avoid naming conflicts in your code." />
    <meta name="keywords" content="JavaScript keywords, reserved keywords, JavaScript language, JavaScript syntax rules" />

    <title>Javascript Keywords</title>

    <link rel="icon" href="images/favicon.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Top Bar -->
    <?php include 'top-bar.php'; ?>

    <!-- Navigation Bar -->
    <?php include 'navigation-bar.php'; ?>

    <div class="row">

        <div class="col-lg-3 col-12">
            <!-- left side navbar -->
            <?php include 'content-menu-bar.php'; ?>
        </div>



        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">

                    <h3 class="text-center"> JavaScript Keywords</h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Keywords in JavaScript</h4>

                        <!-- Points of keywords -->
                        <div class="ms-3">
                            <ul>
                                <li>In programming languages, keywords are <strong>predefined</strong> words that have a <strong>special meaning and purpose</strong> . They are essential for the structure and logic of your code.</li>
    
                                <li>Keywords are usually <strong>"reserved words."</strong> This means you cannot use them for other purposes like <strong>naming variables</strong> or <strong>functions</strong> . For example, you can't name a variable <strong>"if"</strong> or <strong>"for"</strong> because those words have a specific meaning to the compiler.</li>
    
                                <li>In essence, keywords are the <strong>building blocks</strong> of a programming language. They provide the <strong>instructions</strong> and <strong>structure</strong> that tell the computer what to do.</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Javascript Keywords table -->
                    <section>
                        <table class="table table-hover table-striped table-bordered mt-4">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>Data Types</strong></td>
                                    <td><code>boolean</code></td>
                                    <td>Represents a logical entity with two possible values: true or false.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td><code>null</code></td>
                                    <td>Represents the intentional absence of any object value.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td><code>undefined</code></td>
                                    <td>Represents a variable that has been declared but has not been assigned a value.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td></td>
                                    <td><code>number</code></td>
                                    <td>Represents numeric values, including integers, floating-point numbers, and special values like Infinity and NaN.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td></td>
                                    <td><code>string</code></td>
                                    <td>Represents a sequence of characters enclosed in single ('...') or double ("...") quotes.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td></td>
                                    <td><code>symbol</code> (ES6)</td>
                                    <td>Represents a unique and immutable value.</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td></td>
                                    <td><code>object</code></td>
                                    <td>Represents a collection of properties, where each property is a key-value pair.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><strong>Control Flow</strong></td>
                                    <td><code>break</code></td>
                                    <td>Exits from a loop (e.g., for, while, do...while) or a switch statement.</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td></td>
                                    <td><code>continue</code></td>
                                    <td>Skips the current iteration of a loop and proceeds to the next iteration.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td></td>
                                    <td><code>for</code></td>
                                    <td>Executes a block of code repeatedly, often with a counter.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td></td>
                                    <td><code>for...of</code></td>
                                    <td>Iterates over the values of an iterable object (e.g., arrays).</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td></td>
                                    <td><code>for...in</code></td>
                                    <td>Iterates over the properties of an object.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td></td>
                                    <td><code>if</code></td>
                                    <td>Executes a block of code if a specified condition is true.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td></td>
                                    <td><code>else</code></td>
                                    <td>Executes a block of code if the condition in the corresponding if statement is false.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td></td>
                                    <td><code>else if</code> </td>
                                    <td>Allows for multiple conditional checks.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td></td>
                                    <td><code>switch</code></td>
                                    <td>Evaluates an expression and executes the code block associated with the matching case.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td></td>
                                    <td><code>while</code></td>
                                    <td>Executes a block of code repeatedly as long as a specified condition is true.</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td></td>
                                    <td><code>do...while</code></td>
                                    <td>Executes a block of code at least once, and then repeatedly as long as a specified condition is true.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td><strong>Functions</strong></td>
                                    <td><code>function</code></td>
                                    <td>Defines a block of code that can be executed later.</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td></td>
                                    <td><code>return</code></td>
                                    <td>Exits a function and optionally returns a value.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td></td>
                                    <td><code>arguments</code></td>
                                    <td>An array-like object that provides access to the arguments passed to a function.</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td></td>
                                    <td><code>async/await (ES8)</code></td>
                                    <td>Enables asynchronous operations using promises in a more synchronous-like manner.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td><strong>Classes (ES6)</strong></td>
                                    <td><code>class</code></td>
                                    <td>Defines a blueprint for creating objects with properties and methods.</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td></td>
                                    <td><code>extends</code></td>
                                    <td>Creates a new class that inherits from an existing class.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td></td>
                                    <td><code>constructor</code></td>
                                    <td>A special method in a class that is called when an object of that class is created.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td></td>
                                    <td><code>super</code></td>
                                    <td>Refers to the parent class of a subclass.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td></td>
                                    <td><code>this</code></td>
                                    <td>Refers to the current object within a class or object method.</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td><strong>Variables</strong></td>
                                    <td><code>var</code></td>
                                    <td>Declares a variable (older syntax, can lead to unexpected behavior).</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td></td>
                                    <td><code>let</code></td>
                                    <td>Declares a block-scoped variable (modern and preferred).</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td></td>
                                    <td><code>const</code></td>
                                    <td>Declares a constant variable whose value cannot be reassigned after it's initialized.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td><strong>Operators</strong></td>
                                    <td><code>new</code></td>
                                    <td>Creates an instance of an object.</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td></td>
                                    <td><code>typeof</code></td>
                                    <td>Returns a string indicating the data type of an operand.</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td></td>
                                    <td><code>instanceof</code></td>
                                    <td>Checks if an object is an instance of a specific constructor.</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td></td>
                                    <td><code>in</code></td>
                                    <td>Checks if a property exists in an object.</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td></td>
                                    <td><code>delete</code></td>
                                    <td>Removes a property from an object.</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td><strong>Exceptions</strong></td>
                                    <td><code>try <br> catch <br>finally</code></td>
                                    <td>Handles exceptions (errors) that occur during code execution.</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td></td>
                                    <td><code>throw</code></td>
                                    <td>Throws an exception (error) that can be caught by a catch block.</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td><strong>Other</strong></td>
                                    <td><code>this</code></td>
                                    <td>Refers to the current object within a class or object method.</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td></td>
                                    <td><code>void</code></td>
                                    <td>Specifies that a function does not return a value.</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td><strong>Reserved</strong></td>
                                    <td><code>abstract</code></td>
                                    <td>(Future reserved word) Intended for future use in class definitions.</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td></td>
                                    <td><code>byte</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td></td>
                                    <td><code>char</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td></td>
                                    <td><code>double</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td></td>
                                    <td><code>enum</code></td>
                                    <td>(Future reserved word) Intended for future use to define a set of named constants.</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td></td>
                                    <td><code>final</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td></td>
                                    <td><code>float</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td></td>
                                    <td><code>goto</code></td>
                                    <td>(Not currently used in JavaScript)</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td></td>
                                    <td><code>implements</code></td>
                                    <td>(Future reserved word) Intended for future use in interface definitions.</td>
                                </tr>
                                <tr>
                                    <td>49</td>
                                    <td></td>
                                    <td><code>int</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td></td>
                                    <td><code>interface</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>51</td>
                                    <td></td>
                                    <td><code>long</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td></td>
                                    <td><code>native</code></td>
                                    <td>(Used internally by the JavaScript engine)</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td></td>
                                    <td><code>package</code></td>
                                    <td>(Future reserved word) Intended for future use in module systems.</td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td></td>
                                    <td><code>private</code></td>
                                    <td>(ES6) Used to declare private class members (not fully supported in all environments).</td>
                                </tr>
                                <tr>
                                    <td>55</td>
                                    <td></td>
                                    <td><code>protected</code></td>
                                    <td>(ES6) Used to declare protected class members (not fully supported in all environments).</td>
                                </tr>
                                <tr>
                                    <td>56</td>
                                    <td></td>
                                    <td><code>public</code></td>
                                    <td>(ES6) Used to declare public class members (not necessary to explicitly declare).</td>
                                </tr>
                                <tr>
                                    <td>57</td>
                                    <td></td>
                                    <td><code>short</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td></td>
                                    <td><code>synchronized</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>59</td>
                                    <td></td>
                                    <td><code>transient</code></td>
                                    <td>(Future reserved word) Intended for future use.</td>
                                </tr>
                                <tr>
                                    <td>60</td>
                                    <td></td>
                                    <td><code>throws</code></td>
                                    <td>(Used in function declarations, but not widely supported) Indicates that a function may throw certain exceptions.</td>
                                </tr>
                                <tr>
                                    <td>61</td>
                                    <td></td>
                                    <td><code>with</code></td>
                                    <td>(Deprecated) Used to temporarily change the value of this within a block of code.</td>
                                </tr>
                            </tbody>
                        </table>

                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                <a href="javascript-comments.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-variables.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        document
            .getElementById("notes-hamburger-btn")
            .addEventListener("click", function() {
                document.getElementById("notes-sidebar").classList.toggle("active");
            });

        document
            .getElementById("notes-sidebar-close-btn")
            .addEventListener("click", function() {
                document.getElementById("notes-sidebar").classList.remove("active");
            });
    </script>

    <!-- Prism.js for Syntax Highlighting -->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/components/prism-java.min.js"></script>
</body>

</html>