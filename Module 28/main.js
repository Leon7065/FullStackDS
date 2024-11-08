var shuma =0;

for(i=15;i<=47;i++){
    shuma = shuma +i
}

console.log(shuma);

sum = [4, 5, 6, 7, 7];

var print = 0;
for(i=0;i<sum.length;i++){
    print += sum[i];
}

console.log(print);


for(x of sum){
    print=sum+=x;
}
console.log(print);



var test=[4,6,7,4,7];
var testp=0;
for(x in test){
    testp+=x;
}
console.log(testp);





var emri = document.getElementById("emri");
var btn = document.getElementById("btn1");

var varguemrave=[];
btn.addEventListener("click", function addElements(){
    varguemrave.push(emri.value);
    console.log(varguemrave);
});




