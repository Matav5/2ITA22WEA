let target = document.createElement("div");
let score = -1;
let timeout = setTimeout(lose, 1500);
target.style.height = 50 + "px";
target.style.width = 50 + "px";
target.style.position = "absolute";
target.style.backgroundColor = "red";
target.style.borderRadius = 50+"%";
updatePosition();

target.onclick = updatePosition;

document.body.append(target);

function updatePosition(){
    target.style.top = Random(0,window.innerHeight) + "px";
    target.style.left = Random(0,window.innerWidth) + "px";
    score++;
    clearTimeout(timeout);
    timeout = setTimeout(lose, 1500);
}
function Random(min,max){
    return Math.random() * (max-min) + min;
}
function lose(){
    //Ukončení hry
   let nickname = prompt("Prohrál jste! Vaše finální skóre je: " + score 
   + "\n Vložte přezdívku:");
   document.getElementById("score").value = score;
   document.getElementById("nickname").value = nickname;
   document.getElementById("form").submit();
}
