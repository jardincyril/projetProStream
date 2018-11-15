//menuburger
$(".button-collapse").sideNav();
//dropdow
$('.dropdown-button').dropdown('open');
$('.dropdown-button').dropdown('close');
//select ajout personnage
$(document).ready(function () {
    $('select').material_select();
});
//textarea ajout video
$('#description').trigger('autoresize');
//textarea ajout personnage
$('#skill').trigger('autoresize');
$('#history').trigger('autoresize');
$('#opinion').trigger('autoresize');
// modal
$('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
    }
  );
//reglage du stream
var options = {
    width: 1280,
    height: 720,
    channel: "devilboy60"
};
var player = new Twitch.Player("SamplePlayerDivID", options);
player.setVolume(0.5);

