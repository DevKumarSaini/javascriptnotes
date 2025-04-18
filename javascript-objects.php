<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Learn about JavaScript objects, how to create and use them to store data and functions." />
    <meta name="keywords" content="JavaScript objects, creating objects, object syntax, JavaScript data storage" />

    <title>Javascript Object</title>

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

                        <!-- Javascript Objects Introduction -->
                        <div>
                            <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Objects in JavaScript</h4>
                            <div class="ms-4">
                                <ul>
                                    <li>In JavaScript, <strong>objects</strong> are one of the <strong>fundamental data types</strong> , or <strong>Standalone entity</strong>, with <strong>properties</strong>  and <strong>types</strong>. The <strong>key-value pair</strong>  inside an <strong>object</strong>  is called a <strong>property</strong>.</li>
                                    <li>It's allow you to <strong>group</strong> related data together in a <strong>structured way</strong>.</li>
                                    <li>It is similar to a <strong>dictionary</strong>  in other programming languages, where you store values associated with a <strong>key</strong>.</li>
                                    <li>A <strong>Javascript Object</strong> is a collection of key-value pairs (also called <strong>properties</strong>), where each key is a <strong>string</strong> (or symbol) and the corresponding value can be any valid JavaScript data type (including Primitive types and Reference types <strong>(objects, arrays, functions) </strong>etc.)</li>
                                </ul>
                                
                                <strong class="notes-sub-subheading">Example of an object</strong>
                                <div class="ms-4">
<pre><code class="language-javascript">let person = {
    name "John",       // property 'name' with value "John"
    age 30,            // property 'age' with value 30
    isEmployed true,   // property 'isEmployed' with value true
    greet function() { // method (function) inside object
    console.log("Hello " + this.name);
    }
};</code></pre>

                            </div>
                        </div>


                                    <ul class="ms-4">
                                        <strong>Explanation</strong>
                                        <li><strong>name</strong>, <strong>age</strong>, and <strong>isEmployed</strong> are <strong>properties</strong> of the <code>person</code> object.</li>
                                        <li><strong>greet</strong> is a <strong>method</strong> (function) that belongs to the person object.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-1 mb-4">


                        <div>
                            <h5 class="notes-subheading">1. Creating Objects</h5>
                            <div class="ms-4">
                                <p>There are several ways to create objects in JavaScript</p>
                                
                                    <!-- Using object literals -->
                                    <div class="mt-4">
                                        <strong >A. Using Object Literals</strong>
                                        <div class="ms-4">
                                            <ul>
                                                <li>The simplest way to create an object in JavaScript is using an object literal</li>
                                            </ul>

<pre class="ms-4"><code class="language-javascript">// Object 1 ----------------------------- [Car Object] 
let car = {
    maker : "Toyota",
    model : "Corolla",
    year : 2021
};
console.log(`My car name is ${car.maker} it's model name is ${car.model} and manufactured in year ${car.year}`)

// Object 2 ----------------------------- [Person Object]
const person = {
    name : "Alice",
    age : 30,
    gender : 'M',
};
console.log(`Hello ! My name is ${person.name}, my age is ${person.age} and my gender is ${person.gender}.`)</code></pre>

<strong class="ms-4">Output</strong>
<pre class="ms-4"><code class="language-javascript">//Object Car output
My car name is Toyota it's model name is Corolla and manufactured in year 2021

//Object Person output
Hello ! My name is Alice, my age is 30 and my gender is M.
</code></pre>
                                        </div>
                                    </div>
        
        
        
        
                                    <!-- Using the new object -->
                                    <div class="mt-5">
                                        <strong>B. Using the new Object() Syntax</strong>
                                        <div class="ms-4">
                                            <ul>
                                                <li>You can create an object using the new Object() syntax</li>
                                            </ul>
<pre class="ms-4"><code class="language-javascript">// Object 1 ----------------------------- [Person Object]
const person = new Object();

// Adding properties / attributes 
person.name = "Alice";
person.age = 30;
person.greet = function() {
console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
};

// Calling greet function which is available inside an object
person.greet();


// Object 2 ----------------------------- [Pencil Object]
let pencil = new Object();

// Adding properties / Attributes 
pencil.name = "Doms"
pencil.color = "Orange"
pencil.Lid_type = "Graphite HB/2"
pencil.length = '7 inch'
pencil.display = function(){console.log(`\nPencil name is ${pencil.name},\n it's color is ${pencil.color},\n it's lid type is ${pencil.Lid_type},\n it's length is ${pencil.length}`)}

