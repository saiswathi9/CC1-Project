<div id="singlePage4" ng-show="singlePage4">

<div class="container">
   <h3 style="margin-top: 25px" class="margin-left">Single Cell Neuron Workflow Requirements</h3>
    <div class="row">
		<!-- <div class="col-md-12">

			<img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/nav3.png') }}"  alt= "nav3" width="40%" height="50px" >

		</div> -->
	</div>
</div>
</br>
</br>

<div class="container">
  
   <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-5">
         <input class="single-checkbox" id="mem_vol" type="checkbox" name="mem_vol" value="mem_vol"> &nbsp <b>Membrane voltage:</b>
      </div>
      <div class="col-md-5">
         <input class="single-checkbox" id="cur" type="checkbox" name="cur" value="cur"> &nbsp <b>Current:</b>
      </div>
    </div>
    <div class = "row">
    	<div class="col-md-2">
      	</div>
      	<div class="col-md-5">
      		<img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/spike_raster.png') }}"  alt="Spike Raster" height="200px" width="250px">
      	</div>
      	<div class="col-md-5">
      		<img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/autocorrelogram.png') }}"  alt="Autocorrelogram" height="200px" width="250px">
      	</div>
     </div>
</div>

<div class="form-actions" style="display: block; margin-top: 75px;" id="button5">
         <input type="Submit"  ng-click="singlechangeView('singleView3')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
         <input type="Submit"id="singleView4NextButton" ng-click="run_func()" class="btn btn-primary pull-right" value="Next" >
      </div>
</br></br>




</div>