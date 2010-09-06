<?php 
$title = "Editor and Player";
$description = "This sample shows an alphaTab instance with editor and player enabled.";
?> 
<script language="JavaScript" type="text/javascript">
var api = null;
$(document).ready(function() {
	api = $('div.alphaTab').alphaTab({
		editor:true,
		player: true,
		playerTickCallback: "onTickChanged" // !required!
	});
});

// !required!
function onTickChanged(tickPosition) { 
	api.updateCaret(tickPosition);
}
</script>
<div class="alphaTab">
\title "Metal Riff"
\tempo 148
. 
\ro (0.5 5.4).8 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 (5.3 5.4).8 (7.3 7.4).16 (7.3 7.4).16 (-.3 -.4).8 (0.3 0.4).8|
(5.3 5.4).8 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 7.4{h}.16 5.4.16 7.5.16 5.4.16 -.4.16 6.5{h}.16 7.5.8 |
(0.5 5.4).8 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 (5.3 5.4).8 (7.3 7.4).16 (7.3 7.4).16 (-.3 -.4).8 (0.3 0.4).8|
\rc 2 (5.3 5.4).8 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 0.5{pm}.16 6.5{h}.16 7.5.16 r.8 7.3{b(0 4)}.16 -.3.8</div>