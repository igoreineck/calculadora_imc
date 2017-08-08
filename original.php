<div class="col-md-2 pull-right">
    <ul class="nav nav-tabs-container">
        <li id="tab-one" class="active">
            <a href="#your-weight" data-toggle="tab">
                <span class="prev-icon"><img src="assets/images/icons/arrow.png" title="Próxima etapa" alt="Próxima etapa"></span>
            </a>
        </li>
        <li id="tab-two">
            <a href="#your-height" data-toggle="tab">
                <span class="prev-icon"><img src="assets/images/icons/arrow.png" title="Próxima etapa" alt="Próxima etapa"></span>
            </a>
        </li>
        <li id="tab-three">
            <a href="#your-age" data-toggle="tab">
                <span class="prev-icon"><img src="assets/images/icons/arrow.png" title="Próxima etapa" alt="Próxima etapa"></span>
            </a>
        </li>
    </ul>
</div>

<div class="col-md-14 pull-left">
    <div class="tab-content active">
        <div id="your-weight" class="tab-pane fade in active">
            <div class="form-group">
                <label class="labels" for="peso">
                    <h3>Qual o seu peso?</h3>
                </label>
                <input type="number" step="0.01" min="0" id="peso" class="form-control" name="peso" required>
            </div>
        </div>
        <div id="your-height" class="tab-pane fade">
            <div class="form-group">
                <label class="labels" for="altura">
                    <h3>Qual a sua altura?</h3>
                </label>
                <input type="number" step="0.01" min="0" id="altura" class="form-control" name="altura" required>
            </div>
        </div>
        <div id="your-age" class="tab-pane fade">
            <div class="form-group">
                <label class="labels" for="idade">
                    <h3>Qual a sua idade?</h3>
                </label>
                <input type="number" min="0" id="idade" class="form-control" name="idade" required>
            </div>
        </div>
    </div>
</div>