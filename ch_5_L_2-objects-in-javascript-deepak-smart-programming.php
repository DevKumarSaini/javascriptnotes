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

                    <h3 class="text-center"> JavaScript Objects</h3>
                    <hr />

                    <section>

                        <h4 class="notes-heading">Complete Guide to Objects in JavaScript</h4>
                        <p>In JavaScript, <strong>objects</strong> are one of the fundamental data types, and they allow you to group related data together in a structured way. An object is a collection of key-value pairs (also called <strong>properties</strong>), where each key is a <strong>string</strong> (or symbol) and the corresponding value can be any valid JavaScript data type (including other objects, arrays, functions, etc.).</p>
                        <p>Let's dive deep into every aspect of objects in JavaScript, from basic concepts to advanced topics:</p>

                        <h5 class="notes-subheading">1. <strong>What is an Object?</strong></h5>
                        <p>An <strong>object</strong> in JavaScript is a standalone entity, with properties and types. It is similar to a dictionary in other programming languages, where you store values associated with a key. The key-value pair inside an object is called a <strong>property</strong>.</p>

                        <h6 class="notes-sub-subheading">Example of an object:</h6>
                        <pre><code class="language-javascript">let person = {
        name: "John",       // property 'name' with value "John"
        age: 30,            // property 'age' with value 30
        isEmployed: true,   // property 'isEmployed' with value true
        greet: function() { // method (function) inside object
            console.log("Hello " + this.name);
        }
    };</code></pre>

                        <p>In the above example:</p>
                        <ul>
                            <li><strong>name</strong>, <strong>age</strong>, and <strong>isEmployed</strong> are <strong>properties</strong> of the <code>person</code> object.</li>
                            <li><strong>greet</strong> is a <strong>method</strong> (function) that belongs to the object.</li>
                        </ul>

                        <h5 class="notes-subheading">2. <strong>Creating Objects</strong></h5>
                        <p>There are several ways to create objects in JavaScript:</p>

                        <h6 class="notes-sub-subheading">a. Using Object Literals</h6>
                        <pre><code class="language-javascript">let car = {
        make: "Toyota",
        model: "Corolla",
        year: 2021
    };</code></pre>

                        <h6 class="notes-sub-subheading">b. Using the <code>new Object()</code> Syntax</h6>
                        <pre><code class="language-javascript">let person = new Object();
person.name = "Alice";
person.age = 25;</code></pre>

                        <h6 class="notes-sub-subheading">c. Using a Constructor Function (Custom Classes)</h6>
                        <pre><code class="language-javascript">function Person(name, age) {
    this.name = name;
    this.age = age;
}

let person1 = new Person("John", 30);
let person2 = new Person("Alice", 25);</code></pre>

                        <h6 class="notes-sub-subheading">d. Using <code>Object.create()</code> Method</h6>
                        <pre><code class="language-javascript">let personPrototype = {
        greet: function() {
            console.log("Hello " + this.name);
        }
    };

let person = Object.create(personPrototype);
person.name = "John";
person.age = 30;</code></pre>

                        <h5 class="notes-subheading">3. <strong>Properties of Objects</strong></h5>

                        <h6 class="notes-sub-subheading">a. <strong>Property Keys</strong></h6>
                        <p>In an object, the <strong>keys</strong> (also called <strong>property names</strong>) are always strings or <strong>Symbols</strong>. If you use any other type of data for a key, JavaScript will automatically convert it to a string.</p>
                        <pre><code class="language-javascript">let obj = {};
obj[123] = "Hello"; // key is converted to "123"
console.log(obj["123"]); // outputs "Hello"</code></pre>

                        <h6 class="notes-sub-subheading">b. <strong>Property Values</strong></h6>
                        <p>The <strong>values</strong> associated with each key can be any valid JavaScript data type:</p>
                        <ul>
                            <li><strong>Primitive Types</strong>: string, number, boolean, null, undefined, symbol, bigint.</li>
                            <li><strong>Reference Types</strong>: objects, arrays, functions, and other objects.</li>
                        </ul>
                        <pre><code class="language-javascript">let person = {
        name: "John",        // string
        age: 30,             // number
        isEmployed: true,    // boolean
        address: {           // nested object
            city: "New York",
            country: "USA"
        },
        hobbies: ["Reading", "Music"], // array
        greet: function() {  // method
            console.log("Hello " + this.name);
        }
    };</code></pre>

                        <h5 class="notes-subheading">4. <strong>Accessing Object Properties</strong></h5>

                        <h6 class="notes-sub-subheading">a. <strong>Dot Notation</strong></h6>
                        <pre><code class="language-javascript">console.log(person.name); // John
