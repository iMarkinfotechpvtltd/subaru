<div class="basic-head-gasket-repair-option">  
<form name='enquiry' method='post' action="" onsubmit="return enquiryval();" id="enquiry" name="enquiry">     
<div class="enquire-form">
<div class="row">
<div id="loader"></div>
<div class="col-md-6">
<input type="text" placeholder="First Name" class="form-control" name="first-name" id="fname1">
</div> <!---col-md-6--->
<div class="col-md-6">
<input type="text" placeholder="Last Name" class="form-control" name="last-name" id="lname1">
</div> <!---col-md-6--->
<div class="col-md-6">
<input type="text" placeholder="E mail" class="form-control" name="email" id="email1">
</div> <!---col-md-6--->
<div class="col-md-6">
<input type="text" placeholder="Phone" class="form-control" name="phone" id="phone1">
</div> <!---col-md-6--->
<div class="col-md-6">
<select class="form-control" name="model1" id="model1">
<option value="">Model</option>
<option value="" selected>Model</option>
<option value="BRZ">BRZ</option>
<option value="Exiga">Exiga</option>
<option value="Forester">Forester</option>
<option value="Impreza">Impreza</option>
<option value="Liberty">Liberty</option>
<option value="Outback">Outback</option>
<option value="SVX">SVX</option>
<option value="Tribeca">Tribeca</option>
<option value="WRX">WRX</option>
<option value="WRX STI">WRX STI</option>
<option value="XV">XV</option>
</select>   
</div> <!--col-md-4-->

<div class="col-md-6">
<select class="form-control" name="modyear1" id="modyear1">
<option value="" selected>Year</option>    
<?php for($year=2013;$year>=1989;$year--)
{
 echo '<option value="'.$year.'">'.$year.'</option>';   
}
?>  
</select>
</div> <!--col-md-4-->

<div class="col-md-6">
<select class="form-control" name="engine1" id="engine1">
<option value="">Engine</option>
<option value="Short Block">Short Block</option>
<option value="Long Bare Engine">Long Bare Engine</option>
<option value="Long Dressed Engine">Long Dressed Engine</option>
<option value="Cosworth Upgrade">Cosworth Upgrade</option>
<option value="Engine Parts">Engine Parts</option>
</select> 
</div> <!--col-md-4-->

<div class="col-md-6">
<input type="text" class="form-control" placeholder="VIN" value="" id="vin1" name="vin1">
</div> <!--col-md-6-->

<div class="col-md-12">
<textarea placeholder="Comments" class="form-control" name="comments" id="comments1"></textarea>
</div> <!---col-md-12--->
<div class="col-md-12">
<input type="submit" value="Submit" class="btn btn-danger btn-enquirre" name="submit">
</div>
<div class="col-md-12"><span id="success-msg" style="display:none;"></span></div>
</div>   <!---row--->      
</div> <!---enquire-form--->
</form>
</div>   <!--basic-head-gasket-repair-option--> 