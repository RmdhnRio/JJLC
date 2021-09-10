<?php
get_header();

$settings = pods('landing');
$s1_background = $settings->field( 's1_background' );
?>
<!-- Slides -->
<div id="carousel-example-generic" class="carousel slide carousel-fade " data-ride="carousel">
    <div class="carousel-inner " role="listbox">

		<?php foreach($s1_background as $index=>$row): ?>
        <div class="item <?php if($index==0){ echo "active"; }?>">
            <img src="<?php echo $row['guid']; ?>" alt="<?php echo $row['post_title'];?>">
        </div>
        <?php endforeach; ?>

    </div>
</div>

<!-- Slide Fix Caption -->
<?php
$post_7 = get_post( 49 ); 
$title = $post_7->post_content;
echo $title;
?>

<!-- Section for Bangun Mimpi -->
<?php
$post_7 = get_post( 42 ); 
$title = $post_7->post_content;
echo $title;
?>

<!-- Section for Agenda Kegiatan -->
<?php
$post_7 = get_post( 38 ); 
$title = $post_7->post_content;
echo $title;
?>

<?php
get_footer();
?>