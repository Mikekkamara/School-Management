var logoutButton = document.getElementById('logoutButton');
logoutButton.onclick , function(){
    document.getElementById('logoutForm').submit();
    Event.preventDefault();
};

var time = new Date();
var applicationTime = time.toDateString();
document.getElementById("time").innerHTML = applicationTime;



// var submitButton = document.getElementById("submitTeacher");

function button(){
    location.reload();
}


