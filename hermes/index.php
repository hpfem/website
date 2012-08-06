<?require_once('../header.php');?>

<div class="right" style="width: 180px;">

<h3>Hermes Version 1.0</h3>
<p>
C++ sources:
<ul>
<li><a href="https://github.com/hpfem/hermes">Hermes.git</a></li>
<li><a href="https://github.com/hpfem/hermes-tutorial">Hermes-Tutorial.git</a></li>
<li><a href="https://github.com/hpfem/hermes-examples">Hermes-Examples.git</a></li>
</ul>
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
Buildbot:
<ul>
<li><a href="http://buildbot.hpfem.org:8004">Hermes</a></li>
<li><a href="http://buildbot.hpfem.org:8006">Hermes-Tutorial</a></li>
<li><a href="http://buildbot.hpfem.org:8005">Hermes-Examples</a></li>
</ul>
</p>

<h3>Legacy code</h3>
<p>
<a href="https://github.com/hpfem/hermes-legacy">Git Repository</a><br>
<a href="hermes-legacy/doc/_build/html/index.html">User Documentation</a><br>
</p>



<!--
<center>
<img src="images/car_model.png" width="190" height="130"><br>
Five-ODE system model describing car motion -- all reachable states.
</center>

<br/>

<center>
<img src="images/lset4-small.png" width=150px><br>
Interface tracking in two-phaes flow
via adaptive hp-FEM with dynamical meshes
</center>

<br>

<center>
<img src="images/fichera-mesh.png" width="170" height="140"><br>
Fichera problem - hp-mesh
</center>
-->


</div>


<div class="left" style="width: 698px;">
<h2>Hermes</h2>

Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel  
hp-adaptivity algorithms help solve a large variety of problems ranging from ODE and stationary 
linear PDE to complex time-dependent nonlinear multiphysics PDE systems. 
User documentation is provided separately for the Library, Tutorial, and Examples (links on
the right). Hermes has an active <a href="http://groups.google.com/group/hermes2d?pli=1">User's Group</a>
where questions get answered quickly. The code is distributed under the GNU Lesser General Public License (LGPL).</div>

<div class="left" style="width: 698px;">
<h2>Release Notes Version 1.0</h2>
<ul>
<li>Unified library for handling both real and complex problems using advanced C++ templating
<li>Division of the library's code into easy-to-manage namespaces
<li>XML save / load of the most important classes using provided XML schemas
<li>Well arranged doxygen documentation
<li>Calculations with physical quantities defined in different subdomains
<li>Exception safe API
</ul>
</div>

<div class="left" style="width: 698px;">
<h3>Download and Installation</h3>
Detailed installation instructions for Linux, Mac OS X, Windows Cygwin, and Windows MSVC
can be found in the Hermes Library Documentation (link on the right).
</div>

<div class="left" style="width: 698px;">
<h3>Development</h3>
Hermes is being developed by a community around the <a href="http://hpfem.org">hp-FEM group</a> 
at the University of Nevada, Reno (UNR). You are very welcome to contribute. Each contributor 
automatically become a co-author of the library.
</div>

<?require_once('../footer.php');?>
