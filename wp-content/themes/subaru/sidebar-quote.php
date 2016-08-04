<div role="dialog" class="modal fade" id="myModalGetQuote">

<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button data-dismiss="modal" class="close red-close" type="button">×</button>

<div class="row">
<div class="col-xs-4">
<div class="pop-call-cvr">
<ul>
<li><a href="tel:02 9915 9900"><i aria-hidden="true" class="fa fa-phone"></i> 02 9915 9900</a></li>
<li><a href="mailto:info@alldrivesubaroo.com.au"><i aria-hidden="true" class="fa fa-envelope-o"></i> info@alldrivesubaroo.com.au</a></li>
</ul>
</div>
</div>
<div class="col-xs-4">
<div class="pop-heading">
<h1>Get A Quote</h1>
</div>
</div>
<div class="col-xs-4">
<div class="popup-car">
<img class="img-responsive" src="/wp-content/themes/subaru/images/engine/popup-car.jpg">
</div>
</div>
</div>
</div>
<div class="modal-body modal-form-body">
<div class="popup-form-heading">
<h2>Customer Details</h2>
</div>

<form novalidate="novalidate" id="quote_form" role="form" class="form-inline" onsubmit="return quoteval();">
<div class="form-outer">
<div class="form-group">
<div class="make-it-half">    
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-5.png"> Name (required) </label>
<input type="text" id="qname" name="qname" class="form-control">
</div>

<div class="make-it-half no-mar">    
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-5.png"> Sur Name (required) </label>
<input type="text" id="qlname" name="qname" class="form-control">
</div>
</div>    

<div class="form-group no-mar">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-2.png"> Your Contact Number (required) </label>
<input type="text" id="qphone" name="qphone" class="form-control">
</div>

<div class="form-group">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-3.png"> Your Email (required) </label>
<input type="text" id="qemail" name="qemail" class="form-control">
</div>

<div class="form-group no-mar ">
<div class="make-it-half">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-10.png"> Prefer date </label>
<input type="text" id="qdate" name="qdate" class="form-control">
</div>
<div class="make-it-half no-mar">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-11.png"> Prefer time </label>
<input type="text" id="qtime" name="qtime" class="form-control">
</div>
</div>

<div class="form-group make-it-full select-opt">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-9.png"> Vehicle Details (required) </label>
<select class="form-control" name="qmodel" id="qmodel">
<option value="" selected>Select Model...</option>
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
<option value="other">other</option>
</select>
</div>

<div class="form-group make-it-full no-mar select-opt">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-10.png"> Select Year (required) </label>
<select class="form-control" name="qyear" id="qyear">
<option value="" selected>Select Year...</option>    
<?php for($year=2013;$year>=1989;$year--)
{
 echo '<option value="'.$year.'">'.$year.'</option>';   
}
?>    
</select>
</div>
    
    
<div class="form-group make-it-full no-mar select-opt">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-12.png"> How did you find us? </label>
<select class="form-control" name="locateus" id="locateus">
<option value="">Select Option...</option>
<option value="Google Web">Google Web</option>
<option value="Google Ad">Google Ad</option>
<option value="Friend Referral">Friend Referral</option>
<option value="Flyer">Flyer</option>
<option value="Newspaper">Newspaper</option>
<option value="I'm a customer">I'm a customer</option>
<option value="Other">Other</option>    
</select>
</div>
    

<div class="form-group textarea">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-3.png"> Additional Quote Information (required) </label>
<textarea class="form-control" name="qinfo" id="qinfo"></textarea>
</div>
    
<div class="form-group urgent">
<label>    
<input type="checkbox" id="urgent" name="urgent" value="yes"><span class="cust-quto-urgent"></span>Please tick if your quote is urgent and we will contact you asap, otherwise we will be in touch within 1 business day, alternativelly if you wish 
to talk to an ADS consultant, please call us on <a href="tel:0420 319 049">0420 319 049</a>
</label>
</div>    

<div class="form-group submit-ajax">    
<button class="popup-get-fm-btn" type="submit">Submit</button>
<img class="ajax-loader" id="ajax-loader" src="/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="display: none;">
</div>
</div>    
</form>
    

</div>

</div>

</div>

</div>