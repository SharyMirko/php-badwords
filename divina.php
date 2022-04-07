<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <?php
$divina_commedia = 'Nel mezzo di cammin di nostra vita,
mi ritrovai nel culo una matita.
Ahi che gioia,
ahi che dolor
era una carioca dodici color.
Esta selva m&#039incula si&#039 forte
tanto e&#039 duro che poco e&#039 piu&#039 morte.
Ma per dir del pen che vi beccai
mai potro&#039 scordar quel che provai. 
Tant&#039era nero lo mio culo a quel punto
che parea un orango m&#039avesse smunto.
La ove terminaa quel grosso bel fallo
li&#039 sovvemmi un nero crudo callo
che&#039 esto orango facemmi molto mallo.
Tal si ergea si&#039 grosso e bello,
che pareami la torre di un castello.
Una lonza vidi,
caddi supino,
mi disse: &quotMa quanto sei cretino &quot.
Venne la lupa,
di paura ancor tremo,
mi disse: &quotMa quanto sei scemo &quot.
Mi si avvicino&#039 una figura umana,
mi disse: &quotTua madre fa la puttana&quot.
Ribattei io, con voce rotta,
&quotLa tua fa la mignotta&quot.
L&#039uomo indico&#039, la&#039 verso il ruscello,
e nel mentre mi tocco&#039 l&#039uccello.
Diss&#039io: &quotSei grosso come un bastione &quot.
Rispuosemi ello: &quotNo, sono un ricchione&quot.';
$censura = '*';
$bad = $_GET["parola"];
$divina_replaced = str_replace($bad, $censura, $divina_commedia);
?>
</head>
<body>
    <header>
        <img src="logoBD.webp" alt="">
        <div class="title"><h1>Dante e la divina</h1></div>
    </header>
    <main>
        <div class="text-search">
            <form action="divina.php" method="get">
                <input type="text" name="parola" placeholder="Parola da censurare">
                <button actions="submit">Censura</button>
            </form>
        </div>
        <div class="divin">
            <?= $divina_replaced ?>
        </div>
    </main>
</body>
</html>