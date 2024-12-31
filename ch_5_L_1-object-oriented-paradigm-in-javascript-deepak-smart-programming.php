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

                    <h3 class="text-center"> JavaScript OOP's Paradigm</h3>
                    <hr />

                    <section>
                        <h1 class="notes-heading">Object-Oriented Paradigm in JavaScript</h1>
                        <p>JavaScript is a multi-paradigm programming language, meaning it supports different styles of programming, including <strong>imperative</strong>, <strong>functional</strong>, and <strong>object-oriented programming (OOP)</strong>. The <strong>object-oriented paradigm</strong> in JavaScript revolves around creating and managing objects that have properties (attributes) and methods (functions) that define their behavior.</p>
                        <p>In this section, we'll cover the essentials of <strong>Object-Oriented Programming</strong> (OOP) in JavaScript, its core concepts, and how it can be applied in JavaScript development.</p>

                        <hr>

                        <h2 class="notes-subheading">1. What is Object-Oriented Programming (OOP)?</h2>
                        <p>Object-Oriented Programming is a paradigm based on the concept of <strong>objects</strong>, which are instances of <strong>classes</strong>. These objects can have <strong>attributes</strong> (also called properties or fields) and <strong>methods</strong> (functions that perform actions on the object). OOP provides a way to organize and structure code in a more logical, reusable, and maintainable way.</p>
                        <p>The core principles of OOP are:</p>
                        <ul>
                            <li><strong>Encapsulation</strong>: The concept of bundling the data (properties) and the methods (functions) that operate on the data into a single unit (an object).</li>
                            <li><strong>Abstraction</strong>: Hiding complex implementation details and exposing only the necessary parts of an object or system.</li>
                            <li><strong>Inheritance</strong>: The mechanism by which one class can inherit the properties and methods of another class, allowing code reuse and extension.</li>
                            <li><strong>Polymorphism</strong>: The ability of different objects to respond to the same method call in different ways, allowing for flexibility and reusability.</li>
                        </ul>

                        <hr>

                        <h2 class="notes-subheading">2. Creating Objects in JavaScript</h2>
                        <p>In JavaScript, objects are created in various ways:</p>

                        <h3 class="notes-sub-subheading">A. Using Object Literals</h3>
                        <p>The simplest way to create an object in JavaScript is using an object literal:</p>
                        <pre><code class="language-javascript">
const person = {
  name: "Alice",
  age: 30,
  greet: function() {
    console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
  }
};

person.greet();  // Output: Hello, my name is Alice and I am 30 years old.
    </code></pre>

                        <h3 class="notes-sub-subheading">B. Using the <code class="language-javascript">new Object()</code> Syntax</h3>
                        <p>You can create an object using the <code class="language-javascript">new Object()</code> syntax:</p>
                        <pre><code class="language-javascript">
const person = new Object();
person.name = "Alice";
person.age = 30;
person.greet = function() {
  console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
};

person.greet();  // Output: Hello, my name is Alice and I am 30 years old.
    </code></pre>

                        <h3 class="notes-sub-subheading">C. Using Constructor Functions</h3>
                        <p>A constructor function is a special function used to create objects with the same structure. It allows you to define reusable templates for creating multiple objects.</p>
                        <pre><code class="language-javascript">
function Person(name, age) {
  this.name = name;
  this.age = age;
  this.greet = function() {
    console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
  };
}

const person1 = new Person("Alice", 30);
const person2 = new Person("Bob", 25);

person1.greet();  // Output: Hello, my name is Alice and I am 30 years old.
person2.greet();  // Output: Hello, my name is Bob and I am 25 years old.
    </code></pre>

                        <h3 class="notes-sub-subheading">D. Using ES6 Classes</h3>
                        <p>Starting with ECMAScript 6 (ES6), JavaScript introduced <strong>classes</strong>, which are syntactical sugar over the existing prototype-based inheritance. Classes provide a more familiar and structured way to define objects and their behaviors.</p>
                        <pre><code class="language-javascript">
class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  greet() {
    console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
  }
}

const person1 = new Person("Alice", 30);
const person2 = new Person("Bob", 25);

