<?php require_once('../header.php');?>

<script type="text/javascript" src="../lightbox/js/prototype.js"></script>
<script type="text/javascript" src="../lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="../lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="../lightbox/css/lightbox.css" type="text/css" media="screen" />

<div class="center">
	<h1>Hermes2D hp-FEM &amp; hp-DG library</h1>
  
  <h2>Download from Github repository</h2>
	<ul>
	<li>Library repository: <a href="https://github.com/hpfem/hermes" target="blank">https://github.com/hpfem/hermes</a>
	<ul>
		<li>Tutorial repository: <a href="https://github.com/hpfem/hermes-tutorial" target="blank">https://github.com/hpfem/hermes-tutorial</a>
		<li>Examples repository: <a href="https://github.com/hpfem/hermes-examples" target="blank">https://github.com/hpfem/hermes-examples</a>
	</ul>
	</ul>
  <div style="float:left;border-left:1px solid black;padding-left:30px;">
    <h4>Sphinx user documentation<h4>
    <ul>
    <li><a href="hermes/doc/_build/html/index.html" target="blank">Hermes2D - library</a></li>
    <li><a href="hermes-tutorial/doc/_build/html/index.html" target="blank">Hermes2D - tutorial</a></li>
    <li><a href="hermes-examples/doc/_build/html/index.html" target="blank">Hermes2D - examples</a></li>
    </ul>
  </div>
  <div style="float:left;margin-left:50px;border-left:1px solid black; border-right:1px solid black; padding-right:30px;padding-left:50px;padding-bottom:20px;">
	<h4>Doxygen developers documentation</h4>
	<ul>
	<li><a href="hermes/hermes_common/doc/html/index.html" target="blank">Hermes2D OpenMP - Common code</a></li>
	<li><a href="hermes/hermes2d/doc/html/index.html" target="blank">Hermes2D OpenMP - 2D specific code</a></li>
	</ul>
  </div>
  <div style="clear:both;height:20px;"></div>

	<span style="font-size:1.3em;font-weight:650;">Hermes2D</span> is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel  
	hp-adaptivity algorithms help solve a large variety of problems ranging from ODE and stationary 
	linear PDE to complex time-dependent nonlinear multiphysics PDE systems.
  <br /><br />
  <div class="hermes">
    <h2>Here are some screenshots and a poster illustrating capabilities of Hermes2D</h2>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/both_errors.png"><img src="../gallery/images/hermes2d-show/both_errors.png"/><br />Space-time adaptivity</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/cand_list_quads.png"><img src="../gallery/images/hermes2d-show/cand_list_quads.png"/><br />Eight levels of automatic hp-adaptivity</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/elast.png"><img src="../gallery/images/hermes2d-show/elast.png"/><br />Curved elements</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/dynam-1-mesh.png"><img src="../gallery/images/hermes2d-show/dynam-1-mesh.png"/><br />Dynamical meshes</a></div>
    <div style="clear:both"></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/micro.png"><img src="../gallery/images/hermes2d-show/micro.png"/><br />Adaptive multimesh hp-FEM</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/g7.png"><img src="../gallery/images/hermes2d-show/g7.png"/><br />Higher-order shape functions</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/sodium-F-1.png"><img src="../gallery/images/hermes2d-show/sodium-F-1.png"/><br />Problems with multiple time scales</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/step-conv400.png"><img src="../gallery/images/hermes2d-show/step-conv400.png"/><br />Exponential convergence</a></div>
    <div style="clear:both"></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/solinfig9.png"><img src="../gallery/images/hermes2d-show/solinfig9.png"/><br />Fully anisotropic hp-refinements</a></div>
    <div class="agrosScreenshot"><a rel="lightbox"  href="../gallery/images/hermes2d-show/neutro_3.png"><img src="../gallery/images/hermes2d-show/neutro_3.png"/><br />Interface tracking</a></div>
    <div class="agrosScreenshot"><a  rel="lightbox" href="../gallery/images/hermes2d-show/mesh_irreg2.png"><img src="../gallery/images/hermes2d-show/mesh_irreg2.png"/><br />Arbitrary-level hanging nodes</a></div></div>
    <div style="clear:both"></div>
    
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
	
	<h1>Hermes 3D - legacy code</h1>
		Hermes 3D is a legacy code whose development is suspended, but it will become our focus in the forthcoming year 2013.
	<div id="products" style="height:310px; margin-top:15px;">
		<div id="productHermes" class="product">
			<img src="images/hangno-3d-2.jpg" class="active" height="300px"/>
			<img src="images/vertex.jpg"  height="300px"/>
			<img src="images/edge.jpg" height="300px"/>
			<img src="images/hangno-3d-2.jpg" height="300px"/>
			<img src="images/hangno-3d-1.jpg" height="300px"/>
			<img src="images/face.jpg" height="300px"/>
			
		</div>
	</div>

  <script type="text/javascript">
    function slideSwitchHermes() {
        var $active = $('#productHermes IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#productHermes IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1100, function() {
                $active.removeClass('active last-active');
            });
    }
		
    $(function() {
        setInterval( "slideSwitchHermes()", 1500 );
    });
  </script>
	
	<div style="clear:both;height:10px;"></div>
  
  <h1>Hermes2D gallery - adaptive hp-FEM on Dynamical Meshes: <br>
	Sample Computational Videos</h1>

	<h3>Capturing nonstationary reflected shock-wave</h3>

	We solve compressible Euler equations in a straight channel. This example 
	has a known exact stationary solution which is piecewise constant. The flow
	is entering with two different Mach numbers and angles from the left and from the
	top. The following two movies show the evolution of the density (left) and the 
	time-dependent mesh (right).
	<a href="../movies/shock/compress_sol_0.05.avi" style="float:left;"><img src="../movies/shock/compress_density.jpg" width=350px></a>
	<a href="../movies/shock/compress_mesh_0.05.avi" style="float:left;"><img src="../movies/shock/compress_mesh.jpg" width=350px></a><br>
  <div style="clear:both"></div>

	<h3>Gross-Pitaevski equation of quantum chemistry</h3>

	This equation is a nonlinear complex variant of the Schroedinger equation 
	that describes behavior of Einstein-Bose quantum condensates. Starting from 
	a Gaussian distribution, the following two videos show the solution 
	magnitude (left) and time-dependent hp-mesh (right).

	
