/*jslint stupid: true*/

$(document).ready(function(){
    //Read More Hover Effect
    $('#Posts .btn-more').hover(function(){
        TweenLite.to($(this).children('div'), 0.25, {width:40, backgroundColor:'#fff'});
        TweenLite.to($(this), 0.25, {backgroundColor:'#000', color:'#fff'});
    },function(){
        TweenLite.to($(this).children('div'), 1, {width:0, backgroundColor:'000'});
        TweenLite.to($(this), 1, {backgroundColor:'#bdc3c7', color:'#000'});
    });
    
    //Validate Plugin On Subscription
    $('#FormSubscription').validate({
        rules: {
            firstName : "required",
            lastName : "required",
            email : "required",
            phoneNumber : {
                required : true,
                minlength: 12,
                maxlength: 12,
                digits: true
            },
            address : "required",
            city : "required",
            postCode : "required",
            cardNumber : {
                required : true,
                minlength: 16,
                maxlength: 16,
                digits: true
            },
            cardCVS : {
                required : true,
                minlength: 3,
                maxlength: 3,
                digits: true
            },
            cardCode1 : "required",
            cardCode2 : "required"
        },
        messages: {
            firstName : "Please Enter Your Name",
            lastName : "Please Enter Your Name",
            email : {
                required : "Please Enter Your Email Address",
                email : "Your Email Address Must Be in The Format of name@xxx"
            },
            phoneNumber : "Please Enter Valid Phone Number In The Form 20100xxxxxxx",
            cardNumber : "Please Enter Valid Card Number of 16 Digits",
            cardCVS : "Please Enter Valid CVS Number, The Three Numbers On The Back Of The Card"
        },
        errorClass: 'alert alert-danger',
        errorElement: 'div'
    });
    
    //Validate Plugin On Posting
    $("#FormPost").validate({
        rules: {
            title: {
                required: true,
                maxlength: 40
            },
            image: {
                required: true,
                maxlength: 450
            },
            post: {
                required: true,
                maxlength: 4800
            }
        },
        messages: {
            title: {
                maxlength: 'Title should be 40 chars max'
            },
            image: {
                maxlength: 'image url can be 450 chars long only'
            },
            post: {
                maxlength: 'post can contain 4800 chars only'
            }
        },
        errorClass: 'alert alert-danger',
        errorElement: 'div'
    });
    
    //Post show picture
    $('input[placeholder="http://myUrl.com/image"]').focusout(function(){
        $('#Img-post').remove();
        $(this).after('<img id="Img-post" src="'+$(this).val()+'" alt="Insert Valid Image URL To Show" height="100">');
    });
});