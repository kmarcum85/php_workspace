<?php
    $city="Tampa";
    $country="US"; //Two digit country code
    $units="imperial";
    $apiKey="c2ddb7d81975d7c0c4f120a5b132abc9";
    $url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=".$units."&APPID=".$apiKey;
    $json=file_get_contents($url);
    $data=json_decode($json,true);
    //Get city used for the data
    echo "City: ".$data['name']." (ID: ".$data['id'].")<br>";
    //Get country used for the data
    echo "Country: ".$data['sys']['country']."<br>";
    //Get current Temperature in Celsius
    echo "Current Temperature: ".$data['main']['temp']."<br>";
    //Get weather condition
    echo "Current Conditions: ".$data['weather'][0]['main']."<br>";
    //Get cloud percentage
    echo "Current Cloudiness: ".$data['clouds']['all']."%<br>";
    //Get wind speed
    echo "Current Wind Speed: ".$data['wind']['speed']."<br>";
    //Get wind direction
    echo "Wind direction: ".$data['wind']['deg']."&#176;<br>";
?>

