<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Explore the Object-Oriented Programming (OOP) paradigm in JavaScript, including concepts like classes, inheritance, and polymorphism." />
  <meta name="keywords" content="JavaScript OOP, Object-Oriented Programming, classes, inheritance, polymorphism" />

  <title>Javascript OOPS Paradigm</title>

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
            <!-- Definition of OOP's paradigm -->
            <div>
              <h1 class="notes-heading"><i class="bi bi-brightness-low-fill"></i>Object-Oriented Paradigm in JavaScript</h1>
              <div class="ms-4">
                <ul>
                  <li>JavaScript is a multi-paradigm programming language, meaning it supports different styles of programming, including <strong>imperative</strong>, <strong>functional</strong>, and <strong>object-oriented programming (OOP)</strong>. The <strong>object-oriented paradigm</strong> in JavaScript revolves around creating and managing objects that have properties (attributes) and methods (functions) that define their behavior.</li>
                  <li>In this section, we'll cover the essentials of <strong>Object-Oriented Programming</strong> (OOP) in JavaScript, its core concepts, and how it can be applied in JavaScript development.</li>
                </ul>
              </div>
            </div>

            <hr class="mt-4 mb-4">

            <div>
              <h4 class="notes-subheading">1. What is Object-Oriented Programming (OOP)?</h4>
              <div class="ms-4">
                <p>Object-Oriented Programming is a paradigm based on the concept of <strong>objects</strong>, which are instances of <strong>classes</strong>. These objects can have <strong>attributes</strong> (also called properties or fields) and <strong>methods</strong> (functions that perform actions on the object). OOP provides a way to organize and structure code in a more logical, reusable, and maintainable way.</p>
                <p><strong>The core principles of OOP are</strong></p>
                <ul>
                  <li><strong>Inheritance</strong> The mechanism by which one class can inherit the properties and methods of another class, allowing code reuse and extension.</li>
                  <li><strong>Abstraction</strong> Hiding complex implementation details and exposing only the necessary parts of an object or system.</li>
                  <li><strong>Polymorphism</strong> The ability of different objects to respond to the same method call in different ways, allowing for flexibility and reusability.</li>
                  <li><strong>Encapsulation</strong> The concept of bundling the data (properties) and the methods (functions) that operate on the data into a single unit (an object).</li>
                </ul>
              </div>
            </div>


            <hr class="mt-4 mb-4">

            <div>
              <h4 class="notes-subheading">2. Creating Objects in JavaScript</h4>
              <div class="ms-4">
                <p>In JavaScript, objects are created in various ways. Below are the examples to demonstrate the creation of <strong>javascript object.</strong></p>

                

              </div>
            </div>


            <hr class="mt-4 mb-4">

            <div>
              <h4 class="notes-subheading">3. Core Concepts of OOP in JavaScript</h4>
              <!-- Points of oops core concepts -->
              <div class="ms-4">
                  <ul>
                    <li><strong>Modularity and Reusability:</strong> OOP allows you to break down complex code into smaller, reusable units called "objects." This improves code organization, maintainability, and reduces redundancy.
                    <li><strong>Inheritance:</strong> OOP enables you to create new objects (child objects) that inherit properties and behaviors from existing objects (parent objects). This promotes code reuse and a hierarchical structure.</li>
                    <li><strong>Polymorphism:</strong> OOP allows objects of different classes to be treated as objects of a common type. This enhances flexibility and makes code more adaptable to change.</li></li>
                    <li><strong>Encapsulation:</strong> Objects can "encapsulate" data (properties) and the methods that operate on that data. This protects the internal state of objects and prevents unintended side effects.</li>
                  </ul>
              </div>

              <!-- Inheritance -->
              <div class="mt-4">
                <div class="ms-4">
                  <h6 class="notes-sub-subheading">A. Inheritance</h6>
                  <div class="ms-4">
                    <ul>
                      <li><strong>Inheritance</strong> allows one class to inherit properties and methods from another class. JavaScript achieves inheritance using prototype-based inheritance or through the extends keyword in ES6 classes.</li>
                    </ul>


                    <pre class="ms-4"><code class="language-javascript">
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
  dog.speak();  // Output Buddy barks.
      </code></pre>
                  </div>
                </div>
              </div>



              <!-- Abstraction -->
              <div class="mt-4">
                <div class="ms-4">
                  <h6 class="notes-sub-subheading">B. Abstraction</h6>
                  <div class="ms-4">
                    <ul>
                      <li><strong>Abstraction</strong> involves hiding the internal workings of an object and exposing only the relevant details to the user. This is achieved by creating public methods while keeping internal properties and methods hidden.</li>
                    </ul>

                    <pre class="ms-4"><code class="language-javascript">
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
car.drive();  // Output The Toyota Camry is driving.
car.refuel(10);  // Output The car has been refueled by 10 liters.
    </code></pre>
                  </div>
                </div>
              </div>



              <!-- Polymorphism -->
              <div class="mt-4">
                <div class="ms-4">
                  <h6 class="notes-sub-subheading">C. Polymorphism</h6>
                  <div class="ms-4">
                    <ul>
                      <li><strong>Polymorphism</strong> refers to the ability of different objects to respond to the same method in different ways. This is often achieved through method overriding, where a child class redefines a method defined in the parent class.</li>
                    </ul>

                    <pre class="ms-4"><code class="language-javascript">
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

