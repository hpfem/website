<?require_once('../header.php');?>

<div class="right" style="width: 180px;">

<p>
<center>
<a href="http://hpfem.org/agros2d">
<img src="images/agros-1.png"></a><br>
Screenshot of Agros2D
</center>

<p>
<center>
<a href="http://hpfem.org/hermes/doc/src/hermes2d/examples.html#saphir-neutronics">
<img src="images/saphir-small.png"></a><br>
Stationary neutron diffusion (IAEA EIR-2
benchmark problem)
</center>

<br>

<center>
<a href="http://hpfem.org/hermes/doc/src/hermes2d/tutorial-3.html#gross-pitaevski-equation-19">
<img src="images/gp-2-small.png"></a><br>
Resonances in Einstein-Bose gases (Gross-Pitaevski equation)
solved via adaptive hp-FEM with dynamical meshes
</center>

<br>

<center>
<a href="http://hpfem.org/hermes/doc/src/hermes2d/tutorial-4.html#heat-and-moisture-22">
<img src="images/vessel-small.png"></a><br>
Heat and moisture transfer in the concrete
walls of a nuclear power station
</center>
</p>

<br>
<center>
<img src="images/fichera-sln.png" width="170" height="140"><br>
Fichera problem - solution
</center>

<br/>

<center>
<img src="images/fichera-mesh.png" width="170" height="140"><br>
Fichera problem - hp-mesh
</center>

<br/>

<center>
<img src="images/fichera.png" width="170" height="130"><br>
Fichera problem - convergence
</center>

<br/>

<center>
<img src="images/layer-sln.png" width="170" height="140"><br>
Layer problem - solution
</center>

<br/>

<center>
<img src="images/layer-mesh.png" width="170" height="150"><br>
Layer problem - hp-mesh
</center>

<br/>

<center>
<img src="images/bessel-sln.png" width="170" height="140"><br>
Bessel problem - solution
</center>

<br/>


</div>


<meta name="keywords" content="hpfem hp-fem hp fem finite element method">

<h1>Adaptive hp-FEM on Dynamical Meshes: <br>
Sample Computational Videos</h1>

<h3>Capturing nonstationary reflected shock-wave</h3>

We solve compressible Euler equations in a straight channel. This example 
has a known exact stationary solution which is piecewise constant. The flow
is entering with two different Mach numbers and angles from the left and from the
top. The following two movies show the evolution of the density (left) and the 
time-dependent mesh (right).

<p>

<a href="/movies/shock/compress_sol_0.05.avi"><img src="/movies/shock/compress_density.jpg" width=350px></a>
<a href="/movies/shock/compress_mesh_0.05.avi"><img src="/movies/shock/compress_mesh.jpg" width=350px></a><br>

<h3>Gross-Pitaevski equation of quantum chemistry</h3>

This equation is a nonlinear complex variant of the Schroedinger equation 
that describes behavior of Einstein-Bose quantum condensates. Starting from 
a Gaussian distribution, the following two videos show the solution 
magnitude (left) and time-dependent hp-mesh (right).

<p>

<a href="/movies/gross-pitaevski/mag.avi"><img src="/movies/gross-pitaevski/mag.jpg" width=275px></a>
<a href="/movies/gross-pitaevski/mesh.avi"><img src="/movies/gross-pitaevski/mesh.jpg" width=300px></a><br>

<h3>Two-component incompressible viscous flow</h3>

Navier-Stokes equations for two-component flow consist of the usual Navier-Stokes
equations completed by one additional transport equation for the lavel set function.
The two liquids have different densities and viscosities, and they are 
distinguished by the sign of the level set function. The following videos illustrate a sloshing process where
initially, the domain is divided vertically into two equal parts, with water on the left side and (lighter) glycol on the right. After the imaginary barrier between the two liquids is removed, the different densities of the fluids initiate motion. The following videos show the evolution of the velocity (left) and level-set function (right),

<p>

<a href="/movies/itracking/level-set.avi"><img src="/movies/itracking/lset4.png" width=300px></a>
<a href="/movies/itracking/velocity.avi"><img src="/movies/itracking/vel4.jpg" width=300px></a><br>

The time-dependent meshes are shown 
<a href="/movies/itracking/iface-meshes.avi">here</a>.<br>

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

<p>

<a href="/movies/heat_and_moisture/hm-sln.avi"><img src="/movies/heat_and_moisture/shot0003.png" width=400px></a><br>

Evolution of the corresponding hp-meshes is shown <a href="/movies/heat_and_moisture/hm-mesh.avi">here</a>.

<h3>Flame propagation</h3>

The underlying model consists of two nonlinear parabolic equations 
describing the temperature and concentration. The flame moves
through the domain from the left to the right. The narrow part
serves as a cooler and its function is to slow down the reaction
rate. Reaction rate, also called <em>flame intensity</em>, 
is defined by the Arrhenius law. The following video shows the 
reaction rate (top) and the corresponding hp-mesh. 

<p>

