<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

<script>

window.onload = function(){

$.get("fighter.json", function(data){
    console.log(data);
    console.log(data["guerrier_1"]["nom","Pseudo","Xp"]);
    });

}

</script>

</body>

</html>