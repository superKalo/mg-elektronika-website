<?php
    $title = 'Грешка 404: Страницата не съществува | MG Електроника Варна';
    $meta_description = 'Грешка 404 - Страницата не съществува | MG Електроника Варна';
    $meta_keywords = 'грешка 404, страницата не съществува';

    include 'mainElements/head.php';
?>

<body itemscope itemtype="http://www.schema.org/ElectronicsStore">
    <header>
        <?php include 'mainElements/upperStageNavigation.html'; ?>

        <div id="pageTitleBar">
            <h1>
                <span>Грешка 404!<br />Възникна грешка: <strong>страницата не съществува!</strong></span>
            </h1>
        </div>
    </header>

    <section>
        <div id="backStage_holder">
            <div id="mainContent_holder" class="group">
                <div id="contactsDiv">
                    <div id="sitemapDiv" class="marginAuto">
                        <h2>Страницата не съществува.
                        <?php include 'mainElements/sitemap.html'; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'mainElements/footer.html'; ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/validation.js"></script>

</body>
</html>