<a href="/movies/combust/combust.avi"><img src="/movies/combust/shot0010_small.jpg" style="width: 100%; max-width: 480px" /></a><br>
A similar video for h-adaptivity with first-order elements is shown <a href="/movies/combust/combust_h.avi">here</a>.

<h3>Navier-Stokes equations with heat transfer</h3>

We solve incompressible viscous flow in a channel with heated rectangular 
obstacle. Unknown are both velocity components, pressure, and temperature. 
This problem is nonlinear, time-dependent, and coupled one way. We solve 
it with controlled error both in space and time. Note different finite 
element meshes for the flow and temperature. The Reynolds number is Re=10^5.
We use Taylor P2/P1 elements for the flow and hp-meshes for the temperature. 
Both meshes evolve dynamically in time. The following video shows the velocity 
magnitude (top) and temperature (bottom). 

<p>

<a href="/movies/ns-thermal/ns_solution.avi"><img src="/movies/ns-thermal/shot0006_small.jpg" style="width: 100%; max-width: 370px" /></a><br>
Corresponding meshes for the velocity and temperature fields are 
<a href="/movies/ns-thermal/ns_meshes.avi">here</a>. You can also see the detail 
of the upper edge of the obstacle 
(<a href="/movies/ns-thermal/ns_solution_zoom.avi">velocity + temperature</a> and 
<a href="/movies/ns-thermal/ns_meshes_zoom.avi">meshes</a>).

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

<p>

<a href="/movies/microwave/micro_circle1.avi"><img src="/movies/microwave/micro_circle.jpg" style="width: 100%; max-width: 480px"/></a>.

<h3>Thermoelasticity</h3>

This is an old computation which is not space-time adaptive yet 
(we should redo it soon).
We use the plane-strain formulation. A steel construction is heated on top.
The rising temperature causes elastic deformations. This problem 
is linear, time-dependent, coupled one-way.

<p>

<img src="/movies/thermoel/thermoelast_small.jpg" style="width: 100%; max-width: 450px"/>
<br>

<a href="/movies/thermoel/video.avi">Temperature / displacement evolution</a><br>

<h3>Navier-Stokes equations</h3>

We solve incompressible viscous flow in a channel with rectangular obstacle,
with different values of the Reynolds number. Unknown are 
both velocity components and the pressure. This problem is 
nonlinear and time-dependent. We solve it with controlled 
error both in space and time. Note that the finite element meshes 
evolve both in space and time.

<p>

<img src="/movies/ns/cube20k-180-nomeshB.png" style="width: 100%; max-width: 360px" /><br>

<a href="/movies/ns/cube-5k-nomesh.avi">Re = 5000</a><br>
<a href="/movies/ns/cube-5k-mesh.avi">Re = 5000, with mesh</a><br>
<a href="/movies/ns/cube-5k-zoom.avi">Re = 5000, with mesh, zoom</a><br>
<a href="/movies/ns/cube-20k-nomesh.avi">Re = 20000</a><br>
<a href="/movies/ns/cube-20k-mesh.avi">Re = 20000, with mesh</a><br>
<a href="/movies/ns/cube-20k-zoom.avi">Re = 20000, with mesh, zoom</a><br>
<a href="/movies/ns/cube-100k-nomesh.avi">Re = 100000</a><br>
<a href="/movies/ns/cube-100k-mesh.avi">Re = 100000, with mesh</a><br>
<a href="/movies/ns/cube-100k-zoom.avi">Re = 100000, with mesh, zoom</a><br>
<a href="/movies/ns/cube-500k-nomesh.avi">Re = 500000</a><br>
<a href="/movies/ns/cube-500k-mesh.avi">Re = 500000, with mesh</a><br>
<a href="/movies/ns/cube-500k-zoom2.avi">Re = 500000, zoom</a><br>
<a href="/movies/ns/cube-500k-zoom.avi">Re = 500000, with mesh, zoom</a><br>

<h3>Automatic hp-adaptivity in a waveguide</h3>

We consider a square waveguide containing circular load. defined using 
an electric permittivity different from vacuum. The waves
are generated using a sinusoidal current in the left edge of the domain. 
We solve the time-hermonic Maxwell's equations using higher-order 
edge elements. The adaptivity process starts from an extremely coarse 
mesh consisting of only 4 cubic elements. The videos 
show first 32 steps of the adaptive process.

<p>

<img src="/movies/waveguide/waveguide_sol_small.jpg" style="width: 100%; max-width: 420px" /><br>

<a href="/movies/waveguide/waveguide_sol.avi">Development of solution during automatic hp-adaptivity</a><br>
<a href="/movies/waveguide/waveguide_err.avi">Reduction of error during automatic hp-adaptivity</a><br>


<h3>Automatic hp-adaptivity in L-shape domain</h3>

This video demonstrates progressive reduction of error during 
automatic hp-adaptivity. The example is related to 
singular electric field in a domain with re-entrant corner.

<p>

<img src="/movies/hpadapt/hpadapt1_small.jpg" style="width: 100%; max-width: 420px" /><br>

<a href="/movies/hpadapt/mesherror.avi">Reduction of error during automatic hp-adaptivity</a><br>

<?require_once('../footer.php');?>
