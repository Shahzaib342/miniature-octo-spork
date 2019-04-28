<div class="form-container" id="home-form">
    <div class="form-wrapper">
        <div class="form-header-wrapper">
            <span>Renseignez I'adresse a estimer</span>
        </div>
        <div class="form-body-wrapper">
            <div class="postal-ville-wrapper">
                <div>
                    <div class="label-wrapper"><label class="form-label">Code Postal</label></div>
                    <div class="input-wrapper"><input class="form-input postal-input required" name="postal"></div>
                </div>
                <div>
                    <div class="label-wrapper"><label class="form-label">Ville</label></div>
                    <div class="input-wrapper"><input class="form-input ville-input required" name="ville"></div>

                </div>
            </div>
            <div class="address-wrapper">
                <div class="label-wrapper"><label class="form-label">Adresse</label></div>
                <div class="input-wrapper"><input class="form-input adresse-input required" name="address"></div>
            </div>
        </div>
        <hr>
        <div class="form-footer-container">
            <div class="form-footer-wrapper">
                <div class="router-wrapper">
                    <span class="back-arrow"></span>
                    <span class="back-arrow-text"></span>
                </div>
                <div class="submit-btn">
                    <input id="goto-next"class="submit-btn disable" onclick="goToNext('maison')" value="next">
                </div>
            </div>
        </div>
    </div>
</div>