<?php
  get_header();
?>

<body>

  <!-- ***** Header Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'header');
    ?>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'banner');
    ?>
  <!-- ***** Main Banner Area End ***** -->
  
  <!-- ***** Booking Area Start ***** -->
    <?php
        get_template_part('template-part/content', 'booking');
    ?>
  <!-- ***** Booking Area End ***** -->

<?php
  get_footer();
?>
