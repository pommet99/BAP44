var question = document.getElementsByClassName("titreQuestion");
var i;

for (i = 0; i < question.length; i++) {
    question[i].addEventListener("click", function() {

        var reponseQuestion = this.nextElementSibling;
        if (reponseQuestion.style.display === "block") {
            reponseQuestion.style.display = "none";
        } else {
            reponseQuestion.style.display = "block";
        }
    });
}