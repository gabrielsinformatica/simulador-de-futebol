let jogo = document.querySelector("#submit");

jogo.addEventListener("click", function(){

    var time1 = document.querySelector("#time1").value;
    var time2 = document.querySelector("#time2").value;

    console.log(time1, time2);

    var gol1 = Math.floor(Math.random() * 11);
    var gol2 = Math.floor(Math.random() * 11);

    console.log(gol1, gol2);

    if(time1 === "" || time2 === "") {
        alert("Preencha os campos corretamente!")
        document.querySelector("#placar").innerHTML = ``;
        document.querySelector("#result").innerHTML = ``;
        document.querySelector("#time1").value = ``;
        document.querySelector("#time2").value = ``;
    } else if (gol1 > gol2) {
        document.querySelector("#placar").innerHTML = `${time1} ${gol1} x ${gol2} ${time2}`;
        document.querySelector("#result").innerHTML = `${time1} ganhou!`;
        document.querySelector("#time1").value = ``;
        document.querySelector("#time2").value = ``;
    } else if (gol1 < gol2) {
        document.querySelector("#placar").innerHTML = `${time1} ${gol1} x ${gol2} ${time2}`;
        document.querySelector("#result").innerHTML = `${time2} ganhou!`;
        document.querySelector("#time1").value = ``;
        document.querySelector("#time2").value = ``;
    } else {
        document.querySelector("#placar").innerHTML = `${time1} ${gol1} x ${gol2} ${time2}`;
        document.querySelector("#result").innerHTML = `Empate!`;
        document.querySelector("#time1").value = ``;
        document.querySelector("#time2").value = ``;
    }
});