dog.speak();  // Output The dog barks.
cat.speak();  // Output The cat meows.
    </code></pre>
                  </div>
                </div>
              </div>


              <!-- Encapsulation -->
              <div class="mt-4">
                <div class="ms-4">
                  <h6 class="notes-sub-subheading">D. Encapsulation</h6>
                  <div class="ms-4">
                    <ul>
                      <li><strong>Encapsulation</strong> is the bundling of data and methods that operate on that data into a single unit (an object). In JavaScript, this is done by defining properties and methods within an object or a class.</li>
                      <li>JavaScript uses <strong>public properties</strong> and <strong>methods</strong> by default. However, ES6 introduced private fields (using <code class="language-javascript">#</code> syntax) to encapsulate data and make it private to the class.</li>
                    </ul>
                    <pre class="ms-4"><code class="language-javascript">
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
        console.log(person.getName());  // Output Alice
        person.greet();  // Output Hello, my name is Alice and I am 30 years old.
            </code></pre>
                  </div>
                </div>
              </div>
            </div>


            <hr class="mt-4 mb-4">

            <div >
              <h4 class="notes-subheading">4. Conclusion Why Object-Oriented Programming Matters in JavaScript</h4>
              <div class="ms-4">
                <p>Object-Oriented Programming (OOP) is a powerful paradigm that helps organize complex code into reusable and modular pieces. JavaScript supports OOP through its use of <strong>objects</strong>, <strong>classes</strong>, <strong>inheritance</strong>, and <strong>polymorphism</strong>.</p>
                <p><strong>The importance of OOP in JavaScript includes.</strong></p>
                <ul>
                  <li><strong>Encapsulation</strong> Keeps related data and methods together in one object, making code easier to manage and maintain.</li>
                  <li><strong>Abstraction</strong> Hides complex details and exposes only essential features, reducing complexity.</li>
                  <li><strong>Inheritance</strong> Enables code reuse and allows new classes to inherit functionality from existing ones.</li>
                  <li><strong>Polymorphism</strong> Enables flexibility and extensibility by allowing different objects to use the same interface in different ways.</li>
                </ul>
                <p class="text-danger"><strong>Note: </strong>By leveraging OOP principles in JavaScript, you can write more efficient, organized, and scalable applications.</p>

              </div>
            </div>

          </section>

        </div>
      </div>

      <div class="row my-4">
        <div class="col-6 d-flex justify-content-start">
          <a href="javascript-do-while-loop.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
        </div>
        <div class="col-6 d-flex justify-content-end">
          <a href="javascript-objects.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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