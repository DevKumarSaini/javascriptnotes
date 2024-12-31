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

                    <h3 class="text-center"> JavaScript Syntax</h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Importance of Syntax</h4>

                        <!-- Definition of Syntax and Provide importance -->
                        <div class="ms-4">
                            <p>In programming, <strong>syntax</strong> refers to the set of rules that defines the combinations of symbols and characters that are considered to be correctly structured programs in a given programming language. Just like grammar in human languages, syntax determines how code must be written for the compiler or interpreter to understand it.</p>

                            <h5 class="notes-subheading">Syntax in Programming Languages</h5>
                            <ol>
                                <li><strong>Clarity</strong>: Syntax provides a clear structure, making it easier for programmers to read and understand code.</li>
                                <li><strong>Error Detection</strong>: Proper syntax helps in catching errors during compilation or interpretation, which makes debugging easier.</li>
                                <li><strong>Functionality</strong>: Syntax defines how commands and functions are executed, enabling developers to leverage the full power of the programming language.</li>
                            </ol>
                        </div>

                        <hr class="mt-4 mb-4">

                        <!-- General Syntax of Programming -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript Syntax</h4>
                            <p class="ms-4">JavaScript syntax includes various elements, such as</p>
                            <ul>
                                <!-- Variables  -->
                                <li><strong>Variables</strong>: Declared using <code>var</code>, <code>let</code>, or <code>const</code>.
                                    <pre><code class="language-javascript">var a = 10</code></pre>
                                </li>

                                <!-- Control Structures -->
                                <li class="mt-4"><strong>Control Structures</strong>: Such as <code>if</code>, <code>for</code>, <code>while</code>, etc.

                                    <pre><code class="language-javascript">// if example
    if(a>b){
        console.log(`${a} is greater`)
    }
    
    // for example
    for(let i=0; i<=10; i++){
        console.log("Value of i is -> "+i)
    }
    
    // while example
    let i=1 
    while(i<10){
        console.log(i)
        i = i+1
    }
</code></pre>
                                </li>

                                <!-- Functions  -->
                                <li class="mt-4"><strong>Functions</strong>: Defined using the <code>function</code> keyword or arrow functions (<code>=&gt;</code>).
                                    <pre><code class="language-javascript">function greet(name){
    console.log(`Welcome ${name} in our community`)
}</code></pre>
                                </li>

                                <!-- Objects and Arrays -->
                                <li class="mt-4"><strong>Objects and Arrays</strong>: Used to store collections of data.
                                    <pre><code class="language-javascript">// A simple JavaScript object
const person = {
    name: "John Doe",
    age: 30,
    isEmployed: true,
    greet: function() {
        console.log("Hello, my name is " + this.name);
    }
}

// A simple JavaScript array
const fruits = ["Apple", "Banana", "Cherry"];
</code></pre>

                                </li>
                            </ul>
                        </div>


                        <hr class="mt-5 mb-4">

                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Basic JavaScript Program</h4>
                            <p class="ms-4">Here's a simple JavaScript program that defines a function to add two numbers and logs the result to the console:</p>
                            <pre class="ms-4"><code class="language-javascript">// Function to add two numbers
    function addNumbers(a, b) {
        return a + b;
    }
    
    // Fixed values
    const fixedValue1 = 5;
    const fixedValue2 = 10;
    
    // Variable value
    let variableValue = 15;
    
    // Using the function with fixed values
    let result = addNumbers(fixedValue1, fixedValue2);
    console.log("Sum of fixed values: " + result);
    
    // Using the function with a variable value
    result = addNumbers(variableValue, 20);
    console.log("Sum of variable value and 20: " + result);
    </code></pre>
                        </div>

                        <hr class="mt-5 mb-4">


                        <div>
                            <h4 class="notes-heading mt-4"><i class="bi bi-brightness-low-fill"></i> Fixed Value vs Variable Value</h4>
                            <ul>
                                <li><strong>Fixed Value</strong>: Also known as a constant or literal, it is a value that does not change throughout the program. For example, <code>5</code> and <code>10</code> in the above program are fixed values. They remain the same whenever they are used.</li>
                                <li><strong>Variable Value</strong>: This is a value that can change during the execution of the program. For example, <code>variableValue</code> is a variable that can be modified at any point in the code. You can assign different values to it, and its value can change based on the program's logic.</li>
                                
                                <p class="text-danger mt-3"><strong>note: </strong>Syntax is crucial for writing clear, functional code in programming languages like JavaScript. Understanding fixed and variable values helps you manage data and logic effectively in your programs.</p>
                            </ul>
    
                        </div>
                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="ch_2_L_2-comments-in-javascript-deepak-smart-programming.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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