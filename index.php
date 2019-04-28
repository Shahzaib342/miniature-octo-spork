<html>
<head>
    <link rel="stylesheet" href="form.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="form.js"></script>
</head>
<body>

<div class="main-container">
    <div class="main-wrapper">
        <div class="nav-bar-wrapper">
            <div class="nav-bar-logo">
                <span class="left-text-home">Meilleurs</span>
                <span class="right-text-home">Agents</span>
            </div>
            <div class="nav-bar-step">
                <span class="step-two-text">Etape 2 : A propos de ce bien</span>
            </div>
        </div>
        <div class="progress-bar-wrapper">
            <hr id="hr-progress-left" class="hr-progress hr-progress-left">
            <hr id="hr-progress-right" class="hr-progress hr-progress-right">
        </div>
        <div class="icon-container">
            <div class="icon-wrapper wrapper-form-area">
                <div class="right-area-container">
                </div>
                <div class="middle-area-container">
                    <div class="middle-area-wrapper">
                        <div class="icon-header-container">
                            De quel type de bien s'agit-ill?
                        </div>
                        <div class="icon-body-conatiner">
                            <div class="icon-body-wrapper" id="maison-menu" onclick="selectMenu('maison')">
                                <div class="tick">
                                    <i class="fas fa-check" id="maison-tick" style="visibility: hidden"></i>
                                </div>
                                <div class="shape-name-wrapper">
                                    <div class="icon-shape">
                                        <i class="fas fa-home fa-2x icon-color"></i>
                                    </div>
                                    <div class="icon-name">
                                        MAISON
                                    </div>
                                </div>
                            </div>

                            <div class="icon-body-wrapper" id="appart-menu" onclick="selectMenu('appart')">
                                <div class="tick tick-appartment">
                                    <i class="fas fa-check" id="appart-tick" style="visibility:hidden"></i>
                                </div>
                                <div class="shape-name-wrapper">
                                    <div class="icon-shape">
                                        <i class="fas fa-home fa-2x icon-color"></i>
                                    </div>
                                    <div class="icon-name">
                                        APPARTMENT
                                    </div>
                                </div>

                            </div>


                            <div class="icon-body-wrapper" id="terrian-menu" onclick="selectMenu('terrian')">
                                <div class="tick">
                                    <i class="fas fa-check" id="terrian-tick" style="visibility:hidden"></i>
                                </div>
                                <div class="shape-name-wrapper">
                                    <div class="icon-shape">
                                        <i class="fas fa-home fa-2x icon-color"></i>
                                    </div>
                                    <div class="icon-name">
                                        TERRIAN
                                    </div>
                                </div>

                            </div>

                        </div>
                        <form action="">
                            <input id="selected-menu" class="selected-menu" type="hidden" name="selected-menu">
                            <!-- 0 level form  -->
                            <?php include "Templates/0_level_form.php"; ?>

                            <!-- 1 level form  -->
                            <?php include "Templates/1_level_form.php"; ?>

                            <!-- 2 level form  -->
                            <?php include "Templates/2_level_form.php"; ?>
                            <!-- 3 level form  -->

                            <?php include "Templates/3_level_form.php"; ?>
                            <!-- 4 level form  -->
                            <?php include "Templates/4_level_form.php"; ?>
                        </form>

                        <!--5 level form  -->
                        <?php include "Templates/5_level_form.php"; ?>
                    </div>
                </div>
                <?php include "Templates/sidebar.php"; ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>