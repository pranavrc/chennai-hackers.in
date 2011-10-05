<!DOCTYPE html>
<html>
  <head>
    <title>#chennai-hackers</title>
    <style type="text/css">
      body {
      background-image:url("chbg.png");
      padding: 0;
      margin: 0;
      color: #222;
      font-family: Verdana;
      }
      a {
      color: inherit;
      text-decoration: none;
      }
      .container {
      width: 940px;
      margin: 0 auto;
      padding: 0 10px;
      }
      .header {
      text-align: center;
      font-size: 50px;
      text-shadow: #444 2px 2px 2px;
      border-bottom: medium dashed #999;
      }
      .header p {
      margin: 20px 0px;
      }
      .content {
      padding: 10px;
      }
      .footer {
      text-align: center;
      font-size: 13px;
      border-top: medium dashed #999;
      }
      .person {
      width: 280px;
      height: 125px;
      padding: 10px;
      padding-top: 30px;
      }
      .person-meta {
      width: 155px;
      float: right;
      }
      .dp {
      background-image: url("dpbg.png");
      padding: 7px;
      width: 108px;
      height: 108px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      float: left;
      }
      .person-name {
      font-size: 20px;
      text-align: center;
      }
      .person-name p {
      margin: 6px 0;
      }
      .person-desc {
      font-size: 12px;
      text-align: center;
      }
      .person-desc p {
      margin: 6px 0;
      }
      .person-sep {
      height: 10px;
      width: 40px;
      clear: both;
      padding: 0 130px;
      border-bottom: thin dashed #999;
      }
      .col1, .col2, .col3 {
      width: 300px;
      float: left;
      padding-bottom: 10px;
      }
      .clear {
      clear: both;
      }
      .col1, .col2 {
      border-right: thin dashed #999;
      }
    </style>
  </head>
<?php
function readData() {
  // read data
  $file = "data.json" or die("Couldn't open the file `data.json`");
  $fh = fopen($file, "r") or die("Couldn't open the file `data.json`");
  $data = fread($fh, filesize($file)) or die("Couldn't open the file `data.json`");
  fclose($fh);

  //parse data
  $jsondata = json_decode($data, true);
  //var_dump($jsondata);
  return $jsondata;
}
function getProfileBatch($handle) {
  shuffle($handle["desc"]);
  shuffle($handle["avatar"]);
  $desc = array_pop($handle["desc"]);
  $avatar = array_pop($handle["avatar"]);
  if (!$avatar) {
    $avatar = "avatars/default.jpg";
  }
  ?>
<div class="person">
  <a href="<?php echo $handle["profileurl"]; ?>"><div class="dp">
      <img src="<?php echo $avatar; ?>"/>
    </div>
    <div class="person-meta">
      <div class="person-name">
	<p><?php echo $handle["screenname"];; ?></p>
      </div>
      <div class="person-desc">
	<p><?php echo $desc; ?></p>
      </div>
    </div>
    <div class="person-sep">
  </div></a>
</div> <!-- person div ends -->
<?php
}
?>
  <body>
    <div class="container">
      <div class="header">
	<p>#chennai-hackers</p>
      </div>
      <div class="content">
  <?php
  $jsondata = readData();
$numprofile = sizeof($jsondata);
$quotent = (int) ($numprofile/3);
$remainder = $numprofile%3;
$col1 = $col2 = $col3 = $quotent;
if ($remainder > 0) {
  $col1 += 1;
}
if ($remainder > 1) {
  $col2 += 1;
}
shuffle($jsondata);
for ($col=1; $col<=3; $col++) {
  if ($col == 1) {
    $collen = $col1;
  } else if ($col == 2) {
    $collen = $col2;
  } else if ($col == 3) {
    $collen = $col3;
  }
		      ?>
    <div class="col<?php echo $col?>">
      <?php
     for ($i=0; $i<$collen; $i++) {
       getProfileBatch(array_pop($jsondata));
     }
  if ($collen == 0) {
    echo "&nbsp";
  }
			    ?>
	 </div>
	 <?php } ?>
	 <div class="clear">
	   &nbsp;
	 </div>
      </div>
      <div class="footer">
	<p>we are #chennai-hackers on irc.freenode.net</p>
      </div>
    </div>
  </body>
</html>
