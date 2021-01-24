var user = {
    email: document.getElementById("exampleInputEmail"),
    password: document.getElementById("exampleInputPassword"),
    role : {
        name: ['Student', 'Secretary Employee']
    }
};

var endpoint = "https://localhost/api/login";


function selectRole(role){
    document.getElementById("dropdownMenuButton").innerHTML = role;
    this.user.role.name = role;
}

function login(){

    if(user.role.name === 'Student'){
        window.location.href = "dashboard-student.html";
    } else {
        window.location.href = "dashboard-secretary.html";
    }

    // if(this.user.email.value === 'aaa@a.com' && this.user.password.value === 'aaa'){
    //     alert("login successful");
    // }

    // var xhr = new XMLHttpRequest();
    // xhr.open('POST', endpoint);
    // xhr.onreadystatechange = function () {
    //     if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    //         window.alert(xhr.responseText);
    //     }
    // };
    // xhr.send();
}
