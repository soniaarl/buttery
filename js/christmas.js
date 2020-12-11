jQuery(document).ready(function($) {
    $("#box").click(function(){
        // Control pop up/box opening
        $("#box").toggleClass("popup");
        $("#animals").toggleClass("popup");
        $("#container").toggleClass("popup");
        $(".page-id-186").toggleClass("popup");

        // Control audio
        let music = document.getElementById("music");
        music.volume = 0.2;

        $("#music").toggleClass("play");
        if($("#music").hasClass("play")){
            music.play();
        }else{
            music.currentTime = 0;
            music.pause();
        }
    });
    $("#view-card").click(function(){
        $("#card").addClass("popup")
    })
    $("#close").click(function(){
        $("#card").removeClass("popup");
    });
});
