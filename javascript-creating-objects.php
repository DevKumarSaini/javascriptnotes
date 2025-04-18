<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Understand how to create objects in JavaScript using object literals, constructors, and the new keyword." />
    <meta name="keywords" content="creating objects in JavaScript, object constructors, object literals, JavaScript objects" />

    <title>Javascript Creating Objects</title>

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

                    <h3 class="text-center"> JavaScript Object Creation</h3>
                    <hr />

                    <section>

                        <h4 class="notes-heading">Creating Objects in JavaScript</h4>
                        <p>In JavaScript, objects can be created in several ways. Each method provides flexibility and different ways to initialize objects based on your needs. Below are the main ways to create objects in JavaScript, ranging from the simplest to more advanced approaches.</p>

                        <h5 class="notes-subheading">1. <strong>Object Literal Notation</strong></h5>
                        <p>The most common and simplest way to create an object in JavaScript is by using <strong>object literal notation</strong>. You define the object directly using curly braces <code>{}</code> and specify the properties inside.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let person = {
    name: "Alice",
    age: 25,
    greet: function() {
        console.log("Hello, " + this.name);
    }
};
</code></pre>
                        <p>- <code>name</code>, <code>age</code>, and <code>greet</code> are properties of the <code>person</code> object.</p>
                        <p>- The <code>greet</code> property is a method (function) associated with the object.</p>

                        <h5 class="notes-subheading">2. <strong>Using the <code>new Object()</code> Syntax</strong></h5>
                        <p>Another way to create an object is by using the <code>new Object()</code> constructor. This is less commonly used because the object literal notation is more concise and readable.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let person = new Object();
person.name = "Alice";
person.age = 25;
person.greet = function() {
    console.log("Hello, " + this.name);
};
</code></pre>
                        <p>This method creates an empty object, and then you can add properties and methods to it manually.</p>

                        <h5 class="notes-subheading">3. <strong>Using a Constructor Function</strong></h5>
                        <p>You can create objects using a <strong>constructor function</strong>, which is a function designed to initialize new objects. This method allows you to create multiple objects with similar structures.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">function Person(name, age) {
    this.name = name;
    this.age = age;
    this.greet = function() {
        console.log("Hello, " + this.name);
    };
}

let person1 = new Person("Alice", 25);
let person2 = new Person("Bob", 30);

person1.greet(); // Hello, Alice
person2.greet(); // Hello, Bob
</code></pre>
                        <p>- <code>Person</code> is a constructor function.</p>
                        <p>- The <code>this</code> keyword refers to the new object being created when <code>new Person()</code> is called.</p>

                        <h5 class="notes-subheading">4. <strong>Using <code>Object.create()</code></strong></h5>
                        <p>The <code>Object.create()</code> method allows you to create a new object with a specified prototype object and properties. This is useful when you want to create an object that inherits from another object.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let animal = {
    type: "mammal",
    makeSound: function() {
        console.log("Sound!");
    }
};

let dog = Object.create(animal);
dog.breed = "Golden Retriever";
dog.makeSound = function() {
    console.log("Woof!");
};

console.log(dog.type); // mammal (inherited from animal)
dog.makeSound(); // Woof! (overridden method)
</code></pre>
                        <p>- <code>dog</code> inherits properties and methods from <code>animal</code> but can also have its own properties and methods.</p>

                        <h5 class="notes-subheading">5. <strong>Using ES6 Classes</strong></h5>
                        <p>ES6 introduced a class-based syntax that is essentially a more readable way of using constructor functions. Under the hood, it still uses prototype-based inheritance, but it provides a cleaner, more formal structure.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    greet() {
        console.log("Hello, " + this.name);
    }
}

let person1 = new Person("Alice", 25);
let person2 = new Person("Bob", 30);

person1.greet(); // Hello, Alice
person2.greet(); // Hello, Bob
</code></pre>
                        <p>- <code>Person</code> is a class with a constructor method and a method <code>greet</code>.</p>
                        <p>- The <code>constructor</code> method is called when creating a new instance of the class.</p>

                        <h5 class="notes-subheading">6. <strong>Using the <code>new</code> Keyword with Built-in Objects</strong></h5>
                        <p>You can use the <code>new</code> keyword with built-in JavaScript objects like <code>Date</code>, <code>Array</code>, or <code>RegExp</code> to create instances of these objects.</p>

                        <h6 class="notes-sub-subheading">Example (<code>Date</code> object):</h6>
                        <pre><code class="language-javascript">let currentDate = new Date();
console.log(currentDate); // Prints the current date and time
</code></pre>
                        <p>- Here, the <code>Date</code> constructor function is used to create an object representing the current date and time.</p>

                        <h5 class="notes-subheading">7. <strong>Using Object Destructuring (Shorthand Initialization)</strong></h5>
                        <p>With ES6, you can use destructuring to initialize objects more conveniently. This is useful when you need to assign values to an object using variables with the same name.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let name = "Alice";