person1.greet();  // Output: Hello, my name is Alice and I am 30 years old.
person2.greet();  // Output: Hello, my name is Bob and I am 25 years old.
    </code></pre>

                        <hr>

                        <h2 class="notes-subheading">3. Core Concepts of OOP in JavaScript</h2>

                        <h3 class="notes-sub-subheading">A. Encapsulation</h3>
                        <p><strong>Encapsulation</strong> is the bundling of data and methods that operate on that data into a single unit (an object). In JavaScript, this is done by defining properties and methods within an object or a class.</p>
                        <p>JavaScript uses <strong>public properties</strong> and <strong>methods</strong> by default. However, ES6 introduced private fields (using <code class="language-javascript">#</code> syntax) to encapsulate data and make it private to the class.</p>

                        <pre><code class="language-javascript">
class Person {
  #name; // private field
  #age;  // private field

  constructor(name, age) {
    this.#name = name;
    this.#age = age;
  }

  getName() {
    return this.#name; // accessing the private property
  }

  greet() {
    console.log(`Hello, my name is ${this.#name} and I am ${this.#age} years old.`);
  }
}

const person = new Person("Alice", 30);
console.log(person.getName());  // Output: Alice
person.greet();  // Output: Hello, my name is Alice and I am 30 years old.
    </code></pre>

                        <h3 class="notes-sub-subheading">B. Abstraction</h3>
                        <p><strong>Abstraction</strong> involves hiding the internal workings of an object and exposing only the relevant details to the user. This is achieved by creating public methods while keeping internal properties and methods hidden.</p>

                        <pre><code class="language-javascript">
class Car {
  #fuel; // private field

  constructor(make, model, fuel) {
    this.make = make;
    this.model = model;
    this.#fuel = fuel;
  }

  drive() {
    if (this.#fuel > 0) {
      console.log(`The ${this.make} ${this.model} is driving.`);
      this.#fuel--;
    } else {
      console.log("Out of fuel!");
    }
  }

  refuel(amount) {
    this.#fuel += amount;
    console.log(`The car has been refueled by ${amount} liters.`);
  }
}

const car = new Car("Toyota", "Camry", 5);
car.drive();  // Output: The Toyota Camry is driving.
car.refuel(10);  // Output: The car has been refueled by 10 liters.
    </code></pre>

                        <h3 class="notes-sub-subheading">C. Inheritance</h3>
                        <p><strong>Inheritance</strong> allows one class to inherit properties and methods from another class. JavaScript achieves inheritance using prototype-based inheritance or through the <code class="language-javascript">extends</code> keyword in ES6 classes.</p>

                        <pre><code class="language-javascript">
class Animal {
  constructor(name) {
    this.name = name;
  }

  speak() {
    console.log(`${this.name} makes a sound.`);
  }
}

class Dog extends Animal {
  constructor(name, breed) {
    super(name);  // calling the parent constructor
    this.breed = breed;
  }

  speak() {
    console.log(`${this.name} barks.`);
  }
}

const dog = new Dog("Buddy", "Golden Retriever");
dog.speak();  // Output: Buddy barks.
    </code></pre>

                        <h3 class="notes-sub-subheading">D. Polymorphism</h3>
                        <p><strong>Polymorphism</strong> refers to the ability of different objects to respond to the same method in different ways. This is often achieved through method overriding, where a child class redefines a method defined in the parent class.</p>

                        <pre><code class="language-javascript">
class Animal {
  speak() {
    console.log("The animal makes a sound.");
  }
}

class Dog extends Animal {
  speak() {
    console.log("The dog barks.");
  }
}

class Cat extends Animal {
  speak() {
    console.log("The cat meows.");
  }
}

const dog = new Dog();
const cat = new Cat();

dog.speak();  // Output: The dog barks.
cat.speak();  // Output: The cat meows.
    </code></pre>

                        <hr>

                        <h2 class="notes-subheading">4. Conclusion: Why Object-Oriented Programming Matters in JavaScript</h2>
                        <p>Object-Oriented Programming (OOP) is a powerful paradigm that helps organize complex code into reusable and modular pieces. JavaScript supports OOP through its use of <strong>objects</strong>, <strong>classes</strong>, <strong>inheritance</strong>, and <strong>polymorphism</strong>.</p>
                        <p>The importance of OOP in JavaScript includes:</p>
                        <ul>
                            <li><strong>Encapsulation</strong>: Keeps related data and methods together in one object, making code easier to manage and maintain.</li>
                            <li><strong>Abstraction</strong>: Hides complex details and exposes only essential features, reducing complexity.</li>
                            <li><strong>Inheritance</strong>: Enables code reuse and allows new classes to inherit functionality from existing ones.</li>
                            <li><strong>Polymorphism</strong>: Enables flexibility and extensibility by allowing different objects to use the same interface in different ways.</li>
                        </ul>
                        <p>By leveraging OOP principles in JavaScript, you can write more efficient, organized, and scalable applications.</p>

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