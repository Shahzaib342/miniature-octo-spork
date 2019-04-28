<div class="form-container display-hide" id="maison-form">
    <div class="form-wrapper">
        <div class="form-header-wrapper">
            <span>Informations principales du bien</span>
        </div>
        <div class="form-body-wrapper">
            <div class="wrapper-maison">
                <div class="maison-group-one">
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Surface habitable</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison maison-form-input" name="habitable">
                                <span class="field__postfix">m²</span>
                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Surface totale du terrain</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <!--                            <span class="m-square">m<sup>2</sup></span>-->
                                <input class="form-input-maison maison-form-input" name="terrain">
                                <span class="field__postfix">m²</span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="maison-group-two">
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de pieces</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison-num maison-form-input" name="nombreDe">
                                <a class="increment-num">+</a>
                                <a class="decrement-num">-</a>
                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de salles de bain</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison-num maison-form-input" name="deBain">
                                <a class="increment-num">+</a>
                                <a class="decrement-num">-</a>

                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de niveaux</label>
                        <div class="field-container">
                            <div class="field--postfix field field--invalid">
                                <input class="form-input-maison-num" name="niveax">
                                <a class="increment-num">+</a>
                                <a class="decrement-num">-</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="maison-group-three">
                    <div class="check-box-maison"><input class="maison-form-checkbox" type="checkbox" name="maisonGroup[]"><label>Murs mitoyens</label></div>
                    <div class="check-box-maison"><input class="maison-form-checkbox" type="checkbox" name="maisonGroup[]"><label>Sous-sol</label></div>
                    <div class="check-box-maison"><input class="maison-form-checkbox" type="checkbox" name="maisonGroup[]"><label>pieaces de</label></div>

                </div>
            </div>

        </div>
        <hr>
        <div class="form-footer-container">
            <div class="form-footer-wrapper">
                <div class="router-wrapper" onclick="retuor('home')">
                    <span class="back-arrow">←</span>
                    <span class="back-arrow-text">Retuor</span>
                </div>
                <div class="submit-btn">
                    <input class="submit-btn" onclick="goToNext('last')" value="submit">
                </div>
            </div>
        </div>
    </div>
</div>