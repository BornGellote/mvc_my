<p>Главная страница</p>
<p><? //echo $name; ?></p>
<? foreach ($news as $val): ?>
	<h3><? echo $val['title']; ?></h3>
	<p><? echo $val['description']; ?></p>
	<hr>
<? endforeach; ?>