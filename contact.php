<?php include('partials-front/menu.php'); ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: " (" attr(href) ")";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="../ep/images/cb.jpg" style="width:100%">
    </div>
    <div class="column">
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="phone">Contact</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="abc@xyz.com..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="india">India</option>
          <option value="bangladesh">Bangladesh</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        
        <input type="Submit" name="submit" class="btnSubmit btn-block" onclick="gotowhatsapp()" value="Submit">


      </form>
      
    </div>
  </div>
</div>


<script>
function gotowhatsapp() {
    
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var country = document.getElementById("country").value;
    var subject = document.getElementById("subject").value;

    var url = "https://wa.me/+8801681661317?text=" 
    + "Name: " + name + "%0a"
    + "Phone: " + phone + "%0a"
    + "Email: " + email  + "%0a"
    + "Country: " + country + "%0a" 
    + "Subject: " + subject + "%0a"

    window.open(url, '_blank').focus();
}
</script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function gotowhatsapp() {

            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;
            var country = document.getElementById("country").value;
            var subject = document.getElementById("subject").value;

            var url = "https://wa.me/+8801681661317?text="
                + "Name: " + name + "%0a"
                + "Phone: " + phone + "%0a"
                + "Email: " + email + "%0a"
                + "Country: " + country + "%0a"
                + "Subject: " + subject + "%0a"

            window.open(url, '_blank').focus();
        }
    </script>

<?php include('partials-front/footer.php'); ?>




