    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      </noscript>
    <link rel="shortcut icon" href="<?php echo TEMA_URL;?>ast/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo TEMA_URL;?>ast/img/favicon.ico" type="image/x-icon" />
    <link rel="preload" href="<?php echo TEMA_URL;?>ast/img/circle-dotted.png" as="image" />
    <link href="<?php echo TEMA_URL;?>ast/css/plugins.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo TEMA_URL;?>ast/css/style.css">
    <link rel="icon" href="<?php echo URL;?>images/<?php echo $ayar["favicon"];?>">
    <?php echo $ayar["cdestek"];?>
    <?php echo $ayar["ganaltyc"];?>
    <?php echo $ayar["gconsol"];?>
<?php $blokRow = $db->query("SELECT * FROM bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php $blokRowdil = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php $blokRowdil2 = $db->query("SELECT * FROM dil2_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
