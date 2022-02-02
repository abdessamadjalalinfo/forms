<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
  <title>Match
  </title>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />


  @include('css')
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/checkboxes-radios.css">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   "
data-open="click" data-menu="vertical-menu" data-col="2-columns">

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header ">
        
      
      </div>
      <div class="content-body">

        <section id="validation">
          <div class="row">
            <div class="col-12">
              <div class="card">
               
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form action="{{route('analyse')}}" class="steps-validation wizard-circle">
                      <!-- Step 1 -->
                      <h6>Step 1</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <h1 for="firstName3">
                                CHOOSE YOUR PET :
                                <span class="danger">*</span>
                              </h1>
                              <fieldset style="text-align:center" class="form-group">
                                <label class="btn">
                                  <input type="checkbox" name="pet" id="item1" value="cat" class=" pet">
                                  <img style="border-radius: 30px;" width="150px" src="cat.jpg" alt="..." class="check img-thumbnail">
                                  <h3>Cat</h3>
                                </label>
                                <script>
                                    $(document).on('click', 'input.pet[type="checkbox"]', function() {      
    $('input.pet[type="checkbox"]').not(this).prop('checked', false);      
});
                                </script>
                                <label class="btn">
                                  <input type="checkbox" name="pet" id="item2" value="dog" class=" pet" checked="">
                                  <img  style="border-radius: 30px;"   width="130px" src="dg.jfif" alt="..." class="img-thumbnail">
                                  <h3>Dog</h3>
                                </label>
                                <label class="btn">
                                  <input type="checkbox" name="pet" id="item3" value="bird" class=" pet">
                                  <img  style="border-radius: 30px;" width="150px" src="bird.jpg" alt="..." class="check img-thumbnail">
                                  <h3>Bird</h3>
                                </label>
                              
                              </fieldset>
                              
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <h1 for="lastName3">
                                CHOOSE RACE :
                                <span class="danger">*</span>
                              </h1>
                              <select class="custom-select form-control required" id="race" name="race">
                                <option value="">Select Race</option>
                                <option selected value="pitbull">Pitbull</option>
                                <option value="european dog">European Dog</option>
                                
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group">
                              <h1 for="emailAddress5">
                                WOULD YOU LIKE TO CHOOSE THE COLOR OF YOUR CAT ?
                                <span class="danger">Optionnel</span>
                              </h1>
                              
                              <select class="select2 form-control" name="color" multiple="multiple">
                                <optgroup label="Choose the Color">
                                  <option value="red ">Red</option>
                                  <option value="black ">Black</option>
                                  <option value="white ">White</option>
                                </optgroup>
                               
                              </select>
                              
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <h1 for="location">
                                ESSENTIAL FEATURES FIELD :
                                <span class="danger">*</span>
                              </h1>
                              <div class="card-body">
                                <div class="d-inline-block custom-control custom-checkbox mr-1">
                                  <input type="checkbox" value="VACCINATED" class="custom-control-input" name="features[]" id="checkbox1">
                                  <label style="font-size: 18px;" class="custom-control-label" for="checkbox1">VACCINATED</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox mr-1">
                                  <input  value="PEDEGREE" type="checkbox" class="custom-control-input" name="features[]"  id="checkbox2">
                                  <label style="font-size: 18px;" class="custom-control-label" for="checkbox2">PEDEGREE</label>
                                </div>
                                <div class="d-inline-block custom-control custom-checkbox mr-1">
                                    <input value="shorthair"  type="checkbox" class="custom-control-input" name="features[]"  id="checkbox3">
                                    <label style="font-size: 18px;" class="custom-control-label" for="checkbox3">SHORT HAIR</label>
                                  </div>
                                  <div class="d-inline-block custom-control custom-checkbox mr-1">
                                    <input value="longtail"  type="checkbox" class="custom-control-input" name="features[]" id="checkbox4">
                                    <label style="font-size: 18px;" class="custom-control-label" for="checkbox4">LONG TAIL</label>
                                  </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </fieldset>
                      <!-- Step 2 -->
                      <h6>Step 2</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <h1 for="proposalTitle3">
                                Start Date   :
                                <span class="danger">*</span>
                              </h1>
                              <input type="date" class="form-control " id="startdate" name="startdate">
                            </div>
                            <div class="form-group">
                                <h1 for="proposalTitle3">
                                  End Date   :
                                  <span class="danger">*</span>
                                </h1>
                                <input type="date" class="form-control " id="enddate" name="enddate">
                              </div>
                        </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <h1 for="jobTitle5">
                                      Budget  :
                                      <span class="danger">*</span>
                                    </h1>
                                    <input type="text" class="form-control " id="budget" name="budget">
                                  </div>
                            </div>
                            
                           
                          
                        </div>
                          <div class="row">

                            <div class="col-md-6">
                            
                                <div class="form-group">
                                  <h5 for="shortDescription3">FAMILY COMPOSITION :</label> 
                                  <script>
                                    var counter = 1;
                                    var dynamicInput = [];
                                    
                                    function addInput(){
                                        var newdiv = document.createElement('div');
                                        newdiv.id = dynamicInput[counter];
                                        newdiv.innerHTML = "Children's age/Adult's age "  + " <br><input class='adult form-control'  placeholder='age'   class='form-control' type='number' name='myInputs[]'>  <input class='btn btn-danger' type='button' value='-' onClick='removeInput("+dynamicInput[counter]+");'>";
                                        document.getElementById('adult').appendChild(newdiv);
                                        counter++;
                                    }
                                      
                                      function removeInput(id){
                                        var elem = document.getElementById(id);
                                        return elem.parentNode.removeChild(elem);
                                      }
                                    </script>
                                    
                                  <div class="row">
                                  <div class="col-5" id="adult">
                                    <div id="dynamicInput[0]">
                                        Children's age/Adult's age <br><input  class="adult form-control" placeholder='age' class="form-control" type="number" name="myInputs[]"> 
                                        <button style="margin-top: 3px;" class="btn btn-success" type="button" value="+" onClick="addInput();"><i class="fas fa-user-plus"></i> </button>
                                    </div>
                                  </div>
                                  
                                </div>
                                  



                                </div>
                              </div>
                           
                          </div>
                      </fieldset>
                      
                      <h6>Step 3</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <h1 for="meetingName3">
                                Free Text :
                                <span class="danger">*</span>
                              </h1>
                              <input type="text" class="form-control " id="meetingName3" name="freetext">
                            </div>
                            <div>
                                <h6 >
                                    <input type="checkbox" >
                                    I agree :
                                    <span class="danger">*</span>
                                  </h6>
                                
                               
                                
                            </div>

                          </div>
                          
                        </div>
                       
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
@include('js')
  

  <script>




$('.pet:checkbox').change(function() {
if($('.pet:checked').val()=="bird")
{
    $('#race')
    .find('option')
    .remove()
    .end()
    .append('<option value="asianbird">Asiran Bird</option>')
    .val('asianbird');
}
if($('.pet:checked').val()=="cat")
{
    $('#race')
    .find('option')
    .remove()
    .end()
    .append('<option value="EUROPEANCAT">EUROPEAN CAT</option>')
    .val('asian cat');
    $('#race')
    .find('option')
    .end()
    .append('<option value="ASIAN CAT"> ASIAN CAT</option>')
    .val('ASIAN CAT');
}
if($('.pet:checked').val()=="dog")
{
    $('#race')
    .find('option')
    .remove()
    .end()
    .append('<option selected value="pitbull">Pitbull</option>')
    .val('asiandog');
    $('#race')
    .find('option')
    .end()
    .append('<option value="ASIAN DOG"> ASIAN DOG</option>')
    .val('ASIAN DOG');
}

}); 
  </script>



<script>
$('.adult').on('click', function(){alert(1);});


</script>
</body>
</html>