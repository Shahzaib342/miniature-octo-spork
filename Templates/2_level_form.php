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
                        <input class="form-input-maison appart-form-input" name="careez"> <span class="m-square">m<sup>2</sup></span>
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de pieces</label>
                        <input class="form-input-maison appart-form-input" name="dePieces">
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Nombre de saller de bain</label>
                        <input class="form-input-maison appart-form-input" name="bain">
                    </div>
                    <div class="label-wrapper-maison">
                        <label class="form-label-maison">Etage de ce bienn</label>
                        <input class="form-input-maison appart-form-input" name="bien">
                    </div>

                </div>
                <div class="appart-group-two">
                    <div class="check-box-maison"><input class="appart-form-checkbox" type="checkbox" name="appartments[]"><label>Ascenseur</label></div>
                    <div class="check-box-maison"><input class="appart-form-checkbox" type="checkbox" name="appartments[]"><label>Balcon</label></div>
                </div>
                <div class="appart-group-three">
                    <div class="check-box-maison"><input class="appart-form-checkbox" type="checkbox" name="appartments[]"><label>Cave</label></div>
                    <div class="check-box-maison"><input class="appart-form-checkbox" type="checkbox" name="appartments[]"><label>pieaces de parking</label></div>

                </div>
            </div>

        </div>
        <hr>
        <div class="form-footer-container">
            <div class="form-footer-wrapper">
                <div class="router-wrapper">
                    <span class="back-arrow"><i class="fas fa-arrow-alt-left"></i></span>
                    <span class="back-arrow-text" onclick="retuor('home')">Retuor</span>
                </div>
                <div class="submit-btn">
                    <input class="submit-btn" onclick="goToNext('last')" value="submit">
                </div>
            </div>
        </div>
    </div>
</div>