
<?php
echo $_header;
echo $_style;

?>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <?php echo $_navbar; ?>
    </header>
    <!-- header-end -->

    <!-- slider_area-start -->
    <?php echo $_content ?>

    <!-- footer-start -->
    <?php echo $_footer ?>
    <!-- footer-end -->


    <!-- JS here -->
    

</body>

</html>