var logoutButton = document.getElementById('logoutButton');
logoutButton.onclick , function(){
    document.getElementById('logoutForm').submit();
    Event.preventDefault();
};

var time = new Date();
var applicationTime = time.toDateString();
document.getElementById("time").innerHTML = applicationTime;



// var submitButton = document.getElementById("submitTeacher");


var changeButton = document.getElementById('changeButton');
var profileChange = document.getElementById('uploadProfile');
profileChange.addEventListener('click', function(){
    changeButton.style.display = "block";
});
changeButton.onclick = function(){
    document.getElementById('updateProfile').submit();
};


