<div class="row" id="singlePage1" ng-show="singlePage1">
   <div class="container">
      <h3 style="margin-top: 25px" align="margin-left"> Single Neuron Workflow Requirements</h3>
      <div class="row">
        
      </div>
      </br></br>
      <div class="col-md-12">
      <div style="background:transparent !important ; display: block" class=" jumbotron"  >
         <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
               <input id= "arrow" type="image" name="image1" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/one.jpg') }}" alt="Neuron" value = '1' width="250" height="100">
              <input style="margin-left: 130px" id="geometry" checked type="radio" name="geometry" value = '1' > 
            </div>
            <div class="col-md-3">
               <input id= "arrow" type="image" name="image2" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/two.jpg') }}" alt="FMRI" value = '2' width="250" height="100">
               <input style="margin-left: 130px" id="geometry"  type="radio" name="geometry" value = '2' > 
            </div>
            <div class="col-md-3">
               <input id= "arrow" type="image" name="image3" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/three.jpg') }}" alt="FMRI" value = '3' width="250" height="100">
               <input style="margin-left: 130px" id="geometry"  type="radio" name="geometry" value = '3' > 
            </div>
            
         </div>
        
        
      </div>
      </div>

      <div style="display: block;" id="single">
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Soma length : </label>

            <div class="col-md-5">
               <input type="text" class="form-control" id="somaLength" name="somaLength" value = "" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Soma length</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Soma Diameter : </label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="somaDiameter" name="somaDiameter" value = "" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Soma Diameter</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Dendri length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="dendriLength" name="dendriLength" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>
         </br>   
      </div>




       <div style="display: none;" id="double">
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Soma length </label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="somaLength" name="somaLength" value = "" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Soma length</span>
            </div>
         </div>
          <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Soma Diameter : </label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="somaDiameter" name="somaDiameter" value = "" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Soma Diameter</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Dendri length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="dendriLength" name="dendriLength" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>

         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Axon length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="dendriLength" name="dendriLength" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Axon length</span>
            </div>
         </div>
         </br>   
      </div>



       <div style="display: none;" id="triple">
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Soma length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="somaLength" name="somaLength" value = "" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Soma length</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Dendri length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="dendriLength" name="dendriLength" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>

         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">a) Axon length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="axonLength1" name="axonLength1" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>

         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">b) Axon length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="axonLength2" name="axonLength2" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>

         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">c) Axon length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="axonLength3" name="axonLength3" value = ""/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>
         </br>   
      </div>
     
      <div class="form-actions" style="display: block; margin-top: 135px;" id="button3">
            <input type="Submit" ng-click="singlechangeView('firstPage')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
            <input type="Submit" ng-click="singlechangeView('singleView2')" id="singleView1NextButton" class="btn btn-primary pull-right" value="Next" >
      </div>
   </div>

</div>