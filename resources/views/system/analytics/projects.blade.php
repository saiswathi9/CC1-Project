@extends('system.layouts.header')
@section('content')


<section class="bg-light">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<h3 class="section-heading">Workflows</h3>
				<hr class="hr-line">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4 style="display: inline-block;">Chatbot Driven Neuron Single Cell Simulation on CyNeuro Portal</h4> <a class="badge badge-warning" href="{{route('system.analytics.test')}}">Click Here</a> <span class="badge badge-danger">New</span>
				<div class="demo-video">
  					<img style="width: 200px; height: 150px;" src="{{ asset('jscss/custom/img/VIDEO-SOON.png') }}"></img>
				</div>
				<p style="text-align: justify;">Guided user interface for simple single cell neuron simulation. The user will be navigated through a series of steps of simulation by a chatbot. At each step, the chatbot guides the user by providing useful information through a dialog relating to the simulation.
				</p>
				<p style="text-align: justify;">The guided user interfaces for the Neuron Simulations were driven by a set of responsive/dynamic forms and a context-aware chatbot. This chatbot is context-aware i.e., it responds to the user questions about the workflow based on the profiled user quadrant. Users are able to navigate through the user interface screens of a neuroscience workflow, while simultaneously interacting with the chatbot. The chatbot is equipped to help the user enter the parameter values that are needed to run their workflow, as necessary.
				</p>
				<p style="text-align: justify;">
				Students, teachers and faculty members with a varying level of expertise can interact with our bot to get help with neuron simulations and experiments. As the user interacts with the bot, we collect basic and advanced information such as e.g., end goal of the user, how much time can he spend to learn, his/her background information to build a user profile. The user profile is beneficial to generate contextually correct responses to the users based on their proficiency level in cyberinfrastructure and neuroscience.
				</p>
			</div>
		</div>

		</br>
		<hr class="hr-line">

		<div class="row">
			<div class="col-md-12">
				<h4 style="display: inline-block;">Neuron Simulation using Jupyter Notebook</h4> <a class="badge badge-warning" target="_blank" href="https://metis.dsa.missouri.edu/">https://metis.dsa.missouri.edu/</a> <span class="badge badge-danger">New</span>
				<div class="demo-video col-md-4">
  					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a1EcFsr7tgs" allowfullscreen></iframe>
					</div>
				</div>
				<p style="text-align: justify;">Jupyter Notebooks are documents that contain computer code and rich-text elements (e.g., equations, figures, web links) in order to enable the user (i.e., an instructor or student) to inspect the state of an execution in real-time. This server-client application has the flexibility to edit and execute a custom notebook on a local desktop without Internet access or via web-access on a remote server. These features allow the simulations to be modified and communicated in an understandable and reproducible manner and can be used to remotely deliver instructional material to a large group of remote students.
				</p>
				<p style="text-align: justify;">We developed Jupyter Notebook instances for exemplary teaching and research use cases of neuroscience users. Users can use pre-built notebooks to learn how to model a neuron cell using <a target="_blank" href="https://www.neuron.yale.edu/neuron/">NEURON</a> python tool. By obfuscating the underlying Python code, the NEURON-based notebooks allows the non-programmers to focus on experimenting with the parameters for neuron simulations. This approach also enables the instructors to focus on the learning material and teaching objectives during the class, instead of addressing trivial issues such as environment configuration, credentials for software access, or other installation problems.</p>
				<div class="alert alert-info">Note: Please email <a href="mailto:NairS@missouri.edu?subject=Requesting%20for%20Jupyter%20Notebook%20Server%20access">Dr. Satish Nair</a> for accessing Jupyter Notebook server.</div>
			</div>
		</div>
		
		</br>
		<hr class="hr-line">

		<div class="row">
			<div class="col-md-12">
				<h4 style="display: inline-block;">NSG Workflows</h4> <a class="badge badge-warning" href=" {{ route('system.analytics.workflow_page') }} ">Click here</a> <span class="badge badge-danger">New</span>
				<div class="demo-video col-md-4">
  					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8sJBMUNVZGY" allowfullscreen></iframe>
					</div>
				</div>
				<p style="text-align: justify;">A simple web-based user interface for submitting jobs to <a target="_blank " href="https://www.nsgportal.org/">NSG</a>. Users can submit any modeling and simulation jobs to NSG from CyNeuro portal using tools available on NSG. Researchers who want to access and run computational software applications on high-performance computing resources on NSG portal can use this as an early testbed to get some familiarity with NSG tools before actually scaling their simulations.
				</p>
			</div>
		</div>

		</br>
		<hr class="hr-line">
				
		<div class="row">
			<div class="col-md-12">
				<h4 style="display: inline-block;">NSG-R Jupyter Notebook</h4> <a class="badge badge-warning" target="_blank" href="https://metis.dsa.missouri.edu/">https://metis.dsa.missouri.edu/</a> <span class="badge badge-danger">New</span>
				<div class="demo-video col-md-4">
  					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qDQ85ORgWN8" allowfullscreen></iframe>
					</div>
				</div>
				<p style="text-align: justify;">Pre-configured Jupyter notebooks for submitting neuron jobs to <a target="_blank " href="https://www.nsgportal.org/">NSG</a>. Users can use this notebook to submit modeling and simulation jobs. Researchers who are familiar with neuron job submission can use these notebooks to access and run computational neuroscience software applications on high-performance computing resources. These notebooks provide a convenient way to run neuroscience applications programmatically on large HPC resources.
				</p>
				<p>
					<b>Acknowledgement:</b> This notebook is adapted from iPython tutorial notebook on NSG portal. To know more about this <a class="text-addition_primary" target="_blank" href="">click here</a>.
				</p>
			</div>
		</div>
		
		</br>
		<hr class="hr-line">

		<div class="row">
			<div class="col-md-12">
				<h4 style="display: inline-block;">Zebrafish Branchiomotor Neuron Analysis</h4> <span class="badge badge-danger">Coming soon</span>
				<div class="demo-video col-md-4">
  					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/onARTOSr6NA" allowfullscreen></iframe>
					</div>
				</div>
				<p style="text-align: justify;">Interactive MATLAB kernel in Jupyter Notebook for analyzing zebrafish larval jaw movements analysis to demonstrate the workings of the branchiomotor neuron present in the brain circuits of vertebrates. The gape or mouth opening analysis is used for video microscopy to perform fast, accurate and automated image analysis for identification of the jaw movement. Using Region-of-Interest (ROI)information and a custom MATLAB-based video annotation tool, gape frequency is extracted from video sequences comprising of thousand frames of different individuals. Based on the number of experiments, duration and other properties of each file, the storage requirements can reach up to hundreds of terabytes to successfully explore just two different ages and 10 genotypes of the specimen.
				</p>
				<p style="text-align: justify;">
				The Jupyter notebooks help users to experiment with different parameters of image filters to analyze jaw movements. Such a design of notebooks allows a biologist who is a novice HPC user to easily conduct and customize high-throughput experimentation with remote HPC resources.
				</p>
			</div>
		</div>
	</div> <!-- container -->
</section>


@endsection
@section('javascript')

@endsection