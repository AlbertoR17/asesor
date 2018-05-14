<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>.: Asesorías de cálculo diferencial :.</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" style="font-family: 'Comic Sans MS', cursive, sans-serif " >
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
    <a class="navbar-brand" href="index.html"><b><span >ASESORÍAS DE CÁLCULO DIFERENCIAL</span></b></a>
    <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Unidades</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Unidad 1.- Funciones</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="funcygraf.php">Funciones y gráficas</a>
                </li>
                <li>
                  <a href="combdefunc.php">Combinación de funciones</a>
                </li>
                <li>
                  <a href="funpolyrac.php">Funciones polinomiales y racionales</a>
                </li>
                <li>
                  <a href="functra.php">Funciones transcendentes</a>
                </li>
                <li>
                  <a href="funcinv.php">Funciones inversas</a>
                </li>
               
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3">Unidad 2.- Límites y continuidad</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li> -->
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4">Unidad 3.- Derivadas</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>-->
              </ul> 
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5">Unidad 4.- Aplicación de la derivada</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <!-- <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li> -->
              </ul>
            </li>
          </ul>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="about.html">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">¿Quienes somos?</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="contacto.php">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text">Contacto</span>
          </a>
        </li>
      </ul>
   
   
    </div>
  </nav>
  <div class="content-wrapper" style="background-image: url(img/back.jpg);" >
  <center>  
  <div class="col-lg-11" style="background-color: #f2f2f2; color: black; border-radius: 5px; box-shadow: 1px 1px 10px 5px #000">
    <!-- Aqui inicia el contenido de la pagina -->
    <br>
    <h2>Funciones polinomiales y racionales</h2>
    <br>
    <p>
      Introducción. En esta sección continúa el repaso de las funciones polinomiales y de las funciones racionales. Funciones como y = 2x – 1, y = 5x^2 - 2x + 4 y y = x^3, donde la variable x se eleva a una potencia entera no negativa, son ejemplos de funciones polinomiales. En la sección precedente se vio que una función polinomial general y = f(x) tiene la forma.
    </p>
    <img src="img/3-1.png" alt="">
    <p>
      donde n es un entero no negativo. Una función racional es el cociente
    </p>
    <img src="img/3-2.png" alt="">
    <p>
      donde p y q son funciones polinomiales.

      Funciones polinomiales. Las constantes an, an-1, …, a1, a0 se denominan coeficientes; el número an se llama coeficiente principal y a0 se denomina termino constante del polinomio. Se dice que la mayor potencia de x en un polinomio es el grado de éste. De modo de que si an = 0, entonces se dice que f(x) en coeficientes es de grado n.

      Los polinomios de grados n = 0, n = 1, n = 2 y n = 3 son, respectivamente,
      f(x) = a,                                funcion constante.
      f(x) = ax + b,                        funcion lineal.
      f(x) = a^2 + bx + c,              funcion cuadratica.
      f(x) = a^3 + b^2 + cx + d,    funcion cúbica.
      La función constante f(x) = 0 se denomina polinomio cero.
  
    </p>
    <p>
      • Rectas. Sin duda, usted esta mas familiarizado con el hecho de que las gráficas de una función constante y una funcion lineal son rectas. Puesto que el concepto de recta juega un papel importante sobre el estudio del calculo diferencial, resulta conveniente revisar las ecuaciones de las rectas. En el plano xy hay tres tipos de rectas; rectas horizontales, rectas verticales y rectas inclinadas u oblicuas.

      • Pendiente. Se empezará con la recolección de geometría plana de que por dos puntos distintos (x1, y1) y (x2, y2) en el plano pasa una sola recta L.

    </p>
    <img src="img/3-3.png" alt="">
    <p>
      Se denomina pendiente de la recta determinada por estos dos puntos. Suele acostumbrarse denotar el cambio en y o ascenso vertical de la recta por 🔺y = y2 - y1  y el cambio en x o recorrido horizontal de la recta por 🔺x = x2 - x1, de modo de que la Fórmula se escriba m = 🔺y / 🔺x.

      Vea la figura 1. Como indica en la figura 2, cualquier par de puntos distintos sobre una recta con pendiente, determina la misma pendiente. En otras palabras, la pendiente de una recta es independiente de la elección de los puntos sobre la recta.
    </p>
    <img src="img/3-4.png" alt="">
    <p>
      Figura 1. Pendiente de una recta.
    </p>
    <img src="img/3-5.png" alt="">
    <p>
      Figura 2. Triángulos semejantes.
    </p>
    <p>
      En la figura 3 se comparan las gráficas de rectas con pendiente positiva, negativa, cero e indefinida.
    </p>
    <img src="img/3-6.png" alt="">
    <p>
      Figura 3. Rectas con pendiente a) – c); recta sin pendiente d)
    </p>
    <p>
      • Ecuaciones de rectas. Para encontrar la ecuación de una recta L con pendiente m, se supone que (x1, y1) esta sobre la recta. Si (x, y) representa cualquier otro punto sobre L, entonces la formula de la pendiente proporciona
    </p>
    <img src="img/3-7.png" alt="">
    <p>
      Al multiplicar ambos miembros de la ultima igualdad por x - x1 se obtiene una ecuacion importante. La ecuacion punto-pendiente de la recta que pasa por (x1 , y1) con pendiente m es
      y - y1 = m(x - x1).

      Cualquier recta que no sea vertical debe cruzar el eje y. Si la interseccion y es (0, b), entonces con x1 = 0, y1 = b, la formula anterior proporciona y – b = m(x – 0). La ultima ecuacion se reduce a la ecuacion pendiente-intercepto de la recta
      y = mx + b.

      Ejemplo 1: Ecuación de una recta dadas su pendiente y su orden en el origen.

    </p>
    <h4>Seccion de video</h4>  
    <a href="https://youtu.be/VV6ST2c9gaM" >https://youtu.be/VV6ST2c9gaM</a>
    <p>
      • Funciones crecientes y decrecientes. Los conceptos crecientes y decrecientes pueden extenderse a cualquier función. Se dice que una funcion f es
