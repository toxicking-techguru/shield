var  thisIsMyRequest =  new XMLHttpRequest();

thisIsMyRequest.Open('GET', 'tes.json');
 thisIsMyRequest.onload = function()
{ 
console.log( thisIsMyRequest.responseText);

};
thisIsMyRequest.send();



<script> 

var number = document.getElementById("number");

number.addEventListener("click", function(){
var  thisIsMyRequest =  new XMLHttpRequest();

thisIsMyRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-2.json');
 thisIsMyRequest.onload = function()
{ 
var ourData =JSON.parse(thisIsMyRequest.responseText);


console.log (ourData[0])

};
thisIsMyRequest.send();
});
</script>



for(i=0; i <data.length ;i++){
    htmlString += "<p>" + data[i].name + "is a" + data[i].species + ".</p>";
  }






  var htmlString ="ffffhhhhf"