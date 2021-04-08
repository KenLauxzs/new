<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <ul id="nav">
        <li><a href="#Wc">Home</a></li>
        <li><a href="#Project">Projects</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Visitor">Visitor</a></li>
        <li><a href="#Contact">Contact</a></li>
        <li><a href="#" id="night">Night</a></li>
      </ul>
<div id="Wc">
  <h2>Hey, I'm Ken</h2>
</div>

<div id="Project">
  <h1>Projects</h1><br>
  <h5>(Currently not have.)</h5>
</div>
<div id="Visitor" class="visitor">
  <h1>Visitor</h1>
  <table id="table" border="1" width="100%" bgcolor="grey" align="center">
    <tr> 
      <th width="50%">Name</th>
      <th width="50%">Time</th>
    </tr>
    <tr>
      <td><?php echo ($_GET['name']);?></td>
      <td><?php echo date("h:i:s a")?></td>
    </tr>
  </table>
</div>
<div id="About" class="about">
  <img src="image.png" height="170px" width="159px"><br>
  <p id="text">I'm <em><b>Ken Bryan Dipa</b></em>, a self thought future developer devoted to building quality and user friendly websites.</p>  
</div>
<div id="Contact" class="footer">
 <div class="send">
  <h3>Send Email</h3>
  <form action="" method="post">
    <span>Name: </span><input type="text" name="name"><br><br>
    <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><textarea placeholder="message..." rows="5" cols="30" maxlength="70" style=" resize: vertical;"></textarea><br>
    <input type="submit" value="submit" style="margin-left: 45px;">
</form>
 </div>
</div>
<script type="text/javascript">
    document.getElementById("night").addEventListener("click", function(){
    document.getElementById('Wc').style.color="white";
    document.getElementById('Wc').style.borderBottomColor="white";
    document.getElementById('Project').style.color="white";
    document.getElementById('Project').style.borderBottomColor="white";
    document.getElementById('Visitor').style.color="white";
    document.getElementById('Visitor').style.borderBottomColor="white";
    document.getElementById('Contact').style.color="white";
    document.getElementById('Contact').style.borderBottomColor="white";
    document.getElementById('text').style.color="white";
    document.getElementById('About').style.borderBottomColor="white";
    document.getElementById('nav').style.backgroundColor="#282828";
    document.body.style.backgroundColor="black";
  })
</script>
</body>
</html>
