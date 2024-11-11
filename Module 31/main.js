// for(i=0;i<10;i++){
//     document.write(i + "<br>");
// }

// var car = {brand:"BMW", year:2020, color:"red"};

// var x;

// for(x in car){
//     document.write(car[x]+" "+"<br>");
// }

// var names = ['Ariana', 'Leon', 'Elsa'];

// var x;

// for(x of names){
//     document.write(x+"<br>");
// }

// var text = 'Ariana';
// var x;

// for(x of text){
//     document.write(x + "<br>");
// }

// let i = 0;

// do{
//     i+=1;
//     document.write(i);
// }while(i<5);

let x=0;
let y=0;

while(x<3){
    x++;
    document.write(y+=x);
}

document.write("<br>");
document.write("<br>");
document.write("<br>");
document.write("<br>");

var fruits = ['apple', 'orange', 'banana'];

for(i=0; i<fruits.length;i++){
    document.write(fruits[i]+" ");
}

//console.log(fruits[i], i++);

document.write("<br>");


fruits.push('cherry');
fruits.unshift('Strawberry');

for(i=0; i<fruits.length;i++){
    document.write(fruits[i]+" ");
}

//====================

var add = document.getElementById("add");
var show = document.getElementById("show");
var names = document.getElementById("names");

var emrat =[];

add.addEventListener("click",function addNames(){
    emrat.push(names.value);
})

show.addEventListener("click",function showNames(){
    for(i=0; i<emrat.length;i++){
        document.write(emrat[i]+" ");
    }
});


