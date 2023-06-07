let jokeText = document.getElementById("text");

function Connetct() {
    $.ajax({

        type: "GET",
        url: "https://v2.jokeapi.dev/joke/Any",
        success: function(data) {
            console.log("Server is up");
        },
        error: function(error) {
            console.log("Server is down");
        }
    });
}

Connetct();