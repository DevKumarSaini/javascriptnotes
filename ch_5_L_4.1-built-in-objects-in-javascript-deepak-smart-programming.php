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

                    <h3 class="text-center"> JavaScript Built In Objects and Common Methods</h3>
                    <hr />

                    <section>

                        <h4 class="notes-heading">1. <strong>Object</strong></h4>
                        <p>The <code>Object</code> object is the most fundamental object in JavaScript. It is the base object from which most other JavaScript objects inherit.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Every JavaScript object (including arrays, functions, etc.) is an instance of <code>Object</code>.</li>
                            <li><strong>Properties</strong>:
                                <ul>
                                    <li><code>Object.prototype</code>: Contains properties and methods shared by all objects, such as <code>toString()</code>, <code>hasOwnProperty()</code>, and <code>valueOf()</code>.</li>
                                </ul>
                            </li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Object.create(proto)</code></strong>: Creates a new object with the specified prototype.</li>
                            <pre><code class="language-javascript">
const personProto = { greet() { console.log("Hello"); } };
const person = Object.create(personProto);
person.greet(); // Output: Hello
        </code></pre>

                            <li><strong><code>Object.keys(obj)</code></strong>: Returns an array of a given object's own enumerable property names.</li>
                            <pre><code class="language-javascript">
const person = { name: "Alice", age: 25 };
console.log(Object.keys(person)); // ["name", "age"]
        </code></pre>

                            <li><strong><code>Object.values(obj)</code></strong>: Returns an array of a given object's own enumerable property values.</li>
                            <pre><code class="language-javascript">
console.log(Object.values(person)); // ["Alice", 25]
        </code></pre>

                            <li><strong><code>Object.assign(target, ...sources)</code></strong>: Copies all properties from one or more source objects to a target object.</li>
                            <pre><code class="language-javascript">
let obj1 = { a: 1 };
let obj2 = { b: 2 };
let combined = Object.assign({}, obj1, obj2);
console.log(combined); // { a: 1, b: 2 }
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">2. <strong>Array</strong></h4>
                        <p>The <code>Array</code> object is a special type of object used to store a collection of elements in a list-like format. Arrays in JavaScript are dynamic, and their elements can be of any type.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Arrays are indexed collections of data, where indices start at <code>0</code>.</li>
                            <li>Arrays have a <code>length</code> property which is dynamically updated as elements are added or removed.</li>
                            <li>Arrays are instances of the <code>Array</code> object.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Array.prototype.push()</code></strong>: Adds one or more elements to the end of an array.</li>
                            <pre><code class="language-javascript">
let fruits = ["apple", "banana"];
fruits.push("cherry");
console.log(fruits); // ["apple", "banana", "cherry"]
        </code></pre>

                            <li><strong><code>Array.prototype.pop()</code></strong>: Removes the last element from the array.</li>
                            <pre><code class="language-javascript">
let last = fruits.pop();
console.log(last); // cherry
        </code></pre>

                            <li><strong><code>Array.prototype.shift()</code></strong>: Removes the first element from the array.</li>
                            <pre><code class="language-javascript">
let first = fruits.shift();
console.log(first); // apple
        </code></pre>

                            <li><strong><code>Array.prototype.map()</code></strong>: Creates a new array by applying a function to each element of the array.</li>
                            <pre><code class="language-javascript">
let numbers = [1, 2, 3];
let doubled = numbers.map(n => n * 2);
console.log(doubled); // [2, 4, 6]
        </code></pre>

                            <li><strong><code>Array.prototype.filter()</code></strong>: Creates a new array with all elements that pass a test.</li>
                            <pre><code class="language-javascript">
