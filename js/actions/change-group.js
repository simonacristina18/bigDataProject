// var student = {
//     firstName: document.getElementById("firstName"),
//     lastName: document.getElementById("lastName"),
//     studentEmail: document.getElementById("email"),
//     programme: document.getElementById("programme"),
//     yearOfStudy: document.getElementById("year"),
//     studentSeries: document.getElementById("series"),
//     currentGroup: document.getElementById("currentGroup")
// };

var student = {
    firstName: "",
    lastName: "",
    studentEmail: "",
    programme: "",
    yearOfStudy: "",
    studentSeries: "",
    currentGroup: ""
};

var firstName = document.getElementById("firstName");
var lastName = document.getElementById("lastName");
var studentEmail = document.getElementById("email");
var programme = document.getElementById("programme");
var yearOfStudy = document.getElementById("year");
var studentSeries = document.getElementById("series");
var currentGroup = document.getElementById("currentGroup");

var groupToChange = document.getElementById("groupToChange");
var colleagues = document.getElementById("colleagues");

let http = new XMLHttpRequest();

function changeGroup(){

    // student.firstName.value = firstName.value;
    localStorage.setItem("firstName", firstName.value);

    // const url = 'https://';
    //
    // http.open("POST", url);
    // http.send();
    //
    // http.onreadystatechange = function() {
    //     if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
    //
    //
    //
    //         console.log(http.responseText)
    //     }
    // }
}

function showNewRequest(){
    document.getElementById("newRequestFirstName").innerHTML = localStorage.getItem("firstName");

    // const url = 'https://';
    //
    // http.open("GET", url);
    // http.send();
    //
    // http.onreadystatechange = function() {
    //     if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
    //
    //
    //         console.log(http.responseText)
    //     }
    // }

}



var approvedProgressBar = document.getElementById("approvedProgressBar");
var pendingProgressBar = document.getElementById("pendingProgressBar");

function approveNewRequest(){
    var approveNewButtonContent = document.getElementById("approveNewContent");
    var approveNewButton = document.getElementById("approveNewButton");

    approveNewButton.style.visibility = "hidden";

    if(approveNewButtonContent.style.display === "none"){
        approveNewButtonContent.style.display = "block";
    } else{
        approveNewButtonContent.style.display = "none";
    }
}

function approvePendingRequest(){
    var approvePendingButtonContent = document.getElementById("approvePendingContent");
    var approvePendingButton = document.getElementById("approvePendingButton");

    approvePendingButton.style.visibility = "hidden";

    if(approvePendingButtonContent.style.display === "none"){
        approvePendingButtonContent.style.display = "block";
    } else{
        approvePendingButtonContent.style.display = "none";
    }
}

function updateStatus(){
    if(approveNewRequest() || approvePendingRequest()){
        pendingProgressBar.style.visibility = "hidden";

        if(approvedProgressBar.style.display === "none"){
            approvedProgressBar.style.display = "block";
        }
    }
}