console.log(person.age);  // 30</code></pre>

                        <h6 class="notes-sub-subheading">b. <strong>Bracket Notation</strong></h6>
                        <pre><code class="language-javascript">console.log(person["name"]); // John
let prop = "age";
console.log(person[prop]); // 30</code></pre>

                        <h6 class="notes-sub-subheading">c. <strong>Accessing Methods</strong></h6>
                        <pre><code class="language-javascript">person.greet(); // Hello John</code></pre>

                        <h5 class="notes-subheading">5. <strong>Modifying Object Properties</strong></h5>
                        <h6 class="notes-sub-subheading">a. Modifying existing properties:</h6>
                        <pre><code class="language-javascript">person.age = 35;        // using dot notation
person["name"] = "Alice"; // using bracket notation</code></pre>

                        <h6 class="notes-sub-subheading">b. Adding new properties:</h6>
                        <pre><code class="language-javascript">person.isMarried = false; // using dot notation
person["address"] = "123 Street"; // using bracket notation</code></pre>

                        <h5 class="notes-subheading">6. <strong>Deleting Object Properties</strong></h5>
                        <pre><code class="language-javascript">delete person.age;
console.log(person.age); // undefined</code></pre>

                        <h5 class="notes-subheading">7. <strong>Object Methods</strong></h5>

                        <h6 class="notes-sub-subheading">a. <code>hasOwnProperty()</code></h6>
                        <pre><code class="language-javascript">console.log(person.hasOwnProperty("name")); // true
console.log(person.hasOwnProperty("salary")); // false</code></pre>

                        <h6 class="notes-sub-subheading">b. <code>Object.keys()</code></h6>
                        <pre><code class="language-javascript">console.log(Object.keys(person)); // ['name', 'isEmployed', 'greet']</code></pre>

                        <h6 class="notes-sub-subheading">c. <code>Object.values()</code></h6>
                        <pre><code class="language-javascript">console.log(Object.values(person)); // ['John', true, [Function: greet]]</code></pre>

                        <h6 class="notes-sub-subheading">d. <code>Object.entries()</code></h6>
                        <pre><code class="language-javascript">console.log(Object.entries(person));
// [["name", "John"], ["isEmployed", true], ["greet", function() {}]]</code></pre>

                        <h6 class="notes-sub-subheading">e. <code>Object.assign()</code></h6>
                        <pre><code class="language-javascript">let source = { age: 25 };
let target = { name: "Alice" };

Object.assign(target, source);
console.log(target); // { name: 'Alice', age: 25 }</code></pre>

                        <h6 class="notes-sub-subheading">f. <code>Object.freeze()</code></h6>
                        <pre><code class="language-javascript">let obj = { name: "Bob" };
Object.freeze(obj);
obj.name = "Alice"; // This will not work as the object is frozen
console.log(obj.name); // Bob</code></pre>

                        <h6 class="notes-sub-subheading">g. <code>Object.seal()</code></h6>
                        <pre><code class="language-javascript">let obj = { name: "Bob" };
Object.seal(obj);
obj.name = "Alice"; // Works fine
delete obj.name;    // Will not work (cannot delete properties)
console.log(obj.name); // Alice</code></pre>










                        <h4 class="notes-heading">8. <strong>Prototypes and Inheritance</strong></h4>
                        <p>In JavaScript, objects are linked to other objects through a concept known as the <strong>prototype</strong>. Every object has a prototype (except <code>null</code>), and properties or methods that are not found on an object are looked up on its prototype.</p>

                        <h5 class="notes-subheading">a. <strong>Prototype Chain</strong></h5>
                        <p>If an object does not have a property, JavaScript looks for the property in its prototype, and then on the prototype’s prototype, and so on, until it reaches <code>null</code>.</p>
                        <pre><code class="language-javascript">function Person(name) {
    this.name = name;
}
Person.prototype.greet = function() {
    console.log("Hello " + this.name);
};

let john = new Person("John");
john.greet(); // Hello John
</code></pre>

                        <h5 class="notes-subheading">b. <strong>Inheritance via Prototypes</strong></h5>
                        <p>JavaScript objects can inherit properties and methods from another object via the prototype chain. This is often used for creating objects that share behavior.</p>

                        <h4 class="notes-heading">9. <strong>ES6+ Features</strong></h4>

                        <h5 class="notes-subheading">a. <strong>Destructuring</strong></h5>
                        <p>Destructuring allows you to extract multiple properties from an object in a clean and concise way.</p>
                        <pre><code class="language-javascript">let person = { name: "Alice", age: 25 };
