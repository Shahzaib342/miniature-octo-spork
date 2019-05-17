<div class="form-container three-menu-container display-hide" id="appart-form">
    <div class="form-wrapper">
        <div class="form-header-wrapper">
            <span>Informations principales du bien</span>
        </div>
        <div class="form-body-wrapper">
            <div class="wrapper-maison">
                <div class="appart-group-one">
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Surface Carrez</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison appart-form-input habitable-required" name="careez">
                                <span class="field__postfix">m²</span>
                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de pièces</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison-num appart-form-input habitable-required" name="dePieces">
                                <a class="increment-num">+</a>
                                <a class="decrement-num">-</a>
                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de salles de bain</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison-num appart-form-input habitable-required" name="bain">
                                <a class="increment-num">+</a>
                                <a class="decrement-num">-</a>
                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Étage de ce bien</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison-num appart-form-input habitable-required" name="bien">
                                <a class="increment-num">+</a>
                                <a class="decrement-num">-</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="appart-group-two">

                    <label class="container">Ascenseur
                        <input type="checkbox" name="appartments[]" value="Ascenseur">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Balcon
                        <input type="checkbox" name="appartments[]" value="Balcon">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Cave
                        <input type="checkbox" name="appartments[]" value="Cave">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Places de parking
                        <input type="checkbox" name="appartments[]" value="Places de parking">
                        <span class="checkmark"></span>
                    </label>

                    <!--                    <div class="check-box-maison"><input class="appart-form-checkbox" type="radio" name="appartments" value="Ascenseur"><label>Ascenseur</label></div>-->
                    <!--                    <div class="check-box-maison"><input class="appart-form-checkbox" type="radio" name="appartments" value="Balcon"><label>Balcon</label></div>-->
                </div>
                <!--                <div class="appart-group-three">-->
                <!--                    <div class="check-box-maison"><input class="appart-form-checkbox" type="radio" name="appartments" value="Cave"><label>Cave</label></div>-->
                <!--                    <div class="check-box-maison"><input class="appart-form-checkbox" type="radio" name="appartments" value="pieaces de parking"><label>pieaces de parking</label></div>-->
                <!---->
                <!--                </div>-->
            </div>

        </div>
        <hr>
        <div class="form-footer-container">
            <div class="form-footer-wrapper">
                <div class="router-wrapper">
                    <span class="back-arrow">←</span>
                    <span class="back-arrow-text" onclick="retuor('home')">Retour</span>
                </div>
                <div class="submit-btn">
                    <input class="submit-btn" onclick="goToNext('last')" value="Suivant">
                </div>
            </div>
        </div>
    </div>
</div>