<?php include "_/components/php/db-config.php"; ?> 
<html>
<head>
 <title>Entries</title>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>  
  
<?php  
/**  
Display the results from the database  
**/  
$q = "SELECT * FROM entries";  
$r = mysql_query($q);  
  
if(mysql_num_rows($r)>0): //table is non-empty  
 while($row = mysql_fetch_assoc($r)):  
  $effective_vote = $row['votes_up'] - $row['votes_down']; //this is the effective result of voting up and voting down  
?>  
<div class='entry'>  
  
 <span class='link'>  
  <a href='<?php echo $row['link']; ?>'> <?php echo $row['title']; ?> </a>  
 </span>  
   
 <span class='votes_count' id='votes_count<?php echo $row['id']; ?>'><?php echo $effective_vote." votes"; ?></span>  
   
 <span class='vote_buttons' id='vote_buttons<?php echo $row['id']; ?>'>  
  <a href='javascript:;' class='vote_up' id='<?php echo $row['id']; ?>'>Vote Up</a>  
  <a href='javascript:;' class='vote_down' id='<?php echo $row['id']; ?>'>Vote Down</a>  
 </span>  
   
</div>  
<?php  
 endwhile;  
endif;  
?>  
<script type="text/javascript">
    $(function(){  
$("a.vote_up").click(function(){  
 //get the id  
 the_id = $(this).attr('id');  
   
 // show the spinner  
 $(this).parent().html("<img src='images/spinner.gif'/>");  
   
 //fadeout the vote-count   
 $("span#votes_count"+the_id).fadeOut("fast");  
   
 //the main ajax request  
  $.ajax({  
   type: "POST",  
   data: "action=vote_up&id="+$(this).attr("id"),  
   url: "votes.php",  
   success: function(msg)  
   {  
    $("span#votes_count"+the_id).html(msg);  
    //fadein the vote count  
    $("span#votes_count"+the_id).fadeIn();  
    //remove the spinner  
    $("span#vote_buttons"+the_id).remove();  
   }  
  });  
 });  
});

        $("a.vote_down").click(function(){  
     //get the id  
     the_id = $(this).attr('id');  
       
     // show the spinner  
     $(this).parent().html("<img src='images/spinner.gif'/>");  
       
     //the main ajax request  
      $.ajax({  
       type: "POST",  
       data: "action=vote_down&id="+$(this).attr("id"),  
       url: "votes.php",  
       success: function(msg)  
       {  
        $("span#votes_count"+the_id).fadeOut();  
        $("span#votes_count"+the_id).html(msg);  
        $("span#votes_count"+the_id).fadeIn();  
        $("span#vote_buttons"+the_id).remove();  
       }  
      });  
     });  
</script>
</body>  
</html>