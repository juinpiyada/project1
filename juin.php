<?php include("header.php"); ?>
<html>
<head>
    <title>Addition Page</title>
    <script>
        function add() {
            var a, b, c;
            a = parseInt(document.getElementById("j1").value);
            b = parseInt(document.getElementById("j2").value);
            c = a + b;
            alert("The Addition Of Two Numbers: " + c);
        }
    </script>
</head>
<body>
    <form>
        Enter The No:<input type="text" id="j1"><br>
        Enter The No:<input type="text" id="j2"><br>
        <input type="button" value="add" onclick="add()"><br>
    </form>
</body>
</html>
<?php include("footer.php"); ?>
