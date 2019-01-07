<hr>
<div id="payment" class="text-center">
    <h5 class="text-uppercase text-center">Paiement</h5>
    <div class="form-check form-check-inline mt-2">
        <input class="form-check-input" type="radio" name="payment_type" id="payment_type_cash"
               value="cash">
        <label class="form-check-label" for="payment_type_cash">espèces</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="payment_type"
               id="payment_type_cheque" value="cheque">
        <label class="form-check-label" for="payment_type_cheque">chèque</label>
    </div>

    <div class="form-row mt-2">
        <div class="col">
            <label for="money">Montant</label>
            <input type="text" class="form-control" id="money" value="60" name="money">
        </div>
        <div class="col">
            <label for="receved">N°de Reçu</label>
            <input type="text" class="form-control" id="receved" name="receved" required>
        </div>
    </div>

</div>
<div class="mt-3 text-center">
    <button type="submit" class="btn btn-success">Enregistrer</button>
</div>