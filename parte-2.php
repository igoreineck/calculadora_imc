<?php include 'header.php' ?>

    <?php setcookie( 'peso', $_POST['peso']) ?>    

    <div class="container">

        <?php include 'header-logo.php' ?>

        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <form action="parte-3" method="POST">
                    <div class="form-group">
                        <label for="altura" class="control-label">
                            <h3>Qual a sua altura?</h3>
                        </label>
                        <div class="row">
                            <div class="col-md-14">
                                <input type="number" name="altura" min="0" max="3" step="0.01" class="form-control input-lg" autofocus required>
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