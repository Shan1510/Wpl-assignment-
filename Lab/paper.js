

//         document.getElementById('form').addEventListener('SUBMIT', function(event){
//            event.preventDefault(); 
//         })

// var firstname=document.getElementById('name').value

let firstname=prompt("Enter the name");
let fnregex=/^[A-Za-z ]+$/;


if(!firstname)
{
    alert("alert");
}
else if (fnregex.test(firstname)){
    alert("procced")
}
else{
    alert("nosorry");
}
