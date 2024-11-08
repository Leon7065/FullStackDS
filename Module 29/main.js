var text = "i attend Digital School"
var result = text.search(/Digiral School/);
var result1 = text.replace(/Digital School/, "Gjin Gazull");
console.log(result);
console.log(result1);

var testi = "abc";
var regexp = new RegExp('abc');

console.log(regexp.test(testi));

var text2 = "hello world, this is my world!";

var regex= /world/g;

console.log(text2.match(regex));



//

function validate(){
    var name= document.getElementById('name').value;
    var age= document.getElementById('age').value;
    var city= document.getElementById('city').value;

    var valid_name = /^[A-Za-z]+$/;
    var valid_age = /^[0-9]+$/;
    
    if(!(name.match(valid_name)) || !(age.match(valid_age)) || city==''){
        if(!(name.match(valid_name))){
            document.getElementById('name_error').style.visibility="visible";
        }
        if(!(age.match(age_name))){
            document.getElementById('age_error').style.visibility="visible";
        }
        if(city==''){
            document.getElementById('city_error').style.visibility="visible";
        }
        return false;
    }else{
        return true;
    }
}




