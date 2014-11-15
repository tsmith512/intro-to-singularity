<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title ?> | Introduction to Singularity</title>
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6795652/627226/css/fonts.css" />
  <link rel="stylesheet" href="css/<?php echo $stylesheet; ?>.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
  <div class="wrapper">
    <?php if ($stylesheet !='toc') : ?><a href="index.php" class="back" title="Index"><?php endif; ?>
    <h1>Intro to Singularity</h1>
    <?php if ($stylesheet !='toc') : ?></a><?php endif; ?>
    <h2><?php echo $title ?></h2>
