<?php
class Router
{
	private $routes;
	public function __construct()
	{
		$routesPath= ROOT.'/config/routes.php';  // указали путь к роутам
		$this->routes = include ($routesPath);  // здесь были эмоции
	}
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])){     // получить строку запроса
			return trim($_SERVER['REQUEST_URI'], '/');	
		}
	}
	public function run()
	{
		$uri = $this->getURI();
		foreach ($this->routes as $uriPattern => $path){  // проверить наличие такого запроса в rutes.php
			
			
			if (preg_match("~$uriPattern~", $uri)){  // Сравниваем $uriPatern и $uri
			
			$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
			
			$segments = explode( '/',$internalRoute);
			
			$controllerName = array_shift($segments).'Controller';  // получаем имя контролера
			$controllerName = ucfirst($controllerName); // делаем первую букву заглавной
			
			$actionName = 'action'.ucfirst(array_shift($segments));
			
			$parameters = $segments;
			
			
			$controllerFile = ROOT . '/controllers/' . $controllerName . '.php'; 
			// подключаем файл класса контролера
			if (file_exists($controllerFile)){ // проверяем заодно есть ли этот файл на диске
				include_once($controllerFile);
			}
			$controllerObject = new $controllerName;
			
			
			$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
			
			if ($result != null) {
				break;
			}
			}
		}
	}
}
?>