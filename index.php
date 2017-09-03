<?php include 'header.php' ?> 

    <main role="main">

        <div class="container">
            
            <?php include 'header-logo.php' ?>

            <div class="row">
                <div class="col-md-12 col-md-offset-2">
                    <form action="parte-2" method="POST" class="form-info">
                        <div class="form-group">
                            <label for="peso" class="control-label">
                                <h3>Qual o seu peso?</h3>
                            </label>
                            <div class="row">
                                <div class="col-md-14">
                                    <input type="number" name="peso" min="0" max="999" step="1" class="form-control input-lg" autofocus required>
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

    </main>
    
<?php include 'footer.php' ?>