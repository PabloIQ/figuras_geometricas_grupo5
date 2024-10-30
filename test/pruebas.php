<?php
// Incluir archivos de clase (ajustar según la estructura de tu proyecto)
require_once 'FigurasGeometricas.php';
require_once 'Punto.php';
require_once 'Cuadrado.php';

// Crear una instancia de Punto para usar como esquina del cuadrado
$esquina = new Punto(0, 0); // Ajusta los valores según tu implementación de Punto

// Crear una instancia de Cuadrado
$lado = 5.0; // Puedes ajustar el valor del lado para probar diferentes resultados
$cuadrado = new Cuadrado($lado, $esquina);

// Pruebas para verificar el área y el perímetro
echo "Lado del cuadrado: " . $cuadrado->getLado() . "\n";
echo "<br>";

// Prueba del área
$areaEsperada = $lado * $lado;
$areaCalculada = $cuadrado->area();
echo "Área esperada: " . $areaEsperada . "\n";
echo "<br>";
echo "Área calculada: " . $areaCalculada . "\n";
echo "<br>";
echo ($areaCalculada === $areaEsperada) ? "Área es correcta\n" : "Área es incorrecta\n";
echo "<br>";

// Prueba del perímetro
$perimetroEsperado = $lado * 4;
$perimetroCalculado = $cuadrado->perimetro();
echo "Perímetro esperado: " . $perimetroEsperado . "\n";
echo "<br>";
echo "Perímetro calculado: " . $perimetroCalculado . "\n";
echo "<br>";
echo ($perimetroCalculado === $perimetroEsperado) ? "Perímetro es correcto\n" : "Perímetro es incorrecto\n";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// Incluir archivo de clase (ajustar según la estructura de tu proyecto)
require_once 'FigurasGeometricas.php';
require_once 'Triangulo.php';

// Crear una instancia de Triangulo
$base = 5.0;
$altura = 4.0;
$lado1 = 5.0;
$lado2 = 4.0;
$lado3 = 3.0;

// Crea una instancia de Triangulo
$triangulo = new Triangulo(null, $base, $altura, $lado1, $lado2, $lado3);

// Pruebas para verificar el área y el perímetro
echo "Base del triángulo: " . $triangulo->getBase() . "\n";
echo "<br>";
echo "Altura del triángulo: " . $triangulo->getAltura() . "\n";
echo "<br>";

// Prueba del área
$areaEsperada = ($base * $altura) / 2;
$areaCalculada = $triangulo->area();
echo "Área esperada: " . $areaEsperada . "\n";
echo "<br>";
echo "Área calculada: " . $areaCalculada . "\n";
echo "<br>";
echo ($areaCalculada === $areaEsperada) ? "Área es correcta\n" : "Área es incorrecta\n";
echo "<br>";

// Prueba del perímetro
$perimetroEsperado = $lado1 + $lado2 + $lado3;
$perimetroCalculado = $triangulo->perimetro();
echo "Perímetro esperado: " . $perimetroEsperado . "\n";
echo "<br>";
echo "Perímetro calculado: " . $perimetroCalculado . "\n";
echo "<br>";
echo ($perimetroCalculado === $perimetroEsperado) ? "Perímetro es correcto\n" : "Perímetro es incorrecto\n";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// Incluir archivos de clase (ajustar según la estructura de tu proyecto)
require_once 'FigurasGeometricas.php';
require_once 'Circulo.php';

// Crear una instancia de Circulo
$radio = 3.0;
$centro = new Punto(0, 0); // Suponiendo que la clase Punto está definida y acepta coordenadas

$circulo = new Circulo($centro, $radio);

// Pruebas para verificar el área y el perímetro
echo "Radio del círculo: " . $circulo->getRadio() . "\n";
echo "<br>";

// Prueba del área
$areaEsperada = pi() * ($radio * $radio);
$areaCalculada = $circulo->area();
echo "Área esperada: " . $areaEsperada . "\n";
echo "<br>";
echo "Área calculada: " . $areaCalculada . "\n";
echo "<br>";
echo ($areaCalculada === $areaEsperada) ? "Área es correcta\n" : "Área es incorrecta\n";
echo "<br>";

// Prueba del perímetro
$perimetroEsperado = 2 * pi() * $radio;
$perimetroCalculado = $circulo->perimetro();
echo "Perímetro esperado: " . $perimetroEsperado . "\n";
echo "<br>";
echo "Perímetro calculado: " . $perimetroCalculado . "\n";
echo "<br>";
echo ($perimetroCalculado === $perimetroEsperado) ? "Perímetro es correcto\n" : "Perímetro es incorrecto\n";
?>

