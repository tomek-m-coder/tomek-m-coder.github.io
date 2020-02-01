<!--
#1: Portfolio powinno mieć welcome section z id welcome-section.

#2: Welcome section powinna zawierać element h1 element, który ma jakiś tekst.

#3: Portfolio powinno mieć sekcję projekty z id projects.

#4: Sekcja projekty powinna zawierać przynajmniej 6 elementów z klasą project-tile, w której będą umieszczone projekty

#5: Sekcja projekty powinna zawierać linki do Twoich projektów

#6: Portfolio powinno mieć navbar (nawigację) z id navbar

#7: Navbar powinnien zawierać linki, w które mogę kliknąć, żeby poruszać się po różnych sekcjach strony

#8: Portfolio powinno mieć link z id profile-link, który przekieruje mnie na stronę GitHub, gdzie mogę obejrzeć Twój kod

#9: Portfolio powinno mieć 2 media query

#10: Wysokość welcome section powinno wynosić 100vh

#11: Navbar powinien być zawsze widoczny na stronie, nawet jak użytkownik skroluje
-->

<?php
$imie = "Tomek";
$rok = date('Y');
$wiek = $rok - 2008;
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<!-- Welcome section -->
    <p>Cześć! Jestem <?php echo $imie ?>, mam <?php echo $wiek ?> lat  i razem z
      <a href="https://rita-s.github.io/" target="_blank">mamą</a>
      uczę się programować.
    </p>

    <p>Interesuję się... lubię... Programowanie jest dla mnie...</p>

    <p>Poniżej znajdziecie moje projekty, które zrobiłem podczas ferii zimowych w 2020 roku.</p>
<!-- Projects -->



<!-- Contact -->
    <p>Jeśli chcesz się ze mną skontaktować to możesz do mnie napisać na adres
      <a href="mailto:tomekmilkowski4@gmail.com">e-mail</a>.
    </p>

    <footer>&copy; <?php echo $imie ." | " . $rok?></footer>
  </body>
</html>