<div style="clear:both"></div>
	<a href="../movies/gross-pitaevski/mag.avi" style="float:left;"><img src="../movies/gross-pitaevski/mag.jpg" width=275px></a>
	<a href="../movies/gross-pitaevski/mesh.avi" style="float:left;"><img src="../movies/gross-pitaevski/mesh.jpg" width=300px></a><br>
<div style="clear:both"></div>
	<h3>Two-component incompressible viscous flow</h3>

	Navier-Stokes equations for two-component flow consist of the usual Navier-Stokes
	equations completed by one additional transport equation for the lavel set function.
	The two liquids have different densities and viscosities, and they are 
	distinguished by the sign of the level set function. The following videos illustrate a sloshing process where
	initially, the domain is divided vertically into two equal parts, with water on the left side and (lighter) glycol on the right. After the imaginary barrier between the two liquids is removed, the different densities of the fluids initiate motion. The following videos show the evolution of the velocity (left) and level-set function (right),

	

	<a href="../movies/itracking/level-set.avi"><img src="../movies/itracking/lset4.png" width=300px></a>
	<a href="../movies/itracking/velocity.avi"><img src="../movies/itracking/vel4.jpg" width=300px></a><br>
<div style="clear:both"></div>
	The time-dependent meshes are shown 
	<a href="../movies/itracking/iface-meshes.avi">here</a>.<br>

	<h3>Heat and Moisture Transfer in Massive Concrete Walls of a Nuclear Reactor Vessel</h3>

	We consider an axisymmetric 3D problem consisting of a system of two
	coupled time-dependent linear parabolic equations describing a simplified model 
	of the transfer of heat and moisture in concrete. The goal of the computation is to predict 
	with high accuracy the distribution of the temperature and moisture in the concrete 
	walls of the reactor vessel after 30 years of operation. 
	In the following videos, the time is not shown linearly  - it scales accordingly to the 
	adaptive time step, which ranges from 15 minutes at the beginning of the computation and 
	reaches 1 year later. The following video shows the evolution of the temperature (left)
	and moisture (right). 

  <a href="../movies/heat_and_moisture/hm-sln.avi"><img src="../movies/heat_and_moisture/shot0003.png" width=400px></a><br>
