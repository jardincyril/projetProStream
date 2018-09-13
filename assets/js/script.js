//comment du parallax
// Or with jQuery

$(document).ready(function () {
    $('.parallax').parallax();
});
//dropdow
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
});
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

