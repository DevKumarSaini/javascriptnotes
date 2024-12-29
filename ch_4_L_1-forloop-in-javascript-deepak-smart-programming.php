<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords" content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Javascript Frameworks</title>

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

                    <h3 class="text-center"> JavaScript For Loop</h3>
                    <hr />

                    <section>


                        <h4 class="notes-heading">for Loop in JavaScript</h4>
                        <p>The <code>for</code> loop is one of the most commonly used loops in JavaScript. It allows you to execute a block of code a specific number of times, based on a condition. The loop's syntax is designed to be compact and flexible, making it ideal for iterating over arrays, numbers, or other iterable objects.</p>

                        <h5 class="notes-subheading">Syntax:</h5>
                        <pre><code>for (initialization; condition; increment) {
    // Code to be executed for each iteration
}</code></pre>
                        <p><strong>Initialization:</strong> This is where you typically define and initialize the loop counter (e.g., <code>let i = 0</code>).</p>
                        <p><strong>Condition:</strong> This is the test condition that determines whether the loop will continue to execute. The loop will run as long as this condition evaluates to true. Once the condition evaluates to false, the loop stops.</p>
                        <p><strong>Increment:</strong> This is the update expression that modifies the loop counter after each iteration (e.g., <code>i++</code> or <code>i += 2</code>).</p>

                        <h5 class="notes-subheading">How the <code>for</code> Loop Works:</h5>
                        <ul>
                            <li>Initialization is executed once, before the loop starts.</li>
                            <li>The condition is evaluated before each iteration. If it's true, the code block inside the loop is executed.</li>
                            <li>After the code block is executed, the increment expression is evaluated.</li>
                            <li>The loop repeats steps 2 and 3 until the condition is no longer true.</li>
                        </ul>

                        <h5 class="notes-subheading">Basic Example:</h5>
                        <p>Here's a simple example of a <code>for</code> loop that prints numbers from 1 to 5:</p>
                        <pre><code>for (let i = 1; i <= 5; i++) {
    console.log(i);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>1
2
3
4
5</pre>

                        <p><strong>Explanation:</strong></p>
                        <ul>
                            <li><strong>Initialization:</strong> <code>let i = 1</code> – This sets the starting point of the loop (starting from 1).</li>
                            <li><strong>Condition:</strong> <code>i &lt;= 5</code> – The loop will continue as long as <code>i</code> is less than or equal to 5.</li>
                            <li><strong>Increment:</strong> <code>i++</code> – This increments <code>i</code> by 1 after each iteration.</li>
                        </ul>

                        <h5 class="notes-subheading">Example with Different Increments:</h5>
                        <p>You can customize the increment value to control how the loop counter changes.</p>
                        <pre><code>for (let i = 0; i <= 10; i += 2) {
    console.log(i);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>0
2
4
6
8
10</pre>

                        <p><strong>Breaking Down the Code:</strong></p>
                        <ul>
                            <li><strong>Initialization:</strong> <code>let i = 0</code> – Start the loop counter at 0.</li>
                            <li><strong>Condition:</strong> <code>i &lt;= 10</code> – Keep running the loop as long as <code>i</code> is less than or equal to 10.</li>
                            <li><strong>Increment:</strong> <code>i += 2</code> – Increase <code>i</code> by 2 after each iteration.</li>
                        </ul>

                        <h5 class="notes-subheading">Example with Decrement:</h5>
                        <p>You can also use a <code>for</code> loop to decrease the value of the loop counter.</p>
                        <pre><code>for (let i = 10; i >= 1; i--) {
    console.log(i);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>10
9
8
7
6
5
4
3
2
1</pre>

                        <h5 class="notes-subheading">Nested <code>for</code> Loops:</h5>
                        <p>You can nest one <code>for</code> loop inside another, which is useful for iterating over multi-dimensional arrays (e.g., matrices).</p>
                        <pre><code>for (let i = 1; i <= 3; i++) {
    for (let j = 1; j <= 3; j++) {
        console.log(\`i = \${i}, j = \${j}\`);
    }
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>i = 1, j = 1
i = 1, j = 2
i = 1, j = 3
i = 2, j = 1
i = 2, j = 2
i = 2, j = 3
i = 3, j = 1
i = 3, j = 2
i = 3, j = 3</pre>

                        <h5 class="notes-subheading">Using <code>for</code> Loop with Arrays:</h5>
                        <p>A common use of the <code>for</code> loop is iterating through the elements of an array.</p>
                        <pre><code>let fruits = ["apple", "banana", "cherry", "date"];

for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>apple
banana
cherry
date</pre>

                        <h5 class="notes-subheading">Using <code>for</code> Loop with Break and Continue:</h5>
                        <p>You can control the flow of the <code>for</code> loop using <code>break</code> and <code>continue</code>:</p>
                        <ul>
                            <li><strong>break:</strong> Exits the loop entirely.</li>
                            <li><strong>continue:</strong> Skips the current iteration and moves to the next one.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Example with break:</h6>
                        <pre><code>for (let i = 1; i <= 5; i++) {
    if (i === 3) {
        break;  // Exit the loop when i is 3
    }
    console.log(i);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>1
2</pre>

                        <h6 class="notes-sub-subheading">Example with continue:</h6>
                        <pre><code>for (let i = 1; i <= 5; i++) {
    if (i === 3) {
        continue;  // Skip the iteration when i is 3
    }
    console.log(i);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>1
2
4
5</pre>

                        <h5 class="notes-subheading">For...in Loop vs. For Loop</h5>
                        <p>The <code>for...in</code> loop is used to iterate over the properties of an object, not the values in an array. It is not generally used for arrays because it iterates over keys, not values. Here’s a quick comparison:</p>

                        <h6 class="notes-sub-subheading">for loop (used for arrays or when you know the number of iterations):</h6>
                        <pre><code>let arr = [10, 20, 30];
for (let i = 0; i < arr.length; i++) {
    console.log(arr[i]);  // Accessing elements by index
}</code></pre>

                        <h6 class="notes-sub-subheading">for...in loop (used for objects, or for iterating through the properties of an object):</h6>
                        <pre><code>let person = {
    name: "John",
    age: 30,
    country: "USA"
};

for (let key in person) {
    console.log(key + ": " + person[key]);  // Accessing properties by key
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>name: John
age: 30
country: USA</pre>

                        <h5 class="notes-subheading">Summary:</h5>
                        <ul>
                            <li>The <code>for</code> loop is used to iterate over a block of code a specific number of times.</li>
                            <li>It’s particularly useful for iterating over arrays, numbers, and ranges.</li>
                            <li>The <code>for</code> loop allows you to set the initial value, condition, and increment/decrement expression.</li>
                            <li>It’s flexible and can be combined with <code>break</code> and <code>continue</code> to control the flow of the loop.</li>
                        </ul>

                        <p>If you have further questions or need more examples, feel free to ask!</p>





                        <h4 class="notes-heading">`for...in` and `for...of` Loops in JavaScript</h4>
                        <p>Both <code>for...in</code> and <code>for...of</code> loops are used to iterate over different types of data structures in JavaScript. However, they have different use cases and behavior, and it’s important to understand when to use each.</p>

                        <hr>

                        <h5 class="notes-subheading">1. <code>for...in</code> Loop:</h5>
                        <p>The <code>for...in</code> loop is used to iterate over <strong>enumerable properties</strong> (keys) of an object or array. It gives you the <strong>property names</strong> or <strong>keys</strong> in the case of objects, or the <strong>index</strong> in the case of arrays.</p>

                        <h6 class="notes-sub-subheading">Syntax:</h6>
                        <pre><code>for (let key in object) {
    // code to execute for each property in the object
}</code></pre>
                        <ul>
                            <li><strong>key:</strong> Represents the property name (or index, in the case of arrays).</li>
                            <li><strong>object:</strong> The object or array whose properties or indices are being iterated over.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Key Points About <code>for...in</code>:</h6>
                        <ul>
                            <li>It <strong>iterates over all enumerable properties</strong> of an object, including properties inherited from its prototype chain.</li>
                            <li>When used with arrays, it gives you the <strong>index</strong> (as a string) of the array element, not the element itself.</li>
                            <li>It’s not recommended to use <code>for...in</code> for arrays if you need to access elements by index because it can return unexpected results if the array has been modified with non-numeric property names.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Examples of <code>for...in</code>:</h6>

                        <h6 class="notes-sub-subheading">Example 1: Iterating Over an Object</h6>
                        <pre><code>const person = {
    name: 'Alice',
    age: 25,
    city: 'New York'
};

for (let key in person) {
    console.log(key + ': ' + person[key]);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>name: Alice
age: 25
city: New York</pre>

                        <h6 class="notes-sub-subheading">Example 2: Iterating Over an Array (Not Recommended for Arrays)</h6>
                        <pre><code>const colors = ['red', 'green', 'blue'];

for (let index in colors) {
    console.log(index, colors[index]);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>0 red
1 green
2 blue</pre>
                        <p>The <code>for...in</code> loop gives you the <strong>index</strong> of each element in the array, but it's not ideal for arrays because it also includes <strong>non-numeric properties</strong> if they exist, leading to unexpected behavior.</p>

                        <hr>

                        <h5 class="notes-subheading">2. <code>for...of</code> Loop:</h5>
                        <p>The <code>for...of</code> loop is used to iterate over <strong>iterable objects</strong> such as <strong>arrays</strong>, <strong>strings</strong>, <strong>maps</strong>, <strong>sets</strong>, etc. It directly gives you the <strong>values</strong> of the iterable, rather than the indices or keys.</p>

                        <h6 class="notes-sub-subheading">Syntax:</h6>
                        <pre><code>for (let value of iterable) {
    // code to execute for each element of the iterable
}</code></pre>
                        <ul>
                            <li><strong>value:</strong> Represents the value of each element in the iterable.</li>
                            <li><strong>iterable:</strong> The iterable object (e.g., array, string, etc.) over which the loop iterates.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Key Points About <code>for...of</code>:</h6>
                        <ul>
                            <li>It <strong>does not</strong> iterate over object properties.</li>
                            <li>It works with any <strong>iterable</strong> object (such as arrays, strings, maps, sets).</li>
                            <li>The loop directly gives you the <strong>values</strong> of the iterable, making it more useful for arrays and strings compared to <code>for...in</code>.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Examples of <code>for...of</code>:</h6>

                        <h6 class="notes-sub-subheading">Example 1: Iterating Over an Array (Recommended for Arrays)</h6>
                        <pre><code>const colors = ['red', 'green', 'blue'];

for (let color of colors) {
    console.log(color);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>red
green
blue</pre>

                        <h6 class="notes-sub-subheading">Example 2: Iterating Over a String</h6>
                        <pre><code>const name = 'JavaScript';

for (let char of name) {
    console.log(char);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>J
a
v
a
S
c
r
i
p
t</pre>

                        <h6 class="notes-sub-subheading">Example 3: Iterating Over a Set</h6>
                        <pre><code>const uniqueNumbers = new Set([1, 2, 3, 4, 5]);

for (let num of uniqueNumbers) {
    console.log(num);
}</code></pre>
                        <p><strong>Output:</strong></p>
                        <pre>1
2
3
4
5</pre>

                        <hr>

                        <h5 class="notes-subheading">Differences Between <code>for...in</code> and <code>for...of</code>:</h5>
                        <table border="1">
                            <tr>
                                <th><strong>Feature</strong></th>
                                <th><strong><code>for...in</code></strong></th>
                                <th><strong><code>for...of</code></strong></th>
                            </tr>
                            <tr>
                                <td><strong>Iterates over</strong></td>
                                <td>Keys (or property names) in an object or array index</td>
                                <td>Values of an iterable (e.g., arrays, strings, sets)</td>
                            </tr>
                            <tr>
                                <td><strong>Best for</strong></td>
                                <td>Objects (to get keys or property names)</td>
                                <td>Arrays, strings, and other iterable objects</td>
                            </tr>
                            <tr>
                                <td><strong>Works on</strong></td>
                                <td>Objects and arrays</td>
                                <td>Arrays, strings, maps, sets, generators, etc.</td>
                            </tr>
                            <tr>
                                <td><strong>Index/Key or Value</strong></td>
                                <td>Iterates over keys (property names or array indices)</td>
                                <td>Iterates over values (actual data or elements)</td>
                            </tr>
                            <tr>
                                <td><strong>Prototype Chain</strong></td>
                                <td>Includes properties from the prototype chain</td>
                                <td>Does not include properties from the prototype chain</td>
                            </tr>
                            <tr>
                                <td><strong>Performance</strong></td>
                                <td>Slower for arrays (due to key enumeration)</td>
                                <td>Faster for arrays, strings, and other iterables</td>
                            </tr>
                        </table>

                        <hr>

                        <h5 class="notes-subheading">When to Use Which Loop:</h5>
                        <ul>
                            <li><strong>Use <code>for...in</code>:</strong> When you need to iterate over <strong>properties</strong> of an object (e.g., key-value pairs), or when you want to loop through an <strong>object's enumerable properties</strong> (including inherited ones).</li>
                            <li><strong>Use <code>for...of</code>:</strong> When you need to iterate over <strong>values</strong> in an iterable (e.g., arrays, strings, sets). It provides the actual data from the iterable, rather than the index or key.</li>
                        </ul>

                        <hr>

                        <h5 class="notes-subheading">Summary:</h5>
                        <ul>
                            <li>The <code>for...in</code> loop is used to iterate over the <strong>keys or property names</strong> of an object, and <strong>indices</strong> in an array.</li>
                            <li>The <code>for...of</code> loop is used to iterate over the <strong>values</strong> of an iterable (such as an array, string, map, or set).</li>
                        </ul>

                        <p>If you need more examples or have any questions, feel free to ask!</p>


                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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