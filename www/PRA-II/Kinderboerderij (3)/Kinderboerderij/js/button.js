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
    else if(open == 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9 || 10) {
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
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
    else if(open == 1 || 3 || 4 || 5 || 6 || 7 || 8 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
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
    else if(open == 1 || 2 || 4 || 5 || 6 || 7 || 8 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
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
    else if(open == 1 || 2 || 3 || 5 || 6 || 7 || 8 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
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
    else if(open == 1 || 2 || 3 || 4 || 6 || 7 || 8 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
        document.getElementById("info5").style.display = "block";
        open = 5
    }
    else {
        document.getElementById("info5").style.display = "block";
        open = 5
    }
}

function dier6() {
    if (document.getElementById("info6").style.display === "block") {
        document.getElementById("info6").style.display = "none";
        open = 0
    }
    else if(open == 1 || 2 || 3 || 4 || 5 || 7 || 8 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
        document.getElementById("info6").style.display = "block";
        open = 6
    }
    else {
        document.getElementById("info6").style.display = "block";
        open = 6
    }
}

function dier7() {
    if (document.getElementById("info7").style.display === "block") {
        document.getElementById("info7").style.display = "none";
        open = 0
    }
    else if(open == 1 || 2 || 3 || 4 || 5 || 6 || 8 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
        document.getElementById("info7").style.display = "block";
        open = 7
    }
    else {
        document.getElementById("info7").style.display = "block";
        open = 7
    }
}

function dier8() {
    if (document.getElementById("info8").style.display === "block") {
        document.getElementById("info8").style.display = "none";
        open = 0
    }
    else if(open == 1 || 2 || 3 || 4 || 5 || 6 || 7 || 9 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "none";
        document.getElementById("info8").style.display = "block";
        open = 8
    }
    else {
        document.getElementById("info8").style.display = "block";
        open = 8
    }
}

function dier9() {
    if (document.getElementById("info9").style.display === "block") {
        document.getElementById("info9").style.display = "none";
        open = 0
    }
    else if(open == 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 10) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info10").style.display = "none";
        document.getElementById("info9").style.display = "block";
        open = 9
    }
    else {
        document.getElementById("info9").style.display = "block";
        open = 9
    }
}

function dier10() {
    if (document.getElementById("info10").style.display === "block") {
        document.getElementById("info10").style.display = "none";
        open = 0
    }
    else if(open == 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9) {
        document.getElementById("info1").style.display = "none";
        document.getElementById("info2").style.display = "none";
        document.getElementById("info3").style.display = "none";
        document.getElementById("info4").style.display = "none";
        document.getElementById("info5").style.display = "none";
        document.getElementById("info6").style.display = "none";
        document.getElementById("info7").style.display = "none";
        document.getElementById("info8").style.display = "none";
        document.getElementById("info9").style.display = "none";
        document.getElementById("info10").style.display = "block";
        open = 10
    }
    else {
        document.getElementById("info10").style.display = "block";
        open = 10
    }
}

// function dier() {
//     if (document.getElementById("info5").style.display === "block") {
//         document.getElementById("info5").style.display = "none";
//         open = 0
//     }
//     else if(open == 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9 || 10) {
//         document.getElementById("info1").style.display = "none";
//         document.getElementById("info2").style.display = "none";
//         document.getElementById("info3").style.display = "none";
//         document.getElementById("info4").style.display = "none";
//         document.getElementById("info5").style.display = "none";
//         document.getElementById("info6").style.display = "none";
//         document.getElementById("info7").style.display = "none";
//         document.getElementById("info8").style.display = "none";
//         document.getElementById("info9").style.display = "none";
//         document.getElementById("info10").style.display = "none";
//         document.getElementById("info").style.display = "block";
//         open = 
//     }
//     else {
//         document.getElementById("info").style.display = "block";
//         open = 
//     }
// }