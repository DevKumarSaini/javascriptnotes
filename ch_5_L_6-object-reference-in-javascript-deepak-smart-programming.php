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

                    <h3 class="text-center"> JavaScript Object Reference</h3>
                    <hr />

                    <section>

                        <h4 class="notes-heading">JavaScript Object References</h4>

                        <p>In JavaScript, when you create an object, the variable holds a <strong>reference</strong> to the object, not the actual object itself. This concept of object reference is crucial to understanding how objects behave in JavaScript, especially in terms of assignment, comparison, and manipulation.</p>

                        <h5 class="notes-subheading">1. What is an Object Reference?</h5>

                        <p>In JavaScript, an object is stored and accessed by reference. This means that when you assign an object to a variable, you're not copying the object itself; you're copying the reference (or memory address) that points to the object.</p>

                        <p>This is different from primitive data types (like numbers, strings, and booleans), which are stored by <strong>value</strong>. When you assign a primitive value to a new variable, the value is copied, and each variable holds its own copy.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
  // Create an object
  let person = {
    name: "Alice",
    age: 25
  };

  // Create another variable that references the same object
  let anotherPerson = person;

  // Modify the object via the second variable
  anotherPerson.age = 26;

  console.log(person.age);  // Output: 26
  console.log(anotherPerson.age);  // Output: 26
  </code></pre>

                        <h5 class="notes-subheading">2. How Does Object Reference Work?</h5>

                        <p>When you assign an object to another variable, both variables reference the same object in memory. Changes made through one variable affect the other variable because they both point to the same location.</p>

                        <h6 class="notes-sub-subheading">Key Characteristics of Object References:</h6>
                        <ul>
                            <li><strong>Assignment by Reference:</strong> When you assign an object to another variable, you're assigning the reference (not the object itself).</li>
                            <li><strong>Shared State:</strong> Any changes made through one reference will be reflected in the other reference because they point to the same object in memory.</li>
                        </ul>

                        <h5 class="notes-subheading">3. Example of Object Reference</h5>
                        <pre class="language-javascript"><code class="language-javascript">
  let car = {
    make: "Toyota",
    model: "Corolla"
  };

  // car2 points to the same object as car
  let car2 = car;

  // Modifying the car object through car2
  car2.model = "Camry";

  console.log(car.model);  // Output: Camry
  console.log(car2.model);  // Output: Camry
  </code></pre>

                        <h5 class="notes-subheading">4. Copying Objects: Shallow vs Deep Copy</h5>

                        <h6 class="notes-sub-subheading">Shallow Copy:</h6>
                        <p>A shallow copy of an object means that only the top-level properties are copied. If the object contains other objects (nested objects), they are copied by reference.</p>

                        <p>You can create a shallow copy using methods like <code>Object.assign()</code> or the spread operator (<code>...</code>).</p>

                        <h6 class="notes-sub-subheading">Example of Shallow Copy:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
  let person1 = {
    name: "John",
    address: {
      city: "New York",
      zip: "10001"
    }
  };

  // Create a shallow copy using Object.assign()
  let person2 = Object.assign({}, person1);

  // Modify the nested object in person2
  person2.address.city = "Los Angeles";

  console.log(person1.address.city);  // Output: Los Angeles
  console.log(person2.address.city);  // Output: Los Angeles
  </code></pre>

                        <h6 class="notes-sub-subheading">Deep Copy:</h6>
                        <p>A deep copy means that all objects and nested objects are copied recursively. The new object and all of its properties are completely independent of the original object.</p>

                        <p>You can achieve a deep copy using libraries like <strong>Lodash</strong> (<code>_.cloneDeep()</code>) or by manually writing a recursive function.</p>

                        <h6 class="notes-sub-subheading">Example of Deep Copy:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
  let person1 = {
    name: "John",
    address: {
      city: "New York",
      zip: "10001"
    }
  };

  // Create a deep copy using JSON methods
  let person2 = JSON.parse(JSON.stringify(person1));

  // Modify the nested object in person2
  person2.address.city = "Los Angeles";

  console.log(person1.address.city);  // Output: New York
  console.log(person2.address.city);  // Output: Los Angeles
  </code></pre>

                        <h5 class="notes-subheading">5. Object Comparison</h5>

                        <p>When comparing objects in JavaScript, it's important to remember that <strong>objects are compared by reference</strong>, not by value. Two objects are considered equal only if they refer to the same location in memory.</p>

                        <h6 class="notes-sub-subheading">Example of Object Comparison:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
  let person1 = { name: "Alice", age: 25 };
  let person2 = { name: "Alice", age: 25 };
  let person3 = person1;

  console.log(person1 === person2);  // Output: false
  console.log(person1 === person3);  // Output: true
  </code></pre>

                        <h5 class="notes-subheading">6. Functions and Object References</h5>

                        <p>In JavaScript, functions are also objects. They are first-class objects, meaning they can be assigned to variables and passed around like any other object. Functions can also be used as values for object properties, and like any other object, they are passed by reference.</p>

                        <h6 class="notes-sub-subheading">Example with Function References:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
  let obj1 = {
    name: "Object 1",
    greet: function() {
      console.log("Hello from " + this.name);
    }
  };

  // Reference the same function in a new object
  let obj2 = obj1;
  obj2.name = "Object 2";
  obj2.greet();  // Output: Hello from Object 2
  </code></pre>

                        <h5 class="notes-subheading">7. Passing Objects to Functions</h5>

                        <p>When you pass an object to a function, you're passing a reference to the object, not a copy of it. Therefore, the function can modify the original object.</p>

                        <h6 class="notes-sub-subheading">Example of Passing Object by Reference:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
  function changeName(person) {
    person.name = "Bob"; // Modifies the original object
  }

  let person = {
    name: "Alice",
    age: 30
  };

  changeName(person);
  console.log(person.name);  // Output: Bob
  </code></pre>

                        <h5 class="notes-subheading">8. Conclusion</h5>
                        <ul>
                            <li><strong>Object References:</strong> When you assign an object to a variable, you are working with a reference to the object, not the actual object itself.</li>
                            <li><strong>Shallow vs Deep Copy:</strong> When copying objects, be mindful of shallow copies (which copy references to nested objects) vs deep copies (which create independent copies of all objects).</li>
                            <li><strong>Object Comparison:</strong> Objects are compared by reference, not by value. Two objects are equal only if they point to the same location in memory.</li>
                            <li><strong>Function References:</strong> Functions are also objects in JavaScript, so they follow the same reference behavior when assigned or passed around.</li>
                        </ul>

                        <p>Understanding object references is crucial to avoid unintended mutations, especially when working with functions, APIs, or shared states.</p>



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