o Creciente sobre un intervalo si f(x1) < f(x2), y
o Decreciente sobre un intervalo si f(x1) > f(x2).

    </p>
    <img src="img/3-8.png" alt="">
    <p>
      • Rectas paralelas y perpendiculares. Si L1 y L2 son dos rectas distintas con pendiente, entonces necesariamente L1 y L2 son paralelas o se cortan. Si las rectas se cortan formando un ángulo recto, se dice que son perpendiculares. Es posible determinar si dos rectas paralelas o perpendiculares al examinar sus pendientes.

Ejemplo 2. Rectas paralelas y perpendiculares.

    </p>
    <h4>Seccion de video</h4>  
    <a href="https://youtu.be/LJtNnhcXK-I" >https://youtu.be/LJtNnhcXK-I</a>
    <p>
      • Funciones cuadraticas. La funcion elevar al cuadrado y = x^2 es un elemento de una familia de funciones denominadas funciones cuadraticas; es decir, funciones polinomiales de la forma f(x) = ax^2 + bx + c, donde a = 0, b y c son constantes. Las graficas de funciones cuadraticas, denominadas parabolas, simplemente son transformaciones rigidas y no rigidas de la grafica de y = x^2 mostrada en la figura 4.
    </p>
    <img src="img/3-9.png" alt="">
    <p>Figura 4. Grafica de la parabola mas simple.</p>
    <p>•  Vertice y eje. Si la gráfica de una función cuadratica se abre hacia arriba a > 0 (o hacia abajo a < 0), el punto mas bajo (mas alto) (h, k) sobre la parábola se denomina vertice. Todas las parabolas son simetricas con respecto a una recta vertical que pasa por el vértice (h, k).
