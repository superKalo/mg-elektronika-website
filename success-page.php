<?php
    $title = 'Успешно изпратено съобщение | MG Електроника Варна';
    $meta_description = 'Успешно изпратено съобщение';
    $meta_keywords = 'Успешно изпратено съобщение';

    include 'mainElements/head.php';
?>

<body itemscope itemtype="http://www.schema.org/ElectronicsStore">
    <header>
        <?php include 'mainElements/upperStageNavigation.html'; ?>

        <div id="pageTitleBar">
            <h1>
            </h1>
        </div>
    </header>

    <section>
        <div id="backStage_holder">
            <div id="mainContent_holder">
                <p class="center success">Съобщението е изпратено успешно!</p>
                <p class="center">Ще се постараем да Ви отговорим възможно най-бързо :)</p>
            </div>
        </div>
    </section>

    <?php include 'mainElements/footer.html'; ?>

</body>
</html>
