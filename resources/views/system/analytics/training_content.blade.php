@extends('system.layouts.header')
@section('content')
<section class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="section-heading">Training Content</h3>
				<hr class="hr-line">
			</div>
		</div>
		<div class="row">
            <div class="col-md-12 ">
                <ul>
                    <div class="demo-video col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a1EcFsr7tgs" allowfullscreen></iframe>
                        </div>
                    </div>

                    <li><h3 style="text-transform: none;display: inline-block;">Jupyter Notebooks</h3>
                        <ul>
                            <li>
                                <a target="_blank" href="https://metis.dsa.missouri.edu/">
                                    <b>JupyterHub Notebook Server for interactive NEURON Simulation</b>
                                </a>
                                <p>Please email <a href="mailto:NairS@missouri.edu?subject=Requesting%20for%20Jupyter%20Notebook%20Server%20access"><i class="fa fa-envelope"></i>  Dr. Satish Nair</a> for access.</p>
                            </li>
                        </ul>
                    </li>

                    <div style="clear: both;">
                    </div>


                    <li><h3 style="text-transform: none;display: inline-block;">SimAgent</h3>
                        <a href="https://tjbanks.github.io/SimAgentMPI/" target="_blank" class="badge badge-warning"/>Check this out</a> <a target="_blank" href="https://github.com/tjbanks/SimAgentMPI/blob/master/Sim%20Agent%20MPI%20documentation.pdf" class="badge badge-info">Quick Start Guide</a> <a class="badge badge-primary" href="https://goo.gl/gRBU1L">Download</a> <span class="badge badge-danger">New</span>
                        <p>‘SimAgent’ directly interfaces the student laptop with NSG resources to run network simulations. SimAgent has two core functions, automated job submission and parameter sweep. The automated job submission feature is a point and click interface that accepts any neuron or python program directory, submits the program to run remotely and watches it until completion with live updates to the user. The parameter sweep feature allows the same functionality with the added ability to specify sections of code to automatically change with each run. Users can specify a range of values for a parameter to take on, run each simulation in a parallel configuration and determine the optimal output for their needs. It currently supports connections to the NSG-R restful API and connections using SSH to servers running Slurm.</p>
                    </li>

                    <li><h3 style="text-transform: none;display: inline-block;">SimBuilder</h3>
                        <a href="https://tjbanks.github.io/SimBuilder/" target="_blank" class="badge badge-warning"/>Check this out</a> <a class="badge badge-info" href="https://github.com/tjbanks/SimBuilder">Github</a> <a class="badge badge-primary" href="https://goo.gl/igWuQ5">Download</a> <span class="badge badge-danger">New</span>
                        <p>SimBuilder is an easy to use desktop application that allows users to build large scale networks in Neuron. Utilizing Marianne J Bezaire's CA1 model <a href="https://github.com/mbezaire/ca1" target="_blank">(https://github.com/mbezaire/ca1)</a> as a backend, SimBuilder generalizes the process allowing users to specify their own network requirements.</p>
                    </li>

                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                </br>
                </br>
                </br>
                <p>To know more about other projects and workflows please <a class="text-addition_primary" href="{{ route('system.analytics.workflow_templates') }}">click here.</a></p>
            </div>
        </div>

    </div>
</section>

@endsection


@section('javascript')

@endsection