let { name, age } = person;
console.log(name); // Alice
console.log(age);  // 25
</code></pre>

                        <h5 class="notes-subheading">b. <strong>Spread Operator (<code>...</code>)</strong></h5>
                        <p>The spread operator can be used to copy properties from one object to another or merge objects.</p>
                        <pre><code class="language-javascript">let obj1 = { a: 1, b: 2 };
let obj2 = { ...obj1, c: 3 };
console.log(obj2); // { a: 1, b: 2, c: 3 }
</code></pre>

                        <h5 class="notes-subheading">c. <strong>Object Property Shorthand</strong></h5>
                        <p>If the variable name is the same as the property name, you can use shorthand syntax.</p>
                        <pre><code class="language-javascript">let name = "Alice";
let age = 25;
let person = { name, age };
console.log(person); // { name: "Alice", age: 25 }
</code></pre>

                        <h4 class="notes-heading">10. <strong>Advanced Topics in JavaScript Objects</strong></h4>

                        <h5 class="notes-subheading">a. <strong>Symbol Properties</strong></h5>
                        <p>JavaScript provides a primitive type called <code>Symbol</code>, which can be used as property keys. Symbols are unique and can prevent property name collisions.</p>
                        <pre><code class="language-javascript">let mySymbol = Symbol("uniqueKey");

let person = {
    name: "Alice",
    [mySymbol]: "secretValue"
};

console.log(person[mySymbol]); // "secretValue"
</code></pre>
                        <p>Since symbols are unique, they won’t clash with any other property names, even if they are used in multiple objects.</p>

                        <h5 class="notes-subheading">b. <strong>WeakMap and WeakSet</strong></h5>
                        <p><strong>WeakMap</strong> and <strong>WeakSet</strong> are collections that allow you to store objects without preventing them from being garbage-collected. This is useful for scenarios where you want to associate metadata with objects without affecting their lifecycle.</p>

                        <h6 class="notes-sub-subheading">WeakMap Example:</h6>
                        <pre><code class="language-javascript">let person = { name: "John" };
let weakMap = new WeakMap();

weakMap.set(person, "some value");

console.log(weakMap.get(person)); // "some value"

// If the 'person' object is garbage collected, the entry will be removed from WeakMap
</code></pre>

                        <h6 class="notes-sub-subheading">WeakSet Example:</h6>
                        <pre><code class="language-javascript">let obj1 = {};
let weakSet = new WeakSet();

weakSet.add(obj1);

// The object can be garbage-collected if there are no other references
</code></pre>

                        <h5 class="notes-subheading">c. <strong>Object Descriptors and Property Attributes</strong></h5>
                        <p>JavaScript objects allow you to get and set <strong>property descriptors</strong>. A property descriptor is an object that describes the characteristics of a property. These descriptors include:</p>
                        <ul>
                            <li><strong>value</strong>: The value of the property.</li>
                            <li><strong>writable</strong>: Whether the property value can be modified.</li>
                            <li><strong>enumerable</strong>: Whether the property will show up in loops (e.g., <code>for...in</code> or <code>Object.keys()</code>).</li>
                            <li><strong>configurable</strong>: Whether the property can be deleted or its attributes can be modified.</li>
                        </ul>
                        <p>You can access and modify these descriptors using <code>Object.getOwnPropertyDescriptor()</code> and <code>Object.defineProperty()</code>.</p>
                        <pre><code class="language-javascript">let person = {
    name: "Alice"
};

// Get property descriptor
let descriptor = Object.getOwnPropertyDescriptor(person, "name");
console.log(descriptor);
// { value: 'Alice', writable: true, enumerable: true, configurable: true }

// Modify property descriptor
Object.defineProperty(person, "name", {
    writable: false
});

person.name = "Bob"; // This will not work because 'name' is not writable
console.log(person.name); // Alice
</code></pre>

                        <h5 class="notes-subheading">d. <strong><code>this</code> and Context in Objects</strong></h5>
                        <p>When working with objects, the value of <code>this</code> can be tricky to understand, especially when using methods.</p>
                        <ul>
                            <li>Inside an object method, <code>this</code> refers to the object itself:</li>
                        </ul>
                        <pre><code class="language-javascript">let person = {
    name: "John",
    greet: function() {
        console.log("Hello " + this.name);
    }
};

person.greet(); // Hello John
</code></pre>
                        <ul>
                            <li>However, if you pass the method as a callback or use it outside the object, <code>this</code> may refer to something else. This can be fixed by using <code>bind()</code>, <code>call()</code>, or <code>apply()</code> to set the context of <code>this</code>.</li>
                        </ul>
                        <pre><code class="language-javascript">let greetFunction = person.greet;
