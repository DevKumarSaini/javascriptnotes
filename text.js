// Object 1 ----------------------------- [Car Object] 
// let car = {
//     maker : "Toyota",
//     model : "Corolla",
//     year : 2021,
//     display(){console.log(`Car maker is ${this.maker} and car model is ${this.model} manufactured in year ${this.year}` );
//     }
// };

// car.display()

//Making object using another method

// let pencil = new Object();

// pencil.name = "Doms"
// pencil.color = "Orange"
// pencil.Lid_type = "Graphite HB/2"
// pencil.length = '7 inch'
// pencil.display = function(){console.log(`Pencil name is ${pencil.name} and it's color is ${pencil.color}, it's lid type is ${pencil.Lid_type} and length of pencil is ${pencil.length}`)}

// pencil.display()


// console.log(`My car name is ${car.maker} it's model name is ${car.model} and manufactured in year ${car.year}`)

// // Object 2 ----------------------------- [Person Object]
// const person = {
//     name : "Alice",
//     age : 30,
//     gender : 'M',
// };
// console.log(`Hello ! My name is ${person.name}, my age is ${person.age} and my gender is ${person.gender}.`)


// // Person object is created using new --- [ Object 1 ]
// const person = new Object();

// // Adding properties / attributes 
// person.name = "Alice";
// person.age = 30;
// person.greet = function() {
// console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
// };

// // Calling greet function which is available inside an object
// person.greet();


// // Pencil object is created using new ---[ Object 2 ]
// let pencil = new Object();

// // Adding properties / Attributes 
// pencil.name = "Doms"
// pencil.color = "Orange"
// pencil.Lid_type = "Graphite HB/2"
// pencil.length = '7 inch'
// pencil.display = function(){console.log(`\nPencil name is ${pencil.name},\n it's color is ${pencil.color},\n it's lid type is ${pencil.Lid_type},\n it's length is ${pencil.length}`)}

// // Calling display function using same object
// pencil.display()


// function School(school_Name,school_Location, standard_Available, school_Medium, board_Support, student_Strength){
//     this.school_Name = school_Name;
//     this.standard_Available = standard_Available;
//     this.school_Medium  = school_Medium;
//     this.board_Support = board_Support;
//     this.student_Strength = student_Strength;
//     this.school_Location=school_Location;
//     this.display = function(){console.log(`
// School Name           -> ${this.school_Name}
// School Location       -> ${this.school_Location}
// School Standard upto  -> ${this.standard_Available}
// School Medium         -> ${this.school_Medium}
// School Board upto     -> ${this.board_Support}
// School Capacity       -> ${this.student_Strength}`);}
// } 

// // Containing all the data in School_A variable reference / Object
// let School_A = new School("St. Xavier International School","Zirakpur","12th","English / Hindi","Sr. + Sec. (Both)","3500")

// // Calling display method to print the information
// School_A.display()

// Constructor function
// function Person(name, age) {
//     this.name = name;
//     this.age = age;
//     this.greet = function() {
//     console.log(`Hello, my name is ${this.name} and I am ${this.age} years old.`);
//     };
// }

// // Making object of person1 and person2
// const person1 = new Person("Alice", 30);
// const person2 = new Person("Bob", 25);

// // Printing objects
// person1.greet()
// person2.greet()

// // Employee Class
// class Employee{
//     //Employee Class constructor function
//     constructor(name, age, gender, salary, designation, DOB, mob_No, email ){
//         this.name = name
//         this.age = age
//         this.gender = gender
//         this.salary = salary
//         this.designation =designation
//         this.DOB = DOB
//         this.mob_No = mob_No
//         this.email = email
//     }

//     // Display method of Employee Class
//     displayDetails(){
//         console.log(`Emp Name         -> ${this.name}
// Emp Age          -> ${this.age}
// Emp Gender       -> ${this.gender}
// Emp Salary       -> ${this.salary}
// Emp Designation  -> ${this.designation}
// Emp DOB          -> ${this.DOB}
// Emp Mob_No       -> ${this.mob_No}
// Emp Email        -> ${this.email}`);
//     }
// }

// // Creating Rohit object of Employee class
// let Rohit = new Employee("Rohit Kumar",24,'M',42000,'Sr. Software Developer','8/5/2000', 7854213265, "rohitbaba123@mail.com")

// // Use display method of Employee class with the help of Rohit object to display object details
// Rohit.displayDetails()


// // Class person
// class Person {
//     //constructor function
//     constructor(name, age, gender, cast, DOB) {
//         this.name = name;
//         this.age = age;
//         this.gender = gender;
//         this.cast = cast;
//         this.DOB = DOB;
//     }
//     // Greet method of Person class which helps to display the object details
//     greet() {
//         console.log(`Hello, !!
// My name is [${this.name}] and I am [${this.age}] years old.
// this is my gender [${this.gender}] and cast is [${this.cast}] or DOB is [${this.DOB}] \n`);
//     }
// }

// // Creating two object person1 and person2
// const person1 = new Person("Rakesh", 30,'M', "General", '1 / 4 / 1916');
// const person2 = new Person("Kiran", 25,'F', "OBC", '4 / 6 / 2000');

// //Using Person class object we invoke greet method using same class object to display details
// person1.greet(); 
// person2.greet(); 


// tenisBall ----------------------------- [Example 1]
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
footBall.type = "footBall"
footBall.color = "Black and White"
footBall.weight = '2.21 kg'
footBall.radius = '4.72 inch'
footBall.material = "High Greed Polymer"

// Calling football display method using footBall object 
footBall.display_Content()







