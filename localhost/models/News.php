<?php

require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/account_info.php');

class News extends account_info{

	

	public static function getNewsItemById($id)  // возвращает новость по индификатору
	{
		$id = intval($id);
		
		if ($id){
			
		    /* $host = 'localhost';
		     $dbname = 'mvc_site';
		     $user = 'root';
		     $password = '';
		     $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);  // при помощи этого обьекта общаемся с базой данных
		 */
		          // Пока не удаляю вдруг еще пригодится                           
		     
			// $db = Db::getConnection();  // как говорил дима, повторяющий код это (эмоции) плохо
			 
			 $result = $db->query('SELECT * from news WHERE id=' .$id);
		     $result->setFetchMode(PDO::FETCH_ASSOC);
		
		     $newsItem = $result->fetch();
		     return $newsItem; 
		}
		
	}
	public static function getNewsList()    // а этот метод возвращает список новостей
	{
	   
	  
	   /* $host = 'localhost';
		$dbname = 'mvc_site';
		$user = 'root';
		$password = '';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);  // при помощи этого обьекта общаемся с базой данных
		  

		            //   пока пусть тоже повисит здесь */
					   
		   
		//$db = Db::getConnection();
		
		$newsList = array();
		$result = $db->query('SELECT id, title, date, author_name, short_content FROM news ORDER BY id ASC LIMIT 10'); // заработало и на том спасибо
		$i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}
		return $newsList;
	}
}

?>