greetFunction(); // undefined (this is the global object)

let boundGreet = person.greet.bind(person);
boundGreet(); // Hello John (bind() fixes the value of 'this')
</code></pre>

                        <h5 class="notes-subheading">e. <strong>Object Comparison and Equality</strong></h5>
                        <p>In JavaScript, objects are <strong>reference types</strong>, so when comparing objects, JavaScript compares their memory addresses (references) rather than their content. Two different objects with the same properties will not be considered equal.</p>
                        <pre><code class="language-javascript">let obj1 = { name: "Alice" };
let obj2 = { name: "Alice" };

console.log(obj1 === obj2); // false, because they are different references
</code></pre>
                        <p>If you want to compare the contents of two objects, you would have to manually compare each property or use a utility like <code>JSON.stringify()</code> (although this has limitations, like handling <code>undefined</code> and functions).</p>
                        <pre><code class="language-javascript">console.log(JSON.stringify(obj1) === JSON.stringify(obj2)); // true (shallow comparison)
</code></pre>

                        <h5 class="notes-subheading">f. <strong>Prototype Inheritance in JavaScript</strong></h5>
                        <p>JavaScript is a <strong>prototype-based language</strong>, meaning objects can inherit properties and methods from other objects. This inheritance mechanism allows objects to share behavior without explicitly duplicating code.</p>

                        <h6 class="notes-sub-subheading">Prototype Chain:</h6>
                        <p>Every object has a hidden internal property <code>[[Prototype]]</code>, which links to another object, typically referred to as its prototype. This prototype object itself has a prototype, creating a "prototype chain." The chain ends when it reaches <code>null</code>.</p>
                        <pre><code class="language-javascript">function Animal(name) {
    this.name = name;
}

Animal.prototype.sound = function() {
    console.log(this.name + " makes a sound");
};

function Dog(name) {
    Animal.call(this, name);  // Call the parent constructor
}

Dog.prototype = Object.create(Animal.prototype);  // Set Dog's prototype to be an instance of Animal
Dog.prototype.constructor = Dog;

let dog = new Dog("Buddy");
dog.sound(); // Buddy makes a sound
</code></pre>

                        <h5 class="notes-subheading">g. <strong>ES6 Classes</strong></h5>
                        <p>Although JavaScript is prototype-based, ES6 introduced <strong>classes</strong> as syntactic sugar over the existing prototype-based inheritance system. Classes are a more formal way of creating and managing objects and their prototypes.</p>
                        <pre><code class="language-javascript">class Animal {
    constructor(name) {
        this.name = name;
    }

    sound() {
        console.log(this.name + " makes a sound");
    }
}

class Dog extends Animal {
    constructor(name, breed) {
        super(name); // Call the parent constructor
        this.breed = breed;
    }

    bark() {
        console.log(this.name + " barks");
    }
}

let dog = new Dog("Buddy", "Golden Retriever");
dog.sound(); // Buddy makes a sound
dog.bark();  // Buddy barks
</code></pre>

                        <h4 class="notes-heading">11. <strong>Performance and Best Practices</strong></h4>

                        <h5 class="notes-subheading">a. <strong>Avoiding Object Mutation</strong></h5>
                        <p>To prevent accidental changes to objects, consider using <strong>immutable patterns</strong> where objects are not mutated after they are created. Instead, create new objects with the updated properties.</p>
                        <pre><code class="language-javascript">const person = { name: "John", age: 30 };
const updatedPerson = { ...person, age: 31 }; // Creates a new object
console.log(updatedPerson); // { name: 'John', age: 31 }
</code></pre>

                        <h5 class="notes-subheading">b. <strong>Using Object Destructuring and Spread Efficiently</strong></h5>
                        <p>When dealing with large objects, destructuring can be a more concise and readable way to extract values or update parts of objects.</p>
                        <pre><code class="language-javascript">const { name, age } = person;  // Extracts name and age from person
</code></pre>

                        <h5 class="notes-subheading">c. <strong>Avoiding Prototype Pollution</strong></h5>
                        <p>Prototype pollution is a security risk where an attacker can modify an object’s prototype and introduce malicious properties. Avoid accepting untrusted objects as input and sanitize them properly.</p>

                        <h4 class="notes-heading">Conclusion</h4>
                        <p>Objects in JavaScript are one of the most powerful features of the language. They allow for flexible data structures, inheritance, and a rich set of built-in methods for manipulating and interacting with data. By mastering objects and understanding their properties, methods, and behavior (including prototype inheritance, destructuring, and the use of classes), you’ll be able to write more efficient and maintainable JavaScript code.</p>





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