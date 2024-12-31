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

                    <h3 class="text-center"> JavaScript for...in and for...of Loop</h3>
                    <hr />

                    <section>
                        <!-- Definition of for of and for in loop -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> for...in - and - for...of Loops in JavaScript</h4>
                            <p class="ms-4">Both <code>for...in</code> and <code>for...of</code> loops are used to iterate over different types of data structures in JavaScript. However, they have different use cases and behavior, and it’s important to understand when to use each.</p>
                        </div>


                        <hr class="mt-4 mb-4">


                        <!-- Fo...In Loop section-->
                        <div>
                            <div class="ms-4">
                                <h5 class="notes-subheading">1. for...in</> Loop</h5>
                                <p class="ms-4">The <code>for...in</code> loop is used to iterate over <strong>enumerable properties</strong> (keys) of an object or array. It gives you the <strong>property names</strong> or <strong>keys</strong> in the case of objects, or the <strong>index</strong> in the case of arrays.</p>


                                <!-- An Simple example of for...in loop -->
                                <div class="ms-4">

                                    <strong>Syntax</strong>
                                    <pre class="ms-4"><code class="language-javascript">for (let key in object) {
    // code to execute for each property in the object
}</code></pre>


                                    <ul>
                                        <li><strong>key</strong> Represents the property name (or index, in the case of arrays).</li>
                                        <li><strong>object</strong> The object or array whose properties or indices are being iterated over.</li>
                                    </ul>


                                    <!-- Key points of for...in loop -->
                                    <strong>Key Points About <code>for...in</code></strong>
                                    <ul>
                                        <li>It <strong>iterates over all enumerable properties</strong> of an object, including properties inherited from its prototype chain.</li>
                                        <li>When used with arrays, it gives you the <strong>index</strong> (as a string) of the array element, not the element itself.</li>
                                        <li>It’s not recommended to use <code>for...in</code> for arrays if you need to access elements by index because it can return unexpected results if the array has been modified with non-numeric property names.</li>
                                    </ul>

                                    <h5 class="notes-subheading">Examples of <code>for...in</code></h5>



                                    <!-- Example 1 of for...in loop -->
                                    <strong>1. Iterating Over an Object</strong>
                                    <div class="ms-3">
                                        <pre><code class="language-javascript">const person = {
    name 'Alice',
    age 25,
    city 'New York'
};

for (let key in person) {
    console.log(key + ' ' + person[key]);
}</code></pre>
                                        <p><strong>Output</strong></p>
                                        <pre><code class="language-javascript"> name Alice
age 25
city New York</code></pre>
                                    </div>


                                    <!-- Example 2 of for...in loop -->
                                    <div class="mt-5">
                                        <strong>2. Iterating Over an Array (Not Recommended for Arrays)</strong>
                                        <div class="ms-3">
                                            <pre><code class="language-javascript">const colors = ['red', 'green', 'blue'];
    for (let index in colors) {
        console.log(index, colors[index]);
    }</code></pre>
                                            <p><strong>Output</strong></p>
                                            <pre><code class="language-javascript">0 red
1 green
2 blue</code></pre>
                                            <p>The <code>for...in</code> loop gives you the <strong>index</strong> of each element in the array, but it's not ideal for arrays because it also includes <strong>non-numeric properties</strong> if they exist, leading to unexpected behavior.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <hr class="mt-4 mb-4">

                        <div>
                            <div class="ms-4">
                                <h5 class="notes-subheading">2. <code>for...of</code> Loop</h5>
                                <p class="ms-4">The <code>for...of</code> loop is used to iterate over <strong>iterable objects</strong> such as <strong>arrays</strong>, <strong>strings</strong>, <strong>maps</strong>, <strong>sets</strong>, etc. It directly gives you the <strong>values</strong> of the iterable, rather than the indices or keys.</p>


                                <!-- An simple example of for of loops -->
                                <div class="ms-4">

                                    <strong>Syntax</strong>
                                    <pre class="ms-4"><code class="language-javascript">for (let value of iterable) {
    // code to execute for each element of the iterable
}</code></pre>

                                    <ul>
                                        <li><strong>value</strong> Represents the value of each element in the iterable.</li>
                                        <li><strong>iterable</strong> The iterable object (e.g., array, string, etc.) over which the loop iterates.</li>
                                    </ul>

                                    <!-- key points of for...of loop -->
                                    <strong>Key Points About <code>for...of</code></strong>
                                    <ul>
                                        <li>It <strong>does not</strong> iterate over object properties.</li>
                                        <li>It works with any <strong>iterable</strong> object (such as arrays, strings, maps, sets).</li>
                                        <li>The loop directly gives you the <strong>values</strong> of the iterable, making it more useful for arrays and strings compared to <code>for...in</code>.</li>
                                    </ul>

                                    <h5 class="notes-subheading">Examples of <code>for...of</code></h5>



                                    <!-- Example 1 of for...of loop -->
                                    <div>
                                        <strong>1. Iterating Over an Array (Recommended for Arrays)</strong>
                                        <div class="ms-3">
                                            <pre><code class="language-javascript">const colors = ['red', 'green', 'blue'];
for (let color of colors) {
    console.log(color);
}</code></pre>
                                            <p><strong>Output</strong></p>
                                            <pre><code class="language-javascript">red
green
blue</code></pre>
                                        </div>
                                    </div>



                                    <!-- Example 2 of for...of loop -->
                                    <div class="mt-5">
                                        <strong>2. Iterating Over a String</strong>
                                        <div class="ms-3">
                                            <pre><code class="language-javascript">const name = 'JavaScript';
for (let char of name) {
    console.log(char);
}</code></pre>
                                            <p><strong>Output</strong></p>
                                            <pre><code class="language-javascript">J
a
v
a
S
c
r
i
p
t</code></pre>
                                        </div>
                                    </div>


                                    <!-- Example 3 of for...of loop -->
                                    <div class="mt-5">
                                        <strong>3. Iterating Over a Set </strong>
                                        <div class="ms-3">
                                            <pre><code class="language-javascript">const uniqueNumbers = new Set([1, 2, 3, 4, 5]);
for (let num of uniqueNumbers) {
    console.log(num);
}</code></pre>
                                            <p><strong>Output</strong></p>
                                            <pre><code class="language-javascript"></code>1
2
3
4
5</pre>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <hr class="mt-4 mb-4">

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Differences Between <code>for...in</code> and <code>for...of</code></h4>
                            <div class="ms-4">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr class="table-dark">
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
                            </div>
                        </div>

                        <!-- Selection between loops -->
                        <div>
                            <div class="ms-4">
                                <h5 class="notes-subheading">Selection between Loop</h5>
                                <ul>
                                    <li><strong>Use <code>for...in</code></strong> When you need to iterate over <strong>properties</strong> of an object (e.g., key-value pairs), or when you want to loop through an <strong>object's enumerable properties</strong> (including inherited ones). <strong> OR </strong> The <code>for...in</code> loop is used to iterate over the <strong>keys or property names</strong> of an object, and <strong>indices</strong> in an array.</li>
                                    <li><strong>Use <code>for...of</code></strong> When you need to iterate over <strong>values</strong> in an iterable (e.g., arrays, strings, sets). It provides the actual data from the iterable, rather than the index or key. <strong> OR </strong> The <code>for...of</code> loop is used to iterate over the <strong>values</strong> of an iterable (such as an array, string, map, or set).</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_4_L_2-while-loop-in-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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