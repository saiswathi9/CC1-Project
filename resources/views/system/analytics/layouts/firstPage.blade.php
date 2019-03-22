<div  id="firstPage" ng-show="firstPage">
   <div class="col-md-12">
      <div style="background:transparent !important ; display: block" class=" jumbotron"  >
         <div class="row">
            <div class="col-md-4">
               <input type="image" name="image1" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/Neuron.jpg') }}" alt="Neuron" value = '2' width="300" height="200">
               <p style="font-weight: bold !important" class = "text-center"> NEURON </p>
            </div>
            <div class="col-md-4">
               <input type="image" name="image1" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/fmri.jpg') }}" alt="FMRI" value = '1' width="300" height="200">
               <p style="font-weight: bold !important" class = "text-center"> FMRI </p>
            </div>
            <div class="col-md-4">
               <input type="image" name="image1" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/wgcna.jpg') }}" alt="WGCNA" value = '3' width="300" height="200">
               <p style="font-weight: bold !important" class = "text-center"> Zebra Fish </p>
            </div>
         </div>
      </div>
   </div>
   
   <div class = "row" style="display: block" id="selection2">
      <div class="col-md-12">
         <h3>NEURON</h3>
         <p>A neuron is an electrically excitable cell that receives, processes, and transmits information through electrical and chemical signals. These signals between neurons occur via specialized connections called synapses. Neurons can connect to each other to form neural networks. Neurons are major components of the brain and spinal cord of the central nervous system, and of the autonomic ganglia of the peripheral nervous system.</p>
         </p>
      </div>
      <div class = "col-md-12 "  >
         <div class="col-md-4">
            <label><input id="first" ng-checked="true" type="radio" name="neuronradio" ng-model="content" value="first">   Single Neuron</label>
         </div>
         <div class="col-md-4">
            <label><input id="second" type="radio" name="neuronradio" ng-model="content" value="second">   Network Neuron</label>
         </div>
      </div>
      </br>
      <div class = "col-md-12" ng-hide="content == 'second'">
         <h4>
            Single Workflow Details:
         </h4>
         <p>
            This workflow will guide you through requirements gathering, execution, and visualization of a single neural simulation. It involves following steps and each step will be accomplished by a corresponding app.
         </p>
         <dl>
            <dt>Collecting length</dt>
            <dd>Collecting Soma length & diameter.</dd>
            <dd>Collecting Dendri length</dd>
            <dt>Choose Channels</dt>
            <dd>Selecting Sodium, Potassium and Calcium.</dd>
            <dt>Choosing voltage and current</dt>
            <dd>Membrane voltage and current.</dd>
         </dl>
         </br>
         </br>
         <div ng-hide="content == 'second'" class="form-actions"  id="singlebutton" >
            <input type="Submit" class="btn btn-primary pull-right"id="firstPageNextButton" ng-click="singlechangeView('singleView1')" value="Next" > 
         </div>
         </br>
      </div>
      <div class = "col-md-12" ng-show="content == 'second'">
         <h4>
            Network Workflow Details:
         </h4>
         <p>
            This tool will guide you through the creation, execution, and visualization of a neural simulation. It involves following steps and each step will be accomplished by a corresponding app.
         </p>
         <dl>
            <dt>Pre-processing</dt>
            <dd>Adjust the neuron types, morphology, connectivity, and weights using the "Pre-processing" app.</dd>
            <dt>NEURON Simulation</dt>
            <dd>Then execute the model on HPC resources using the "Neuron" app.</dd>
            <dt>Visulization</dt>
            <dd>Finally, visualize your results using the "Visualization" App.</dd>
         </dl>
         </br>
         </br>
         
         </br>
      </div>
   </div>
   </br>

   <div class = "row" style="display: none;" id="selection1">
      <div class="col-md-12">
         <h3>FMRI</h3>
         <p>Functional magnetic resonance imaging or functional MRI (fMRI) measures brain activity by detecting changes associated with blood flow. This technique relies on the fact that cerebral blood flow and neuronal activation are coupled. When an area of the brain is in use, blood flow to that region also increases</p>
      </div>
   </div>


</br>
   <div class = "row" style="display: none" id="selection3">
      <div class="col-md-12">
         <h3>Zebra Fish </h3>
         <p>Weighted correlation network analysis, also known as weighted gene co-expression network analysis (WGCNA), is a widely used data mining method especially for studying biological networks based on pairwise correlations between variables. While it can be applied to most high-dimensional data sets, it has been most widely used in genomic applications. It allows one to define modules (clusters), intramodular hubs, and network nodes with regard to module membership, to study the relationships between co-expression modules, and to compare the network topology of different networks.</p>
      </div>
   </div>
   </br>
   </br>  
   <div  style="display: none" class="form-actions"  id="button1" >
      <input type="Submit" class="btn btn-primary pull-right" ng-click="changeView('networkView2')" value="Next" id="click1"> 
   </div>
   </br>
</div>