let age = 25;

let person = { name, age };
console.log(person); // { name: "Alice", age: 25 }
</code></pre>
                        <p>- This shorthand syntax is equivalent to: <code>let person = { name: name, age: age };</code>.</p>
                        <p>- It simplifies the object creation process when you already have variables with the same name as the object properties.</p>

                        <h5 class="notes-subheading">8. <strong>Using <code>Object.assign()</code> to Create Objects</strong></h5>
                        <p><code>Object.assign()</code> is a method used to copy values from one or more source objects to a target object. You can use it to create a new object by combining multiple objects or adding properties to an existing object.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">let person = {
    name: "Alice",
    age: 25
};

let additionalInfo = {
    occupation: "Engineer",
    city: "New York"
};

let updatedPerson = Object.assign({}, person, additionalInfo);
console.log(updatedPerson); 
// { name: "Alice", age: 25, occupation: "Engineer", city: "New York" }
</code></pre>
                        <p>- In this case, a new object is created by merging <code>person</code> and <code>additionalInfo</code> using <code>Object.assign()</code>.</p>
                        <p>- The first argument <code>{}</code> ensures that a new object is created, so the original <code>person</code> object remains unchanged.</p>

                        <h5 class="notes-subheading">9. <strong>Using <code>JSON.parse()</code> and <code>JSON.stringify()</code> to Create Objects</strong></h5>
                        <p>In some cases, you might need to clone or deep-copy an object. One way to do this is by serializing the object to a JSON string and then parsing it back into an object.</p>

                        <h6 class="notes-sub-subheading">Example (Deep cloning):</h6>
                        <pre><code class="language-javascript">let person = {
    name: "Alice",
    age: 25,
    address: {
        city: "New York",
        state: "NY"
    }
};

let clonedPerson = JSON.parse(JSON.stringify(person));
clonedPerson.address.city = "Los Angeles";

console.log(person.address.city); // New York (original object is unchanged)
console.log(clonedPerson.address.city); // Los Angeles (cloned object is modified)
</code></pre>
                        <p>- <code>JSON.stringify()</code> converts an object to a JSON string.</p>
                        <p>- <code>JSON.parse()</code> converts the JSON string back to an object.</p>
                        <p>- This technique is commonly used for <strong>deep cloning</strong> of objects.</p>

                        <h5 class="notes-subheading">10. <strong>Using Factory Functions</strong></h5>
                        <p>A <strong>factory function</strong> is a function that returns an object. This approach can be more flexible than using a class-based constructor because you can create multiple objects without needing the <code>new</code> keyword.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre><code class="language-javascript">function createPerson(name, age) {
    return {
        name: name,
        age: age,
        greet: function() {
            console.log("Hello, " + this.name);
        }
    };
}

let person1 = createPerson("Alice", 25);
let person2 = createPerson("Bob", 30);

person1.greet(); // Hello, Alice
person2.greet(); // Hello, Bob
</code></pre>
                        <p>- The <code>createPerson()</code> function is a factory function that returns a new object with the given properties.</p>

                        <h4 class="notes-heading">Summary of Methods to Create Objects</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Method</th>
                                    <th>Syntax Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Object Literal</strong></td>
                                    <td><code>let person = { name: "Alice", age: 25 };</code></td>
                                </tr>
                                <tr>
                                    <td><strong><code>new Object()</code></strong></td>
                                    <td><code>let person = new Object(); person.name = "Alice";</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Constructor Function</strong></td>
                                    <td><code>function Person(name, age) { this.name = name; this.age = age; }</code></td>
                                </tr>
                                <tr>
                                    <td><strong><code>Object.create()</code></strong></td>
                                    <td><code>let person = Object.create(prototypeObject);</code></td>
                                </tr>
                                <tr>
                                    <td><strong>ES6 Class</strong></td>
                                    <td><code>class Person { constructor(name, age) { this.name = name; this.age = age; } }</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Built-in Object</strong></td>
                                    <td><code>let date = new Date();</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Destructuring Shorthand</strong></td>
                                    <td><code>let person = { name, age };</code></td>
                                </tr>
                                <tr>
                                    <td><strong><code>Object.assign()</code></strong></td>
                                    <td><code>let newObj = Object.assign({}, obj1, obj2);</code></td>
                                </tr>
                                <tr>
                                    <td><strong><code>JSON.parse()</code>/<code>JSON.stringify()</code></strong></td>
                                    <td><code>let clonedPerson = JSON.parse(JSON.stringify(person));</code></td>
                                </tr>
                                <tr>
                                    <td><strong>Factory Function</strong></td>
                                    <td><code>function createPerson(name, age) { return { name, age }; }</code></td>
                                </tr>
                            </tbody>
                        </table>



                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">
                <a href="javascript-objects.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-built-in-objects.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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