$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : '<i class="zmdi zmdi-chevron-right"></i>',
            finish : '<i class="zmdi zmdi-chevron-right"></i>',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var address = $('#address').val();
            // var step1_1 = $('form input[type=checkbox]:checked').val();
            var answer1 = $('form input[name=answer1]:checked').val();
            var account_name = $('#account_name').val();
            var account_number = $('#account_number').val();

            $('#fullname-val').text(fullname);
            $('#email-val').text(email);
            $('#phone-val').text(phone);
            $('#address-val').text(address);
            $('#answer1-val').text(answer1);
            $('#account-name-val').text(account_name);
            $('#account-number-val').text(account_number);

            return true;
        }
    });
});
