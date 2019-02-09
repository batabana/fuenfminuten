
<?php
include('config.php');
if(!empty($_POST)) {
  try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->prepare("INSERT INTO contacts (name, `alter`) VALUES (:name, :alter)"); 
    $sth->bindParam(':name', $_POST['name']);
    $sth->bindParam(':alter', $_POST['alter']);
  
    if(!$sth->execute()) {
      $execErr = "Fehler beim Speichern der Daten";
    }

    $sth = null;
    $dbh = null;

  } catch(PDOException $e) {
    $connErr = "keine Verbindung zur Datenbank möglich: ".$e->getMessage();
  }
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo</a>
            <!-- <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#start">Start</a>
                <a class="nav-item nav-link" href="#anmeldung">Anmeldung</a>
                <a class="nav-item nav-link" href="#faq">FAQ</a>
                <a class="nav-item nav-link" href="#">Impressum</a>
                <a class="nav-item nav-link" href="#">Datenschutz</a>
            </div>
        </nav>
        <!-- <header>
            <div class="jumbotron jumbotron-fluid">
                <img src="assets/header.jpg" class="img-fluid" alt="header" />
                <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This
                        content is a little bit longer.
                    </p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>
        </header> -->
        <main>
            <?php 
                echo $execErr; 
                echo $connErr; 
              ?>
            <section id="start">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2>Fünf Minuten</h2>
                            <h4>Die kürzesten Straßenkünstler-Aktionen Deutschlands</h4>
                            <p>
                                <span class="font-weight-bolder">Fünf Minuten</span>, das Kulturprojekt FÜR ALLE, die
                                Lust auf’s Tanzen und Musik-Spielen haben. Wir sind da, um die Straßenkünstler-Szene in
                                der Stadt und ihrer Umgebung anzusiedeln.
                            </p>
                            <p>
                                Du wählst einen Ort aus und da treten wir maximal 5 Minuten mit Livemusik und Tanz vor
                                einer Kamera auf. Ohne ein Publikum zu erwarten, ohne Ankündigung, nur für uns.
                                <span class="font-weight-bolder"
                                    >Ein Musiker*, zwei Tänzer*, eine Kamera und Chemnitz.</span
                                >
                            </p>
                            <p class="text-center">
                                Das Gute Gelingen ist zwar nichts Kleines, aber es fängt mit Kleinigkeiten an.” -
                                Sokrates
                            </p>
                            <p>
                                Dadurch wollen wir auch der Welt zeigen, dass die Entscheidung in der Hand jedes
                                Menschen liegt, das Alltagsleben etwas zu verbessern und den Ort, an dem wir leben, neu
                                zu entdecken und wertzuschätzen. Und auch zeigen, wie wir wirklich sind - die Menschen,
                                die hier leben!
                            </p>
                            <p>
                                Das Drehteam von fünf Minuten ist ab jetzt für euch bereit. Wir helfen euch, Spaß zu
                                verbreiten! :D
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="anmeldung">
                <div class="anmeldung">
                    <form action="/" method="post">
                        <h2>Sag’ uns, wie wir dich in Szene setzen können</h2>
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Ich heiße:</label>
                                <input name="name" class="form-control" type="text" />
                            </div>
                            <div class="col form-group">
                                <label>Alter:</label>
                                <input name="alter" class="form-control" type="text" placeholder="" />
                                <!-- <small class="form-text text-muted">
                                Geburtsdatum bei Minderjährigen, sonst reicht das Jahr
                            </small> -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Ich spiele mit folgenden Instrumenten:</label>
                                <input name="instrumente" class="form-control" type="text" />
                            </div>
                            <div class="col form-group">
                                <label>Folgende Musikrichtungen:</label>
                                <input name="musikrichtungen" class="form-control" type="text" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <span>Ich stelle Folgendes dar:</span>
                                <input name="disziplin" class="form-control" type="text" />
                            </div>
                            <div class="col form-group">
                                <span>Zu folgender Musik:</span>
                                <input name="musikbegleitung" class="form-control" type="text" />
                            </div>
                        </div>
                        <span>Wie können wir dich kontaktieren?</span>
                        <div class="form-row">
                            <div class="col form-group">
                                <span>E-Mail:</span>
                                <input name="e-mail" class="form-control" type="text" />
                            </div>
                            <div class="col form-group">
                                <span>Telefon:</span>
                                <input name="telefon" class="form-control" type="text" />
                            </div>
                            <div class="col form-group">
                                <span>Bevorzugte Kontaktzeiten:</span>
                                <input name="kontaktzeiten" class="form-control" type="text" />
                            </div>
                        </div>

                        <div class="form-group">
                            <span>Was bewegt dich, bei uns mitzumachen? Welche Wünsche erfüllt dir das Projekt?</span>
                            <textarea name="motivation" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <span>Anmerkungen:</span>
                            <textarea name="anmerkungen" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <span>Wie bist du auf uns aufmerksam geworden?</span>
                            <input name="woher" type="text" class="form-control" />
                        </div>
                        <input type="submit" class="btn btn-primary" value="submit" class="submit" />
                    </form>
                </div>
            </section>
            <section id="faq">
                <div class="container">
                    <p class="h4">Darf ich auch teilnehmen, wenn ich kein Chemnitzer bin?</p>
                    <p>
                        Das ist ein Projekt für alle, die Lust auf’s Tanzen und Musizieren haben. Teilnehmen dürfen alle
                        Menschen, die sich im Raum Chemnitz** bewegen. Du musst kein Chemnitzer sein, um mit uns
                        zusammen Spaß zu verbreiten! ;)
                    </p>
                    <h4>Muss ich nach Chemnitz kommen, um aufzutreten?</h4>
                    <p>
                        Nicht unbedingt. Folgende Kooperationsstädte sind auch dabei. Teile uns deinen gewünschten Ort
                        in einer dieser Städte mit und wir helfen dir, dort deinen Auftritt zu machen:
                    </p>
                    <p>
                        **Amtsberg, Annaberg-Buchholz, Aue, Augustusburg, Burgstädt, Burkhardtsdorf, Flöha, Frankenberg,
                        Hainichen, Jahnsdorf/Erzgebirge, Lichtenau, Limbach-Oberfrohna, Lößnitz, Mittweida,
                        Neukirchen/Erzgebirge, Niederdorf, Niederwiesa, Niederwürschnitz, Oelsnitz, Olbernhau,
                        Pockau-Lengefeld, Stollberg/Erzgebirge, Thalheim/Erzgebirge, Zwönitz
                    </p>
                    <p>
                        * Mit allen Personenbeschreibungen sprechen wir jedes Geschlecht an, verwenden in Texten aber
                        die jeweils kürzeste Variante.
                    </p>
                </div>
            </section>
        </main>
        <footer class="py-4 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">&copy; Fünf Minuten 2019</p>
            </div>
        </footer>
    </body>
</html>

