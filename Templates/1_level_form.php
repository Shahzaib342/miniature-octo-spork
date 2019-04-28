<div class="form-container three-menu-container display-hide" id="maison-form">
    <div class="form-wrapper">
        <div class="form-header-wrapper">
            <span>Informations principales du bien</span>
        </div>
        <div class="form-body-wrapper">
            <div class="wrapper-maison">
                <div class="maison-group-one">
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Surface habitable</label>
                        <input class="form-input-maison maison-form-input" name="habitable"> <span class="m-square">m<sup>2</sup></span>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Surface totale du terrain</label>
                        <input class="form-input-maison  maison-form-input" name="terrain"> <span class="m-square">m<sup>2</sup></span>
                    </div>

                </div>
                <div class="maison-group-two">
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de pieces</label>
                        <input class="form-input-maison  maison-form-input" name="nombreDe">
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de salles de bain</label>
                        <input class="form-input-maison  maison-form-input" name="deBain">
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de niveaux</label>
                        <input class="form-input-maison  maison-form-input" name="niveax">
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
                    <span class="back-arrow">a-</span>
                    <span class="back-arrow-text">Retuor</span>
                </div>
                <div class="submit-btn">
                    <input class="submit-btn" onclick="goToNext('last')" value="submit">
                </div>
            </div>
        </div>
    </div>
</div>