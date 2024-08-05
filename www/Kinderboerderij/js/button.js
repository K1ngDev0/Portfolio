function goToInformation() {
    document.getElementById("information").scrollIntoView({behavior: 'smooth'});
}

function goToLocation() {
    document.getElementById("locatie").scrollIntoView({behavior: 'smooth'});
}

function goToTasks() {
    document.getElementById("taken").scrollIntoView({behavior: 'smooth'});
}


let open = 0

function dier1() {
    if (document.getElementById("info1").style.display === "block") {
        document.getElementById("info1").style.display = "none";
        open = 0
    }
    else if(open == 2) {
        document.getElementById("info2").style.display = "none";
        document.getElementById("info1").style.display = "block";
        open = 1
    }
    else if(open == 3) {
        document.getElementById("info3").style.display = "none";
        document.getElementById("info1").style.display = "block";
        open = 1
    }
    else if(open == 4) {
        document.getElementById("info4").style.display = "none";
        document.getElementById("info1").style.display = "block";
        open = 1
    }
    else if(open == 5) {
        document.getElementById("info5").style.display = "none";
        document.getElementById("info1").style.display = "block";
        open = 1
    }
    else {
        document.getElementById("info1").style.display = "block";
        open = 1
    }
}

function dier2() {
    if (document.getElementById("info2").style.display === "block") {
        document.getElementById("info2").style.display = "none";
        open = 0
    }
    else if(open == 1) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "block";
        open = 2
    }
    else if(open == 3) {
        document.getElementById("info3").style.display = "none";
        document.getElementById("info2").style.display = "block";
        open = 2
    }
    else if(open == 4) {
        document.getElementById("info4").style.display = "none";
        document.getElementById("info2").style.display = "block";
        open = 2
    }
    else if(open == 5) {
        document.getElementById("info5").style.display = "none";
        document.getElementById("info2").style.display = "block";
        open = 2
    }
    else {
        document.getElementById("info2").style.display = "block";
        open = 2
    }
}

function dier3() {
    if (document.getElementById("info3").style.display === "block") {
        document.getElementById("info3").style.display = "none";
        open = 0
    }
    else if(open == 1) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info3").style.display = "block";
        open = 3
    }
    else if(open == 2) {
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "block";
        open = 3
    }
    else if(open == 4) {
        document.getElementById("info4").style.display = "none";
        document.getElementById("info3").style.display = "block";
        open = 3
    }
    else if(open == 5) {
        document.getElementById("info5").style.display = "none";
        document.getElementById("info3").style.display = "block";
        open = 3
    }
    else {
        document.getElementById("info3").style.display = "block";
        open = 3
    }
}

function dier4() {
    if (document.getElementById("info4").style.display === "block") {
        document.getElementById("info4").style.display = "none";
        open = 0
    }
    else if(open == 1) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info4").style.display = "block";
        open = 4
    }
    else if(open == 2) {
        document.getElementById("info2").style.display = "none";
        document.getElementById("info4").style.display = "block";
        open = 4
    }
    else if(open == 3) {
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "block";
        open = 4
    }
    else if(open == 5) {
        document.getElementById("info5").style.display = "none";
        document.getElementById("info4").style.display = "block";
        open = 4
    }
    else {
        document.getElementById("info4").style.display = "block";
        open = 4
    }
}

function dier5() {
    if (document.getElementById("info5").style.display === "block") {
        document.getElementById("info5").style.display = "none";
        open = 0
    }
    else if(open == 1) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info5").style.display = "block";
        open = 5
    }
    else if(open == 2) {
        document.getElementById("info2").style.display = "none";
        document.getElementById("info5").style.display = "block";
        open = 5
    }
    else if(open == 3) {
        document.getElementById("info3").style.display = "none";
        document.getElementById("info5").style.display = "block";
        open = 5
    }
    else if(open == 4) {
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "block";
        open = 5
    }
    else {
        document.getElementById("info5").style.display = "block";
        open = 5
    }
}
