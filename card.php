<div class="ui container">
        	<div id="mainContainer" class="ui compact basic left aligned segment" style="min-width:400px; margin:auto;">
                <div class="ui yellow inverted segment">
                	<h3 class="ui top attached tertiary basic segment">
                      Payment Details
                      <span style="float:right;">
                      	<i class="american express large icon"></i>
                        <i class="diners club large icon"></i>
                        <i class="discover large icon"></i>
                        <i class="japan credit bureau large icon"></i>
                        <i class="mastercard large icon"></i>
                        <i class="visa large icon"></i>
                      </span>
                    </h3>
                	<form class="ui payment form attached segment" id="payment-form" method="post">
                    	<input style="display:none" />
                                                <div class="field">
                          <label>Card Number</label>
                          <div class="ui icon input">
                            <i class="credit card alternative icon"></i>
                            <input type="tel" id="cc-number" placeholder="•••• •••• •••• ••••" data-payment='cc-number'>
                          </div>
                        </div>
                        <div class="field">
                          <label>CVC</label>
                          <input type="password" id="cc-cvc" placeholder="•••" data-payment='cc-cvc'>
                        </div>
                        <div class="field">
                          <label>Card Expiry (MM/YYYY)</label>
                          <input type="tel" id="cc-exp" placeholder="•• / ••••" data-payment='cc-exp'>
                        </div>
                        <div class="field">
                          <label>Zip</label>
                          <input type="tel" id="zip-code" maxlength="8" placeholder="ZIP Code" data-numeric>
                        </div>
                        <div class="paybutton field" style="text-align:center;">
                            <div class="ui labeled button">
                              <button class="ui red button" type="submit" tabindex="0">
                                <i class="stripe icon"></i> Pay now
                              </button>
                              <a class="ui basic red left pointing label">
                                $ 1
                              </a>
                            </div>
                        </div>
                        <div class="ui error message"></div>
                    </form>
                </div>
            </div>
        </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.js"></script>
 <script src="payment.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.css">
 <!-- For reference : https://codepen.io/devsachin/pen/WMreoe -->
 <!-- For reference random password: http://codepad.org/UL8k4aYK -->
 <!-- For reference of validate on btn click: https://stackoverflow.com/questions/15439171/jquery-validation-plugin-validating-form-on-button-click -->