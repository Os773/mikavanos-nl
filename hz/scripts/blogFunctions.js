const blogText = document.getElementById('blog-text');

function finalAssessment(){
    blogText.innerHTML = "../blogs/final_assessment.txt";
}

document.addEventListener("load", finalAssessment);