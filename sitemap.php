<?php
    $title = 'Карта на сайта | MG Електроника Варна';
    $meta_description = 'Карта на сайта | MG Електроника Варна';
    $meta_keywords = 'карта на сайта, sitemap';

    include 'mainElements/head.php';
?>

<body itemscope itemtype="http://www.schema.org/ElectronicsStore">
    <header>
        <?php include 'mainElements/upperStageNavigation.html'; ?>

        <div id="pageTitleBar">
            <h1>
                <span><strong>Карта на сайта</strong> на MG Електроника Варна:<br />търговия с <strong>кабели</strong> и ел. материали.</span>
            </h1>
        </div>
    </header>

    <section>
        <div id="backStage_holder">
            <div id="mainContent_holder" class="group">
                <div id="contactsDiv">
                    <div id="sitemapDiv" class="marginAuto">
                        <?php include 'mainElements/sitemap.html'; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'mainElements/footer.html'; ?>

</body>
</html>
