   <div id="singlePage5" ng-show="singlePage5">

     <h3 align="margin-left" style="margin-top: 25px">Run Single Neuron Workflow Job</h3>

     <div class="row">
      <div class="col-md-12">

      </br>
   </br> 

   <div class="form-group" style="width: 400px; margin: 0 auto;" >
    <a style="color:black" href="{{ asset('CyNeuroSimpleWorkflowExample.zip') }}"><i class="fa fa-download"></i> &nbspDownload CyNeuro Simple workflow file</a>
   </div>

   <div class="form-actions" ng-show="show_run_button" ng-model="show_run_button" id="button3" style="margin-top: 100px">

      <input type="Submit" ng-click="singlechangeView('singleView4')" class="btn btn-primary pull-left" value="Back" >
      <input  type="Submit" id="runButton" ng-click="func_run()" class="btn btn-primary pull-right" value="Run" >
   </div>


   <div class="form-group text-center" ng-show="show_run" ng-model="show_run" style="margin-top: 30px;">
      <div class="alert alert-success" role="alert">
         <p id="show_run_result">
            Your task has been submitted.
            <br>
            Submit time: @{{ submit_time }}.
            <br>
            Job ID: <strong>NGBW-JOB-OSBPYNEURON74-7789A6FB98D14396BCAEBAC9C58C4B30</strong>
            <br>
            Plase remember this Job ID for monitoring the status.
         </p>
      </div>

      <input  id="singleView4NextButton" type="Submit" onClick="history.go(0)"  class="btn btn-primary pull-left" value="Submit Another Job" >

   </div>
   </div>
   </div>


   </div>