// Calling display function using same object
pencil.display()
</code></pre>

<strong class="ms-4">Output</strong>

<pre class="ms-4"><code class="language-javascript">// Object person output
Hello, my name is Alice and I am 30 years old.

// Object pencil output
Pencil name is Doms,
it's color is Orange,
it's lid type is Graphite HB/2,
it's length is 7 inch.</code></pre>
                                        </div>
                                    </div>
        
        
                                    <!-- Using constructor FUnctions -->
                                    <div class="mt-5">
                                        <strong ">C. Using Constructor Functions</strong>
                                        <div class="ms-4">
                                            <ul>
                                                <li>A constructor function is a special function used to create and initialized objects with the same structure. It allows you to define reusable templates for creating multiple objects.</li>
                                            </ul>
<pre class="ms-4"><code class="language-javascript">// Object 1 ----------------------------- [Person Object]
function Person(name, age) {
    this.name = name;
    this.age = age;
    this.greet = function() {
    console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
    };
}

// Making object of person1 and person2
const person1 = new Person("Alice", 30);
const person2 = new Person("Bob", 25);

// Printing objects
person1.greet()
person2.greet()


// Object 2 ----------------------------- [School Object]
function School(school_Name,school_Location, standard_Available, school_Medium, board_Support, student_Strength){
    this.school_Name = school_Name;
    this.standard_Available = standard_Available;
    this.school_Medium  = school_Medium;
    this.board_Support = board_Support;
    this.student_Strength = student_Strength;
    this.school_Location=school_Location;
    this.display = function(){console.log(`
School Name           -> ${this.school_Name}
School Location       -> ${this.school_Location}
School Standard upto  -> ${this.standard_Available}
School Medium         -> ${this.school_Medium}
School Board upto     -> ${this.board_Support}
School Capacity       -> ${this.student_Strength}`);}
} 

// Containing all the data in School_A variable reference / Object
let School_A = new School("St. Xavier International School","Zirakpur","12th","English / Hindi","Sr. + Sec. (Both)","3500")

// Calling display method to print the information
School_A.display()
    </code></pre>
    <strong class="ms-4 mt-4">Output</strong>
<pre class="ms-4"><code class="language-javascript"></code>// Object person output
Hello, my name is Alice and I am 30 years old.
Hello, my name is Bob and I am 25 years old.

// Object school output
School Name           -> St. Xavier International School
School Location       -> Zirakpur
School Standard upto  -> 12th
School Medium         -> English / Hindi
School Board upto     -> Sr. + Sec. (Both)
School Capacity       -> 3500
</pre>
                                        </div>
                                    </div>
        
                                    <!-- Using ES6 Classes -->
                                    <div class="mt-5">
                                        <strong>D. Using ES6 Classes</strong>
                                        <div class="ms-4">
                                            <ul>
                                                <li>Starting with <strong>ECMAScript 6 (ES6)</strong> , JavaScript introduced <strong>classes</strong>, which are syntactical sugar over the existing prototype-based inheritance. Classes provide a more familiar and structured way to define objects and their behaviors.</li>
                                            </ul>
<pre class="ms-4"><code class="language-javascript">// Person Class ----------------------------- [Example 1]
class Person {
    //constructor function
    constructor(name, age, gender, cast, DOB) {
        this.name = name;
        this.age = age;
        this.gender = gender;
        this.cast = cast;
        this.DOB = DOB;
    }
    // Greet method of Person class which helps to display the object details
    greet() {
        console.log(`Hello, !!
My name is [${this.name}] and I am [${this.age}] years old.
this is my gender [${this.gender}] and cast is [${this.cast}] or DOB is [${this.DOB}] \n`);
    }
}

// Creating two object person1 and person2
const person1 = new Person("Rakesh", 30,'M', "General", '1 / 4 / 1916');
const person2 = new Person("Kiran", 25,'F', "OBC", '4 / 6 / 2000');

//Using Person class object we invoke greet method using same class object to display details
person1.greet(); 
person2.greet(); 

                
// Employee Class ----------------------------- [Example 2]
class Employee{
    //Employee Class constructor function
    constructor(name, age, gender, salary, designation, DOB, mob_No, email ){
        this.name = name
        this.age = age
        this.gender = gender
        this.salary = salary
        this.designation =designation
        this.DOB = DOB
        this.mob_No = mob_No
        this.email = email
    }

