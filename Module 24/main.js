// function showMessage(){
//     alert("This message is inside a function");
// }

// showMessage();

// function sum (x,y){
//     return x+y;
// }

// document.write(sum(20, 5));

// var arrowfunction= () => alert("Hello world");

// arrowfunction();

// var arrowfunction = name => alert(`hello ${name}`);

// arrowfunction("Leon Berisha");

// function namE(){
//     var localVar = "Leon";
//     alert(localVar);
// }

// namE();

//alert(localVar);


// function x(minutes){
//     return minutes*60;
// }

// x();
// document.write(x(60));


var car = {
    name: "Mercedes", 
    color:"red", 
    year:2020, 
    kilometers:0,
    startEngine: function(){
        alert("VROOOOOOOOOOOOOM!");
    },
    get getKilometers(){
        return this.kilometers;
    },
    set setKilometers(km){
        this.kilometers=km;
    }

};

console.log(car.getKilometers);
car.setKilometers=100;
console.log(car.getKilometers);

car.startEngine();


document.write(car.name+"<br>"+car.color+"<br>"+car.year+"<br>"+car.kilometers);
document.write("<br>"+car['color']);


var computer = new Object();

computer.name="Lenovo";
computer.CPU="Intel core i9";
computer.RAM="32GB";
computer.GPU="GeForce GT730 2GB Dual DP HP";

computer.type = function(){
    return this.name+", "+ this.CPU+", "+this.RAM+", "+this.GPU;
}

delete computer.GPU;
document.write("<br>"+computer.type()+"<br>");


function Computer (name, CPU, RAM, GPU){
    this.name=name;
    this.CPU=CPU;
    this.RAM=RAM;
    this.GPU=GPU;
}


var computer1 = new Computer("Macbook pro", "m1 Chip","8GB", "5600m GPU");
var computer2 = new Computer("HP", "INTEL i3 core","4GB", "integrated");

document.write(""+computer1);
document.write("<br>");
document.write("Computer 1:"+computer1.name+", "+computer1.CPU+", "+computer1.ram+", "+computer1.GPU);









