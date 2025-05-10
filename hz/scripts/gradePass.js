/*Function for Dashboard, calculates ECs and determines if they're above NSBA*/

/*function to determine wether a grade is passing*/
function gradePass() {
    /*minimum grade to pass*/
    let treshold = 5.4;

    /*nbsa treshold*/
    let nbsaTreshold = 44;

    /* says gradeList means to select all variables under class 'grade'*/
    let gradeList = document.querySelectorAll(".grade"); // returns NodeList
    let gradeArray = [...gradeList]; // converts NodeList to Array

    /* says ecList means to select all variables under class 'ec'*/
    let ecList = document.querySelectorAll(".ec");
    let ecArray = [...ecList];

    /*Defines standard total EC as 0 (which it is)*/
    let totalECs = 0;

    /*takes each single element within the grade array*/
    gradeArray.forEach((gradeElement, index) => {
        /*takes the first value it finds within the gradelist, then the next*/
        let gradeValue = parseFloat(gradeElement.innerText);

        /*compares each gotten grade to the treshold number*/
        if (gradeValue > treshold) {
            /* takes the ec value in the same row and adds it to the totalec value */
            let ecValue = parseFloat(ecArray[index].innerText);
            totalECs += ecValue;
            /* compares new totalECs value to nbsaTreshold to determine if it's passed 44 yet. if yes, changes text to "passed"*/
            if (totalECs > nbsaTreshold) {
                let passed = document.getElementsByClassName("nbsa")[0];
                passed.innerText = "Passed";
            }
        }
    });

    /*displays the calculated total ec value within the defined <p> of totalECs*/
    document.getElementById("totalECs").innerHTML = `${totalECs}`;
}
