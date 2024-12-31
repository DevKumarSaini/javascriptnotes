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

                    <h3 class="text-center"> JavaScript Operator</h3>
                    <hr />

                    <section>
                        <!-- Introduction of Javascript Operators -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Operators in JavaScript</h4>
                            <div class="ms-4">
                                <p>In JavaScript, operators are special symbols that perform operations on one or more values (called operands). They are fundamental for manipulating data, performing calculations, and controlling the flow of your program.</p>

                                <h5 class="notes-subheading">Conciseness and Readability</h5>
                                <p>Operators provide a concise way to express complex operations, making your code more readable and easier to understand.</p>

                                <h5 class="notes-subheading">JavaScript Operators</h5>
                                <ol>
                                    <li>Arithmetic Operators</li>
                                    <li>Assignment Operators</li>
                                    <li>Comparison Operators</li>
                                    <li>Logical Operators</li>
                                    <li>Bitwise Operators</li>
                                    <li>Ternary (Conditional) Operator</li>
                                    <li>Type Operators</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Operator Table -->
                        <div>
                            <!-- Arithmetic Operator -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">1. Arithmetic Operators</h4>
                                <p>These operators are used to perform basic mathematical calculations such as addition, subtraction, multiplication, division, and modulus. They are essential for manipulating numeric values and solving arithmetic problems in programming.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%"> Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>+</td>
                                            <td>Addition</td>
                                            <td><code>5 + 3</code></td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>Subtraction</td>
                                            <td><code>5 - 3</code></td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>*</td>
                                            <td>Multiplication</td>
                                            <td><code>5 * 3</code></td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>/</td>
                                            <td>Division</td>
                                            <td><code>6 / 3</code></td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>%</td>
                                            <td>Modulus (Remainder)</td>
                                            <td><code>5 % 2</code></td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>**</td>
                                            <td>Exponentiation (ES6+)</td>
                                            <td><code>2 ** 3</code></td>
                                            <td>8</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Assignment Operator -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">2. Assignment Operators</h4>
                                <p>These operators are used to assign values to variables. They can also combine assignment with arithmetic operations, allowing developers to simplify expressions and make the code more concise while updating variable values.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%">Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>=</td>
                                            <td>Assigns a value</td>
                                            <td><code>x = 5</code></td>
                                            <td>x = 5</td>
                                        </tr>
                                        <tr>
                                            <td>+=</td>
                                            <td>Adds and assigns</td>
                                            <td><code>x += 3;</code> (equivalent to <code>x = x + 3</code>)</td>
                                            <td>x = 8</td>
                                        </tr>
                                        <tr>
                                            <td>-=</td>
                                            <td>Subtracts and assigns</td>
                                            <td><code>x -= 2;</code></td>
                                            <td>x = 6</td>
                                        </tr>
                                        <tr>
                                            <td>*=</td>
                                            <td>Multiplies and assigns</td>
                                            <td><code>x *= 2;</code></td>
                                            <td>x = 12</td>
                                        </tr>
                                        <tr>
                                            <td>/=</td>
                                            <td>Divides and assigns</td>
                                            <td><code>x /= 3;</code></td>
                                            <td>x = 4</td>
                                        </tr>
                                        <tr>
                                            <td>%=</td>
                                            <td>Modulus and assigns</td>
                                            <td><code>x %= 3;</code></td>
                                            <td>x = 1</td>
                                        </tr>
                                        <tr>
                                            <td>**=</td>
                                            <td>Exponentiation and assigns (ES6+)</td>
                                            <td><code>x **= 2;</code></td>
                                            <td>x = 16</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- Comparison Operator -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">3. Comparison Operators</h4>
                                <p>These operators are used to compare two values or expressions. They determine the relationship between the values, such as equality, inequality, or relative size, and return a boolean result (true or false) for decision-making.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%">Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>==</td>
                                            <td>Equal to (value only)</td>
                                            <td><code>5 == '5'</code></td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>===</td>
                                            <td>Strict equal to (value and type)</td>
                                            <td><code>5 === '5'</code></td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>!=</td>
                                            <td>Not equal to (value only)</td>
                                            <td><code>5 != '6'</code></td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>!==</td>
                                            <td>Strict not equal to (value and type)</td>
                                            <td><code>5 !== 5</code></td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;</td>
                                            <td>Greater than</td>
                                            <td><code>5 > 3</code></td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;</td>
                                            <td>Less than</td>
                                            <td><code>5 < 7</code>
                                            </td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;=</td>
                                            <td>Greater than or equal to</td>
                                            <td><code>5 >= 5</code></td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;=</td>
                                            <td>Less than or equal to</td>
                                            <td><code>5 <= 3</code>
                                            </td>
                                            <td>false</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Logical Operator -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">4. Logical Operators</h4>
                                <p>Logical operators are used to evaluate multiple conditions and return a boolean value based on logical relationships. They are crucial in implementing complex decision-making by combining or negating boolean expressions.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%">Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&amp;&amp;</td>
                                            <td>Logical AND</td>
                                            <td><code>true && false</code></td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>||</td>
                                            <td>Logical OR</td>
                                            <td><code>true || false</code></td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>!</td>
                                            <td>Logical NOT</td>
                                            <td><code>!true</code></td>
                                            <td>false</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- BItwise Operators -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">5. Bitwise Operators</h4>
                                <p>These operators are used to manipulate individual bits of integers. They perform operations such as AND, OR, XOR, and shifts, enabling low-level data manipulation and efficient computation in areas like cryptography, networking, and optimization.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%">Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&amp;</td>
                                            <td>Bitwise AND</td>
                                            <td><code>5 & 3</code></td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>|</td>
                                            <td>Bitwise OR</td>
                                            <td><code>5 | 3</code></td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <td>^</td>
                                            <td>Bitwise XOR</td>
                                            <td><code>5 ^ 3</code></td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>~</td>
                                            <td>Bitwise NOT</td>
                                            <td><code>~5</code></td>
                                            <td>-6</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;&lt;</td>
                                            <td>Left shift</td>
                                            <td><code>5 &lt;&lt; 1</code></td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;&gt;</td>
                                            <td>Right shift</td>
                                            <td><code>5 &gt;&gt; 1</code></td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;&gt;&gt;</td>
                                            <td>Unsigned right shift</td>
                                            <td><code>-5 >>> 1</code></td>
                                            <td>2147483645</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- Ternary Operator -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">6. Ternary (Conditional) Operator</h4>
                                <p>This operator is used to simplify conditional statements by allowing inline evaluation of a condition. It returns one of two values based on the condition, reducing the need for lengthy if-else constructs and improving code readability.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%">Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>?:</td>
                                            <td>Returns one of two values based on a condition.</td>
                                            <td><code>let result = (5 > 3) ? 'yes' : 'no';</code></td>
                                            <td>result = 'yes'</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Type Operator -->
                            <div class="ms-4">
                                <h4 class="notes-heading mt-4">7. Type Operators</h4>
                                <p>Type operators are used to identify the type of a variable or expression and to check the relationship between objects and their constructors or classes. They are essential for ensuring type safety and for implementing polymorphism in object-oriented programming.</p>
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 20%">Operator</th>
                                            <th style="width: 40%">Description</th>
                                            <th style="width: 20%">Example</th>
                                            <th style="width: 20%">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>typeof</td>
                                            <td>Returns the data type of a variable.</td>
                                            <td><code>typeof 'Hello'</code></td>
                                            <td>'string'</td>
                                        </tr>
                                        <tr>
                                            <td>instanceof</td>
                                            <td>Checks if an object is an instance of a specific class or constructor.</td>
                                            <td><code>[] instanceof Array</code></td>
                                            <td>true</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <hr class="mt-4 mb-4">

                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Operator Precedence</h4>
                        <div class="ms-4">
                            <p>Operator precedence determines the order in which different operators are evaluated in an expression. In JavaScript, operators with higher precedence are evaluated before those with lower precedence.</p>

                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="table-dark">
                                        <th>Precedence Level</th>
                                        <th>Operator</th>
                                        <th>Description</th>
                                        <th>Associativity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>()</td>
                                        <td>Grouping</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>new</td>
                                        <td>Constructor</td>
                                        <td>Right-to-left</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>++, --, +, -, !, ~</td>
                                        <td>Unary operators</td>
                                        <td>Right-to-left</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>**</td>
                                        <td>Exponentiation</td>
                                        <td>Right-to-left</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>*, /, %</td>
                                        <td>Multiplication, Division, Modulus</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>+, -</td>
                                        <td>Addition, Subtraction</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>&lt;&lt;, &gt;&gt;, &gt;&gt;&gt;</td>
                                        <td>Bitwise Shift Operators</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>&lt;, &lt;=, &gt;, &gt;=</td>
                                        <td>Comparison Operators</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>==, !=, ===, !==</td>
                                        <td>Equality Operators</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>&amp;</td>
                                        <td>Bitwise AND</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>^</td>
                                        <td>Bitwise XOR</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>|</td>
                                        <td>Bitwise OR</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>&amp;&amp;</td>
                                        <td>Logical AND</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>?:</td>
                                        <td>Ternary (Conditional) Operator</td>
                                        <td>Right-to-left</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>=</td>
                                        <td>Assignment</td>
                                        <td>Right-to-left</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>+=, -=, *=, /=, etc.</td>
                                        <td>Compound Assignment Operators</td>
                                        <td>Right-to-left</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>,</td>
                                        <td>Comma Operator</td>
                                        <td>Left-to-right</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ms-4">
                            <h5 class="notes-subheading">Point to remember</h5>
                            <ul>
                                <li><strong>Grouping (()):</strong> Parentheses can be used to override default precedence. Expressions inside parentheses are evaluated first.</li>
                                <li><strong>Associativity:</strong> Most operators have left-to-right associativity, meaning they are evaluated from left to right. However, some (like <code>new</code>, unary operators, <code>**</code>, and assignment operators) have right-to-left associativity.</li>
                                <li><strong>Unary vs. Binary:</strong> Unary operators (like <code>++</code> or <code>-</code>) are evaluated before binary operators (like <code>+</code> or <code>*</code>).</li>
                            </ul>
                        </div>

                    </section>


                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_3_L_1-if-statement-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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