<div style="clear:both"></div>

	Evolution of the corresponding hp-meshes is shown <a href="../movies/heat_and_moisture/hm-mesh.avi">here</a>.

	<h3>Flame propagation</h3>

	The underlying model consists of two nonlinear parabolic equations 
	describing the temperature and concentration. The flame moves
	through the domain from the left to the right. The narrow part
	serves as a cooler and its function is to slow down the reaction
	rate. Reaction rate, also called <em>flame intensity</em>, 
	is defined by the Arrhenius law. The following video shows the 
	reaction rate (top) and the corresponding hp-mesh. 

	

	<a href="../movies/combust/combust.avi"><img src="../movies/combust/shot0010_small.jpg" style="width: 100%; max-width: 480px" /></a>
  <div style="clear:both"></div>
	A similar video for h-adaptivity with first-order elements is shown <a href="../movies/combust/combust_h.avi">here</a>.

	<h3>Navier-Stokes equations with heat transfer</h3>

	We solve incompressible viscous flow in a channel with heated rectangular 
	obstacle. Unknown are both velocity components, pressure, and temperature. 
	This problem is nonlinear, time-dependent, and coupled one way. We solve 
	it with controlled error both in space and time. Note different finite 
	element meshes for the flow and temperature. The Reynolds number is Re=10^5.
	We use Taylor P2/P1 elements for the flow and hp-meshes for the temperature. 
	Both meshes evolve dynamically in time. The following video shows the velocity 
	magnitude (top) and temperature (bottom). 

	

	<a href="../movies/ns-thermal/ns_solution.avi"><img src="../movies/ns-thermal/shot0006_small.jpg" style="width: 100%; max-width: 370px" /></a>
  <div style="clear:both"></div>
	Corresponding meshes for the velocity and temperature fields are 
	<a href="../movies/ns-thermal/ns_meshes.avi">here</a>. You can also see the detail 
	of the upper edge of the obstacle 
	(<a href="../movies/ns-thermal/ns_solution_zoom.avi">velocity + temperature</a> and 
	<a href="../movies/ns-thermal/ns_meshes_zoom.avi">meshes</a>).

	<h3>Microwave heating</h3>

	The microwave model consists of a cavity and a small square waveguide
	attached to its righ-hand side. The cavity 
	contains a food specimen (load) with temperature-dependent electric
	permittivity. The waves are generated using a sinusoidal current along 
	the right edge of the waveguide. The electrical field deposits 
	energy into the load
	whose temperature rises and influences the electrical field. This
	problem is nonlinear, time-dependent, coupled both ways. The following 
	video shows the electric field magnitude and temperature, along with 
	the corresponding meshes. 

	

	<a href="../movies/microwave/micro_circle1.avi"><img src="../movies/microwave/micro_circle.jpg" style="width: 100%; max-width: 480px"/></a>.

	<h3>Thermoelasticity</h3>

	This is an old computation which is not space-time adaptive yet 
	(we should redo it soon).
	We use the plane-strain formulation. A steel construction is heated on top.
	The rising temperature causes elastic deformations. This problem 
	is linear, time-dependent, coupled one-way.

	<div style="clear:both"></div>

	<img src="../movies/thermoel/thermoelast_small.jpg" style="width: 100%; max-width: 450px"/>
	<div style="clear:both"></div>

	<a href="../movies/thermoel/video.avi">Temperature / displacement evolution</a><br>

	<h3>Navier-Stokes equations</h3>

	We solve incompressible viscous flow in a channel with rectangular obstacle,
	with different values of the Reynolds number. Unknown are 
	both velocity components and the pressure. This problem is 
	nonlinear and time-dependent. We solve it with controlled 
	error both in space and time. Note that the finite element meshes 
	evolve both in space and time.

	

	<img src="../movies/ns/cube20k-180-nomeshB.png" style="width: 100%; max-width: 360px" /><br>

	<a href="../movies/ns/cube-5k-nomesh.avi">Re = 5000</a><br>
	<a href="../movies/ns/cube-5k-mesh.avi">Re = 5000, with mesh</a><br>
	<a href="../movies/ns/cube-5k-zoom.avi">Re = 5000, with mesh, zoom</a><br>
	<a href="../movies/ns/cube-20k-nomesh.avi">Re = 20000</a><br>
	<a href="../movies/ns/cube-20k-mesh.avi">Re = 20000, with mesh</a><br>
	<a href="../movies/ns/cube-20k-zoom.avi">Re = 20000, with mesh, zoom</a><br>
	<a href="../movies/ns/cube-100k-nomesh.avi">Re = 100000</a><br>
	<a href="../movies/ns/cube-100k-mesh.avi">Re = 100000, with mesh</a><br>
	<a href="../movies/ns/cube-100k-zoom.avi">Re = 100000, with mesh, zoom</a><br>
	<a href="../movies/ns/cube-500k-nomesh.avi">Re = 500000</a><br>
	<a href="../movies/ns/cube-500k-mesh.avi">Re = 500000, with mesh</a><br>
	<a href="../movies/ns/cube-500k-zoom2.avi">Re = 500000, zoom</a><br>
	<a href="../movies/ns/cube-500k-zoom.avi">Re = 500000, with mesh, zoom</a><br>

	<h3>Automatic hp-adaptivity in a waveguide</h3>

	We consider a square waveguide containing circular load. defined using 
	an electric permittivity different from vacuum. The waves
	are generated using a sinusoidal current in the left edge of the domain. 
	We solve the time-hermonic Maxwell's equations using higher-order 
	edge elements. The adaptivity process starts from an extremely coarse 
	mesh consisting of only 4 cubic elements. The videos 
	show first 32 steps of the adaptive process.

	

	<img src="../movies/waveguide/waveguide_sol_small.jpg" style="width: 100%; max-width: 420px" /><br>

	<a href="../movies/waveguide/waveguide_sol.avi">Development of solution during automatic hp-adaptivity</a><br>
	<a href="../movies/waveguide/waveguide_err.avi">Reduction of error during automatic hp-adaptivity</a><br>


	<h3>Automatic hp-adaptivity in L-shape domain</h3>

	This video demonstrates progressive reduction of error during 
	automatic hp-adaptivity. The example is related to 
	singular electric field in a domain with re-entrant corner.

	<img src="../movies/hpadapt/hpadapt1_small.jpg" style="width: 100%; max-width: 420px" /><br>

	<a href="../movies/hpadapt/mesherror.avi">Reduction of error during automatic hp-adaptivity</a><br>

  
	</div>
	
	<div class="right rightSmall">
	<h3 style="text-align:center;">Hermes2D<br />hpFEM &amp; hpDG library</h3>
	<h4>C++ sources</h4>
	<ul>
	<li><a href="https://github.com/hpfem/hermes" target="blank">Hermes library repository</a>
	<ul>
		<li>branch <span style="font-style:italic;">master</span>: current OpenMP release version</br>
		<li>branch <span style="font-style:italic;">devel</span>: up-to-date OpenMP development version</br>
		<li>branch <span style="font-style:italic;">serial-outdated</span>: outdated serial version</br>
	</ul>
	</li>
	<li><a href="https://github.com/hpfem/hermes-tutorial" target="blank">Hermes tutorial repository</a>
	<br /><br />- branches organization follows library repository
	</li>
	<li><a href="https://github.com/hpfem/hermes-examples" target="blank">Hermes examples repository</a>
	<br /><br />- branches organization follows library repository
	</li>
	</ul>
	<h4>Sphinx documentation<h4>
	<ul>
	<li><a href="hermes/doc/_build/html/index.html" target="blank">Hermes2D library</a></li>
	<li><a href="hermes-tutorial/doc/_build/html/index.html" target="blank">Hermes - tutorial repository (OpenMP version)</a></li>
	<li><a href="hermes-examples/doc/_build/html/index.html" target="blank">Hermes - examples repository (OpenMP version)</a></li>
	<hr>
	<li style="position:relative;left:10px;font-size:0.85em;"><a href="serial-outdated/hermes/doc/_build/html/index.html" target="blank">Hermes2D serial library (outdated)</a></li>
	<li style="position:relative;left:10px;font-size:0.85em;"><a href="serial-outdated/hermes-tutorial/doc/_build/html/index.html" target="blank">Hermes - tutorial repository (outdated serial version)</a></li>
	<li style="position:relative;left:10px;font-size:0.85em;"><a href="serial-outdated/hermes-examples/doc/_build/html/index.html" target="blank">Hermes - examples repository (outdated serial version)</a></li>
	</ul>
	<h4>Doxygen developer docs</h4>
	<ul>
	<li><a href="hermes/hermes_common/doc/html/index.html" target="blank">Hermes2D OpenMP - Common code</a></li>
	<li><a href="hermes/hermes2d/doc/html/index.html" target="blank">Hermes2D OpenMP - 2D specific code</a></li>
	</ul>

	<h3>Legacy code - Hermes 3D</h3>
        This is an old code, containing also the 3D code. The development of this code was stop and is here only for completeness.
	<h4><a href="https://github.com/hpfem/hermes-legacy" target="blank" style="color:black;margin-left:15px;">Git Repository</a></h4>
		<h4><a href="hermes-legacy/doc/_build/html/index.html" target="blank" style="color:black;margin-left:15px;">User Documentation</a></h4>
	
	
</div>
<?php require_once('../footer.php');?>
