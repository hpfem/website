<?php require_once('header.php');?>

<div class="center">
  <h1> The hp-FEM Group</h1>
  <p>
  The hp-FEM group at the University of Nevada, Reno and 
  University of West Bohemia, Pilsen is concerned with the development, implementation, and 
  dissemination of modern computational methods for engineering and scientific 
  problems described by partial differential equations (PDE). Our work 
  is freely available through several open source projects.
  </p>
  
  <h2>Products (hover the mouse over a product to see details underneath)</h2>
  <div id="products">
    <div id="product1" class="product" onmouseover="if($('#descHermesLong').css('display') != 'block') { $('#descHermesLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {$('#descAgrosLong').removeClass('descLongActive');$('#descNCLabLong').removeClass('descLongActive');});}">
      <img src="gallery/images/hermes-show/both_errors.png" class="active"/>
      <img src="gallery/images/hermes-show/cand_list_quads.png"/>
      <img src="gallery/images/hermes-show/elast.png"/>
      <img src="gallery/images/hermes-show/dynam-1-mesh.png"/>
      <img src="gallery/images/hermes-show/micro.png"/>
      <img src="gallery/images/hermes-show/g7.png"/>
      <img src="gallery/images/hermes-show/sodium-F-1.png"/>
      <img src="gallery/images/hermes-show/step-conv400.png"/>
      <img src="gallery/images/hermes-show/shock-sln.png"/>
      <img src="gallery/images/hermes-show/solinfig9.png"/>
      <img src="gallery/images/hermes-show/neutro_3.png"/>
      <img src="gallery/images/hermes-show/mesh_irreg2.png"/>
    </div>
    <div id="product2" class="product" onmouseover="if($('#descAgrosLong').css('display') != 'block') { $('#descAgrosLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {$('#descHermesLong').removeClass('descLongActive');$('#descNCLabLong').removeClass('descLongActive');});}">
      <img src="gallery/images/hermes-show/both_errors.png" class="active"/>
      <img src="gallery/images/hermes-show/cand_list_quads.png"/>
      <img src="gallery/images/hermes-show/elast.png"/>
      <img src="gallery/images/hermes-show/dynam-1-mesh.png"/>
      <img src="gallery/images/hermes-show/micro.png"/>
      <img src="gallery/images/hermes-show/g7.png"/>
      <img src="gallery/images/hermes-show/sodium-F-1.png"/>
      <img src="gallery/images/hermes-show/step-conv400.png"/>
      <img src="gallery/images/hermes-show/shock-sln.png"/>
      <img src="gallery/images/hermes-show/solinfig9.png"/>
      <img src="gallery/images/hermes-show/neutro_3.png"/>
      <img src="gallery/images/hermes-show/mesh_irreg2.png"/>
    </div>
    <div id="product3" class="product" onmouseover="if($('#descNCLabLong').css('display') != 'block') { $('#descNCLabLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {$('#descAgrosLong').removeClass('descLongActive');$('#descHermesLong').removeClass('descLongActive');});}">
      <img src="gallery/images/hermes-show/both_errors.png" class="active"/>
      <img src="gallery/images/hermes-show/cand_list_quads.png"/>
      <img src="gallery/images/hermes-show/elast.png"/>
      <img src="gallery/images/hermes-show/dynam-1-mesh.png"/>
      <img src="gallery/images/hermes-show/micro.png"/>
      <img src="gallery/images/hermes-show/g7.png"/>
      <img src="gallery/images/hermes-show/sodium-F-1.png"/>
      <img src="gallery/images/hermes-show/step-conv400.png"/>
      <img src="gallery/images/hermes-show/shock-sln.png"/>
      <img src="gallery/images/hermes-show/solinfig9.png"/>
      <img src="gallery/images/hermes-show/neutro_3.png"/>
      <img src="gallery/images/hermes-show/mesh_irreg2.png"/>
    </div>
  </div>
  <div id="productDesc">
    <div id="descHermes" class="descTitle" onmouseover="if($('#descHermesLong').css('display') != 'block') { $('#descHermesLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {$('#descAgrosLong').removeClass('descLongActive');$('#descNCLabLong').removeClass('descLongActive');});}">
      Hermes
    </div>
    <div id="descAgros" class="descTitle" onmouseover="if($('#descAgrosLong').css('display') != 'block') { $('#descAgrosLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {$('#descHermesLong').removeClass('descLongActive');$('#descNCLabLong').removeClass('descLongActive');});}">
       	Agros2D
    </div>
    <div id="descNCLab" class="descTitle" onmouseover="if($('#descNCLabLong').css('display') != 'block') { $('#descNCLabLong').css({opacity: 0.0}).addClass('descLongActive').animate({opacity: 1.0}, 1100, function() {$('#descAgrosLong').removeClass('descLongActive');$('#descHermesLong').removeClass('descLongActive');});}">
      NCLab
    </div>
   
  </div> 
  <div id="descLong">
    <div id="descHermesLong" class="descLong descLongActive">
      <h3>Hermes - hp-FEM &amp; hp-DG C++ library</h3>
      Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel hp-adaptivity algorithms are designed to solve a large variety of problems ranging from ODE and stationary linear PDE to complex time-dependent nonlinear multiphysics PDE systems. The code is distributed under the GNU General Public License (Hermes2D and Hermes3D) and BSD License (Hermes1D).
    </div>
    <div id="descAgrosLong" class="descLong">
      <h3>Agros2D - graphical PDE Engineering tool</h3>
      Agros2D is a multiplatform C++ application for the solution of partial differential equations (PDE) based on the Hermes library, developed by the group at the University of West Bohemia in Pilsen. Agros2D is distributed under the GNU General Public License.
    </div>
    <div id="descNCLabLong" class="descLong">
      <h3>NCLab - new way of computing</h3>
      The goal of the NCLab (Networked Computing Laboratory) is to make computing accessible to anyone. No need to own a strong computer or buy expensive software. Everything takes place inside the web browser window, that turns into a virtual computer desktop. The NCLab is developed by the hp-FEM group at the University of Nevada, Reno.
    </div>
  </div>

  <script type="text/javascript">
    function slideSwitch1() {
        var $active = $('#product1 IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#product1 IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1100, function() {
                $active.removeClass('active last-active');
            });
    }
    function slideSwitch2() {
        var $active = $('#product2 IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#product2 IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1300, function() {
                $active.removeClass('active last-active');
            });
    }
    function slideSwitch3() {
        var $active = $('#product3 IMG.active');
        var $next =  $active.next().length ? $active.next()
        : $('#product3 IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1500, function() {
                $active.removeClass('active last-active');
            });
    }

    $(function() {
        setInterval( "slideSwitch1()", 2000 );
        setInterval( "slideSwitch2()", 3000 );
        setInterval( "slideSwitch3()", 4000 );
    });
  </script>
  
  <div style="clear:both"></div>
  <h2>Core Team</h2>
  <table>
    <tr style="vertical-align:top;">
    <td>
    <a href="http://hpfem.org/~pavel/">
      <img src="people/photos/pavel-hpfem.org.jpg" width=142px style="border:1px solid black" height=142px title="Pavel Solin (group leader, NCLab)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/lukas.jpg" width=142px style="border:1px solid black" height=142px title="Lukas Korous (Hermes main developer)">
    </a>
    </td>
    <td>
    <a href="http://home.zcu.cz/~karban/main/">
      <img src="people/photos/karban.jpg" width=142px style="border:1px solid black" height=142px title="Pavel Karban (Agros2D main developer)">
    </a>
    </td>
    <td>
    <a href="#">
      <img src="people/photos/pavel_kus.jpg" width=142px style="border:1px solid black" height=142px title="Pavel Kus (Agros2D, Hermes3D)">
    </a>
    </td>
    <td>
    <a href="http://home.zcu.cz/~fmach">
      <img src="people/photos/franta_small.jpg" width=142px style="border:1px solid black" height=142px title="Franta Mach (Agros2D)">
    </a>
    </td>
    </tr>
    <tr style="vertical-align:top;">
      <td><span style="font-weight:bold">Pavel Solin</span><br />(group leader, NCLab)</td>
      <td><span style="font-weight:bold">Lukas Korous</span><br />(Hermes main developer)</td>
      <td><span style="font-weight:bold">Pavel Karban</span><br />(Agros2D main developer)</td>
      <td><span style="font-weight:bold">Pavel Kus</span><br />(Agros2D, Hermes3D)</td>
      <td><span style="font-weight:bold">Franta Mach</span><br />(Agros2D)</td>
    </tr>
  </table>

  <h2>Hermes</h2>

  <p>
  <center>
  <a href="http://hpfem.org/hermes"><img src="main/images/hvt.png" width=400px ></a>
  </center>
  </p>

  <p>
  Hermes is a C++ library for rapid development of adaptive hp-FEM / hp-DG solvers. Novel hp-adaptivity algorithms 
  help solve a large variety of problems ranging from ODE and stationary linear PDE to complex time-dependent nonlinear 
  multiphysics PDE systems. 
  </p>

  <h3>Use Hermes through NCLab</h3>

  <p>
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
  NCLab is a third-party product that is not developed by our group at UNR.

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

  <h3>The Dark Side of FEM</h3>

  <p>
  Do not format your harddisk yet! If the science is not
  working, maybe it's art. Visit our art gallery 
  <a href="gallery_darkside">Dark Side of FEM</a> :)
  </p>

</div>

<?php require_once('right-latest.php');?>
<?php require_once('footer.php');?>
