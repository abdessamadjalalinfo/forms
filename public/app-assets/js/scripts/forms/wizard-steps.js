
$(".number-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Wizard tabs with icons setup
$(".icons-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Vertical tabs form wizard setup
$(".vertical-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Validate steps wizard

// Show form
var form = $(".steps-validation").show();

$(".steps-validation").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18)
        {
            return false;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("testing!");
        var pet = $('.pet:checked').val();
        var race =($('#race').val());
        var color=document.querySelectorAll('input.theclass:checked');
        var colors=[];
        var i=0;
        for(i=0;i<color.length;i++)
        {
        colors.push(color[i].value);
        }
        
        var child=[];
        for(i=0;i<$('.child').length;i++)
        {
        child.push($('.child')[i].value);
        }
        

         
        var features=[];
        var startdate=($('#startdate').val());
        var enddate=($('#enddate').val());
        var budget=($('#budget').val());
        var adult=[];
        var comment=($('#meetingName3').val());
        var i=0;
        for(i=0;i<document.querySelectorAll('input.custom-control-input:checked').length;i++)
        {
        features.push(document.querySelectorAll('input.custom-control-input:checked')[i].value);
        }

        for(i=0;i<$('.adult').length;i++)
        {
        adult.push($('.adult')[i].value);
        }
        
     
           
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'get',
            url:"/public/match",
            data:{pet:pet, race:race, color:colors,features:features,startdate:startdate,enddate:enddate,budget:budget,
            adult:adult,
            child:child,
            comment:comment
            },
            success:function(data){
               console.log(data);
            }
         })
    }
});

// Initialize validation
$(".steps-validation").validate({
    ignore: 'input[type=hidden]', // ignore hidden fields
    errorClass: 'danger',
    successClass: 'success',
    highlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element);
    },
    rules: {
        email: {
            email: true
        }
    }
});


// Initialize plugins
// ------------------------------

// Date & Time Range
$('.datetime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    }
});
