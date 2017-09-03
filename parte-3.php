<?php include 'header.php' ?>   

    <?php  setcookie('altura', $_POST['altura']) ?>

    <div class="container">

        <?php include 'header-logo.php' ?>

        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <form action="resultado" method="POST">
                    <div class="form-group">
                        <label for="idade" class="control-label">
                            <h3>Qual a sua idade?</h3>
                        </label>
                        <div class="row">
                            <div class="col-md-14">
                                <input type="number" name="idade" min="0" max="200" step="1" class="form-control input-lg" autofocus required>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    <img src="assets/images/icons/arrow.png" alt="arrow" class="img-responsive">
                                </button>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>

    </div>

<?php include 'footer.php' ?>