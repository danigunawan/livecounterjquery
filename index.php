<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<script language="javascript" type="text/javascript">
var timeout = setInterval(checkUpdate, 2000);    


function checkUpdate()
{
    $.post("back.php", function(data, status)
    {
       if (data.toString()=="true")
       {
          playSound();
       }
    });
}

function playSound()
{
    var audio = new Audio('https://www.soundjay.com/phone/telephone-ring-03a.mp3');
    audio.play();
}
</script>
    
    
<script>
    $(document).ready(function(){
        setInterval(function(){
            $("#count").load('2.php')
        }, 2000);
    });
</script>

<style>

#count {
    font-family: 'Press Start 2P', cursive;
    font-size: 100px;
}

</style>

</head>
<body>
<div id="count"></div>
</body>
</html>