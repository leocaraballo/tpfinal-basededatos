<?php    
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/Modelos/Conexion.inc.php');
    Conexion::openConnection();

    $Conexion = Conexion::getConnection();
    

    $ID = $_REQUEST["ID"];
    $Codigo;
    $DescripcionProducto;
    $Marca;
    $Nombre;
    $RNPA;

    $CUIT;
    $Email;
    $Empresa;
    $Direccion;
    $RNE;
    $Telefono;

    $CodigoUV;
    $Descripcion;
    $Material;
    $Tipo;
    $Retiro;
    $Peso;
    $Volumen;

    $Cantidad;
    $Emision;
    $Entrada;
    $Vencimiento;
    $Numero;

    $Categoria;

      $Operacion = (" SELECT
      producto.Codigo, producto.Descripcion as DescripcionProducto, producto.Marca, producto.Nombre, producto.RNPA,
      
      unidad_venta.Codigo as CodigoUV, unidad_venta.Descripcion_Extra as Descripcion, 
          unidad_venta.Envase_Material as Material, unidad_venta.Envase_Paquete as Tipo, 
          unidad_venta.Fecha_Retiro as Retiro, unidad_venta.Peso, unidad_venta.Volumen,

      empresa_proveedora.CUIT, empresa_proveedora.Direccion, empresa_proveedora.Email,
	      empresa_proveedora.Nombre as 'Empresa', empresa_proveedora.RNE, empresa_proveedora.Telefono,
      
      lote.Cantidad, lote.Fecha_Emision as Emision, lote.Fecha_Entrada as Entrada, 
          lote.Fecha_Vcto as Vencimiento, lote.Numero,

      categoria.Nombre as Categoria
      FROM
      (((((
      producto INNER JOIN unidad_venta
      ON
      producto.Codigo = unidad_venta.Producto_Codigo_FK)
      INNER JOIN empresa_proveedora
      ON
      empresa_proveedora.RNE = producto.Empresa_Proveedora_RNE_FK)
      INNER JOIN lote
      ON
      lote.Numero = unidad_venta.Lote_Numero_FK)
      INNER JOIN pertenece_a
      ON
      producto.Codigo = pertenece_a.Producto_Codigo_FK)
      INNER JOIN categoria
      ON
      categoria.Nombre = pertenece_a.Categoria_Nombre_FK)
      WHERE unidad_venta.Codigo = $ID;");

      $Resultado = $Conexion->query($Operacion);

      foreach($Resultado as $Valor){
        $Codigo = $Valor["Codigo"];
        $DescripcionProducto = $Valor["DescripcionProducto"];
        $Marca = $Valor["Marca"];
        $Nombre = $Valor["Nombre"];
        $RNPA = $Valor["RNPA"];

        $CUIT = $Valor["CUIT"];
        $Email = $Valor["Email"];
        $Empresa = $Valor["Empresa"];
        $Direccion = $Valor["Direccion"];
        $RNE = $Valor["RNE"];
        $Telefono = $Valor["Telefono"];

        $CodigoUV = $Valor["CodigoUV"];
        $Descripcion = $Valor["Descripcion"];
        $Material = $Valor["Material"];
        $Tipo = $Valor["Tipo"];
        $Retiro = $Valor["Retiro"];
        $Peso = $Valor["Peso"];
        $Volumen = $Valor["Volumen"];

        $Cantidad = $Valor["Cantidad"];
        $Emision = $Valor["Emision"];
        $Entrada = $Valor["Entrada"];
        $Vencimiento = $Valor["Vencimiento"];
        $Numero = $Valor["Numero"];

        $Categoria = $Valor["Categoria"];
      }

require('fpdf.php');

class PDF extends FPDF
{

// Page header
function Header()
{
    // Logo
    $this->Image('Logo.png',35,6,30);
    // Arial bold 15
    $this->SetFont('Arial','IU',24);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(100,10,'Supermercado "SuperCaro"' ,0,1,'C');
    $this->Cell(80);
    $this->SetFont('Arial','IU',15);
    $this->Cell(100,10,'Informe general' ,0,0,'C');

    // Line break
    $this->Ln(30);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}


    





// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P', 'A4');

$pdf->Cell(50);
$pdf->SetFont('Arial','BIU',15);
$pdf->Cell(100,10,'Informacion del producto' ,0,1,'C');

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Codigo:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Codigo ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Empresa proveedora:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           Referirse a la pagina 2' ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Categoria:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Categoria ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'RNPA:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$RNPA ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Nombre del producto:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Nombre ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Marca:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5, '           '.$Marca ,0,'L');
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Descripcion:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5, '           '.$DescripcionProducto ,0,'L');





$pdf->AddPage('P', 'A4');

$pdf->Cell(50);
$pdf->SetFont('Arial','BIU',15);
$pdf->Cell(100,10,'Informacion de la empresa proveedora' ,0,1,'C');

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'RNE:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$RNE ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Nombre:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Empresa ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'CUIT:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$CUIT ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Direccion:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Direccion ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Email:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Email ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Telefono:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5, '           '.$Telefono ,0,'L');
$pdf->Ln(5);






$pdf->AddPage('P', 'A4');

$pdf->Cell(50);
$pdf->SetFont('Arial','BIU',15);
$pdf->Cell(100,10,'Informacion del lote' ,0,1,'C');

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Nro del lote:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Numero ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Fecha de emision:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Emision ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Fecha de entada:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Entrada ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Fecha de vencimiento:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Vencimiento ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Cantidad:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Cantidad.' unidades' ,0,2);
$pdf->Ln(5);





$pdf->AddPage('P', 'A4');

$pdf->Cell(50);
$pdf->SetFont('Arial','BIU',15);
$pdf->Cell(100,10,'Informacion de la unidad' ,0,1,'C');

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Codigo de producto:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$CodigoUV ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Tipo de envase:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Tipo ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Material del envase:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Material ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Peso:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Peso.' kg' ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Volumen:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Volumen ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Fecha de retiro:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Retiro ,0,2);
$pdf->Ln(5);

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,10,'Descripcion adicional:  ',0,2);
$pdf->SetFont('Times','',12);
$pdf->Cell(0,5, '           '.$Descripcion ,0,2);
$pdf->Ln(5);





$pdf->AddPage('P', 'A4');

$pdf->SetFont('Times','B',12);
$pdf->Cell(80, 0, '', 0, 1);
$pdf->Cell(0,10,'Espacio para notas  ',0,1, 'C');
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');
$pdf->MultiCell(0,5, '________________________________________________________________________________________' ,0,'L');


$pdf->Output();














?>