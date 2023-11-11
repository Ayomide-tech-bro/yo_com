
<?php 
session_start();
$msg = null;
// the button subbmits successfilly to the server
if (isset($_POST['login'])) {

$my_conn = mysqli_connect('localhost','root','','ecom_db'); 

$email = mysqli_real_escape_string($my_conn, $_POST['email_addr']);
$password = mysqli_real_escape_string($my_conn,$_POST['password']);
$query = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($my_conn , $query);
$row = mysqli_fetch_assoc($result);

    if ( !is_array($row) ){
        $msg = "User does not exist";
    } else if ($row["email"] == $email) {
        if ($row["password"] == $password) {
             $_SESSION['user_id'] = $row['id'];
             $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['usr_type'] = $row['usr_type'];

            header("location: index.php");



        }else {
            $msg = "incorrect password or email";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <title>E-commerce</title>
</head>
<body>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color: indigo;
      margin-top: 100px; 
    }
    </style>

<!-- 
    <canvas id="rainbow"></canvas>
<style>
    body {
  background: #13142b;
}

canvas {
  opacity: -6;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style> -->
<!-- 
<script>
    // VARS
const DPR = window.devicePixelRatio
const colors = [
  ['#EC008C', '#f957b6'],
  ['#EF4136', '#ff7972'],
  ['yellow', '#fff'],
  ['lime', '#7aff7a'],
  ['#27AAE1', '#5ec8f2'],
  ["#662D91", '#a158d8']
]
const tau = Math.PI * 2
const start = Math.PI // Start position
const finish = .5 // Finish (in % of circle "tau" basically ending at Math.PI * 2)
const inc = .007
const rainbowHeight = .5 // of view height
const arcStagger = .05 // in %
const sparklesInPerStripe = 3

let sparkles = []
let radius

// UTILS
const clamp = (min, max, val) => {
  return Math.min(Math.max(min, val), max)
}
const boolRandom = () => {
  return Math.round(Math.random()) ? false : true
}

// CANVAS
const sizeCanvas = () => {
  radius = clamp(15, 50, window.innerWidth / 60 / DPR)
  const canvas = document.getElementById('rainbow')
  canvas.width = window.innerWidth * DPR
  canvas.height = window.innerHeight * DPR
}

// SPARKLE PROPS
const addRandom = function (lineWidth) {
  return (boolRandom() ? -1 : 1) * Math.random() * lineWidth
}
const makeSparkle = ({cx, cy, radiusX, radiusY, endAngle, lineWidth, color}) => {
  return {
    x: cx + radiusX * Math.cos(endAngle) + addRandom(lineWidth), // stay out in front
    y: cy + radiusY * Math.sin(endAngle) + addRandom(lineWidth), 
    opacity: 1, 
    color, 
    rad: Math.max(radius * Math.random() * DPR, 15)
  }
}

// ANIMATE
function animate(percent = 0) {
  const doneAnimatingIn = percent >= finish + arcStagger * colors.length // animating in rainbow arcs
  
  let width = window.innerWidth * DPR
  let height = window.innerHeight * DPR
  
  const lineWidth = height * .5 / colors.length
  
  const cx = width / 2
  const startCy = height + lineWidth * rainbowHeight + (height - colors.length * lineWidth) / 3 // Possibly simplify this... but the math is good :) 
  
  const startRadiusX = width / 2 + colors.length * lineWidth * 2
  const startRadiusY = height

  let ctx = document.getElementById('rainbow').getContext('2d')
  ctx.clearRect(0, 0, width, height);  
  ctx.globalAlpha = 1;
  ctx.lineWidth = lineWidth
  
  for (let i = colors.length - 1; i > -1; i--) {
    const [colorLine, colorSparkle] = colors[i]
    
    const cy = startCy + i * (lineWidth / 2 - 1) // - 1 for overlap
    
    // Making these "concentric" ellipses
    const radiusX = startRadiusX - i * lineWidth / 2
    const radiusY = startRadiusY - i * lineWidth / 2
    
    const endAngle = tau * (percent - i * arcStagger) + start
    
    const angle = clamp(start, tau * finish + start, endAngle)
    
    // DRAW ONE OF OUR ELLIPSE LINES
    // - One color of our rainbow
    ctx.beginPath()
    ctx.strokeStyle = colorLine
    ctx.ellipse(
      cx,
      cy,
      radiusX,
      radiusY,
      0,
      start,
      angle,
      false
    )
    ctx.lineCap = "round"
    ctx.stroke()
    ctx.closePath()    
    
    
    if (!doneAnimatingIn) { 
      // ADD: Animating in sparkles, follow the start of each color
      for (let j = 0; j < sparklesInPerStripe; j++) {
        sparkles.push(
          makeSparkle({cx, cy, radiusX, radiusY, endAngle: angle, lineWidth, color: colorLine})
        )
      }
    } else {
      // ADD: Normal sparkles after animating in
      sparkles.push(makeSparkle({cx, cy, radiusX, radiusY, endAngle: Math.random() * Math.PI + Math.PI, lineWidth, color: boolRandom() ? '#fff' : colorSparkle}))
    }
  }
  
  // PAINT THE SPARKLES
  // and get next sparkles ready too
  const nextSparkles = []
  for (let i = 0, len = sparkles.length; i < len; i++) {
    const {x, y, opacity, color, rad} = sparkles[i]
    ctx.beginPath()
    ctx.globalAlpha = opacity;
    ctx.fillStyle = color
    ctx.arc(x - rad, y - rad, rad, 0, Math.PI / 2);
    ctx.arc(x - rad, y + rad, rad, 3 * Math.PI / 2, 2 * Math.PI);
    ctx.arc(x + rad, y + rad, rad, Math.PI, 3 * Math.PI / 2);
    ctx.arc(x + rad, y - rad, rad, Math.PI / 2, Math.PI);
    ctx.fill()
    
    // Sparkles we are keeping
    if (opacity > .2 && rad > .2) {
      nextSparkles.push({
        x,
        y,
        opacity: opacity - .03,
        rad: rad - .2,
        color
      })
    }
  }
  sparkles = nextSparkles
  
  if (!doneAnimatingIn) {
    // Animating in our rainbow
    requestAnimationFrame(function () {
      animate(percent + inc)
    })
  } else {
    // Resume sparkles on static rainbow
    requestAnimationFrame(function () {
      animate(finish + colors.length * arcStagger)
    })
  }
}

sizeCanvas()
requestAnimationFrame(function () {animate()})
window.addEventListener('resize', sizeCanvas)
</script> -->

  
<div class="col-5 mx-auto bg-light mt-5 p-1 rounded">
<form action="" method="POST" class="mb-0">

    
    <table class="table mb-0">

    <h5 class="text-center p-3 bg-info rounded text-white">E-commerce</h5>  

<?php
if (!$msg == '') { echo "<div class = 'alert alert-warning'>" . $msg . "</div>"; }
?>
    <!-- <p class="mb-1 text-center">Fill in the fields below to login</p> -->
    <p class="mb-1 text-center"><a href="register.php">Sign up</a> if you dont have an account
</p>

        <tr>
        <td><label for="" class="form-label">Email</label></td>
        <td><input type="email" name="email_addr" class="form-control" required></td>
        </tr>

        <tr>
        <td><label for="" class="form-label">Password</label></td>

        <td><input type="password" id="password" name="password" class="form-control" required></td>
        <td><input type="checkbox" id="showpwd">Show password</td>
        </tr>

        <tr>

        <td><button class="btn btn-dark w-100" type="clear">Clear</button></td>

        <td><button class="btn btn-success w-100" type="submit" name="login">Submit</button></td>

        </tr>

        </table>


</form>
</div>


<script>
  const passwordinput = document.getElementById("password");
  const ShowPasswordCheckbox = document.getElementById("showpwd");
  ShowPasswordCheckbox.addEventListener("change",function()
  {
    if(ShowPasswordCheckbox.checked){
      passwordinput.type ="text"
    } else {
      passwordinput.type = "password";
    }
  })
</script>

</body>
</html>