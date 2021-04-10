<?php
define("DB_HOST", "localhost");
define("DB_NAME", "abhyasa_db");
define("DB_USER", "abhyasa_user");
define("DB_PASS", "pass1234");
$link=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
<?php
function get_snippet( $str, $wordCount = 10 ) {
	if (!empty($str) & str_word_count($str)>$wordCount) {

		return implode(
			'',
			array_slice(
				preg_split(
					'/([\s,\.;\?\!]+)/',
					$str,
					$wordCount*2+1,
					PREG_SPLIT_DELIM_CAPTURE
				),
				0,
				$wordCount*2-1
			)
		).'...';
	}
		elseif (!empty($str) & str_word_count($str)<=$wordCount) {
			return $str;
		}
		elseif (empty($str)) {
			return '';
		}
	}
 ?>
