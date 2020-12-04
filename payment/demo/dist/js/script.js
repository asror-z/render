var payment_form = new DatPayment({
    form_selector: '#payment-form',
    card_container_selector: '.dpf-card-placeholder',

    number_selector: '.dpf-input[data-type="number"]',
    date_selector: '.dpf-input[data-type="expiry"]',
    cvc_selector: '.dpf-input[data-type="cvc"]',
    name_selector: '.dpf-input[data-type="name"]',

    submit_button_selector: '.dpf-submit',

    placeholders: {
        number: '•••• •••• •••• ••••',
        expiry: '••/••',
        cvc: '•••',
        name: 'DUPONT'
    },

    validators: {
        number: function(number){
            return Stripe.card.validateCardNumber(number);
        },
        expiry: function(expiry){
            var expiry = expiry.split(' / ');
            return Stripe.card.validateExpiry(expiry[0]||0,expiry[1]||0);
        },
        cvc: function(cvc){
            return Stripe.card.validateCVC(cvc);
        },
        name: function(value){
            return value.length > 0;
        }
    }
});

var demo_log_div = document.getElementById("demo-log");

payment_form.form.addEventListener('payment_form:submit',function(e){
    var form_data = e.detail;
    payment_form.unlockForm();
    demo_log_div.innerHTML += "<br>"+JSON.stringify(form_data);
});

payment_form.form.addEventListener('payment_form:field_validation_success',function(e){
    var input = e.detail;

    demo_log_div.innerHTML += "<br>field_validation_success:"+input.getAttribute("data-type");

});

payment_form.form.addEventListener('payment_form:field_validation_failed',function(e){
    var input = e.detail;

    demo_log_div.innerHTML += "<br>field_validation_failed:"+input.getAttribute("data-type");
});
