<?php
require_once '../src/core.php';
	$firewind = new firewind;

	$connection = new mysqli( 'host', 'user', 'password', 'database' );
	if ( $connection->connect_error ) {
		die( 'Cannot connect to database.' );
	}

	$connection->set_charset( 'UTF8' );

	// Поисковый запрос //
	$query = isset( $_GET[ 'query' ] ) ? trim( $_GET[ 'query' ] ) : false;

	if ( $query ) {
		// Обработка поискового запроса //
		$query_index = $firewind->make_index( $query );

		// Получение данных //
		$production = $connection->query("
			SELECT p.`uid`, p.`name`, p.`keywords`, d.`index` 
			FROM `production` p, `description` d 
			WHERE p.`uid` = d.`uid`
		");

		if ( !$production ) {
			die( "Cannot get production info.\n" );
		}

		// Выполнение поиска //
		while ( $product = $production->fetch_assoc() ) {
			// Распаковка индекса //
			$keywords = json_decode( $product[ 'keywords' ] );
			$index    = json_decode( $product[ 'index' ] );

			$range    = $firewind->search( $query_index, $keywords );
			$range   += $firewind->search( $query_index, $index );

			if ( $range > 0 ) {
				$result[ $product[ 'uid' ] ] = $range; 
			}
		}

		// Если что-нибудь нашлось //
		if ( isset( $result ) ) {
			// Сортировка по убыванию //
			arsort( $result );

			// Вывод результатов //
			$i = 1;

			foreach ( $result as $uid => $range ) {
				printf(
					"#%d. Found product with id %d and range %d.\n",
					$i++,
					$uid,
					$range
				);
			}
		} else {
			echo( "Sorry, no results found.\n" );
		}
	} else {
		echo( "Query cannot be empty. Try again.\n" );
	}
?>






?>