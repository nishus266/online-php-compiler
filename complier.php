<hmtl>
<head>
<title>compiler</title>
 <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
<style>
.body{
text-align:center;

}
.head{
float:left;
width:100%;
background-color:#333;
}
.logo{
float:left;
width:100px;
height:100px;
}
.content{
float:left;
width:100%;
background-color:#808080;
}
.editor{
float:left;
width:60%
}
.head1{
color:#FFFFFF;
margin-left:30px;
}
.text{
width:100%;
height:450px;
background-color:#000000;
color:#FFFFFF;
}
.output{
float:right;
width:40%;
}
</style>
</head>
<body>
<section class="head">
<img class="logo" src="images/praan.png">
<h3 class="head1">Php Online Compiler</h3>
</section>
<section class="content">
<div class="editor">
<h3 style="margin-left:30px;"> Enter You code here</h3>
<form action="comp.php" method="post">
<textarea id="text" class="text" name="text">
<?php
$g=fopen("main.txt","r");
while(!feof($g)) {
  echo fgets($g) ;
}
fclose($g);
?>
</textarea>
<input type="submit"  value="Run Code" style="width:100px;height:40px;margin-left:700px;">
</form>
</div>
<div class="output">
<h3>Your Output</h3>
<iframe id="ifr" src="main.php" height="200px" width="100%">
</iframe>
</div>
</section>
<script>
var v="<?php echo($file); ?>";
document.write(v);
</script>
</body>
</html>