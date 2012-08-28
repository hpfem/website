<?php require_once('../header.php');?>
<div class="center">
	<h1>Hermes 2D hp-FEM &amp; hp-DG library</h1>

	Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel  
	hp-adaptivity algorithms help solve a large variety of problems ranging from ODE and stationary 
	linear PDE to complex time-dependent nonlinear multiphysics PDE systems.
  <div class="hermes">
    <h2>Here are some screenshots and a poster illustrating capabilities of Hermes2D</h2>
    <a target="blank"  href="../gallery/images/hermes2d-show/both_errors.png"><img src="../gallery/images/hermes2d-show/both_errors.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/cand_list_quads.png"><img src="../gallery/images/hermes2d-show/cand_list_quads.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/elast.png"><img src="../gallery/images/hermes2d-show/elast.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/dynam-1-mesh.png"><img src="../gallery/images/hermes2d-show/dynam-1-mesh.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/micro.png"><img src="../gallery/images/hermes2d-show/micro.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/g7.png"><img src="../gallery/images/hermes2d-show/g7.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/sodium-F-1.png"><img src="../gallery/images/hermes2d-show/sodium-F-1.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/step-conv400.png"><img src="../gallery/images/hermes2d-show/step-conv400.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/solinfig9.png"><img src="../gallery/images/hermes2d-show/solinfig9.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/neutro_3.png"><img src="../gallery/images/hermes2d-show/neutro_3.png"/></a>
    <a target="blank"  href="../gallery/images/hermes2d-show/mesh_irreg2.png"><img src="../gallery/images/hermes2d-show/mesh_irreg2.png"/></a>
    <div style="clear:both"></div>
  </div>
    
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
	</div>
	
	
	<div class="right rightSmall">
	<h3 style="text-align:center;">Hermes 2D<br />hpFEM &amp; hpDG library</h3>
	<h4>C++ sources</h4>
	<ul>
	<li><a href="https://github.com/hpfem/hermes">Hermes library repository</a>
	<ul>
		<li>branch <span style="font-style:italic;">master</span>: current OpenMP release version</br>
		<li>branch <span style="font-style:italic;">devel</span>: up-to-date OpenMP development version</br>
		<li>branch <span style="font-style:italic;">serial (outdated)</span>: outdated serial version</br>
	</ul>
	</li>
	<li><a href="https://github.com/hpfem/hermes-tutorial">Hermes tutorial repository</a>
	<br /><br />- branches organization follows library repository
	</li>
	<li><a href="https://github.com/hpfem/hermes-examples">Hermes examples repository</a>
	<br /><br />- branches organization follows library repository
	</li>
	</ul>
	<h4>Sphinx documentation<h4>
	<ul>
	<li><a href="hermes/doc/_build/html/index.html">Hermes 2D library</a></li>
	<li><a href="hermes-tutorial/doc/_build/html/index.html">Hermes - tutorial repository (OpenMP version)</a></li>
	<li><a href="hermes-examples/doc/_build/html/index.html">Hermes - examples repository (OpenMP version)</a></li>
	<hr>
	<li style="position:relative;left:10px;font-size:0.85em;"><a href="../../www2-old/hermes/doc/_build/html/index.html">Hermes 2D serial library (outdated)</a></li>
	<li style="position:relative;left:10px;font-size:0.85em;"><a href="../../www2-old/hermes-tutorial/doc/_build/html/index.html">Hermes - tutorial repository (outdated serial version)</a></li>
	<li style="position:relative;left:10px;font-size:0.85em;"><a href="../../www2-old/hermes-examples/doc/_build/html/index.html">Hermes - examples repository (outdated serial version)</a></li>
	</ul>
	<h4>Doxygen developer docs</h4>
	<ul>
	<li><a href="hermes/hermes_common/doc/html/index.html">Hermes 2D OpenMP - Common code</a></li>
	<li><a href="hermes/hermes2d/doc/html/index.html">Hermes 2D OpenMP - 2D specific code</a></li>
	</ul>
	
	<h3>Legacy code - Hermes 3D</h3>
	<h4><a href="https://github.com/hpfem/hermes-legacy" style="color:black;margin-left:15px;">Git Repository</a></h4>
		<h4><a href="../../www2-old/hermes-legacy/doc/_build/html/index.html" style="color:black;margin-left:15px;">User Documentation</a></h4>
	
	
</div>
<?php require_once('../footer.php');?>