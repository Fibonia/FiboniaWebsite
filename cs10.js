function MCQ(){

var count = 1;
var answer = "a".concat(count);
answer = "params.".concat(answer);
answer1 = answer.replace(/['"]+/g, '');

alert(eval(answer1));
document.getElementByID("testanswer").innerText = '<pl-answer correct="true">"{{params.solution}}"</pl-answer><pl-answer correct="false">"{{params.a1}}"</pl-answer>';
}