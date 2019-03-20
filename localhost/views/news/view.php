<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Статья про людей</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#">Homepage</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		
	</div>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1>HOMO </a></h1>
				<p>Статья</a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
							&nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Back to HomePage</a></p>
						<div class="entry">
							<p><img src="/template/images/08.jpg" width="800" height="500" alt="" /></p>
							<p><?php echo $newsItem['short_content'];?></p>
						</div>
					</div>
					<p><a href='/news/' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Слогон</h2>
							<p>Чем ниже человек душой, тем выше задирает нос. Он носом тянется туда, куда душою не дорос.</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="#">Отсутствие фантазии№1</a></li>
								<li><a href="#">Отсутствие фантазии№2</a></li>
								<li><a href="#">Отсутствие фантазии№3</a></li>
								<li><a href="#">Отсутствие фантазии№4</a></li>
								<li><a href="#">Отсутствие фантазии№5</a></li>
								<li><a href="#">Отсутствие фантазии№6</a></li>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">Отсутствие фантазии№1</a></li>
								<li><a href="#">Отсутствие фантазии№2</a></li>
								<li><a href="#">Отсутствие фантазии№3</a></li>
								<li><a href="#">Отсутствие фантазии№4</a></li>
								<li><a href="#">Отсутствие фантазии№5</a></li>
								<li><a href="#">Отсутствие фантазии№6</a></li>
							</ul>
						</li>
						<li>
							<h2>Archives</h2>
							<ul>
								<li><a href="#">Отсутствие фантазии№1</a></li>
								<li><a href="#">Отсутствие фантазии№2</a></li>
								<li><a href="#">Отсутствие фантазии№3</a></li>
								<li><a href="#">Отсутствие фантазии№4</a></li>
								<li><a href="#">Отсутствие фантазии№5</a></li>
								<li><a href="#">Отсутствие фантазии№6</a></li>
							</ul>
						</li>
					</ul>
				</div>
			
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	
</div>
<div id="footer">
	<p>Надеин Олег 19.03.2019</a>.</p>
</div>

</body>
</html>
