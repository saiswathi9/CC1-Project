<div class="row" id="singlePage3" ng-show="singlePage3">
   <div class="container">
      <h3 style="margin-top: 25px" align="margin-left"> Neuron Workflow Requirements</h3>
      <div class="row">
        
      </div>
      </br></br>
      
          <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="description" class="col-md-2 col-form-label">Type of experiment:</label>
            <div class="col-md-10">
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-4">
            </div>
            <div class="col-md-6">
               <label><input id="inj_mod" checked type="radio" name="inj_mod" value = '1'>   Current injection model</label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-6">
               <label><input id="inj_mod" value='2' type="radio" name="inj_mod">   Synapse model</label>
            </div>
            <div class="col-md-2">
            </div>
           
         </div>

         <div style="display: block;" id="curr_inj">
          <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">a. Delay:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="delay" name="delay" value = "10" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Amplitude</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">b. Duration:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="duration" name="duration" value = "50" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Duration</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">c. Amplitude:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="amplitude" name="amplitude" value = "1" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Amplitude</span>
            </div>
         </div>
         </div>

         <div style="display: none" id="synapse_inj">
      <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">a. Interval:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="interval" name="interval" value = "10"/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Interval</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">b. Number:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="number" name="number" value ="5"/>
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Number</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">c. Start:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="start" name="start" value = "10" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Start</span>
            </div>
         </div>

         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">d. Noise:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="noise" name="noise" value = "0" />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Noise</span>
            </div>
         </div>
         </div>
        

       
       <div class="form-actions" style="display: block; margin-top: 135px;" id="button3">
         <br></br>
         <input type="Submit" ng-click="singlechangeView('singleView2')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
         <!-- <input type="Submit"  class="btn btn-primary pull-right" value="Next" > -->
         <input type="Submit" ng-click="singlechangeView('singleView4')" class="btn btn-primary pull-right" value="Next" id="singleView3NextButton">
       </div>
    </div>
</div>