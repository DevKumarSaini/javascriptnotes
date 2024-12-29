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

                    <h3 class="text-center"> JavaScript Variables</h3>
                    <hr />

                    <section>
                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Variables in JavaScript</h4>
                        <p>A <strong>variable</strong> in JavaScript is a named container used to store data values. Variables allow you to label data with a descriptive name, making it easier to reference and manipulate that data throughout your code.</p>

                        <h5 class="note-heading">Variable Naming Conventions in JavaScript</h5>

                        <ol>
                            <li><strong>Must begin with:</strong>
                                <ul>
                                    <li>A letter (uppercase or lowercase)</li>
                                    <li>The <code>$</code> symbol</li>
                                    <li>The <code>_</code> symbol</li>
                                </ul>
                            </li>

                            <li><strong>Subsequent characters can be:</strong>
                                <ul>
                                    <li>Letters (uppercase or lowercase)</li>
                                    <li>Numbers (0-9)</li>
                                    <li><code>$</code> symbol</li>
                                    <li><code>_</code> symbol</li>
                                </ul>
                            </li>

                            <li><strong>Case-sensitive:</strong>
                                <p><code>myVariable</code> and <code>myvariable</code> are considered different variables.</p>
                            </li>

                            <li><strong>Reserved words:</strong>
                                <p>Cannot use JavaScript keywords (e.g., <code>if</code>, <code>else</code>, <code>for</code>, <code>function</code>, <code>var</code>, <code>let</code>, <code>const</code>) as variable names.</p>
                            </li>

                            <li><strong>Meaningful names:</strong>
                                <p>Use descriptive names that reflect the purpose of the variable (e.g., <code>firstName</code>, <code>customerCount</code>, <code>totalPrice</code>). This improves code readability and maintainability.</p>
                            </li>

                            <li><strong>CamelCase:</strong>
                                <p>Conventionally, use camelCase for variable names (e.g., <code>myFirstName</code>, <code>customerCount</code>). Avoid single-letter names (except for short-lived loop counters like <code>i</code>, <code>j</code>, <code>k</code>).</p>
                            </li>
                        </ol>


                        <h5 class="notes-subheading">How to Declare a variable</h5>
                        <pre><code class="language-java">let person_Name = "Sigma"
var _studentName = "Alpha"
const noOfPersong = 15
</code></pre>


                        <h5 class="notes-subheading mt-4">Types of Variables in JavaScript</h5>
                        <p>JavaScript provides three ways to declare variables: <code>var</code>, <code>let</code>, and <code>const</code>. Each type has different characteristics and scopes.</p>

                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="table-dark">
                                    <th>Type</th>
                                    <th>Definition</th>
                                    <th>Scope</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>let</code></td>
                                    <td>Declares a block-scoped variable that can be reassigned. It cannot be accessed before its declaration (not hoisted in the same way as <code>var</code>).</td>
                                    <td>Block scope</td>
                                    <td><code>let y = 20; // Block scope</code></td>
                                </tr>
                                <tr>
                                    <td><code>var</code></td>
                                    <td>Declares a variable that is function-scoped or globally scoped. It is hoisted to the top of its scope, meaning it can be accessed before it is declared.</td>
                                    <td>Function or global scope</td>
                                    <td><code>var x = 10; // Global scope</code></td>
                                </tr>
                                <tr>
                                    <td><code>const</code></td>
                                    <td>Declares a block-scoped variable whose value cannot be reassigned after its initialization. The variable must be initialized at the time of declaration.</td>
                                    <td>Block scope</td>
                                    <td><code>const z = 30; // Block scope</code></td>
                                </tr>
                            </tbody>
                        </table>

                        <h4 class="notes-heading mt-4">Scope of Each Variable Type</h4>

                        <ol>
                            <li class="mt-4">
                                <strong class="notes-sub-subheading">let</strong>

                                <p>let is a block-scoped keyword used to declare variables in JavaScript. Variables declared with let are only accessible within the block (e.g., if, for, while) where they are declared. They can be reassigned, but not redeclared within the same scope. let is also hoisted, but unlike var, it has a "Temporal Dead Zone" where the variable is inaccessible before its actual declaration.</p>

                                <strong> Scope:</strong>
                                <ul>
                                    <li><strong>Block Scope:</strong> <code>let</code> variables are limited to the block in which they are defined (e.g., within a loop or an <code>if</code> statement).</li>
                                </ul>

                                <p><strong>Example:</strong></p>
                                <pre><code class="language-javascript">if (true) {
let blockVar = "I'm block-scoped!";
console.log(blockVar); // Accessible
}
console.log(blockVar); // ReferenceError: blockVar is not defined
</code></pre>

                            </li>

                            <li class="mt-4">
                                <strong class="notes-sub-subheading">var</strong>
                                <p>var is a keyword used to declare a variable in JavaScript. It has function scope or global scope if declared outside a function. Variables declared with var can be reassigned multiple times throughout their scope. var is also hoisted, meaning its declaration is moved to the top of its scope during the compilation phase, although its value remains undefined until the actual declaration point.</p>

                                <strong> Scope:</strong>
                                <ul>
                                    <li><strong>Global Scope:</strong> If declared outside any function, the variable is accessible from anywhere in the code.</li>
                                    <li><strong>Function Scope:</strong> If declared inside a function, the variable is only accessible within that function.</li>
                                </ul>

                                <strong>Example</strong>
                                <pre><code class="language-javascript">var globalVar = "I'm global!"; // Global scope
    
