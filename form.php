<?php
/**
 * Created by PhpStorm.
 * User: cgeorgel
 * Date: 20/08/2018
 * Time: 16:07
 */
?>
<h2>RÉSERVATION</h2>
<form id="AVP" method="post" action="https://www.secure-hotel-booking.com/LA-VILLA-CARNOT-CANNES/2Z8G/search?hotelId=11893" target="_blank">
    <input type="hidden" id="language" name="language" value="fr" />
    <input type="hidden" id="AVP_arrivalDate" name="arrivalDate" value="" />
    <input type="hidden" id="AVP_nights" name="nights" value="" />
    <input type="hidden" id="_ga" name="_ga" value="" />
    <input type="hidden" id="guestCountSelector" name="guestCountSelector" value="ReadOnly" />
    <input type="hidden" id="crossSell" name="crossSell" value="false" />
    <div class="form-group">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="AVP_list_days">ARRIVÉE</label>
            </div>
            <div class="col-md-4">
                <select id="AVP_list_days" onChange="updateDDay();" class="form-control form-control-lg"></select>
            </div>
            <div class="col-md-4">
                <select id="AVP_list_months" onchange="setDays();" class="form-control form-control-lg"></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="AVP_list_days">DÉPART</label>
            </div>
            <div class="col-md-4">
                <select id="AVP_list_ddays" onChange="updateDDay();" class="form-control form-control-lg"></select>
            </div>
            <div class="col-md-4">
                <select id="AVP_list_dmonths" onchange="setDays();" class="form-control form-control-lg"></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="selectedAdultCount">ADULTES</label>
            </div>
            <div class="col-md-8">
                <select id="selectedAdultCount" name="selectedAdultCount" class="form-control form-control-lg"></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="selectedChildCount">ENFANTS</label>
            </div>
            <div class="col-md-8">
                <select id="selectedChildCount" name="selectedChildCount" class="form-control form-control-lg"></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="selectedInfantCount">BÉBÉS</label>
            </div>
            <div class="col-md-8">
                <select id="selectedInfantCount" name="selectedInfantCount" class="form-control form-control-lg"></select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <input type="button" value="FAIRE UNE RÉSERVATION" onclick="validate();" class="btn-primary btn-block style-1" />
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="row">
            <div class="col-md-12">
                <p><small><a href="https://www.secure-hotel-booking.com/modification/LA-VILLA-CARNOT-CANNES/2Z8G" target="_blank">Annuler ou modifier une réservation existante</a></small></p>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    var months = new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Decembre");
    var message= "Date en dehors du planning";
</script>
<script type="text/javascript" src="https://www.secure-hotel-booking.com/LA-VILLA-CARNOT-CANNES/2Z8G/scripts/base.js"></script>