• Forma normal. El vertice (h, k) de una parábola se puede determinarse al volver a plantear la ecuación f(x) = ax^2 + bx + c en forma normal
f(x) = a(x – h)^2 + k.
Esta forma se obtiene a partir de f(x) = ax^2 + bx + c al completar el cuadrado en x.

Ejemplo 3. Grafica usando las intersecciones y el vértice.
</p>
<h4>Seccion de video</h4>
    <a href="https://youtu.be/5LslxYg1tl8" >https://youtu.be/5LslxYg1tl8</a>
    <p>
      • Funciones polinomiales de orden superior. La gráfica de toda funcion lineal f(x) = ax + b es una recta y la gráfica de toda funcion cuadratica f(x) = ax^2 + bx + c es una parabola. Estas declaraciones descriptivas definitivas no pueden hacerse con respecto a la gráfica de una funcion polinomial de orden superior. Resulta que la gráfica de una funcion polinomial de grado n > 3 puede tener varias formas posibles.

Comportamiento final. En terminos aproximados, el comportamiento final de cualquier funcion f es simplemente la forma en que f se comporta para valores muy grandes de |x|. 
    </p>
    <img src="img/3-10.png" alt="">
    <p>Figura 5. El comportamiento extremo de una funcion polinomial f depende de su grado n y el signo de su coeficiente principal.</p>
    <p>•  Simetria de las funciones polinomiales. Resulta fácil identificar por inspección las funciones polinomiales cuyas gráficas poseen simetría con respecto al eje y o al origen. La palabra par e impar tienen un significado especial para las funciones polinomiales. Las condiciones f(-x) = f(x) y f (-x) = -f se cumplen para funciones polinomiales donde todas las potencias de x son enteros pares y enteros impares, respectivamente.
</p>
<p>• Intersecciones de las funciones polinomiales.  La grafica de toda funcion polinomial f pasa por el eje y puesto que x = 0 esta en el dominio de la función. La intersección y es el punto (0, f(0)).</p>
<p>
Ejemplo 4. Graficas de funciones polinomiales.
</p>
<h4>Seccion de video</h4>
    <a href="https://youtu.be/emjucbFp4mo" >https://youtu.be/emjucbFp4mo</a>

  <p>•  Funciones racionales. Graficar una funcion racional f(x) = p(x) / q(x) es un poco más complicado que graficar una función polinomial porque además de estar atento a las intersecciones, simetria y desplazamiento/reflexión/estiramiento de graficas conocidas, tambien es necesario prestar atencion al dominio f y los grados de p(x) y q(x).


</p>
  <p>• Intersecciones de funciones racionales. La interseccion y de la grafica de f(x) = p(x) / q(x) es el punto (0, p0) en el supuesto de que 0 esta en el dominio de f. La unica forma en que es posible que f(x) = p(x) / q(x) es cuando p(x) = 0. Asi para f(x) = (1 – x) / x, 1 – x = 0 se obtiene x = 1 y entonces (1, 0) es una intersección x de la gráfica f.</p>
  <p>• Asintonas. La grafica de una funcion racional f(x) = p(x) / q(x) puede tener varias asintonas. Las asintonas pueden ser una recta horizontal, una recta vertical o una recta inclinada. En un nivel práctico, las asintonas vertical y horizontal de la gráfica de una funcion racional f pueden determinarse por inspeccion.</p>
  <img src="img/3-11.png" alt="">
  <p>Ejemplo 5. Graficas de funciones racionales.</p>
  <a href="https://youtu.be/emjucbFp4mo" >https://youtu.be/emjucbFp4mo</a>
<p>•  Grafica con un hueco. Se sabe que si q(a) = 0 y p(x) y q(x) no tienen factores comunes, entonces la recta x = a necesariamente es una asintona vertical para la grafica f. Sin embargo, cuando p(a) = 0 y q(a) = 0, entonces x = a puede no ser una asintona; en la gráfica puede haber simplemente un hueco.</p>
    <!-- Aqui finaliza el contenido de la pagina -->
  </div>
  </center>
  </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Ingeniería de sistema</small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