function testVar() {
    var localVar = "I'm local!";
    console.log(globalVar); // Accessible
    console.log(localVar);   // Accessible
}
testVar();
console.log(globalVar);     // Accessible
console.log(localVar);      // ReferenceError: localVar is not defined
</code></pre>
                            </li>


                            <li class="mt-4">
                                <strong class="notes-sub-subheading">const</strong>
                                <p>const is a block-scoped keyword used to declare constant variables in JavaScript. Once a variable is declared with const, its value cannot be changed throughout its scope. const is also hoisted with a "Temporal Dead Zone." It's generally recommended to use const whenever possible to improve code maintainability and prevent accidental reassignments.</p>

                                <strong> Scope:</strong>
                                <ul>
                                    <li><strong>Block Scope:</strong> Similar to <code>let</code>, but the variable must be initialized at the time of declaration and cannot be reassigned.</li>
                                </ul>

                                <p><strong>Example:</strong></p>
                                <pre><code class="language-javascript">if (true) {
const constantVar = "I'm also block-scoped!";
console.log(constantVar); // Accessible
}
console.log(constantVar); // ReferenceError: constantVar is not defined
        </code></pre>
                            </li>
                        </ol>


                        <h4 class="notes-heading mt-4">Variable Hiding and Variable Shadowing</h4>

                        <ol>
                            <li>
                                <h5>Variable Hiding</h5> This occurs when a variable in a local scope has the same name as a variable in an outer scope. The local variable "hides" the outer variable. The outer variable remains accessible only if it is explicitly referenced using <code>this</code> or by avoiding the local context.

                                <strong>Other explanation</strong>
                                <p>Variable hiding occurs when a variable in a child class has the same name as a variable in its parent class. In such cases, the child class's variable "hides" or "shadows" the parent class's variable within the child class. To access the parent class's variable within the child class, you might need to use special syntax (e.g., the super keyword in some languages). This typically happens in object-oriented programming contexts where inheritance is involved.</p>

                                <strong>Example:</strong>
                                <pre><code class="language-javascript">var name = "Global Name";

function hideVariable() {
var name = "Local Name"; // Hides the global variable
console.log(name); // Output: Local Name
}

hideVariable();
console.log(name); // Output: Global Name
</code></pre>
                            </li>

                            <li class="mt-4">
                                <h5>Variable Shadowing </h5> Similar to hiding, shadowing occurs when a variable in a block or function scope has the same name as a variable in an outer scope. However, the inner variable can only access its own scope and does not affect the outer variable. Shadowing is commonly seen with <code>let</code> and <code>const</code>.

                                <strong>Other explanation</strong>
                                <p>Variable shadowing occurs when a variable with the same name is declared within a nested scope (e.g., a function or block) as a variable declared in an outer scope. The inner-scope variable takes precedence within its scope, effectively "hiding" the outer-scope variable. This means that within that nested scope, the inner-scope variable will be used instead of the outer-scope variable with the same name. Shadowing can happen within the same class or function, and it's important to be mindful of it to avoid unexpected behavior in your code.</p>

                                <p><strong>Example:</strong></p>
                                <pre><code class="language-java">let name = "Global Name";
        function shadowVariable() {
            let name = "Local Name"; // Shadows the outer variable
            console.log(name); // Output: Local Name
        }
        
        shadowVariable();
        console.log(name); // Output: Global Name
        </code></pre>

                            </li>
                        </ol>


                        <h4 class="notes-heading mt-4">Local Variable vs Global Variable</h4>

                        <ol>
                            <li>
                                <h5>Local Variables</h5>
                                <p> A local variable is declared within a specific block of code, such as a function or a loop. It is only accessible within that specific block and cannot be accessed from outside.</p>

                                <p><strong>Example</strong></p>
                                <pre><code class="language-javascript">function greet(name) { 
  let message = "Hello, " + name + "!"; // 'message' is a local variable
  console.log(message); 
}

