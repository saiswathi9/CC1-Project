@extends('system.layouts.header')
@section('content')


<section class="bg-light">
    <div class="container">
		
		<div class="row">
			<div class="col-12">
                <h3 class="section-heading">Courses</h3>
                <hr class="hr-line">
            </div>
        </div>

        <div class="row">
        	<div class="col-md-12">
        		<h4 class="section-heading">New integrated Neuro-CI courses</h4>
        		<ol>
        			<li><a href="{{ route('system.about.courses.ece_cs_8001') }}">
        			ECE/CS 8001 Software and Cyber Automation in Neuroscience – 1 credit (starting Fall 2018 – offered every semester; Nair and Calyam)</a></li>
        			<p></p>
        			<li><a href="{{ route('system.about.courses.ece_cs_4001_7001') }}">
        			ECE/CS 4001/7001 Neural Models and Machine Learning – 3 credits (starting Spring 2019 – to be offered every Spring semester; Nair, with assistance from Calyam)</a></li>
        		</ol>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-12">
        		<h4 class="section-heading">Other related courses:</h4>
        		<ul>
        			<li><b>Related to Neuroscience (for details see faculty websites or department course listing):</b>
        				<a class="text-addition_primary" target="_blank" href="http://old.engineering.missouri.edu/neuro/teaching/">Read more.</a>
        				<p></p>
        				<ol>
        					<li>ECE/BioSci/BE 4590 Computational Neuroscience – Satish Nair</li>
        					<li>ECE 8570 Dynamical Systems in Neuroscience – Satish Nair</li>
        					<li>ECE 8580 AI Models in Neuroscience – Satish Nair</li>
        				</ol>
        			</li>
        			</br>
        			<li><b>Related to CI and Cloud Computing (for details see faculty websites or department course listing):</b>
        				<a class="text-addition_primary" target="_blank" href="http://faculty.missouri.edu/calyamp/teaching.html">Read more.</a>
        				<p></p>
        				<ol>
        					<li>CS4530-7530-CloudComputing I (3 credits) – Prasad Calyam</li>
        					<li>CS8530-CloudComputing II (3 credits) – Prasad Calyam</li>
        				</ol>
        			</li>
        		</ul>
        	</div>
        </div>

    </div>
</section>



@endsection
@section('javascript')

@endsection