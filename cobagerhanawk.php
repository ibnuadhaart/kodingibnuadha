<!DOCTYPE html>
<html>
<head>
	<title>gerhanaibnu</title>
<b:skin>
                  <![CDATA[
                  /****CSS CODE*****/
                  * {
  box-sizing: border-box;
}

body {
  background: #2f3640;
  overflow: hidden;
}

#star {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 250px;
  height: 250px;
  margin-left: -125px;
  margin-top: -125px;
  border-radius: 50%;
  background: #fbc531;
  box-shadow: 0 0 50px #e1b12c;
}

#planet {
  position: absolute;
  left: 10px;
  top: 1px;
  width: 250px;
  height: 250px;
  border-radius: 50%;
  background: #2f3640;
  box-shadow: inset 0 0 50px rgba(150, 150, 150, 0);
  animation: eclipse 10s infinite linear;
  transform-origin: 50% 150%;
  transform: rotate(-60deg);
}

@-moz-keyframes eclipse {
  0% {
    transform: rotate(-60deg);
  }
  90% {
    transform: rotate(30deg);
  }
  100% {
    transform: rotate(300deg);
  }
}
@-webkit-keyframes eclipse {
  0% {
    transform: rotate(-60deg);
  }
  90% {
    transform: rotate(30deg);
  }
  100% {
    transform: rotate(300deg);
  }
}

                  ]]>
                  </b:skin>

</head>
<div id="star">
	<div id="planet">
  </div>
</div>
<body>

</body>
</html>