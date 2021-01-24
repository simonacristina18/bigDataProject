var user = {
    email: document.getElementById("exampleInputEmail"),
    password: document.getElementById("exampleInputPassword"),
    role : {
        name: ['Student', 'Secretary Employee']
    }
};

function selectRole(role){
    document.getElementById("dropdownMenuButton").innerHTML = role;
    this.user.role.name = role;
}

function login(){

    if(user.role.name === 'Student'){
        window.location.href = "dashboard-student.html";
    } else if(user.role.name === 'Secretary Employee') {
        window.location.href = "dashboard-secretary.html";
    }

    // if(this.user.email.value === 'aaa@a.com' && this.user.password.value === 'aaa'){
    //     alert("login successful");
    // }

    const http = new XMLHttpRequest();
    const url = 'https://';

    http.open("POST", url);
    http.send();

    http.onreadystatechange = function() {
        if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
            console.log(http.responseText)
        }
    }
}
