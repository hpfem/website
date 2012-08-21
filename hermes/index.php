<?php require_once('../header.php');?>
<div class="center">
	<h2>Hermes</h2>

	Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel  
	hp-adaptivity algorithms help solve a large variety of problems ranging from ODE and stationary 
	linear PDE to complex time-dependent nonlinear multiphysics PDE systems.
<br />	
	<h3>HIghlights of Hermes capabilities</h3>
	<h4>- mathematical point of view</h4>
	<ul>
		<li>L2, H1, HCurl, HDiv Sobolev spaces approximation with element-wise polynomial degree up to 10
		<li>Hanging nodes of arbitrary order
		<li>Multimesh = assembling over component-specific meshes without projections or interpolations in multiphysics problems
		<li>Time-adaptive capabilities with a large number (~30) of pre-implemented Runge-Kutta methods
		<li>Coupled problems solved together with hp-DG and hp-FEM
		<li>Adaptivity based on reference solution and local projections
		<li>Calculations with physical quantities defined in different subdomains
	</ul>
	<h4>- implementation point of view</h4>
	<ul>
		<li>OpenMP parallelization
		<li>Unified library for handling both real and complex problems using advanced C++ templating
		<li>Own OpenGl based visualization &amp; VTK outputs of meshes, spaces, solutions
		<li>Division of the library's code into easy-to-manage namespaces
		<li>XML save / load of the most important classes using provided XML schemas
		<li>Well arranged doxygen documentation
		<li>Exception safe API
	</ul>
	
	User documentation for the library itself, and also using our own tutorial, and examples,
	is provided via thelinks on	the right. 
	Hermes has an active <a href="http://groups.google.com/group/hermes2d?pli=1">User's Group</a>
	where questions get answered quickly. 
	The code is distributed under the GNU Lesser General Public License (LGPL).
	
	<br />
	<h3>Download and Installation</h3>
	Detailed installation instructions for Linux, Windows, and Mac OS X
	can be found in the Hermes Library Documentation (link on the right).
	<br />
	
	<h3>Development</h3>
	Hermes is being developed by a community around the <a href="http://hpfem.org">hp-FEM group</a> 
	at the University of West Bohemia and the University of Nevada, Reno (UNR). Everybody is welcome to contribute. 
	Each successful contributor becomes a co-author of the library.
	</div>

	<div class="right rightSmall">
	<h3>Hermes Version 1.0</h3>
	<p>
	C++ sources:
	<ul>
	<li><a href="https://github.com/hpfem/hermes">Hermes library repository</a></li>
	<li><a href="https://github.com/hpfem/hermes-tutorial">Hermes tutorial repository</a></li>
	<li><a href="https://github.com/hpfem/hermes-examples">Hermes examples repository</a></li>
	</ul>
	Sphinx documentation:
	<ul>
	<li><a href="hermes/doc/_build/html/index.html">Hermes-Library</a></li>
	<li><a href="hermes-tutorial/doc/_build/html/index.html">Hermes-Tutorial</a></li>
	<li><a href="hermes-examples/doc/_build/html/index.html">Hermes-Examples</a></li>
	</ul>
	Doxygen developer docs:
	<ul>
	<li><a href="hermes/hermes_common/doc/html/index.html">Hermes - Common code</a></li>
	<li><a href="hermes/hermes2d/doc/html/index.html">Hermes - 2D code</a></li>
	</ul>
	
	<h3>Legacy code</h3>
	<p>
	<a href="https://github.com/hpfem/hermes-legacy">Git Repository</a><br>
	<a href="hermes-legacy/doc/_build/html/index.html">User Documentation</a><br>
	</p>
	
	Python wrappers:
	<ul>
	<li><a href="https://github.com/hpfem/hermes-python">Hermes-Python.git</a></li>
	</ul>
	
	YouTube Video Tutorials:

	<p>
	<center>
	<a href="http://www.youtube.com/user/HermesVideoTutorial"><img src="images/hvt.png" width=180px ></a>
	</center>
	</p>

</div>
<?php require_once('../footer.php');?>