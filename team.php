<?php
    define("TITLE", "Team | Franklin's Fine Dining");
    include('includes/header.php');

?>

<div id="team members" class="cf">
    <h1>Our Team at Franklin's</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div><!-- team members -->
<hr>
<?php
    foreach($teamMembers as $member){
?>
    <div class="member">
        <img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
        <h2><?php echo $member['name'];?></h2>
        <p><?php echo $member['bio'];?></p>
    </div>
<?php
    }
?>
<?php
include('includes/footer.php');
?>