    // Display method of Employee Class
    displayDetails(){
        console.log(`Emp Name         -> ${this.name}
Emp Age          -> ${this.age}
Emp Gender       -> ${this.gender}
Emp Salary       -> ${this.salary}
Emp Designation  -> ${this.designation}
Emp DOB          -> ${this.DOB}
Emp Mob_No       -> ${this.mob_No}
Emp Email        -> ${this.email}`);
    }
}

// Creating Rohit object of Employee class
let Rohit = new Employee("Rohit Kumar",24,'M',42000,'Sr. Software Developer','8/5/2000', 7854213265, "rohitbaba123@mail.com")

// Use display method of Employee class with the help of Rohit object to display object details
Rohit.displayDetails()</code></pre>


<strong class="ms-4">Output</strong>
<pre class="ms-4"><code class="language-javascript">// Person class output
Hello, !!
My name is [Rakesh] and I am [30] years old.
this is my gender [M] and cast is [General] or DOB is [1 / 4 / 1916] 

Hello, !!
My name is [Kiran] and I am [25] years old.
this is my gender [F] and cast is [OBC] or DOB is [4 / 6 / 2000] 


// Employee class output
Emp Name         -> Rohit Kumar
Emp Age          -> 24
Emp Gender       -> M
Emp Salary       -> 42000
Emp Designation  -> Sr. Software Developer
Emp DOB          -> 8/5/2000
Emp Mob_No       -> 7854213265
Emp Email        -> rohitbaba123@mail.com
</code></pre>
                                        </div>
                                    </div>



                                    <!-- Using Object.create() method -->
                                    <div class="mt-5">
                                        <strong>E. Using <code>Object.create()</code> Method</strong>
                                        <ul>
                                            <li><strong>Prototypal Inheritance: </strong>Object.create() provides a clean and explicit way to implement prototypal inheritance. You can create a new object that inherits properties and methods from a specified prototype object. This allows you to structure your code in a more object-oriented manner, promoting code reusability and maintainability.</li>
                                            <li><strong>Flexibility: </strong>Object.create() gives you fine-grained control over the prototype of the object you're creating. You can explicitly specify the prototype object, allowing for more flexible and customized object creation.</li>
                                            <li><strong>Clearer Inheritance Relationships: </strong>Compared to using the constructor function and prototype property directly, Object.create() often results in code that is more readable and easier to understand, especially for complex inheritance hierarchies.</li>
                                        </ul>
                                        <div class="ms-4">
<pre><code class="language-javascript">// tenisBall ----------------------------- [Example 1]
// Creating object using Object class create() static method
// Creating Display function and stores in a variable for better accessing Object properties
let ball_Property = {
    // display function
    displayContent(){
        console.log(`Ball Type     -> ${this.type}
Ball Color    -> ${this.color}
Ball Weight   -> ${this.weight}
Ball Radius   -> ${this.radius}
Ball Material -> ${this.material}`
        );
    }
}

// Creating tenisBall object using Object.create() method
let tenisBall = Object.create(ball_Property)

// Setting values of tenisBall object
tenisBall.type = "Cricket Ball"
tenisBall.color = "Green"
tenisBall.weight = '700 gm'
tenisBall.radius = '1.27 inch'
tenisBall.material = 'Rubber'

// Calling display method using tenisBall object 
tenisBall.displayContent()


// footBall ----------------------------- [Example 2]
// Creating display content function for display object properties 
let footBall_Property = {
    display_Content(){
console.log(`Ball type     -> ${this.type}
Ball Color    -> ${this.color}
Ball Weight   -> ${this.weight}
Ball Radius   -> ${this.radius}
Ball Material -> ${this.material}`)
    }
}

// Creating football object using Object.create() method
let footBall = Object.create(footBall_Property)

// Setting values of footBall object
footBall.type = "FootBall"
footBall.color = "Black and White"
footBall.weight = '2.21 kg'
footBall.radius = '4.72 inch'
footBall.material = "High Greed Polymer"

// Calling football display method using footBall object 
footBall.display_Content()
</code></pre>
<strong>Output</strong>
<pre><code class="language-javascript">// Tenis Ball output
Ball Type     -> Cricket Ball
Ball Color    -> Green
Ball Weight   -> 700 gm
Ball Radius   -> 1.27 inch
Ball Material -> Rubber

