<div class="form-container three-menu-container display-hide" id="terrian-form">
    <div class="form-wrapper">
        <div class="form-header-wrapper">
            <span>Informations principales du bien</span>
        </div>
        <div class="form-body-wrapper">
            <div class="wrapper-maison">
                <div class="tetaran-group-one">
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Surface totale du terrain<sup>*</sup></label>
                        <div class="field-container">
                            <div style="width: 120%">
                                <input class="form-input-maison terrian-form-input habitable-required" name="totale" >
                            </div>
                        </div>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="container">Division parcellaire
                            <input type="radio" name="Division-parcellaire" value="Division parcellaire">
                            <span class="checkmark"></span>
                        </label>
                        <!--                        <label class="form-label-maison">Division parcellaire</label>-->
                        <!--                        <input type="radio" class="form-input-tetarian terrian-form-checkbox" name="Division-parcellaire" value="Division parcellaire">-->
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="form-footer-container">
            <div class="form-footer-wrapper">
                <div class="router-wrapper" onclick="retuor('home')">
                    <span class="back-arrow">←</span>
                    <span class="back-arrow-text">Retour</span>
                </div>
                <div class="submit-btn">
                    <input class="submit-btn" onclick="goToNext('last')" value="Suivant">
                </div>
            </div>
        </div>
    </div>
</div>