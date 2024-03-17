<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Tunnelbana</title>
</head>

<body>
    <div>
        <form method="post" action="#">
            <label for="from_User_station">From which station you want to go from</label>
            <select name="from_User_station" id="from_User_station">
            <!--en form id som innehåller stationer från users input  -->
                <option value="">--- Choose a station ---</option>
                <option value="">Hagsätra</option>
                <option value="">Rågsved</option>
                <option value="">Högdalen</option>
                <option value="">Bandhagen</option>
                <option value="">Stureby</option>
                <option value="">Svedmyra</option>
                <option value="">Sockenplan</option>
                <option value="">Enskede Gård</option>
                <option value="">Globen</option>
                <option value="">Gullmarsplan</option>
                <option value="">Skanstull</option>
                <option value="">Medborgarplatsen</option>
                <option value="">Slussen</option>
                <option value="">Gamla Stan</option>
                <option value="">T-Centralen</option>
                <option value="">Hötorget</option>
                <option value="">Rådmansgatan</option>
                <option value="">Odenplan</option>
                <option value="">Fridhemsplan</option>
                <option value="">Thorildsplan</option>
                <option value="">Kristineberg</option>
                <option value="">Alvik</option>
                <option value="">Stora Mossen</option>
                <option value="">Abrahamsberg</option>
                <option value="">Brommaplan</option>
                <option value="">Åkeshov</option>
                <option value="">Ängbyplan</option>
                <option value="">Islandstorget</option>
                <option value="">Blackeberg</option>
                <option value="">Råcksta</option>
                <option value="">Vällingby</option>
                <option value="">Johannelund</option>
                <option value="">Hässelby Gård</option>
                <option value="">Hässelby Strand</option>
                
            </select>


            <label for="to_User_station">Which station are you going to</label>
            <select name="to_User_station" id="to_User_station">
                 <!--en form id som innehåller stationer till från  users input  -->
                <option value="">--- Choose a station ---</option>
                <option value="">Hagsätra</option>
                <option value="">Rågsved</option>
                <option value="">Högdalen</option>
                <option value="">Bandhagen</option>
                <option value="">Stureby</option>
                <option value="">Svedmyra</option>
                <option value="">Sockenplan</option>
                <option value="">Enskede Gård</option>
                <option value="">Globen</option>
                <option value="">Gullmarsplan</option>
                <option value="">Skanstull</option>
                <option value="">Medborgarplatsen</option>
                <option value="">Slussen</option>
                <option value="">Gamla Stan</option>
                <option value="">T-Centralen</option>
                <option value="">Hötorget</option>
                <option value="">Rådmansgatan</option>
                <option value="">Odenplan</option>
                <option value="">Fridhemsplan</option>
                <option value="">Thorildsplan</option>
                <option value="">Kristineberg</option>
                <option value="">Alvik</option>
                <option value="">Stora Mossen</option>
                <option value="">Abrahamsberg</option>
                <option value="">Brommaplan</option>
                <option value="">Åkeshov</option>
                <option value="">Ängbyplan</option>
                <option value="">Islandstorget</option>
                <option value="">Blackeberg</option>
                <option value="">Råcksta</option>
                <option value="">Vällingby</option>
                <option value="">Johannelund</option>
                <option value="">Hässelby Gård</option>
                <option value="">Hässelby Strand</option>
            </select>


            <input type="submit" value="Submit your choice" method="post">
            <!--button för  submita-->
        </form>
    </div>
</body>
</html>




 <?php 
        $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
        'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];

 
        // METHOD 1 i dont work when it should becuase time keeps just updating 


        // $Indexend = array_search($_POST['to_User_station'], $linje19);
        // $IndexStart = array_search($_POST['from_User_station'], $linje19);
        // $Time = abs($Indexend - $IndexStart) * 3; // Tid i minuter
    
        // // Formatera och skriv ut den förväntade ankomsttiden (timmar och minuter)
        // $currentHour = date('H'); // Aktuell timme
        // $currentMinute = date('i'); // Aktuell minut
        // $totalMinutes = intval($currentHour) * 60 + intval($currentMinute) + $Time; // Totala minuter under resan
        // $arrivalHour = floor($totalMinutes / 60); // Extrahera timdelen
        // $arrivalMinute = $totalMinutes % 60; // Extrahera minuten
    
        // echo "Time : " . $currentHour . ":" . $currentMinute . "<br>";
        // echo "Arival time : " . $arrivalHour . ":" . $arrivalMinute;
 
    

    // </body>-->
//method 2 with loop, still dont work because it doesnt print out the answear when it should

// Kontrollera om formuläret har skickats
if (isset($_POST["submit"])) {
    // Hämta start- och slutstationernas värden från formuläret
    $start = $_POST["start"];
    $end = $_POST["end"];
    
    // Hitta indexen för start och slutstationerna i arrayen $linje19
    $startid = array_search($start, $linje19);
    $endid = array_search($end, $linje19);    
    
    // Beräkna den totala restiden i minuter
    $final_mins = abs($endid - $startid) * 3;
    
    // Om den totala restiden är 60 minuter eller mer, beräkna timmar och minuter
    if ($final_mins >= 60) {
        $mins = $final_mins % 60;
        $h = round(($final_mins / 60)); // Avrunda antalet timmar
        $arrival_time = "$h timme och $mins minuter";
    } else {
        // Om den totala restiden är mindre än 60 minuter, visa bara minuter
        $arrival_time = "$final_mins minuter";
    }

    // skriver ut  den förväntade ankomsttiden mEn den gör inte det  
    echo "Din förväntade ankomsttid är: $arrival_time";
}
?>

    