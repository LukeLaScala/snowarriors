<?php 

require('db_connection.php');

function check_password($password) {
    global $dbh;
    
    $stmt = $dbh->prepare("select * from admin_passwords");
    $stmt->execute();
    

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($row['password'] == $password){
        	$_SESSION['admin'] = true;
        }
    }

    return;
}


function add_password($password){
	global $dbh;
	$stmt = $dbh->prepare("insert into admin_passwords values(:password)");

	$stmt->bindParam(':password', $password);
    $stmt->execute();

    return;

}

function add_journal($path, $title){
	global $dbh;
	$stmt = $dbh->prepare("insert into journals (hash, title) values (:path, :title)");
	$stmt->bindParam(':path', $path);
	$stmt->bindParam(':title', $title);

	
	$stmt->execute();

}

function add_news($news){
	global $dbh;
	$stmt = $dbh->prepare("insert into news (news) values (:news)");
	$stmt->bindParam(':news', $news);

	$stmt->execute();
}

function get_news(){
	global $dbh;
	$stmt = $dbh->prepare("select * from news order by timestamp desc");

	$stmt->execute();
    return $stmt->fetchAll();
}

function delete_news($nid){
	global $dbh;
	$stmt = $dbh->prepare("delete from news where nid = :nid");
   	$stmt->bindParam(':nid', $nid);
    $stmt->execute();

    return;
}

function get_journal_entries(){
	global $dbh;
	$stmt = $dbh->prepare("select * from journals order by timestamp desc");
    $stmt->execute();

    return $stmt->fetchAll();

}

function delete_journal($jid){
	global $dbh;
	$stmt = $dbh->prepare("delete from journals where jid = :jid");
   	$stmt->bindParam(':jid', $jid);
    $stmt->execute();

    return;
}

function add_event($name, $location, $time, $date){
	global $dbh;    
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $dbh->prepare("insert into events (name, location, time, date) values (:name, :location, :time, :date)");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':location', $location);
	$stmt->bindParam(':time', $time);
	$stmt->bindParam(':date', $date);

	$stmt->execute();
	

}



function get_events(){
	global $dbh;
	$stmt = $dbh->prepare("SELECT *,str_to_date(date, '%e %M, %Y') as order1, STR_TO_DATE(time, '%H:%i') as order2 from events order by order1 asc, order2 asc");
    $stmt->execute();

    return $stmt->fetchAll();
}

function delete_event($id){
	global $dbh;
	$stmt = $dbh->prepare("delete from events where id = :id");
   	$stmt->bindParam(':id', $id);
    $stmt->execute();

    return;
}

function delete_media($mid){
	global $dbh;
	$stmt = $dbh->prepare("delete from media where mid = :mid");
   	$stmt->bindParam(':mid', $mid);
    $stmt->execute();

    return;
}

function add_media($event, $date){
	global $dbh;    
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $dbh->prepare("insert into media (event, date) values (:event, :date)");
	$stmt->bindParam(':event', $event);
	$stmt->bindParam(':date', $date);

	$stmt->execute();

	$stmt = $dbh->prepare("select * from media order by mid desc limit 1");
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_ASSOC)['mid'];


}

function add_picture($mid, $path){
	global $dbh;    
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $dbh->prepare("insert into pictures (mid, path) values (:mid, :path)");
	$stmt->bindParam(':mid', $mid);
	$stmt->bindParam(':path', $path);

	$stmt->execute();
	
}

function get_media(){
	global $dbh;
	$stmt = $dbh->prepare("select * from media order by date desc");
    $stmt->execute();

    return $stmt->fetchAll();
}

function get_pictures($mid){
	global $dbh;
	$stmt = $dbh->prepare("select * from pictures where mid = :mid");
    $stmt->bindParam(':mid', $mid);
    $stmt->execute();

    return $stmt->fetchAll();
}

function add_supporter($supporter){
	global $dbh;
	return 'ok';
	$stmt = $dbh->prepare("insert into supporters (name) values (:name)");
	$stmt->bindParam(':name', $supporter);
	$stmt->execute();
}
?>
