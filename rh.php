<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<head>
  <meta charset="UTF-8">
  <title>RH Interface</title>
</head>
<body>


<?php
$db=mysqli_connect("localhost","root","","test");
$req= "select * from webp;";
$res= mysqli_query($db,$req);
 ?>
<table style="width:100%">
  <thead>

  <tr>


    <th colspan="4">ID</th>
    <th colspan="4">Fname</th>
    <th colspan="4">CIN</th>
    <th colspan="4">birthday</th>
    <th colspan="4">email</th>
    <th colspan="4">Domaine</th>
    <th colspan="4">number</th>
    <th colspan="4">niveau FR</th>
    <th colspan="4">niveau ENG</th>
    <th colspan="4">poste 1</th>
    <th colspan="4">societe 1</th>
    <th colspan="4">date d'entrée 1</th>
    <th colspan="4">date de sortie 1</th>
    <th colspan="4">poste 2</th>
    <th colspan="4">societe 2</th>
    <th colspan="4">date d'entrée 2</th>
    <th colspan="4">date de sortie 2</th>
    <th colspan="4">poste 3</th>
    <th colspan="4">societe 3</th>
    <th colspan="4">date d'entrée 3</th>
    <th colspan="4">date de sortie 3</th>

  </tr>
  </thead>

  <tbody>
  <?php while($ligne = mysqli_fetch_array($res)){ ?>
  <tr>
    <td colspan="4"><?php echo $ligne['id']; ?></td>
    <td colspan="4"><?php echo $ligne['Fname']; ?></td>
    <td colspan="4"><?php echo $ligne['CIN']; ?></td>
    <td colspan="4"><?php echo $ligne['dateB']; ?></td>
    <td colspan="4"><?php echo $ligne['email']; ?></td>
    <td colspan="4"><?php echo $ligne['Domaine']; ?></td>
    <td colspan="4"><?php echo $ligne['number']; ?></td>
    <td colspan="4"><?php echo $ligne['nivF']; ?></td>
    <td colspan="4"><?php echo $ligne['nivE']; ?></td>
    <td colspan="4"><?php echo $ligne['poste1']; ?></td>
    <td colspan="4"><?php echo $ligne['societe1']; ?></td>
    <td colspan="4"><?php echo $ligne['dateE1']; ?></td>
    <td colspan="4"><?php echo $ligne['dateS1']; ?></td>
    <td colspan="4"><?php echo $ligne['poste2']; ?></td>
    <td colspan="4"><?php echo $ligne['societe2']; ?></td>
    <td colspan="4"><?php echo $ligne['dateE2']; ?></td>
    <td colspan="4"><?php echo $ligne['dateS2']; ?></td>
    <td colspan="4"><?php echo $ligne['poste3']; ?></td>
    <td colspan="4"><?php echo $ligne['societe3']; ?></td>
    <td colspan="4"><?php echo $ligne['dateE3']; ?></td>
    <td colspan="4"><?php echo $ligne['dateS3']; ?></td>
  </tr>
  <?php } ?>
  <table style="width:100%">
    <thead>

    <tr>


      <th colspan="2">Email</th>
      <th colspan="4">Reply</th>


    </tr>
    </thead>
    <tbody>
<form action="reply.php" method="post">
    <tr>
      <td colspan="2" ><input type="text" name="A_mail" placeholder="email" ></td>
      <td colspan="14">

        <div class="clearfix">

          <label for="yes"  class="radio-inline"
          ><input
            type="radio"
            name="answer"
            value="yes"
            id="yes"

          />yes</label
          >
          <label for="no" class="radio-inline"
          class="clearfix"><input
            type="radio"
            name="answer"
            value="no"
            id="no"

          />no</label
          >


        </div>

      </td>


    </tr>
</form>

    </tr>


    </tbody>
  </table>
  <button type="submit" href="/">Submit</button>

  </tbody>
</table>

</body>
<a href="logout.php">Logout</a>
</html>
