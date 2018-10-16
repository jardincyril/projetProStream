//comment du parallax
// Or with jQuery

$(document).ready(function () {
    $('.parallax').parallax();
});
//menuburger
$(".button-collapse").sideNav();
//dropdow
$('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: false, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false // Stops event propagation
});
$('.dropdown-button').dropdown('open');
$('.dropdown-button').dropdown('close');
//
//function () {}
//function () {
//    t.state.isSubmitInTransit || t.state.currentStep === Dt.a.StartSignup || (te({
//        tab: N.Signup
//    }), t.startSignup())
//}

//reglage du stream
var options = {
    width: 854,
    height: 480,
    channel: "devilboy60"
};
var player = new Twitch.Player("SamplePlayerDivID", options);
player.setVolume(0.5);

