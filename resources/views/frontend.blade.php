<!--
  I linked a CSS file to this file. 
  Because adding the CSS codes inline (on the same tags ) or in the head tag will make the file so crowded. 
  It is better to put them all in a different file and connect it with a Link tag.
  ----------------------- :
  There are some new classes which i added to some Tags. I needed to add those Classes so i can use them for adding the CSS styles. 
  I did not change any ID or Classes that were writteen before i only added new Classes and tried to make their name as clear as possible.
-->

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- I added this Link Tag in order to connect the CSS file to the HTML file.
    Maybe the (href) needs to be changed ! because now the location of the CSS file is changed so the new location or Url should be added.-->
    <link rel="stylesheet" href="index.css">

    <title>Gottesdienst Planer</title>

</head>

<body>


    <form class="form" action="https://demo.wo2odermehr.de/frontend" method="post">
        <input type="hidden" name="_token" value="j0zFZONqzj202eK8g2tYc2ebXnQ8DYQnCYk3O4zg"> <input type="hidden" name="uuid" value="4b858c45-4921-44fa-a154-e9cd5d07e98d" />
        <fieldset class="field">
            <!-- Here i added this Label tag so i can apply the styles to the text also -->
            <label class="name-input" for="name" id="name">Mein Name:</label>
            <input class="name-input" type="text" id="name" name="name" required value=""><br/>
        </fieldset>
        <fieldset class="field" class="main-field">
            <p>Bitte Gottesdienst wählen:
                </><br/>
                <table>
                    <tr>
                        <td>
                            <input class="left-side" type="radio" id="service-1" name="service_id" value="1" required>
                            <label class="left-side" for="service-1">9:00 Uhr Frühgottesdienst</label>
                        </td>
                        <td class="right-side">
                            Momentan 4 Besucher </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="left-side" type="radio" id="service-2" name="service_id" value="2" required>
                            <label class="left-side" for="service-2">10:30 Uhr für Familien, mit parallelem Kinderprogramm</label>
                        </td>
                        <td class="right-side">
                            Momentan 2 Besucher </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="left-side" type="radio" id="service-3" name="service_id" value="3" required>
                            <label class="left-side" for="service-3">15:00 Nachmittagsgottesdienst</label>
                        </td>
                        <td class="right-side">
                            Momentan 0 Besucher </td>
                    </tr>
                </table>
        </fieldset>

        <fieldset class="field">
            <input class="persons-num-input" type="number" id="quantityAdults" name="count_adults" min="1" max="9" value="1" required>
            <label class="persons-num-label" for="quantityAdults">Anzahl Besucher</label>
            <input type="hidden" id="quantityChildren" name="count_children" value="0" />
        </fieldset>

        <input class="submit-btn" type="submit" value="Bestätigen">
    </form>

</body>

</html>
