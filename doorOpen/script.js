$(document).ready(function() {
	var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'audio.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
        //audioElement.load()

        $.get();

        audioElement.addEventListener("load", function() {
            audioElement.play();
        }, true);

        $("#cupboard").on("touchstart", function(e) {
            audioElement.play();
        });

        $("body").on("touchend", function(e) {
            audioElement.pause();
        });



$("#cupboard").on("touchstart", function(e) { 
  $(this).addClass("hover");
  e.preventDefault();
});

$("body").on("touchend", function(e) {
  $("#cupboard").removeClass("hover");
});

});