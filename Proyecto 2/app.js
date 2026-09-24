var Alert = new CustomAlert();

function CustomAlert() {

    this.render = function(dialog) {

        var winW = window.innerWidth;
        var winH = window.innerHeight;

        var dialogbox = document.getElementById("popUpBox");

        dialogbox.style.display = "block";

        dialogbox.style.top = "50%";
        dialogbox.style.left = "50%";
    };

    this.ok = function() {

        document.getElementById("popUpBox").style.display = "none";

        window.location.href = "index.php";
    };
}