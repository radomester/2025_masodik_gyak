<?php
	require 'db.php';
	$db = getDb();
	$result = $db->query("select zene.id as id, eloado, cim, ev, nev, szam from zene left join hallgatas on hallgatas.zene_id = zene.id order by zene.id asc");
	$result2 = $db->query("select count(nev) as osszeg, sum(szam) as hallszam, zene.id as id from zene left join hallgatas on hallgatas.zene_id = zene.id group by zene.id order by zene.id asc");
	$zene = [];
	while($row=$result->fetchObject())
	{
		if(!isset($zene[$row->id]))
		{
			$zene[$row->id] = [
				'eloado' => $row->eloado,
			'cim'=>$row->cim,
			'ev' => $row->ev,
			'hallgatas' => [],
			'bejegyzes' => 0,
			'hallszam' => 0
			];
		}
		if(!empty($row->nev)){
	$zene[$row->id]['hallgatas'][] = ['nev' => $row->nev, 'szam' => $row->szam];
		}
	}
	while($row=$result2->fetchObject())
	{
		$zene[$row->id]['bejegyzes'] = $row->osszeg;
		$zene[$row->id]['hallszam'] = $row->hallszam;
	}
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ZH</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
    <body>
		<header>
			<h1>Karácsonyi zenék</h1>
			Hauber Henrik, ICLI3D
		</header>
		<main>
		<div class="zenek">
			<?php foreach($zene as $music):?>
			<div class="zene">
				<h2><?=$music['eloado']?>: <?=$music['cim']?></h2>
				<div class="dolt"><?=$music['ev']?></div>
				<br>
				<b>Meghallgatták:</b> <?=$music['hallszam']?> (<?=$music['bejegyzes']?> személy)
				<?php if(!empty($music['hallgatas'])):?>
				<ul>
				<?php foreach($music['hallgatas'] as $hallgatas):?>
						<li><b><?=$hallgatas['nev']?>:</b> <?=$hallgatas['szam']?></li>
				<?php endforeach;?>
				</ul>
				<?php else:?>
					<p>Nincs adat</p>
				<?php endif;?>
			</div>
			<?php endforeach;?>
		</div>
	<h3>Meghallgattam</h3>
	<form action="listen.php" method="post">
		<label for="zene">Zene:</label>
		<select id="zene" name="id" required>
			<?php foreach($zene as $key=>$music):?>
				<option value="<?=$key?>"><?=$music['cim']?></option>
			<?php endforeach;?>
		</select>
		<br>
		<br>
		<label for="nev">Név:</label>
		<input type="text" name="nev" id="nev" required>
		<br>
		<br>
		<label for="szam">Alkalmak:</label>
		<input type="number" name="szam" id="szam" required>
		<br>
		<br>
		<input type="submit" value="Küldés">
		</form>
		</main>
        
    </body>
</html>
