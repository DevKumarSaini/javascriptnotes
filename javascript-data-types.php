<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Explore JavaScript data types, including strings, numbers, booleans, and more, and understand how they are used in JavaScript programming." />
    <meta name="keywords" content="JavaScript data types, strings, numbers, booleans, JavaScript variables, type conversion" />

    <title>Javascript Data types</title>

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

                    <h3 class="text-center"> JavaScript Data types</h3>
                    <hr />

                    <section>
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Data Types in JavaScript</h4>
                            <div class="ms-4">
                                <p>In JavaScript, a <code>data type</code> is a classification that specifies which type of value a variable can hold. Understanding data types is essential for effective programming, as it helps determine how data is stored and manipulated.</p>

                                <h5 class="notes-subheading">Types of Data Types in JavaScript</h5>

                                <p>JavaScript has two main categories of data types: <strong>Primitive Data Types</strong> and <strong>Reference Data Types</strong>.</p>

                                <div class="ms-3">
                                    <strong>1. Primitive Data Types</strong>
                                    <p>Primitive data types are the most basic types of data in JavaScript. They are immutable (cannot be changed) and are stored directly in the variable.</p>
    
                                    <!-- Primitive Datatype Table -->
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr class="table-dark">
                                                <th style="width: 10%;">Data Type</th>
                                                <th style="width: 60%;">Description</th>
                                                <th style="width: 30%;">Example</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>String</strong></td>
                                                <td>Represents a sequence of characters. Can be defined using single quotes, double quotes, or backticks.</td>
                                                <td><code>let name = "Alice";</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Number</strong></td>
                                                <td>Represents numeric values, including integers and floating-point numbers.</td>
                                                <td><code>let age = 30;</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Boolean</strong></td>
                                                <td>Represents a logical entity that can be either <code>true</code> or <code>false</code>.</td>
                                                <td><code>let isStudent = true;</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Undefined</strong></td>
                                                <td>A variable that has been declared but has not been assigned a value.</td>
                                                <td><code>let x; console.log(x); // Output: undefined</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Null</strong></td>
                                                <td>Represents the intentional absence of any object value.</td>
                                                <td><code>let emptyValue = null;</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Symbol</strong></td>
                                                <td>A unique and immutable primitive value, often used as object property keys.</td>
                                                <td><code>let sym = Symbol("id");</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>BigInt</strong></td>
                                                <td>Represents integers with arbitrary precision, allowing for very large integers.</td>
                                                <td><code>let bigNumber = 1234567890123456789012345678901234567890n;</code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="ms-3">
                                    <strong>2. Reference Data Types</strong>
                                    <p>Reference data types are more complex and are mutable. They are stored by reference, meaning that multiple variables can refer to the same object.</p>
    
                                    <!-- Reference Datatype table -->
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr class="table-dark">
                                                <th style="width: 10%;">Data Type</th>
                                                <th style="width: 60%;">Description</th>
                                                <th style="width: 30%;">Example</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Object</strong></td>
                                                <td>A collection of key-value pairs. Objects can hold various data types, including other objects.</td>
                                                <td><code>let person = { name: "Alice", age: 30 };</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Array</strong></td>
                                                <td>A special type of object used to store ordered collections of values. Arrays can hold multiple values in a single variable and are indexed numerically.</td>
                                                <td><code>let colors = ["red", "green", "blue"];</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Function</strong></td>
                                                <td>A callable object that can be invoked to perform actions or return values. Functions are first-class objects in JavaScript.</td>
                                                <td><code>function greet() { return "Hello!"; }</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date</strong></td>
                                                <td>Represents dates and times. JavaScript provides a built-in Date object for handling date-related operations.</td>
                                                <td><code>let now = new Date();</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>RegExp</strong></td>
                                                <td>Represents regular expressions, which are patterns used to match character combinations in strings.</td>
                                                <td><code>let pattern = /abc/;</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Error</strong></td>
                                                <td>Represents runtime errors that can occur in JavaScript code, allowing developers to handle exceptions gracefully.</td>
                                                <td><code>let error = new Error("Something went wrong!");</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Map</strong></td>
                                                <td>A collection of keyed data items, similar to objects but with better performance for frequent additions and removals of key-value pairs.</td>
                                                <td><code>let map = new Map();</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Set</strong></td>
                                                <td>A collection of unique values, meaning it can hold only distinct values without duplicates.</td>
                                                <td><code>let set = new Set([1, 2, 3, 2]);</code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <div>
                            <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Key Difference of Data-types</h4>
                            <div class="ms-3">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr class="table-dark">
                                            <th style="width: 10%;">Concept</th>
                                            <th style="width: 40%;">Primitive Data Types</th>
                                            <th style="width: 40%;">Reference Data Types</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Mutability</strong> </td>
                                            <td>Immutable (cannot be changed)</td>
                                            <td>Mutable (contents can be changed)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Memory Storage</strong> </td>
                                            <td>Stored directly in memory</td>
                                            <td>Stores a reference to the location of the data in memory</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Assignment</strong> </td>
                                            <td>A new copy of the value is created</td>
                                            <td>Both variables point to the same underlying data in memory</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="alert alert-danger mt-4" role="alert">
                                <strong>Note: </strong>Understanding these data types is crucial for effectively working with data in JavaScript, as it influences how you declare variables, perform operations, and manage data structures. If you have more questions or need further details, feel free to ask!.
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                    <a href="javascript-variables.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-operators.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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