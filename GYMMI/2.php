<?php

?>
<html>
<head>
<script type="text/javascript">
function getTimeStamp() {
       var now = new Date();
       root=((now.getMonth() + 1) + '/' + (now.getDate()) + '/' + now.getFullYear() + " " + now.getHours() + ':'
                     + ((now.getMinutes() < 10) ? ("0" + now.getMinutes()) : (now.getMinutes())) + ':' + ((now.getSeconds() < 10) ? ("0" + now
                     .getSeconds()) : (now.getSeconds())));
                     return root;
}
function setTime() {
    document.getElementById('field').value = getTimeStamp();
}
</script>

</head>

<body onload="setTime()">

<input id="field" type="text" name="field" value="" size="11" />
<button type="button" onclick="setTime();">Get Time</button>

</body>
</html>
