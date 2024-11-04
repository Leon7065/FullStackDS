var programmingL = ['JavaScript', 'Python', 'Php'];

programmingL.push('java');
programmingL.pop();
programmingL.unshift('c#');
programmingL.shift();

programmingL.splice(1, 0, 'Ruby');
programmingL.splice(0, 0, 'C++');


console.log(programmingL);
console.log(programmingL[1]);
document.write(programmingL);


console.log(Math.floor(Math.random()*5));

var students=["Ariana", "Leon"];

var [s1, s2]=students;

console.log(s1);
console.log(s2);
console.log(students);
console.log(students[1]);


var places = ["London", "Paris", "NewYork", "Berlin"];

var [firstplace, , secondplace] = places;

console.log(firstplace);
console.log(secondplace);

var numbers = [1,2,3,4,5,6];

var [firstNumber, secondNumber, ... otherNumbers] = numbers;

console.log(firstNumber);
console.log(secondNumber);
console.log(otherNumbers);


