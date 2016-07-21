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
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-5.png"> Your Name (required) </label>
<input type="text" id="qname" name="qname" class="form-control">
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
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-10.png"> Prefer date (required) </label>
<input type="text" id="qdate" name="qdate" class="form-control">
</div>
<div class="make-it-half no-mar">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-11.png"> Prefer time (required) </label>
<input type="text" id="qtime" name="qtime" class="form-control">
</div>
</div>

<div class="form-group make-it-full select-opt">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-9.png"> Vehicle Details </label>
<select class="form-control" name="qmodel" id="qmodel">
<option>Select Model</option>
<option>Select Model</option>
<option>Select Model</option>
</select>
</div>

<div class="form-group make-it-full no-mar select-opt">
<label>&nbsp;</label>
<select class="form-control" name="qyear" id="qyear">
<option>Select Year</option>
<option>Select Year</option>
<option>Select Year</option>
</select>
</div>

<div class="form-group textarea">
<label><img src="/wp-content/themes/subaru/images/engine/pricing-icon-3.png"> Additional Quote Information </label>
<textarea class="form-control" name="qinfo" id="qinfo"></textarea>
</div>

<button class="popup-get-fm-btn" type="submit">Submit</button>
<span id="success-quote"></span>
</div>
</form>
    

</div>

</div>

</div>

</div>