greet("Alice"); 
// console.log(message); // This would result in an error because 'message' is not accessible here
</code></pre>
                                <p>In this example, the variable <code>message</code> is declared within the <code>greet</code> function. It can be used within the function to store and manipulate the greeting message. However, trying to access <code>message</code> outside the function will result in an error because it is not defined in that scope.</p>
                            </li>

                            <li>
                                <h5>Global Variables</h5>
                                <p> A global variable is declared outside any function or block. It is accessible from anywhere within the JavaScript code.</p>

                                <p><strong>Example</strong></p>
                                <pre><code class="language-javascript">let globalName = "World"; 

function greet() {
  console.log("Hello, " + globalName + "!"); 
}

greet(); 
console.log(globalName); // Both lines will output "Hello, World!"
</code></pre>
                                <p>In this example, <code>globalName</code> is declared outside any function, making it a global variable. It can be accessed both within the <code>greet</code> function and outside of it.</p>
                            </li>
                        </ol>

                        <h5>Important Notes:</h5>
                        <ul>
                            <li>Global variables can make your code harder to debug and maintain, as they can be unintentionally modified by other parts of the code.</li>
                            <li>It's generally recommended to use local variables whenever possible to improve code organization and reduce the risk of unintended side effects.</li>
                            <li>In modern JavaScript, it's often preferred to use more modular approaches, such as closures or modules, to manage data and avoid excessive use of global variables.</li>
                        </ul>


                        <h5 class="note-subheading mt-4">Note</h5>
                        <ul>
                            <li><strong>Variable Types:</strong> <code>var</code>, <code>let</code>, and <code>const</code>.</li>
                            <li><strong>Scope:</strong> <code>var</code> has function/global scope, while <code>let</code> and <code>const</code> are block-scoped.</li>
                            <li><strong>Hiding vs. Shadowing:</strong> Hiding is when a local variable obscures an outer variable, while shadowing occurs when an inner variable exists with the same name, but they remain distinct.</li>
                        </ul>

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
    <div class="footer mt-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <h5 class="text-white">Menus</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="footer-link">Home</a></li>
                        <li>
                            <a href="free-courses-by-smart-programming.html" class="footer-link">Free Courses</a>
                        </li>
                        <li>
                            <a href="premium-courses-by-smart-programming.html" class="footer-link">Premium Courses</a>
                        </li>
                        <li>
                            <a href="trainings-by-smart-programming.html" class="footer-link">Trainings</a>
                        </li>
                        <li>
                            <a href="development-by-smart-programming.html" class="footer-link">Development</a>
                        </li>
                        <li>
                            <a href="contact-smart-programming.html" class="footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h5 class="text-white">
                        Useful links for Industrial Training in Chandigarh
                    </h5>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="core-java-free-course-by-deepak-smart-programming.html" class="footer-link">Core Java Free Course</a>
                                </li>
                                <li>
                                    <a href="advance-java-free-course-by-deepak-smart-programming.html" class="footer-link">Advance Java Free Course</a>
                                </li>
                                <li>
                                    <a href="spring-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Spring Framework Free Course</a>
                                </li>
                                <li>
                                    <a href="springboot-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Springboot Free Course</a>
                                </li>
                                <li>
                                    <a href="android-free-course-by-deepak-smart-programming.html" class="footer-link">Android Free Course</a>
                                </li>
                                <li>
                                    <a href="java-logical-questions-free-course-by-deepak-smart-programming.html" class="footer-link">Java Logical Questioning Free Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Core-Java-With-5-Projects" target="_blank" class="footer-link">Core Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Advance-Java" target="_blank" class="footer-link">Advance Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Framework" target="_blank" class="footer-link">Spring Framework Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Boot-Framework" target="_blank" class="footer-link">Springboot Premium Course</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-8">
                    <footer>
                        <p>
                            &copy; 2024 Smart Programming, Chandigarh. All Rights Reserved.
                            <br />
                            <a href="privacy-policy.html" class="footer-link">Privacy Policy</a>
                            &nbsp; | &nbsp;
                            <a href="terms-of-service.html" class="footer-link">Terms Of Services</a>
                            &nbsp; | &nbsp;
                            <a href="cancellation-refund-policy.html" class="footer-link">Cancellation/Refund Policy</a>
                        </p>
                    </footer>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                        <a href="https://www.youtube.com/c/SmartProgramming" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/smartprogramming.india" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/smart_programming/" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://t.me/smart_programming_deepak" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-telegram"></i>
                        </a>
                        <a href="https://discord.gg/Up9dQ3gP6k" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-discord"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029Va6n2Gs42Dckpa2T1U1i" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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