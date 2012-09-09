<?php require_once('header.php');?>

<script type="text/javascript" charset="utf-8" src="../slider/mootools-1.2.1-core-yc.js"></script>
<script type="text/javascript" charset="utf-8" src="../slider/mootools-1.2.2.2-more.js"></script>    
<script type="text/javascript" charset="utf-8" src="../slider/Fx.MorphList.js"></script>
<script type="text/javascript" charset="utf-8" src="../slider/BarackSlideshow.js"></script>    
<link rel="stylesheet" type="text/css" href="../slider/style.css" media="screen" />


<div class="center">
  <h1> The hp-FEM Group</h1>
  <p>
  The hp-FEM group at the University of Nevada, Reno and 
  University of West Bohemia, Pilsen is concerned with the development, implementation, and 
  dissemination of modern computational methods for engineering and scientific 
  problems described by partial differential equations (PDE). Our work 
  is freely available through several open source projects.
  </p>
  
  <h2>Open Source FEM Software</h2>
  
  <script type="text/javascript">
    window.addEvent('domready', function(){
      var transition = 'alternate';
      $$('input[name=transition]').addEvent('click', function(){ transition = this.value; });
      var slideAvailable = ['slide-left', 'slide-right', 'slide-top', 'slide-bottom', 'fade'];
      var slideTransition = function(){
        switch(transition){
          case 'alternate':
            if(! $defined(this.count)) this.count = -1;
            return slideAvailable[++this.count % slideAvailable.length];
          case 'random': return slideAvailable.getRandom();
          default: return transition;
        }
      }
      
      var slideshow = new BarackSlideshow('menu', 'pictures', 'loading', { transition: slideTransition, auto: true });
    });
  </script>
    
  <div id="slideshow">
    <span id="loading">Loading</span>
  
    <ul id="pictures">
      <li>
        <div style="height:277px;background-color:white;">
          <img width="150px" src="gallery/images/hermes2d-show/both_errors.png" alt="Hermes2D" title="Hermes2D" style="margin-left:15px; margin-right:-25px;"/>
          <img width="130px" style="margin-top:25px; margin-right:-20px;" src="gallery/images/hermes2d-show/dynam-1-mesh.png" alt="Hermes2D" title="Hermes2D" />
          <img width="110px" style="margin-top:50px; margin-right:-15px;" src="gallery/images/hermes2d-show/micro.png" alt="Hermes2D" title="Hermes2D" />
          <img width="90px" style="margin-top:75px; margin-right:-10px;" src="gallery/images/hermes2d-show/mesh_irreg2.png" alt="Hermes2D" title="Hermes2D" />
          <img width="70px" style="margin-top:100px;" src="gallery/images/hermes2d-show/neutro_3.png" alt="Hermes2D" title="Hermes2D" />
        <div style="clear:both;height:15px;"></div>
          <span style="font-size:1.2em;font-weight:bold;">Hermes2D</span> is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel hp-adaptivity algorithms are designed to solve a large variety of problems ranging from ODE and stationary linear PDE to complex time-dependent nonlinear multiphysics PDE systems. The code is distributed under the GNU General Public License (Hermes2D and Hermes3D) and BSD License (Hermes1D).
        </div></li>
      <li>
        <div style="height:277px;background-color:white;">
          <img width="150px" src="gallery/images/agros2d-show/screenshot_kubuntu_precise_chart-170x170.png" alt="Agros2d" title="Agros2d" style="margin-left:15px; margin-right:-25px;"/>
          <img width="130px" style="margin-top:25px; margin-right:-20px;" src="gallery/images/agros2d-show/screenshot_win7_levitation-170x170.png" alt="Agros2d" title="Agros2d" />
          <img width="110px" style="margin-top:50px; margin-right:-15px;" src="gallery/images/agros2d-show/screenshot_kubuntu_precise_pythonlab-170x170.png" alt="Agros2d" title="Agros2d" />
          <img width="90px" style="margin-top:75px; margin-right:-10px;" src="gallery/images/agros2d-show/screenshot_macosx_order-170x170.png" alt="Agros2d" title="Agros2d" />
          <img width="70px" style="margin-top:100px;" src="gallery/images/agros2d-show/screenshot_ubuntu_oneiric_particle_tracing-170x170.png" alt="Agros2d" title="Agros2d" />
        <div style="clear:both;height:15px;"></div>
          <span style="font-size:1.2em;font-weight:bold;">Agros2D</span> is a multiplatform C++ application for the solution of partial differential equations (PDE) based on the Hermes library, developed by the group at the University of West Bohemia in Pilsen. Agros2D is distributed under the GNU General Public License.
        </div>
      </li>
      <li>
        <div style="height:277px;background-color:white;">
          <img width="150px" src="gallery/images/hermes3d-show/shock-sln.png" alt="Hermes3d" title="Hermes3d" style="margin-left:15px; margin-right:-25px;"/>
          <img width="130px" style="margin-top:25px; margin-right:-20px;" src="gallery/images/hermes3d-show/bessel-sln.png" alt="Hermes3d" title="Hermes3d" />
          <img width="110px" style="margin-top:50px; margin-right:-15px;" src="gallery/images/hermes3d-show/layer-mesh.png" alt="Hermes3d" title="Hermes3d" />
          <img width="90px" style="margin-top:75px; margin-right:-10px;" src="gallery/images/hermes3d-show/layer-sln.png" alt="Hermes3d" title="Hermes3d" />
          <img width="70px" style="margin-top:100px;" src="gallery/images/hermes3d-show/fichera-mesh.png" alt="Hermes3d" title="Hermes3d" />
        <div style="clear:both;height:15px;"></div>
          The aim of <span style="font-size:1.2em;font-weight:bold;">Hermes3D</span> is to extend the capabilities of Hermes2D to three spatial dimensions.
          In particular, Hermes3D will offer automatic adaptive hp-FEM with arbitrary-level
          hanging nodes, monolithic multimesh discretization of multiphysics coupled
          problems, and adaptive hp-FEM with dynamically changing meshes for 3D
          problems. The development had started and has been temporarily put on hold.
        </div></li>
    </ul>
    
    <ul id="menu">
      <li><a href="gallery/images/hermes3d-show/bessel-sln.png"><span style="font-size:1.6em;">Hermes2D</span><br /><span style="font-size:0.9em;padding-right:10px;">advanced hp-FEM &amp; hp-DG C++ library</span></a></li>
      <li><a href="../Source/images/cities/buenos_aires.jpg"><span style="font-size:1.6em;">Agros2D</span><br /><span style="font-size:0.9em;padding-right:10px;">graphical PDE Engineering tool</span></a></li>
      <li><a href="../Source/images/cities/urubamba.jpg"><span style="font-size:1.6em;">Hermes3D</span><br /><span style="font-size:0.9em;padding-right:10px;">C++ library of adaptive hp-FEM methods for 3D problems</span></a></li>
    </ul>
  </div>
  
  <div style="clear:both"></div>
  <h2>Core Team</h2>
  <table>
    <tr style="vertical-align:top;">
    <td>
    <a href="http://hpfem.org/~pavel/">
      <img src="people/photos/pavel-hpfem.org.jpg" width=118px style="border:1px solid black" height=118px title="Pavel Solin (group leader, NCLab)">
    </a>
    </td>
    <td>
    <a href="http://home.zcu.cz/~karban/main/">
      <img src="people/photos/karban.jpg" width=118px style="border:1px solid black" height=118px title="Pavel Karban (Agros2D main developer)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/lukas.jpg" width=118px style="border:1px solid black" height=118px title="Lukas Korous (Hermes main developer)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/pavel_kus.jpg" width=118px style="border:1px solid black" height=118px title="Pavel Kus (Agros2D, Hermes3D)">
    </a>
    </td>
    <td>
    <a href="http://home.zcu.cz/~fmach">
      <img src="people/photos/franta_small.jpg" width=118px style="border:1px solid black" height=118px title="Franta Mach (Agros2D)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/panek.jpg" width=118px style="border:1px solid black" height=118px title="David Pánek (Agros2D)">
    </a>
    </td>
    </tr>
    <tr style="vertical-align:top;">
      <td><span style="font-weight:bold">Pavel Solin</span><br />(UNR group leader)</td>
      <td><span style="font-weight:bold">Pavel Karban</span><br />(Agros2D main developer, UWB group leader)</td>
			<td><span style="font-weight:bold">Lukas Korous</span><br />(Hermes2D main developer)</td>
      <td><span style="font-weight:bold">Pavel Kus</span><br />(Agros2D, Hermes3D)</td>
      <td><span style="font-weight:bold">Franta Mach</span><br />(Agros2D, Hermes2D)</td>
      <td><span style="font-weight:bold">David PÃ¡nek</span><br />(Agros2D, Hermes2D)</td>
    </tr>
  </table>

  <h3>International Conferences ESCO and FEMTEC</h3>

  <p>
  We organize two series of international conferences: European Seminar on Coupled Problems (ESCO
  <a href="http://esco2012.femhub.com">2012</a>, 
  <a href="http://hpfem.org/events/esco-2010/">2010</a>, 
  <a href="http://hpfem.org/events/esco-2008/">2008</a>) 
  in Europe and Finite Element Methods in Engineering 
  and Science (FEMTEC
  <a href="http://hpfem.org/events/femtec-2011/">2011</a>, 
  <a href="http://hpfem.org/events/femtec-2009/">2009</a>, 
  <a href="http://hpfem.org/events/femtec-2006/">2006</a>) in the U.S.

  </p>

  <h3>Use Hermes through NCLab</h3>

  <p>
	Hermes in its older (serial) version can be used in online tool <a href="http://www.nclab.com" target="blank">NCLab</a> thanks to <a href="http://www.github.com/hpfem/hermes-python" target="blank">Python wrappers</a> <span style="font-weight:bold;">(for the serial version)</span>.
  <center>
  <a href="https://nclab.com">
  <img align="center" src="main/images/nclab-1.png" width="200" 
  style="padding:5px; margin-right:5px; border-style:none">
  <img align="center" src="main/images/nclab-2.png" width="200"
  style="padding:5px; margin-right:5px; border-style:none"><br>
  <img align="center" src="main/images/nclab-3.png" width="200" 
  style="padding:5px; margin-right:5px; border-style:none">
  <img align="center" src="main/images/nclab-4.png" width="200"
  style="padding:5px; margin-right:5px; border-style:none">
  </a>
  </center>
  <p>
  <a href="http://www.nclab.com" target="blank">NCLab</a> is a third-party product that is not developed by our group at UNR.
<!--
  <h3>The Dark Side of FEM</h3>

  <p>
  Do not format your harddisk yet! If the science is not
  working, maybe it's art. Visit our art gallery 
  <a href="gallery_darkside">Dark Side of FEM</a> :)
  </p>
-->
</div>

<?php require_once('right-latest.php');?>
<?php require_once('footer.php');?>
