function pvalid() {
    let title = document.forms["pform"]["title"].value;
    let pdesc = document.forms["pform"]["pdesc"].value;
    

    if (title == "") {
        document.getElementById('msg1').innerHTML = "Subject Required";
        return false;
    } else if (pdesc == "") {
        document.getElementById('msg2').innerHTML = "Details Required";
        return false;
    } 
} 
//else {
       // return true;
    //}



function ovalid() {
    let pp = document.forms["onform"]["pp"].value;
    let fname = document.forms["onform"]["fname"].value;
    let bio = document.forms["onform"]["bio"].value;

    if (pp == "") {
        document.getElementById('msg1').innerHTML = "Profile Picture Required";
        return false;
    } else if (fname == "") {
        document.getElementById('msg2').innerHTML = "Full Name Required";
        return false;
    } else if (bio == "") {
        document.getElementById('msg3').innerHTML = "Bio Required";
        return false;
    } else {
        return true;
    }
}

function lvalid() {
    let username = document.forms["loginform"]["username"].value;
    let password = document.forms["loginform"]["password"].value;

    if (username == "") {
        alert("username cannot be empty");
        
        return false;
    } else if (password == "") {
        alert("password cannot be empty");
        
        return false;
    } else {
        return true;
    }
}

/*function prvalid() {
    let pp = document.forms["predit"]["pp"].value;
    let fname = document.forms["predit"]["fname"].value;
    let bio = document.forms["predit"]["bio"].value;

    if (pp == "") {
        document.getElementById('msg1').innerHTML = "Profile Picture Required";
        return false;
    } else if (fname == "") {
        document.getElementById('msg2').innerHTML = "Full Name Required";
        return false;
    } else if (bio == "") {
        document.getElementById('msg3').innerHTML = "Bio Required";
        return false;
    } else {
        return true;
    }
}*/

function evalid() {
    let title = document.forms["epform"]["title"].value;
    let pdesc = document.forms["epform"]["pdesc"].value;
    let charge = document.forms["epform"]["charge"].value;

    if (title == "") {
        document.getElementById('msg1').innerHTML = "Service Title Required";
        return false;
    } else if (pdesc == "") {
        document.getElementById('msg2').innerHTML = "Service Description Required";
        return false;
    } else if (charge == "") {
        document.getElementById('msg3').innerHTML = "Rate Required";
        return false;
    } else {
        return true;
    }
}

function typing() {
    document.getElementById('msg1').innerHTML = "";
    document.getElementById('msg2').innerHTML = "";
    document.getElementById('msg3').innerHTML = "";
}







function ajax() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/profileupdatedata.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('update').innerHTML = this.responseText;
        }
    }
}

function ajaxx() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/profiledetails.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('profiledetails').innerHTML = this.responseText;
        }
    }
}

function ajaxxx() {
    let username = document.getElementById('username').value;
    let http = new XMLHttpRequest();
    http.open('POST', '../controllers/postdata.php', true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send('username=' + username);
    http.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('posts').innerHTML = this.responseText;
        }
    }
}


