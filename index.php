<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	<?php 
	
		// hw4

		//1

		echo "<p><strong>Task 1</strong></p>";
		$str = 'minsk';
		echo strtoupper($str);

		//2

		echo "<hr/><p><strong>Task 2</strong></p>";
		$date = '31-12-2030';
		$arr_date = explode('-', $date);
		echo $arr_date[2] . '.' . $arr_date[1] . '.' . $arr_date[0];

		//3

		echo "<hr/><p><strong>Task 3</strong></p>";
		$str = 'london is the capital of great britain';
		echo ucwords($str);

		//4

		echo "<hr/><p><strong>Task 4</strong></p>";
		$st = 2 ** 10;
		echo $st;

		//5

		echo "<hr/><p><strong>Task 5</strong></p>";
		$str = 'abc abc abc';
		echo strpos($str, 'b');

		//6

		echo "<hr/><p><strong>Task 6</strong></p>";
		$str = 'abc abc abc';
		echo strpos($str, 'b', 3);

		//7

		echo "<hr/><p><strong>Task 7</strong></p>";
		$str = 'html css php';
		echo '<pre>' . print_r(explode(' ', $str), true) . '</pre>';

		//8

		echo "<hr/><p><strong>Task 8</strong></p>";
		$str = '1234567890';
		echo '<pre>' . print_r(str_split($str, 2), true) . '</pre>';

		//9

		echo "<hr/><p><strong>Task 9</strong></p>";
		$str = '2468';
		echo str_shuffle($str);

		//10

		echo "<hr/><p><strong>Task 10</strong></p>";
		$str = 'html, <b>php</b>, js';
		echo strip_tags($str);

		//11

		echo "<hr/><p><strong>Task 11</strong></p>";
		echo date("d.m.Y G:i:s", strtotime('23 september 2031, 12:59:59'));

		//12

		echo "<hr/><p><strong>Task 12</strong></p>";
		date_default_timezone_set('Europe/Minsk');
		echo date("G:i:s d.m.Y");

		//13

		echo "<hr/><p><strong>Task 13</strong></p>";
		$a = date("w", mktime(0, 0, 0, 9, 1, 2010));
		$b = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
		echo $b[$a];

		//14

		echo "<hr/><p><strong>Task 14</strong></p>";
		echo date("t", time());

		//15

		echo "<hr/><p><strong>Task 15</strong></p>";
		echo date("Y-m-d / d.m.Y / d.m.y / H:i:s");

		//16

		echo "<hr/><p><strong>Task 16</strong></p>";
		$date = date('Y-m-d', strtotime('+2 days 1 month 3 days 1 year - 3 days'));
		echo $date;

		//17

		echo "<hr/><p><strong>Task 17</strong></p>";
		$password = '123';
		if (strlen($password) >= 5 && strlen($password) <= 10) echo 'Пароль подходит';
		else echo 'Пароль должен содердать от 5 до 10 символов';

		//18

		echo "<hr/><p><strong>Task 18</strong></p>";
		$str = '1a2b3c4b5d6e7f8g9h0';
		echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);

		//19

		echo "<hr/><p><strong>Task 19</strong></p>";
		echo sqrt(245);

		//20

		echo "<hr/><p><strong>Task 20</strong></p>";
		echo max(4, -2, 5, 19, -130, 0, 10) . '<br />';
		echo min(4, -2, 5, 19, -130, 0, 10);

		//21

		echo "<hr/><p><strong>Task 21</strong></p>";
		echo mt_rand(1,100);

		//22

		echo "<hr/><p><strong>Task 22</strong></p>";
		$arr = ['Привет', ',', ' мир', '!'];
		$text = implode('', $arr);
		echo $text;

		//23

		echo "<hr/><p><strong>Task 23</strong></p>";
		$arr = [11,5,25,36,7,215];
		$sum = 0;
		foreach ($arr as $value) {
			$sum += $value;
		}
		echo $sum;

		//24

		echo "<hr/><p><strong>Task 24</strong></p>";
		$arr = [ 'ru'=> ['голубой', 'красный', 'зеленый'], 'en'=> ['blue', 'red', 'green'], ];
		echo $arr['ru'][0];

		//25

		echo "<hr/><p><strong>Task 25</strong></p>";
		$arr = [2, 5, 3, 9];
		$result =  $arr[0] * $arr[1] + $arr[2] * $arr[3];
		echo $result;

		//26

		echo "<hr/><p><strong>Task 26</strong></p>";
		$arr = [
			1 => 'Понедельник',
			2 => 'Вторник',
			3 => 'Среда',
			4 => 'Четверг',
			5 => 'Пятница',
			6 => 'Суббота',
			7 => 'Воскресенье',      
		];
		echo $arr[date('N')];

		//27

		echo "<hr/><p><strong>Task 27</strong></p>";
		for ($i = 0; $i <= 30; $i++) {
			$arr[$i] = rand(1,10);
		}
		echo '<pre>' . print_r($arr, true) . '</pre>';

		//28

		echo "<hr/><p><strong>Task 28</strong></p>";
		$arr = [1, 2, -1, -2, 3, -3];
		for ($i = 0; $i < count($arr); $i++) {
			$arr[$i] = -$arr[$i];
		}
		echo '<pre>' . print_r($arr, true) . '</pre>';

		//29

		echo "<hr/><p><strong>Task 29</strong></p>";
		$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
		$sum = 0;
		$i = 0;
		foreach ($arr as $value) {
			$sum += $value;
			$i++;
			if ($sum > 10) break;
		}
		echo $i;

		//30

		echo "<hr/><p><strong>Task 30</strong></p>";
		$arr = [[1, 2, 3], [4, 5], [6]];
		$sum = 0;
		for ($i = 0; $i < count($arr); $i++) {
			for ($j = 0; $j < count($arr[$i]); $j++) {
				$sum += $arr[$i][$j];
			}
		}
		echo $sum;

	?>
</body>
</html>