// Foot Ball output
Ball type     -> FootBall
Ball Color    -> Black and White
Ball Weight   -> 2.21 kg
Ball Radius   -> 4.72 inch
Ball Material -> High Greed Polymer</code></pre>
                                        </div>
                                    </div>
                            </div>
                        </div>



                        <hr class="mt-5 mb-3">
















                        <h5 class="notes-subheading">2. Properties of Objects</h5>

                        <h6 class="notes-sub-subheading">a. <strong>Property Keys</strong></h6>
                        <p>In an object, the <strong>keys</strong> (also called <strong>property names</strong>) are always strings or <strong>Symbols</strong>. If you use any other type of data for a key, JavaScript will automatically convert it to a string.</p>
                        <pre><code class="language-javascript">let obj = {};
obj[123] = "Hello"; // key is converted to "123"
console.log(obj["123"]); // outputs "Hello"</code></pre>

                        <h6 class="notes-sub-subheading">b. <strong>Property Values</strong></h6>
                        <p>The <strong>values</strong> associated with each key can be any valid JavaScript data type</p>
                        <ul>
                            <li><strong>Primitive Types</strong> string, number, boolean, null, undefined, symbol, bigint.</li>
                            <li><strong>Reference Types</strong> objects, arrays, functions, and other objects.</li>
                        </ul>
                        <pre><code class="language-javascript">let person = {
        name "John",        // string
        age 30,             // number
        isEmployed true,    // boolean
        address {           // nested object
            city "New York",
            country "USA"
        },
        hobbies ["Reading", "Music"], // array
        greet function() {  // method
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
                        <h6 class="notes-sub-subheading">a. Modifying existing properties</h6>
                        <pre><code class="language-javascript">person.age = 35;        // using dot notation
person["name"] = "Alice"; // using bracket notation</code></pre>

                        <h6 class="notes-sub-subheading">b. Adding new properties</h6>
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
                        <pre><code class="language-javascript">console.log(Object.values(person)); // ['John', true, [Function greet]]</code></pre>

                        <h6 class="notes-sub-subheading">d. <code>Object.entries()</code></h6>
                        <pre><code class="language-javascript">console.log(Object.entries(person));
// [["name", "John"], ["isEmployed", true], ["greet", function() {}]]</code></pre>

                        <h6 class="notes-sub-subheading">e. <code>Object.assign()</code></h6>
                        <pre><code class="language-javascript">let source = { age 25 };
let target = { name "Alice" };

Object.assign(target, source);
console.log(target); // { name 'Alice', age 25 }</code></pre>

                        <h6 class="notes-sub-subheading">f. <code>Object.freeze()</code></h6>
                        <pre><code class="language-javascript">let obj = { name "Bob" };
Object.freeze(obj);
obj.name = "Alice"; // This will not work as the object is frozen
console.log(obj.name); // Bob</code></pre>

                        <h6 class="notes-sub-subheading">g. <code>Object.seal()</code></h6>
                        <pre><code class="language-javascript">let obj = { name "Bob" };
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
                        <pre><code class="language-javascript">let person = { name "Alice", age 25 };
let { name, age } = person;
console.log(name); // Alice
console.log(age);  // 25
</code></pre>

                        <h5 class="notes-subheading">b. <strong>Spread Operator (<code>...</code>)</strong></h5>
                        <p>The spread operator can be used to copy properties from one object to another or merge objects.</p>
                        <pre><code class="language-javascript">let obj1 = { a 1, b 2 };
let obj2 = { ...obj1, c 3 };
console.log(obj2); // { a 1, b 2, c 3 }
</code></pre>

                        <h5 class="notes-subheading">c. <strong>Object Property Shorthand</strong></h5>
                        <p>If the variable name is the same as the property name, you can use shorthand syntax.</p>
                        <pre><code class="language-javascript">let name = "Alice";
let age = 25;
let person = { name, age };
console.log(person); // { name "Alice", age 25 }
</code></pre>

                        <h4 class="notes-heading">10. <strong>Advanced Topics in JavaScript Objects</strong></h4>

                        <h5 class="notes-subheading">a. <strong>Symbol Properties</strong></h5>
                        <p>JavaScript provides a primitive type called <code>Symbol</code>, which can be used as property keys. Symbols are unique and can prevent property name collisions.</p>
                        <pre><code class="language-javascript">let mySymbol = Symbol("uniqueKey");

let person = {
    name "Alice",
    [mySymbol] "secretValue"
};

console.log(person[mySymbol]); // "secretValue"
</code></pre>
                        <p>Since symbols are unique, they won’t clash with any other property names, even if they are used in multiple objects.</p>

                        <h5 class="notes-subheading">b. <strong>WeakMap and WeakSet</strong></h5>
                        <p><strong>WeakMap</strong> and <strong>WeakSet</strong> are collections that allow you to store objects without preventing them from being garbage-collected. This is useful for scenarios where you want to associate metadata with objects without affecting their lifecycle.</p>

                        <h6 class="notes-sub-subheading">WeakMap Example</h6>
                        <pre><code class="language-javascript">let person = { name "John" };
let weakMap = new WeakMap();

weakMap.set(person, "some value");

console.log(weakMap.get(person)); // "some value"

// If the 'person' object is garbage collected, the entry will be removed from WeakMap
</code></pre>

                        <h6 class="notes-sub-subheading">WeakSet Example</h6>
                        <pre><code class="language-javascript">let obj1 = {};
let weakSet = new WeakSet();

weakSet.add(obj1);

// The object can be garbage-collected if there are no other references
</code></pre>

                        <h5 class="notes-subheading">c. <strong>Object Descriptors and Property Attributes</strong></h5>
                        <p>JavaScript objects allow you to get and set <strong>property descriptors</strong>. A property descriptor is an object that describes the characteristics of a property. These descriptors include</p>
                        <ul>
                            <li><strong>value</strong> The value of the property.</li>
                            <li><strong>writable</strong> Whether the property value can be modified.</li>
                            <li><strong>enumerable</strong> Whether the property will show up in loops (e.g., <code>for...in</code> or <code>Object.keys()</code>).</li>
                            <li><strong>configurable</strong> Whether the property can be deleted or its attributes can be modified.</li>
                        </ul>
                        <p>You can access and modify these descriptors using <code>Object.getOwnPropertyDescriptor()</code> and <code>Object.defineProperty()</code>.</p>
                        <pre><code class="language-javascript">let person = {
    name "Alice"
};

// Get property descriptor
let descriptor = Object.getOwnPropertyDescriptor(person, "name");
console.log(descriptor);
// { value 'Alice', writable true, enumerable true, configurable true }

// Modify property descriptor
Object.defineProperty(person, "name", {
    writable false
});

person.name = "Bob"; // This will not work because 'name' is not writable
console.log(person.name); // Alice
</code></pre>

                        <h5 class="notes-subheading">d. <strong><code>this</code> and Context in Objects</strong></h5>
                        <p>When working with objects, the value of <code>this</code> can be tricky to understand, especially when using methods.</p>
                        <ul>
                            <li>Inside an object method, <code>this</code> refers to the object itself</li>
                        </ul>
                        <pre><code class="language-javascript">let person = {
    name "John",
    greet function() {
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
                        <pre><code class="language-javascript">let obj1 = { name "Alice" };
let obj2 = { name "Alice" };

console.log(obj1 === obj2); // false, because they are different references
</code></pre>
                        <p>If you want to compare the contents of two objects, you would have to manually compare each property or use a utility like <code>JSON.stringify()</code> (although this has limitations, like handling <code>undefined</code> and functions).</p>
                        <pre><code class="language-javascript">console.log(JSON.stringify(obj1) === JSON.stringify(obj2)); // true (shallow comparison)
</code></pre>

                        <h5 class="notes-subheading">f. <strong>Prototype Inheritance in JavaScript</strong></h5>
                        <p>JavaScript is a <strong>prototype-based language</strong>, meaning objects can inherit properties and methods from other objects. This inheritance mechanism allows objects to share behavior without explicitly duplicating code.</p>

                        <h6 class="notes-sub-subheading">Prototype Chain</h6>
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
                        <pre><code class="language-javascript">const person = { name "John", age 30 };
const updatedPerson = { ...person, age 31 }; // Creates a new object
console.log(updatedPerson); // { name 'John', age 31 }
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
                    <a href="javascript-oop-paradigm.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Previous Topic</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="javascript-creating-objects.php" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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