let numbers = [1, 2, 3, 4, 5];
let evenNumbers = numbers.filter(n => n % 2 === 0);
console.log(evenNumbers); // [2, 4]
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">3. <strong>String</strong></h4>
                        <p>The <code>String</code> object is used for representing and manipulating sequences of characters.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Strings are immutable in JavaScript (i.e., you can't change a string directly).</li>
                            <li>Strings in JavaScript are primitive values, but they also have methods available via <code>String.prototype</code>.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>String.prototype.charAt(index)</code></strong>: Returns the character at a specified index.</li>
                            <pre><code class="language-javascript">
let str = "hello";
console.log(str.charAt(1)); // "e"
        </code></pre>

                            <li><strong><code>String.prototype.indexOf(substring)</code></strong>: Returns the first index of a substring or <code>-1</code> if not found.</li>
                            <pre><code class="language-javascript">
console.log(str.indexOf("l")); // 2
        </code></pre>

                            <li><strong><code>String.prototype.slice(start, end)</code></strong>: Extracts a section of a string and returns it as a new string.</li>
                            <pre><code class="language-javascript">
let sliced = str.slice(1, 4);
console.log(sliced); // "ell"
        </code></pre>

                            <li><strong><code>String.prototype.toUpperCase()</code></strong>: Converts the string to uppercase.</li>
                            <pre><code class="language-javascript">
let upper = str.toUpperCase();
console.log(upper); // "HELLO"
        </code></pre>

                            <li><strong><code>String.prototype.split(delimiter)</code></strong>: Splits a string into an array of substrings.</li>
                            <pre><code class="language-javascript">
let words = "apple,banana,cherry".split(",");
console.log(words); // ["apple", "banana", "cherry"]
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">4. <strong>Number</strong></h4>
                        <p>The <code>Number</code> object represents numeric values and provides methods to manipulate them.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li><code>Number</code> can represent integers, floating-point numbers, or special values like <code>NaN</code>, <code>Infinity</code>, and <code>-Infinity</code>.</li>
                            <li>JavaScript automatically converts values to numbers when needed.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Number.isNaN(value)</code></strong>: Determines whether a value is <code>NaN</code>.</li>
                            <pre><code class="language-javascript">
console.log(Number.isNaN(NaN)); // true
console.log(Number.isNaN(123)); // false
        </code></pre>

                            <li><strong><code>Number.isInteger(value)</code></strong>: Checks if a value is an integer.</li>
                            <pre><code class="language-javascript">
console.log(Number.isInteger(5)); // true
console.log(Number.isInteger(5.5)); // false
        </code></pre>

                            <li><strong><code>Number.parseInt(string)</code></strong>: Parses a string and returns an integer.</li>
                            <pre><code class="language-javascript">
let num = Number.parseInt("123px");
console.log(num); // 123
        </code></pre>

                            <li><strong><code>Number.parseFloat(string)</code></strong>: Parses a string and returns a floating-point number.</li>
                            <pre><code class="language-javascript">
let num = Number.parseFloat("3.14px");
console.log(num); // 3.14
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">5. <strong>Boolean</strong></h4>
                        <p>The <code>Boolean</code> object represents a logical entity and is used to evaluate expressions that can return <code>true</code> or <code>false</code>.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Boolean values can only be <code>true</code> or <code>false</code>.</li>
                            <li>You can create a <code>Boolean</code> object, though primitive values are used more commonly.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Boolean(value)</code></strong>: Converts any value to its equivalent boolean value (<code>true</code> or <code>false</code>).</li>
                            <pre><code class="language-javascript">
console.log(Boolean("hello")); // true
console.log(Boolean("")); // false
        </code></pre>

                            <li><strong><code>Boolean.prototype.valueOf()</code></strong>: Returns the primitive value of a <code>Boolean</code> object.</li>
                            <pre><code class="language-javascript">
let flag = new Boolean(true);
console.log(flag.valueOf()); // true
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">6. <strong>Function</strong></h4>
                        <p>The <code>Function</code> object is used to define and call functions in JavaScript.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Every function in JavaScript is an instance of the <code>Function</code> object.</li>
                            <li>Functions can be called with different contexts (<code>this</code> value) using methods like <code>call()</code>, <code>apply()</code>, and <code>bind()</code>.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Function.prototype.call(thisArg, ...args)</code></strong>: Calls a function with a specified <code>this</code> value and arguments.</li>
                            <pre><code class="language-javascript">
function greet(name) {
    console.log(`Hello, ${name}`);
}
greet.call(null, "Alice"); // Hello, Alice
        </code></pre>

                            <li><strong><code>Function.prototype.apply(thisArg, argsArray)</code></strong>: Similar to <code>call()</code>, but takes an array of arguments.</li>
                            <pre><code class="language-javascript">
greet.apply(null, ["Bob"]); // Hello, Bob
        </code></pre>

                            <li><strong><code>Function.prototype.bind(thisArg, ...args)</code></strong>: Creates a new function that, when called, has its <code>this</code> value set to the provided value.</li>
                            <pre><code class="language-javascript">
let greetAlice = greet.bind(null, "Alice");
greetAlice(); // Hello, Alice
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">7. <strong>Date</strong></h4>
                        <p>The <code>Date</code> object is used to handle dates and times in JavaScript. It allows you to get the current date, manipulate it, and format it.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li><code>Date</code> is used to represent dates and times.</li>
                            <li>You can create a new date by calling <code>new Date()</code> or by passing a specific date string or timestamp.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Date.prototype.getDate()</code></strong>: Returns the day of the month.</li>
                            <pre><code class="language-javascript">
let today = new Date();
console.log(today.getDate()); // Example: 5
        </code></pre>

                            <li><strong><code>Date.prototype.getMonth()</code></strong>: Returns the month (0–11).</li>
                            <pre><code class="language-javascript">
console.log(today.getMonth()); // Example: 7 (August)
        </code></pre>

                            <li><strong><code>Date.prototype.getFullYear()</code></strong>: Returns the full year.</li>
                            <pre><code class="language-javascript">
console.log(today.getFullYear()); // Example: 2024
        </code></pre>

                            <li><strong><code>Date.prototype.getTime()</code></strong>: Returns the number of milliseconds since January 1, 1970.</li>
                            <pre><code class="language-javascript">
console.log(today.getTime()); // Example: 1625255000000
        </code></pre>
                        </ul>


                        <h4 class="notes-heading">8. <strong>RegExp (Regular Expression)</strong></h4>
                        <p><code>RegExp</code> is an object that represents a regular expression pattern used for pattern matching in strings.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Regular expressions are used for matching text patterns, extracting substrings, and replacing text.</li>
                            <li>They are created using the <code>RegExp</code> constructor or using literal syntax (<code>/pattern/</code>).</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>RegExp.prototype.test()</code></strong>: Tests if a pattern exists in a string.</li>
                            <pre><code class="language-javascript">
let pattern = /foo/;
console.log(pattern.test("foobar")); // true
        </code></pre>

                            <li><strong><code>RegExp.prototype.exec()</code></strong>: Executes a search for a match and returns an array of matched results.</li>
                            <pre><code class="language-javascript">
let result = pattern.exec("foobar");
console.log(result); // ["foo"]
        </code></pre>

                            <li><strong><code>String.prototype.replace()</code></strong>: Searches for a pattern and replaces it with a new string.</li>
                            <pre><code class="language-javascript">
let newStr = "apple".replace(/p/g, "b");
console.log(newStr); // abble
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">9. <strong>Error</strong></h4>
                        <p>The <code>Error</code> object is used for handling exceptions and creating custom error messages in JavaScript.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Errors in JavaScript can be thrown using <code>throw</code>.</li>
                            <li><code>Error</code> objects include a <code>message</code> and a <code>stack</code> property.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Properties:</h5>
                        <ul>
                            <li><strong><code>Error.prototype.message</code></strong>: The error message.</li>
                            <li><strong><code>Error.prototype.stack</code></strong>: A stack trace, providing the point of failure in the code.</li>
                        </ul>

                        <h5 class="notes-subheading">Example:</h5>
                        <pre><code class="language-javascript">
try {
    throw new Error("Something went wrong!");
} catch (e) {
    console.log(e.message); // "Something went wrong!"
}
    </code></pre>

                        <hr>

                        <h4 class="notes-heading">10. <strong>Map</strong></h4>
                        <p>A <code>Map</code> is a collection of key-value pairs, where both the keys and the values can be any type.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Unlike objects, maps maintain the order of the inserted keys.</li>
                            <li>Keys can be objects, functions, and other primitive types.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>map.set(key, value)</code></strong>: Adds a key-value pair to the map.</li>
                            <pre><code class="language-javascript">
let map = new Map();
map.set('name', 'Alice');
console.log(map.get('name')); // Alice
        </code></pre>

                            <li><strong><code>map.delete(key)</code></strong>: Removes a key-value pair.</li>
                            <pre><code class="language-javascript">
map.delete('name');
console.log(map.has('name')); // false
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">11. <strong>Set</strong></h4>
                        <p>The <code>Set</code> object allows you to store unique values of any type, whether primitive values or references to objects.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Sets do not allow duplicate values.</li>
                            <li>Set values are iterated in the order of insertion.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>set.add(value)</code></strong>: Adds a value to the set.</li>
                            <pre><code class="language-javascript">
let set = new Set();
set.add(1);
set.add(2);
set.add(2); // Duplicate values are ignored
console.log(set); // Set {1, 2}
        </code></pre>

                            <li><strong><code>set.has(value)</code></strong>: Checks if a value exists in the set.</li>
                            <pre><code class="language-javascript">
console.log(set.has(1)); // true
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">12. <strong>WeakMap</strong></h4>
                        <p>A <code>WeakMap</code> is similar to a <code>Map</code>, but its keys must be objects, and the references to keys are weak, allowing garbage collection.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Keys are weakly referenced, meaning they can be garbage-collected when no other references exist.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>weakMap.set(key, value)</code></strong>: Adds a key-value pair.</li>
                            <pre><code class="language-javascript">
let weakMap = new WeakMap();
let obj = {};
weakMap.set(obj, 'value');
console.log(weakMap.get(obj)); // "value"
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">13. <strong>WeakSet</strong></h4>
                        <p>A <code>WeakSet</code> is similar to a <code>Set</code>, but with a key distinction: the values in a <code>WeakSet</code> are held weakly, meaning they are garbage-collected when no other references to the objects exist.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>A <code>WeakSet</code> only holds objects as its values.</li>
                            <li>It doesn't prevent garbage collection of those objects once they are no longer referenced elsewhere in the program.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>weakSet.add(value)</code></strong>: Adds a value to the <code>WeakSet</code>. The value must be an object.</li>
                            <pre><code class="language-javascript">
let weakSet = new WeakSet();
let obj = {};
weakSet.add(obj);
console.log(weakSet.has(obj)); // true
        </code></pre>

                            <li><strong><code>weakSet.delete(value)</code></strong>: Removes the value from the <code>WeakSet</code>.</li>
                            <pre><code class="language-javascript">
weakSet.delete(obj);
console.log(weakSet.has(obj)); // false
        </code></pre>

                            <li><strong><code>weakSet.has(value)</code></strong>: Checks if a value exists in the <code>WeakSet</code>.</li>
                            <pre><code class="language-javascript">
console.log(weakSet.has(obj)); // false
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">14. <strong>Promise</strong></h4>
                        <p>The <code>Promise</code> object represents the eventual completion (or failure) of an asynchronous operation and its resulting value.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>Promises are used to handle asynchronous operations and their results (or errors).</li>
                            <li>A promise can be in one of three states:
                                <ul>
                                    <li><strong>Pending</strong>: The operation is ongoing.</li>
                                    <li><strong>Fulfilled</strong>: The operation completed successfully.</li>
                                    <li><strong>Rejected</strong>: The operation failed.</li>
                                </ul>
                            </li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods:</h5>
                        <ul>
                            <li><strong><code>Promise.resolve(value)</code></strong>: Returns a <code>Promise</code> that is resolved with the given value.</li>
                            <pre><code class="language-javascript">
let promise = Promise.resolve('Success');
promise.then(result => console.log(result)); // "Success"
        </code></pre>

                            <li><strong><code>Promise.reject(reason)</code></strong>: Returns a <code>Promise</code> that is rejected with the given reason.</li>
                            <pre><code class="language-javascript">
let promise = Promise.reject('Error');
promise.catch(error => console.log(error)); // "Error"
        </code></pre>

                            <li><strong><code>Promise.then(onFulfilled, onRejected)</code></strong>: Registers callbacks to be executed when the promise is fulfilled or rejected.</li>
                            <pre><code class="language-javascript">
let promise = new Promise((resolve, reject) => {
    let success = true;
    if (success) {
        resolve('Operation succeeded');
    } else {
        reject('Operation failed');
    }
});
promise
    .then(result => console.log(result)) // "Operation succeeded"
    .catch(error => console.log(error));
        </code></pre>

                            <li><strong><code>Promise.all(iterable)</code></strong>: Returns a promise that resolves when all the promises in the iterable are resolved.</li>
                            <pre><code class="language-javascript">
let promise1 = Promise.resolve(3);
let promise2 = 42;
let promise3 = new Promise((resolve, reject) => setTimeout(resolve, 100, 'foo'));
Promise.all([promise1, promise2, promise3])
    .then(values => console.log(values)); // [3, 42, "foo"]
        </code></pre>

                            <li><strong><code>Promise.race(iterable)</code></strong>: Returns a promise that resolves or rejects as soon as any promise in the iterable resolves or rejects.</li>
                            <pre><code class="language-javascript">
let promise1 = new Promise((resolve, reject) => setTimeout(resolve, 500, 'one'));
let promise2 = new Promise((resolve, reject) => setTimeout(resolve, 100, 'two'));
Promise.race([promise1, promise2])
    .then(value => console.log(value)); // "two"
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">15. <strong>Intl (Internationalization)</strong></h4>
                        <p>The <code>Intl</code> object provides language-sensitive string comparison, number formatting, and date/time formatting.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li>It is especially useful when working with globalized applications that need to display information in a user's locale.</li>
                            <li><code>Intl</code> is not a typical object that you instantiate directly, but rather a collection of constructors and methods.</li>
                        </ul>

                        <h5 class="notes-subheading">Common Methods and Constructors:</h5>
                        <ul>
                            <li><strong><code>Intl.NumberFormat</code></strong>: Formats numbers according to a locale.</li>
                            <pre><code class="language-javascript">
let number = 123456.789;
let formatter = new Intl.NumberFormat('en-US');
console.log(formatter.format(number)); // "123,456.789"
formatter = new Intl.NumberFormat('de-DE');
console.log(formatter.format(number)); // "123.456,789"
        </code></pre>

                            <li><strong><code>Intl.DateTimeFormat</code></strong>: Formats dates and times according to a locale.</li>
                            <pre><code class="language-javascript">
let date = new Date();
let formatter = new Intl.DateTimeFormat('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
console.log(formatter.format(date)); // "December 29, 2024"
        </code></pre>

                            <li><strong><code>Intl.Collator</code></strong>: Performs string comparison based on locale.</li>
                            <pre><code class="language-javascript">
let collator = new Intl.Collator('en', { sensitivity: 'base' });
console.log(collator.compare('apple', 'banana')); // -1 (apple comes before banana)
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">16. <strong>BigInt</strong></h4>
                        <p><code>BigInt</code> is a special type of object that can represent arbitrarily large integers.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li><code>BigInt</code> can be used when integer values exceed the <code>Number</code> type's safe limit (greater than 2<sup>53</sup> - 1 or less than -(2<sup>53</sup> - 1)).</li>
                            <li>It can be created using the <code>BigInt()</code> constructor or by appending <code>n</code> to an integer.</li>
                        </ul>

                        <h5 class="notes-subheading">Examples:</h5>
                        <ul>
                            <li><strong>Creating a BigInt:</strong></li>
                            <pre><code class="language-javascript">
let bigInt1 = BigInt(123456789123456789123456789);
let bigInt2 = 123456789123456789123456789n; // Same as above
console.log(bigInt1 + bigInt2); // Adds two BigInt values
        </code></pre>

                            <li><strong>Arithmetic operations:</strong></li>
                            <pre><code class="language-javascript">
let bigInt1 = 1000000000000000000n;
let bigInt2 = 500000000000000000n;
console.log(bigInt1 + bigInt2); // 1500000000000000000n
console.log(bigInt1 * bigInt2); // 500000000000000000000000000000000000n
        </code></pre>
                        </ul>

                        <hr>

                        <h4 class="notes-heading">17. <strong>Symbol</strong></h4>
                        <p><code>Symbol</code> is a primitive data type used to create unique identifiers for objects.</p>

                        <h5 class="notes-subheading">Key Points:</h5>
                        <ul>
                            <li><code>Symbol</code> values are unique and immutable.</li>
                            <li>Often used to create property keys that are guaranteed to be unique.</li>
                        </ul>

                        <h5 class="notes-subheading">Example:</h5>
                        <pre><code class="language-javascript">
let sym1 = Symbol('description');
let sym2 = Symbol('description');
console.log(sym1 === sym2); // false, every Symbol is unique

let obj = {
    [sym1]: 'value'
};
console.log(obj[sym1]); // "value"
    </code></pre>





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