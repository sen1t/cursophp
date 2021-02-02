<html>
<head>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<section class='titulo'>
<h1>Conversor De Moedas</h1>
<h3>Informe um valor, e escolha a opção de conversão. O sistema dará ambos os resultados!</h3>
</section>
<section class='formulario'>
<form action="#" method="get">
     <p>
     <input type="text" name="valor1" id="valor1" required placeholder='Informe um valor'>
     </p>
     <p>
    <select name='opc' id='opc'>

    <option value='default'>
         Escolha uma opção
    </option>

    <option value='rd'>
         Dólar Para Real
    </option>

    <option value='de'>
         Dólar Para Euro
    </option>

    <option value='er'>
         Euro Para Real
    </option>
    
     <select>
     </p>
     <p>
     <button>Converter Moeda</button>
     </p>
    
</form>
</section>




<?php      
     $json_url = "https://economia.awesomeapi.com.br/json/all";  //Pegar a cotação atual do dólar
     $json = file_get_contents($json_url);// Pegar os dados da url e coloca na varial $json

     $moedas = json_decode($json); // a variavel moeda recebe o json via funcao json_decode
     
     $euro = array();   
     $dolar = array(); // converte a varial dolar para array
     $euro = $moedas->EUR; // a variavel dolar recebe um objeto do json e o transforma em array
     $dolar = $moedas->USD; // a variavel dolar recebe um objeto do json e o transforma em array

     $dolar_cotacao_atual = $dolar-> high;// high é a cotação maxima do momento
     $euro_cotacao_atual = $euro-> high;// high é a cotação maxima do momento
     
     function euroReal($valor_recebido , $euro_cotacao_atual){

        $realparaeuro =  $valor_recebido / $euro_cotacao_atual;
        $europarareal =  $valor_recebido * $euro_cotacao_atual;

        $europarareal = number_format($europarareal, 2, '.', ',');
        $realparaeuro = number_format($realparaeuro, 2, '.', ',');
        
        
        $html = "<table border='1'";
        $html .= "<tr border='1' >";
        $html .= "<th colspan='2'>";
        $html .= "Valor para base do cálculo: ".$valor_recebido;
        $html .= '</th>';
        $html .="</tr>";
        $html .= '<tr>';
        $html .= '<th>';
        $html .= "EURO PARA REAL";
        $html .= '</th>';
        $html .= '<th>';
        $html .= "REAL PARA EURO";
        $html .= '</th>';
        $html .= '</tr>';
        $html .= "<tbody>";
        $html .= "<td align='center'>";
        $html .=  "R$ ". $europarareal;
        $html .= "</td>";
        $html .= "<td align='center'>";
        $html .=  "€ ".$realparaeuro;
        $html .= "</td>";
        $html .= "<tbody>";
        $html .= '</table>';
        


        return $html;

    }   


    function euroDolar($valor_recebido , $euro_cotacao_atual, $dolar_cotacao_atual){

        $dolarparaeuro =   $valor_recebido *($dolar_cotacao_atual/$euro_cotacao_atual);
        $europaradolar =  $valor_recebido *($euro_cotacao_atual/$dolar_cotacao_atual);

        $europaradolar = number_format($europaradolar, 2, '.', ',');
        $dolarparaeuro = number_format($dolarparaeuro, 2, '.', ',');
        
        
        $html = "<table border='1'";
        $html .= "<tr border='1' >";
        $html .= "<th colspan='2'>";
        $html .= "Valor para base do cálculo: ".$valor_recebido;
        $html .= '</th>';
        $html .="</tr>";
        $html .= '<tr>';
        $html .= '<th>';
        $html .= "EURO PARA DOLAR";
        $html .= '</th>';
        $html .= '<th>';
        $html .= "DOLAR PARA EURO";
        $html .= '</th>';
        $html .= '</tr>';
        $html .= "<tbody>";
        $html .= "<td align='center' title='Euro para Dólar'>";
        $html .=  "$ ". $europaradolar;
        $html .= "</td>";
        $html .= "<td align='center' title='Dólar para Euro'>";
        $html .=  "€ ".$dolarparaeuro;
        $html .= "</td>";
        $html .= "<tbody>";
        $html .= '</table>';
        


        return $html;

    }   

    function dolarReal($valor_recebido , $dolar_cotacao_atual){

            $realparadolar =  $valor_recebido / $dolar_cotacao_atual;
            $dolarparareal =  $valor_recebido * $dolar_cotacao_atual;

            $dolarparareal = number_format($dolarparareal, 2, '.', ',');
            $realparadolar = number_format($realparadolar, 2, '.', ',');
            
            
            $html = "<table border='1'";
            $html .= "<tr border='1' >";
            $html .= "<th colspan='2'>";
            $html .= "Valor para base do cálculo: ".$valor_recebido;
            $html .= '</th>';
            $html .="</tr>";
            $html .= '<tr>';
            $html .= '<th>';
            $html .= "DOLAR PARA REAL";
            $html .= '</th>';
            $html .= '<th>';
            $html .= "REAL PARA DÓLAR";
            $html .= '</th>';
            $html .= '</tr>';
            $html .= "<tbody>";
            $html .= "<td align='center' title='$valor_recebido Dólar = $dolarparareal Real'>";
            $html .=  "R$ ".$dolarparareal;
            $html .= "</td>";
            $html .= "<td align='center'title='$valor_recebido Real = $realparadolar Dólar(es)'>";
            $html .=  "$ ".$realparadolar;
            $html .= "</td>";
            $html .= "<tbody>";
            $html .= '</table>';
            


            return $html;

     }
    

     if(isset($_GET['valor1']) && isset($_GET['opc'])){
        $valor_recebido = $_GET['valor1'];
        $opc = $_GET['opc'];
     }else{
         $valor_recebido = 0;
         $opc = null;
     }

     if($opc == 'rd'){
        print_r(dolarReal($valor_recebido, $dolar_cotacao_atual));
     }elseif($opc == 'er'){
        print_r(euroReal($valor_recebido, $euro_cotacao_atual));
     }elseif($opc == 'de'){
        print_r(euroDolar($valor_recebido, $euro_cotacao_atual, $dolar_cotacao_atual));
     }else{
         echo "
        <script>
            alert('É necessário informar uma opção!!!');
        </script>
        ";
        
     }
     

    
    

     
?>

</body>
<footer>
    Desenvolvido Por Gabriel siqueira dos santos
</footer>
</html>