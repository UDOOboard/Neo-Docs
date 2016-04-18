<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>          <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>          <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title><?= $page['title']; ?> <?php if ($page['title'] != $params['title']) { echo "- " . $params['title']; } ?></title>
    <meta name="description" content="<?= $params['tagline']; ?>" />
    <meta name="author" content="<?= $params['author']; ?>">
    <meta charset="UTF-8">
    <link rel="icon" href="http://www.udoo.org/wp-content/uploads/2014/12/logo_udoo_32.ico" type="image/x-icon">
    <!-- Mobile -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <?php foreach ($params['theme']['fonts'] as $font) {
        echo "<link href='$font' rel='stylesheet' type='text/css'>";
    } ?>

    <!-- CSS -->
    <?php foreach ($params['theme']['css'] as $css) {
        echo "<link href='$css' rel='stylesheet' type='text/css'>";
    } ?>

    <?php if ($params['html']['search']) { ?>
        <!-- Tipue Search -->
        <link href="<?= $base_url; ?>tipuesearch/tipuesearch.css" rel="stylesheet">
    <?php } ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="google-site-verification" content="GlKlGkbxuWQ3LNWx0akLYkqoWLrtF5b0ug9UpGadSuc" />
    <meta name="google-site-verification" content="vL1Qo6JWKZBq6fzVJLJhbyqHya1TBhZd78OJDA-Qe1s" />
    
    <!-- jQuery -->
    <script src="<?= $base_url; ?>themes/daux/js/jquery-1.11.3.min.js"></script>
    <script src="<?= $base_url; ?>themes/daux/js/bootstrap.min.js"></script>
</head>
<body class="<?= $params['html']['float'] ? 'with-float' : ''; ?>">
    <?= $this->section('content'); ?>

    <?php
    if ($params['html']['google_analytics']) {
        $this->insert('theme::partials/google_analytics', ['analytics' => $params['html']['google_analytics'], 'host' => array_key_exists('host', $params) ? $params['host'] : '']);
    }
    if ($params['html']['piwik_analytics']) {
        $this->insert('theme::partials/piwik_analytics', ['url' => $params['html']['piwik_analytics'], 'id' => $params['html']['piwik_analytics_id']]);
    }
    ?>

    <!-- hightlight.js -->
    <script src="<?= $base_url; ?>themes/daux/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- JS -->
    <?php foreach ($params['theme']['js'] as $js) {
        echo '<script src="' . $js . '"></script>';
    } ?>

    <script src="<?= $base_url; ?>themes/daux/js/daux.js"></script>

    <?php if ($params['html']['search']) { ?>
        <!-- Tipue Search -->
        <script type="text/javascript" src="<?php echo $base_url; ?>tipuesearch/tipuesearch_set.js"></script>
        <script type="text/javascript" src="<?php echo $base_url; ?>tipuesearch/tipuesearch.min.js"></script>

        <script>
            window.onunload = function(){}; // force $(document).ready to be called on back/forward navigation in firefox
            $(document).ready(function() {
                $('#tipue_search_input').tipuesearch({
                    'show': 10,
                    'mode': 'json',
                    'base_url': '<?php echo $base_url?>'
                });
            });
        </script>
    <?php } ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40057783-1', 'auto', {
            'allowLinker': true});
      ga('send', 'pageview');
    </script>
</body>
</html>
