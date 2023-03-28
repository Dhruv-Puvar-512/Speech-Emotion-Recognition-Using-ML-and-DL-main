var emotion = window.prompt("what is mood right now?");

document.getElementById(emotion.toLowerCase()).style.filter ="invert(1)";

document.getElementById("wrt").innerHTML = " I THINK YOU ARE " + emotion.toUpperCase();
