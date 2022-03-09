<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<p>If you click on the "Hide" button, I will disappear.</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
<script>
    $(document).ready(function(){
        $("#hide").on('click',function(){
            $("p").hide();
        });
        $("#show").on('click',function(){
            $("p").show();
        });
    });
</script>
</body>
</html>
