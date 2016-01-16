<?php
    $title = 'Контакти | MG Електроника Варна';
    $meta_description = 'Контакти, местоположение и работно време на магазина | MG Електроника Варна';
    $meta_keywords = 'MG Електроника, Варна, бул. Владислав Варненчик 138, работно време, местоположение, контакти';

    include 'mainElements/head.php';
?>

<body itemscope itemtype="http://www.schema.org/ElectronicsStore">
    <header>
        <?php include 'mainElements/upperStageNavigation.html'; ?>

        <div id="pageTitleBar">
            <h1>
                <span>Ето ги и начините да се свържеш с нас,<br />както и <strong>работното ни време</strong>.</span>
            </h1>
        </div>
    </header>

    <section>
        <div id="backStage_holder">
            <div id="mainContent_holder" class="group">
                <div id="contactsDiv">
                    <div class="floatingElement pc50">
                        <div itemprop="founder" itemscope itemtype="http://schema.org/Person">
                        <h2 itemprop="name">Георги Косев</h2>

                        <h3>За контакти с мен:</h3>
                        <ul>
                            <li>Телефон: <span itemprop="telephone">0876 727 405</span></li>
                            <li>Адрес на магазина:<br />&nbsp;<strong>Варна</strong>, бул. &quot;Владислав Варненчик&quot; №138</li>
                            <li>Е-mail: <a href="mailto:mg.kosev@gmail.com" itemprop="email">mg.kosev@gmail.com</a></li>
                        </ul>
                        </div>
                        <br />
                        <h3>Работно време:</h3>
                        <ul>
                            <li>Понеделник - Петък: 08:30 - 18.30ч.</li>
                            <li>Събота: 09.00 - 14.00ч.</li>
                        </ul>
                    </div>

                    <div class="floatingElement pc50">
                        <h3>Форма за контакт:</h3>
                        <form id="contactsForm" method="post" action="php/sendEmailForm.php" name="contactform" class="contactsForm">
                            <label>Име:</label>
                            <input id="first_name" name="first_name" type="text" value="" />
                            <br />
                            <label>E-mail: <span>(за да се свържем с теб)</span></label>
                            <input id="eMail" name="email" type="text" value="" />
                            <br />
                            <label>Съобщение:</label>
                            <textarea id="comments" name="comments"></textarea>
                            <label id="errorMsg">За да изпратите формата, моля попълнете коректно червените полета.</label>
                            <input id="submitBut" type="submit" value="Изпрати" />
                        </form>

                    </div>

                    <br />

                    <iframe id="googleMapsFrame" width="980" height="500" src="https://maps.google.bg/maps?f=q&amp;source=s_q&amp;hl=bg&amp;geocode=&amp;q=MG+%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0+%D0%B2%D0%B0%D1%80%D0%BD%D0%B0&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=47.075184,93.076172&amp;ie=UTF8&amp;hq=MG+%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0&amp;hnear=%D0%92%D0%B0%D1%80%D0%BD%D0%B0&amp;t=m&amp;cid=15934822608124366132&amp;ll=43.224942,27.900467&amp;spn=0.031271,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><a href="https://maps.google.bg/maps?f=q&amp;source=embed&amp;hl=bg&amp;geocode=&amp;q=MG+%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0+%D0%B2%D0%B0%D1%80%D0%BD%D0%B0&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=47.075184,93.076172&amp;ie=UTF8&amp;hq=MG+%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0&amp;hnear=%D0%92%D0%B0%D1%80%D0%BD%D0%B0&amp;t=m&amp;cid=15934822608124366132&amp;ll=43.224942,27.900467&amp;spn=0.031271,0.036478&amp;z=14&amp;iwloc=A" target="blank" style="color:#fff;text-align:center;" itemprop="map"><p>Вижте по-голяма карта</p></a>
                    <br />
                </div>
            </div>

        </div>
    </section>

    <?php include 'mainElements/footer.html'; ?>

</body>
</html>
